<?php
class Logout extends CI_Controller{
	public function _construct() 
	{ 
		parent::__construct(); 
		
	}
	function index(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('user_type');
		$this->session->sess_destroy();      
		redirect('login');
	}
}
