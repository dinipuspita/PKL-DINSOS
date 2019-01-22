<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Tksk extends CI_Model {
	public function insertUser()
	{
		

		$object = array('username' => $this->input->post('username'), 
						'password' => md5($this->input->post('password')),
						'level' => '2',
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'email' => $this->input->post('email'),
						'id_kecamatan' => $this->input->post('fk_kecamatan'));
		
		$this->db->insert('login', $object);
		
	}
	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
	public function getTksk($id)
	{
		$this->db->where('id_user', $id);
		$query= $this->db->get('login');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('username' => $this->input->post('username'), 
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'email' => $this->input->post('email'),
						'alamat' => $this->input->post('alamat'),
						'id_kecamatan' => $this->input->post('fk_kecamatan'));

		$this->db->where('id_user', $id);
		$this->db->update('login', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from login As a join kecamatan as b ON b.id_kecamatan=a.id_kecamatan");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('login');
	}
}
