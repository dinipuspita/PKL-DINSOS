<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Kecamatan extends CI_Model {

	public function insertKecamatan()
	{

	$object = array('nama_kecamatan' => $this->input->post('nama_kecamatan')
				);
					
		$this->db->insert('kecamatan', $object);
	}

	public function getKecamatan($id)
	{
		$this->db->where('id_kecamatan', $id);
		$query= $this->db->get('kecamatan');
		return $query->result();
	}
	public function updateById($id)
	{	

	$object = array('nama_kecamatan' => $this->input->post('nama_kecamatan'));

		$this->db->where('id_kecamatan', $id);
		$this->db->update('kecamatan', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from kecamatan");
		return $query->result_array();
	}

	public function delete($id)
	{
		$this->db->where('id_kecamatan', $id);
		$this->db->delete('kecamatan');
	}
	public function getLastKecamatan()
	{
		$query = $this->db->query("SELECT * FROM kecamatan ORDER BY id_kecamatan DESC LIMIT 1");
		return $query->result_array();
	}
	public function getTampilKecamatan()
	{
		$query = $this->db->query("Select * from kecamatan");
		return $query->result_array();
	}
		public function getTampilListKecamatan()
	{
		$query = $this->db->query("Select * from kecamatan");
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

}
