<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListLaporan extends CI_Controller {
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
		$this->load->model('list_laporan');
		$data["laporan"] = $this->list_laporan->getTampil();
		$data['laporanByUser'] = $this->list_laporan->getLaporanByUser();
		$this->load->view('laporan/laporan', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_laporan');
		$data['last'] = $this->list_laporan->getLastLaporan();

		// $this->form_validation->set_rules('id_user', 'id_user', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		$this->form_validation->set_rules('uraian_tempat', 'uraian_tempat', 'trim|required');
		$this->form_validation->set_rules('pelaksana', 'pelaksana', 'trim|required');
		$this->form_validation->set_rules('sasaran', 'sasaran', 'trim|required');
		$this->form_validation->set_rules('materi', 'materi', 'trim|required');
		$this->form_validation->set_rules('hasil_kegiatan', 'hasil_kegiatan', 'trim|required');
		$this->form_validation->set_rules('faktor_pendukung_penghambat', 'faktor_pendukung_penghambat', 'trim|required');
		$this->form_validation->set_rules('upaya_pemecahan', 'upaya_pemecahan', 'trim|required');
		$this->form_validation->set_rules('rencana_kerja', 'rencana_kerja', 'trim|required');

		$this->load->model('list_laporan');
		$data["laporan"] = $this->list_laporan->getTampil();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Laporan/input_data_laporan',$data);
		}
		else{
			$this->list_laporan->insertLaporan();
			echo "<script> alert('DataLaporan Kegiatan Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	public function update($id)
	{
	
		$this->load->model('list_laporan');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		$this->form_validation->set_rules('uraian_tempat', 'uraian_tempat', 'trim|required');
		$this->form_validation->set_rules('pelaksana', 'pelaksana', 'trim|required');
		$this->form_validation->set_rules('sasaran', 'sasaran', 'trim|required');
		$this->form_validation->set_rules('materi', 'materi', 'trim|required');
		$this->form_validation->set_rules('hasil_kegiatan', 'hasil_kegiatan', 'trim|required');
		$this->form_validation->set_rules('faktor_pendukung_penghambat', 'faktor_pendukung_penghambat', 'trim|required');
		$this->form_validation->set_rules('upaya_pemecahan', 'upaya_pemecahan', 'trim|required');
		$this->form_validation->set_rules('rencana_kerja', 'rencana_kerja', 'trim|required');
		
		$data["laporan"] = $this->list_laporan->getLaporan($id);
		$data['laporanByUser'] = $this->list_laporan->getLaporanByUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('laporan/edit_data_laporan',$data);
		}else{
			$this->list_laporan->updateById($id);
			echo "<script> alert('Data Laporan Kegiatan Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_laporan');
		$this->list_laporan->delete($id);
		redirect('ListLaporan','refresh');
	}

}
