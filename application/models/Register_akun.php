<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_akun extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function insertDataDiri()

	{
		
		$object = array(
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'level' => '2',						
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'email' => $this->input->post('email'),
						'id_kecamatan' => $this->input->post('id_kecamatan')
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
}
