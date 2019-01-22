<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ListProfil extends CI_Controller {
	
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	if($this->session->userdata('logged_in')){
	// 		$session_data = $this->session->userdata('logged_in');
	// 		$data['username'] = $session_data['username'];
	// 		$data['level'] = $session_data['level'];
	// 		$current_controller = $this->router->fetch_class();
	// 		$this->load->library('acl');
	// 		if (! $this->acl->is_public($current_controller))
	// 		{
	// 			if (! $this->acl->is_allowed($current_controller, $data['level']))
	// 			{
	// 				redirect('login','refresh');
	// 			}
	// 		}
	// 	}
	// 	else{
	// 		redirect('logout/out','refresh');
	// 	}
	// }

	public function index()
	{	
		$this->load->model('list_profil');
		$data["login"] = $this->list_profil->getTampilProfil();
		$data["user"] = $this->list_profil->getUser();
		$this->load->view('Profil/profil',$data);
	}

	public function update($id)
	{
	
		$this->load->model('list_profil');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');

		$this->load->model('list_profil');
		$data['login'] = $this->list_profil->getprofil($id);
		$data['user'] = $this->list_profil->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Profil/edit_data_profil', $data);
		}else{
			// $this->list_profil->updateById($id);
			
			$config['upload_path']			='./assets/uploads/';
			$config['allowed_types']		='gif|jpg|png';
			$config['max_size']				=1000000000;
			$config['max_width']			=10240;
			$config['max_height']			=7680;
		
			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('foto'))
			{
			$this->list_profil->updateById($id);
			echo "<script> alert('Profil Anda Berhasil Diubah'); window.location.href='../../ListProfil'; </script>";

			$this->load->view('Profil/profil',$data);
     		}
     		else 
     		{
     		$this->list_profil->updateById($id);
     		echo "<script> alert('Profil Anda Berhasil Diubah'); window.location.href='../../ListProfil'; </script>";

			$this->load->view('Profil/profil',$data);
     		}
     	}
     }

	public function delete($id)
	{
		$this->load->model('list_profil');
		$this->list_user->delete($id);
		redirect('profil');
	}
}
