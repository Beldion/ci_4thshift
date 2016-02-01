<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin_model extends CI_Model {

	public function signin($email, $password){
	   	$this -> db -> from('user');
   		$this -> db -> where('email', $email);
   		$this -> db -> where('password', $password);
    	
    	$query = $this -> db -> get();
	    
	    if($query -> num_rows() == 1){
	    	return true;
	 	} else {
	    	return false;
	 	}
 	}
}
?>