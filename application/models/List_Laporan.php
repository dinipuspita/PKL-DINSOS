<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_laporan extends CI_Model {

	public function insertLaporan()
	{
		// $tgl=$this->input->post('tanggal');
		// $tglraw=explode('-', $tgl);
		// $tglfix=$tglraw[2].'-'.$tglraw[1].'-'.$tglraw[0];
		
	$session_data = $this->session->userdata('logged_in');
	
	$object = array('id_user' => $session_data['id_user'],
					'tanggal' => $this->input->post('tanggal'),
					'uraian_tempat' => $this->input->post('uraian_tempat'),
					'pelaksana' => $this->input->post('pelaksana'),
					'sasaran' => $this->input->post('sasaran'),
					'materi' => $this->input->post('materi'),
					'pelaksana' => $this->input->post('pelaksana'),
					'hasil_kegiatan' => $this->input->post('hasil_kegiatan'),
					'faktor_pendukung_penghambat' => $this->input->post('faktor_pendukung_penghambat'),
					'upaya_pemecahan' => $this->input->post('upaya_pemecahan'),
					'rencana_kerja' => $this->input->post('rencana_kerja'),
					'gambar' => $this->upload->data('file_name'),
					'status' => 'menunggu konfirmasi');
		
		$this->db->insert('laporan', $object);
	}

	public function getLaporan($id)
	{

		$this->db->where('id_laporan', $id);
		$query= $this->db->get('laporan');
		return $query->result();
	}
	public function updateById($id)
	{

		if($this->upload->data('file_name')=="")
		{
			$object = array('tanggal' => $this->input->post('tanggal'),
							'uraian_tempat' => $this->input->post('uraian_tempat'),
							'pelaksana' => $this->input->post('pelaksana'),
							'sasaran' => $this->input->post('sasaran'),
							'materi' => $this->input->post('materi'),
							'pelaksana' => $this->input->post('pelaksana'),
							'hasil_kegiatan' => $this->input->post('hasil_kegiatan'),
							'faktor_pendukung_penghambat' => $this->input->post('faktor_pendukung_penghambat'),
							'upaya_pemecahan' => $this->input->post('upaya_pemecahan'),
							'rencana_kerja' => $this->input->post('rencana_kerja')
							);

		$this->db->where('id_laporan', $id);
		$this->db->update('laporan', $object);
		
		}else{
			$object = array('tanggal' => $this->input->post('tanggal'),
							'bulan' => $this->input->post('bulan'),
							'uraian_tempat' => $this->input->post('uraian_tempat'),
							'pelaksana' => $this->input->post('pelaksana'),
							'sasaran' => $this->input->post('sasaran'),
							'materi' => $this->input->post('materi'),
							'pelaksana' => $this->input->post('pelaksana'),
							'hasil_kegiatan' => $this->input->post('hasil_kegiatan'),
							'faktor_pendukung_penghambat' => $this->input->post('faktor_pendukung_penghambat'),
							'upaya_pemecahan' => $this->input->post('upaya_pemecahan'),
							'rencana_kerja' => $this->input->post('rencana_kerja'),
							'gambar' => $this->upload->data('file_name'));
		$this->db->where('id_laporan', $id);
		$this->db->update('laporan', $object);
		}
	}
	
	public function getTampil()
	{

		// $query = $this->db->query("Select * from laporan AS a Join login AS b ON b.id_user=a.id_user");
		$query = $this->db->query("Select * from laporan AS a Join login AS b ON a.id_user=b.id_user join kecamatan as e on e.id_kecamatan=b.id_kecamatan");
		return $query->result_array();
	}
		public function getLaporanByUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data['id_user'];

		$query = $this->db->query("Select * from laporan AS a Join login AS b ON b.id_user=a.id_user where b.id_user = $id_user");
		return $query->result_array();
	}
	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id_laporan', $id);
		$this->db->delete('laporan');
	}
	public function getLastLaporan()
	{
		$query = $this->db->query("SELECT * FROM laporan ORDER BY id_laporan DESC LIMIT 1");
		return $query->result_array();
	}
	public function getReport()
	{
	
		$id_kecamatan = $this->input->post('id_kecamatan');
		$query = $this->db->query("Select * from laporan AS a Join login AS b ON a.id_user=b.id_user join kecamatan as e on e.id_kecamatan=b.id_kecamatan WHERE b.id_kecamatan='$id_kecamatan ORDER BY id_laporan DESC LIMIT 1'");
		return $query->result_array();
	}
	public function getReportUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data['id_user'];

		$query = $this->db->query("Select * from laporan AS a Join login AS b ON a.id_user=b.id_user join kecamatan as e on e.id_kecamatan=b.id_kecamatan WHERE b.id_user='$id_user'");
		return $query->result_array();
	}
	public function getTampilDetail($id)
	{
		$query = $this->db->query("Select * from laporan AS a Join login AS b ON b.id_user=a.id_user where id_laporan = $id");
		return $query->result_array();
	}

	// public function updateKonfirmasi($id)
	// {
	// 	$object = array(
	// 		'status' => 'dibaca'
	// 	);
	// 	$this->db->where('fkLaporan', $id);
	// 	$this->db->update('laporan', $object);
	// }
	// public function getKonfirmasi($id)
	// {
	// 	$this->db->where('fkLaporan', $id);
	// 	$query= $this->db->get('laporan');
	// 	return $query->result();
	// }
	public function konfirmasiLaporan($id)
	{
	   
		$object = array('status' => 'Telah dibaca');
		$this->db->where('id_laporan', $id);
		$this->db->update('laporan', $object);

	}
	
}
