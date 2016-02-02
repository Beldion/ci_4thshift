<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_adduser_model extends CI_Model {

	function adduser($data){
		$this->db->insert('user', $data);
	}
}


