<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Register extends CI_Controller {

	public function home()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('admin',$data);
		}
		else{
			redirect('login','refresh');
		}	
	}
	public function index()
	{
		$this->load->view('Register');
	}
	public function cekDaftar()
	{
		$this->load->model('register_akun');
		$this->load->Library('form_validation');

		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('konfirmasi', 'konfirmasi', 'trim|required|callback_cekPassword');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'trim|required');

		$this->load->model('list_kecamatan');
		$data["kecamatan"] = $this->list_kecamatan->getTampilKecamatan();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register',$data);
		}else{
			$this->register_akun->insertDataDiri();
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
}