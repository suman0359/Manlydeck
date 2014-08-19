<?php
class Aes extends CI_Controller{
	
	public function _construct() 
	{ 
		parent::__construct(); 
		
	}
	
	function index(){
		
		$this->load->model('Model_Online_Platter');
			
		$data['automatic_emails'] = $this->Model_Online_Platter->send_automatic_emails();
		
		echo '<pre>'; print_r($data['automatic_emails']);
		
	}
}
