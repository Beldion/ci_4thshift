<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_searchuser_model extends CI_Model {

    public function search_results($user_search){
       	$this->db->select('*');
       	$this->db->from('user');
        $this->db->like('firstname',$user_search);
        $this->db->or_like('lastname',$user_search);
        $this->db->or_like('email',$user_search);
        $query = $this->db->get();
        return $query->result_array();
    }
}
