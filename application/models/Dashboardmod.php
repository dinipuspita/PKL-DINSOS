<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardmod extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function getTksk(){
	    $query = $this->db->query("SELECT COUNT(id_user) FROM login");
	    return $query->row();
	}
	public function getLaporan(){
	    $query = $this->db->query("SELECT COUNT(id_laporan) FROM laporan");
	    return $query->row();
	}
	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
	public function getKecamatan(){
	    $query = $this->db->query("SELECT COUNT(id_kecamatan) FROM kecamatan");
	    return $query->row();
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */