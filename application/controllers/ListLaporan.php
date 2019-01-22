<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListLaporan extends CI_Controller {

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
		$this->load->model('list_laporan');
		$data["laporan"] = $this->list_laporan->getTampil();
		$data["user"] = $this->list_laporan->getUser();
		$data['laporanByUser'] = $this->list_laporan->getLaporanByUser();
		$this->load->view('laporan/laporan', $data);	
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_laporan');
		$data['last'] = $this->list_laporan->getLastLaporan();
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		$this->form_validation->set_rules('uraian_tempat', 'uraian_tempat', 'trim|required');
		$this->form_validation->set_rules('pelaksana', 'pelaksana', 'trim|required');
		$this->form_validation->set_rules('sasaran', 'sasaran', 'trim|required');
		$this->form_validation->set_rules('materi', 'materi', 'trim|required');
		$this->form_validation->set_rules('hasil_kegiatan', 'hasil_kegiatan', 'trim|required');
		$this->form_validation->set_rules('faktor_pendukung_penghambat', 'faktor_pendukung_penghambat', 'trim|required');
		$this->form_validation->set_rules('upaya_pemecahan', 'upaya_pemecahan', 'trim|required');
		// $this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
		$this->form_validation->set_rules('rencana_kerja', 'rencana_kerja', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Laporan/input_data_laporan');
		}else{
			$config['upload_path']			='./assets/uploads/';
			$config['allowed_types']		='gif|jpg|png';
			$config['max_size']				=1000000000;
			$config['max_width']			=10240;
			$config['max_height']			=7680;

			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('Laporan/input_data_laporan',$error);
			}
			else
			{
				$this->list_laporan->insertLaporan();
				echo "<script> alert('Data Laporan Berhasil Ditambahkan'); window.location.href='';
			</script>";
			}
			
		}
	}
	// 	$this->load->model('list_laporan');
	// 	$data["laporan"] = $this->list_laporan->getTampil();

	// 	if($this->form_validation->run() == FALSE) {
	// 		$this->load->view('Laporan/input_data_laporan',$data);
	// 	}
	// 	else{
	// 		$this->list_laporan->insertLaporan();
	// 		echo "<script> alert('Data Laporan Kegiatan Berhasil Ditambahkan'); window.location.href='';
	// 		</script>";
	// 	}
	// }

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
		
		$this->load->model('list_laporan');
		$data["laporan"] = $this->list_laporan->getLaporan($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Laporan/edit_data_laporan',$data);
		}else{
			$config['upload_path']			='./assets/uploads/';
			$config['allowed_types']		='gif|jpg|png';
			$config['max_size']				=1000000000;
			$config['max_width']			=10240;
			$config['max_height']			=7680;
		
			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('gambar'))
			{
			$this->list_laporan->updateById($id);
			echo "<script> alert('Data Laporan Kegiatan Anda Berhasil Diubah'); window.location.href='../../ListLaporan'; </script>";

			$this->load->view('Laporan/laporan',$data);
     		}
     		else 
     		{
     		$this->list_laporan->updateById($id);
			echo "<script> alert('Data Laporan Kegiatan Berhasil Diupdate'); window.location.href='';
			</script>";

			$this->load->view('Laporan/laporan',$data);

			}
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_laporan');
		$this->list_laporan->delete($id);
		redirect('ListLaporan','refresh');
	}

	public function report()
	{
		
		$this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'trim|required');	
		$this->load->model('User');
		$data["login"] = $this->User->getTampilLaporan();
		$this->load->model('list_kecamatan');
		$data["kecamatan"] = $this->list_kecamatan->getTampilKecamatan();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('Laporan/view_laporan',$data);

		}else{

			$this->load->model('list_laporan');
			$data["laporan"] = $this->list_laporan->getReport();
			$this->load->library('pdf');
			$this->pdf->load_view('Laporan/print_laporan',$data);
		}
	}
	public function reportUser()
	{
		
		$this->load->model('User');
		$data["login"] = $this->User->getTampilLaporan();
		$this->load->model('list_laporan');
		$data["laporan"] = $this->list_laporan->getReportUser();
		$this->load->library('pdf');
		$this->pdf->load_view('Laporan/print_laporan',$data);
		}

	public function detail($id)
	{
		$this->load->model('list_laporan');
		$data["laporan"] = $this->list_laporan->getTampilDetail($id);
		$this->load->view('Laporan/detailLaporan', $data);	
	}	
	// public function konfirmasi($id)// sudah di isi di autoloard 
	// {
	// 	$this->load->model('list_laporan');
	// 	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
		
	// 	$data['laporan'] = $this->list_laporan->getKonfirmasi($id);

	// 	if($this->form_validation->run() == FALSE) {
	// 		$this->load->view('view_data_Konfirmasi', $data);
	// 	}else{
	// 		$this->list_laporan->updateKonfirmasi($id);
	// 		echo "<script> alert(' Laporan telah dikonfirmasi'); window.location.href='../../ListLaporan';
	// 		</script>";
	// 	}

	// }
	public function konfirmasi($id)
	{
		$this->load->model('list_laporan');
		$this->list_laporan->konfirmasiLaporan($id);
		redirect('ListLaporan');
	}
}
	

	

	

