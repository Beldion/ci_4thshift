<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_deleteuser_controller extends CI_Controller {

	function index(){
		$this->load->model('admin_deleteuser_model');
		$value = array();
		if($data = $this->admin_deleteuser_model->read_user()){
			$value['record'] = $data;
		}
		$this->load->view('admin/deleteuser_view.php', $value);
	}

	function read_user(){
		$query = $this->db->get('user');
		return $query->result();
	}

	function deleteuser() {
		
		$this->load->model('admin_deleteuser_model');
		$this->admin_deleteuser_model->deleteuser();
		$this->index();
	}
}	