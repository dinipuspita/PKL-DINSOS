<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListTksk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (! $this->acl->is_public($current_controller))
			{
				if (! $this->acl->is_allowed($current_controller, $data['level']))
				{
					redirect('login','refresh');
				}
			}
		}
		else{
			redirect('logout/out','refresh');
		}
	}

	public function index()
	{
		$this->load->model('list_tksk');
		$data["login"] = $this->list_tksk->getTampil();
		$data["user"] = $this->list_tksk->getUser();
		$this->load->view('TKSK/tksk', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_tksk');
		// $data['last'] = $this->list_tksk->getLastTksk();

		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('konfirmasi', 'Konfirmasi', 'trim|required|callback_cekPassword');
		$this->form_validation->set_rules('email', 'email', 'trim|required');

		$this->load->model('list_tksk');
		$data["login"] = $this->list_tksk->getTampil();

		$this->load->model('list_kecamatan');
		$data["kecamatan"] = $this->list_kecamatan->getTampilKecamatan();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('register',$data);
		}
		else{
			$this->list_tksk->insertUser();
			echo "<script> alert('Data Anggota Tksk Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
		public function cekPassword($konfirmasi)
	{
		$password = $this->input->post('password');
		if ($konfirmasi != $password)
		{
			$this->form_validation->set_message('cekPassword',"Password Tidak Sama");
			return false;
			
		}else{
			return true;
		}
	}
	public function update($id)
	{

		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('id_kecamatan', 'fk_kecamatan', 'trim|required');

		$this->load->model('list_tksk');
		$data["login"] = $this->list_tksk->getTksk();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('TKSK/edit_data_tksk',$data);
		}else{
			$this->list_tksk->updateById($id);
			echo "<script> alert('Data Anggota Tksk Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_tksk');
		$this->list_tksk->delete($id);
		redirect('ListTksk','refresh');
	}

}
