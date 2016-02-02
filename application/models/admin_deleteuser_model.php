<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_deleteuser_model extends CI_Model {

	function read_user(){
		$query = $this->db->get('user');
		return $query->result();
	}

	function deleteuser(){
		$this->db->where('employee_id', $this->uri->segment(3));
		$this->db->delete('user');
	}
}

