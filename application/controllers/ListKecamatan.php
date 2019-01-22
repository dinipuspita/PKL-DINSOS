<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListKecamatan extends CI_Controller {
	
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
		$this->load->model('list_kecamatan');
		$data["kecamatan"] = $this->list_kecamatan->getTampil();
		$data["user"] = $this->list_kecamatan->getUser();
		$this->load->view('Kecamatan/kecamatan', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_kecamatan');
		$data['last'] = $this->list_kecamatan->getLastKecamatan();

		$this->form_validation->set_rules('nama_kecamatan', 'nama_kecamatan', 'trim|required');

		$this->load->model('list_kecamatan');
		$data["kecamatan"] = $this->list_kecamatan->getTampil();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Kecamatan/input_data_kecamatan',$data);
		}
		else{
			$this->list_kecamatan->insertKecamatan();
			echo "<script> alert('Data Kecamatan Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	public function update($id)
	{

		$this->form_validation->set_rules('nama_kecamatan', 'nama_kecamatan', 'trim|required');

		$this->load->model('list_kecamatan');
		$data["kecamatan"] = $this->list_kecamatan->getKecamatan($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Kecamatan/edit_data_Kecamatan',$data);
		}else{
			$this->list_kecamatan->updateById($id);
			echo "<script> alert('Data Kecamatan Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_kecamatan');
		$this->list_kecamatan->delete($id);
		redirect('ListKecamatan','refresh');
	}

}
