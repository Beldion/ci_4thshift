<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_adduser_controller extends CI_Controller {

	public function index(){
		$this->load->view('admin/add_user_view.php');
	}

	function adduser() {
		$this->load->model('admin_adduser_model'); 

		$data = array('firstname'=>$this->input->post('firstname'),
					  'lastname'=>$this->input->post('lastname'),
					  'birthday'=>$this->input->post('birthday'),
					  'street_address'=>$this->input->post('street_address'),
					  'city'=>$this->input->post('city'),
					  'zipcode'=>$this->input->post('zipcode'),
					  'gender'=>$this->input->post('gender'),
					  'civil_status'=>$this->input->post('civil_status'),
					  'email'=>$this->input->post('email'),
					  'password'=>$this->input->post('password'),
					  'date_hired'=>$this->input->post('date_hired'),
					  'position'=>$this->input->post('position')
		);
		if (!empty($data['email']) && !empty($data['password'])) {
			$this->admin_adduser_model->adduser($data);
		}
		else{
			$this->index();
		}
	}
}