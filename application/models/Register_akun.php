<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_akun extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function insertUser()

	{
		
		$object = array(
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'level' => '2',						
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'email' => $this->input->post('email'),
						'id_kecamatan' => $this->input->post('fk_kecamatan'),
						'foto' => 'profil.png'
					);
		$this->db->insert('login', $object);
	}
	public function insertKecamatan()
	{

	$object = array('id_kecamatan' => $this->input->post('id_kecamatan'),
					'nama_kecamatan' => $this->input->post('nama_kecamatan')
				);
					
		$this->db->insert('kecamatan', $object);
	}
	public function getTampil()
	{
		$id_kecamatan = $this->input->post('id_kecamatan');
		$query = $this->db->query("Select * from login AS a join kecamatan AS b ON a.id_kecamatan=b.id_kecamatan WHERE a.id_kecamatan='$id_kecamatan'");
		return $query->result_array();
	}
	
	// 	$query = $this->db->query("Select * from laporan AS a Join login AS b ON a.id_user=b.id_user join kecamatan as e on e.id_kecamatan=b.id_kecamatan WHERE b.id_kecamatan='$id_kecamatan'");
	// 	return $query->result_array();
}
