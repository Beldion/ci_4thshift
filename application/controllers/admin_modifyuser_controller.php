<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_modifyuser_controller extends CI_Controller {
	
	function index(){
		$this->load->model('admin_modifyuser_model'); 
		$value = array();
		if($data = $this->admin_modifyuser_model->read_user()){
			$value['record'] = $data;
		}
		$this->load->view('admin/modifyuser_view', $value);
	}

	function modifyuser(){
		
	}
}