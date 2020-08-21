<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model{

public function __construct()
{
  parent::__construct();
}

var $table = "user";
var $field1 = "id_user";
var $field2 = "nama_user";
var $field3 = "username";
var $field4 = "password";
var $field6 = "role";


	public function verifikasi($username){
		$this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username',$username);
        $query = $this->db->get();
                return $query;
	}
}
