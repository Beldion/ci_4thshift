<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_searchuser_controller extends CI_Controller {
	
    public function search_user(){
        $this->load->model('admin_searchuser_model');
        $user_search = $this->input->post('searchuser');
        $data['results'] = $this->admin_searchuser_model->search_results($user_search);
        $this->load->view('admin/admin_search_view',$data);
    }

}