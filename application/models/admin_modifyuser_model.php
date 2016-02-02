<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_modifyuser_model extends CI_Model {

	function read_user(){
		$query = $this->db->get('user');
		return $query->result();
	}
}