<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class Register extends CI_Controller {
	public function home()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Home',$data);
		}
		else{
			redirect('login','refresh');
		}	
	}
	public function index()
	{
		$this->load->model('register_akun');
		$data["login"] = $this->register_akun->getTampil();
		$data["user"] = $this->register_akun->getUser();
		$this->load->view('Register', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('register_akun');
		// $data['last'] = $this->list_tksk->getLastTksk();

		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('konfirmasi', 'Konfirmasi', 'trim|required|callback_cekPassword');
		$this->form_validation->set_rules('email', 'email', 'trim|required');

		$this->load->model('register_akun');
		$data["login"] = $this->register_akun->getTampil();

		$this->load->model('list_kecamatan');
		$data["kecamatan"] = $this->list_kecamatan->getTampilKecamatan();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('register',$data);
		}
		else{
			$this->register_akun->insertUser();
			redirect('admin','refresh');
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
	
	public function delete($id)
	{
		$this->load->model('register_akun');
		$this->register_akun->delete($id);
		redirect('Register','refresh');
	}

}
