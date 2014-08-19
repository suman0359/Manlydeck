<?php

class Admin_onli_plat_ord_sys extends CI_Controller{
	public function _construct() 
	{ 
		
		parent::__construct(); 
		
	}
	function index(){
		
		//$this->load->view('online_platter_admin');
		$this->cat_mgmt();	 //landing page is category
	}
	
	function cat_mgmt(){
	
	$this->load->model('Model_Online_Platter');
	
	$data['categories'] = $this->Model_Online_Platter->get_all();
	
	$this->load->view('view_onl_plat_categories', $data);
	
	}
	
	function prod_mgmt(){
	
	$this->load->model('Model_Online_Platter');
	
	$data['products'] = $this->Model_Online_Platter->get_all_products_admin();
	
	$this->load->view('view_onl_plat_products', $data);
	
	}
	
	function admin_add_category(){
	
	$this->load->view('add_category_form');	
	
	}
	
	function admin_add_product(){
	
	$this->load->view('add_product_form');
	
	}
	
/*	function insert_the_category(){
	
	  $this->load->model('Model_Online_Platter');
	  
	  $this->Model_Online_Platter->insert_category();
	  
	  $data['categories'] = $this->Model_Online_Platter->get_all();
	
	  $this->load->view('view_onl_plat_categories', $data);
	
	}*/
	
	function category_del($cat_id){
	
	  $this->load->model('Model_Online_Platter');
	  
	  $this->Model_Online_Platter->delete_category($cat_id);
	  
	   $data['categories'] = $this->Model_Online_Platter->get_all();
	
	  $this->load->view('view_onl_plat_categories', $data);
	
	}
	
	function product_delete($pro_id){
	
	  $this->load->model('Model_Online_Platter');
	  
	  $this->Model_Online_Platter->delete_product($pro_id);
	  
          $data['products'] = $this->Model_Online_Platter->get_all_products_admin();
	
	$this->load->view('view_onl_plat_products', $data);
	
	}
	
	
	function product_edit($pro_id){
	
	$this->load->model('Model_Online_Platter');
		
	     $data['products_edit'] = $this->Model_Online_Platter->edit_product($pro_id);
		 
		  $this->load->view('add_product_form', $data);
	
	
	}
	
	function category_edit ($cat_id){
	
	     $this->load->model('Model_Online_Platter');
		
	     $data['categories_edit'] = $this->Model_Online_Platter->edit_category($cat_id);
		 
		  $this->load->view('add_category_form', $data);
	
	}
	
	
	function save_edited_category(){
	
	    $cat_id = $this->input->post('cat_id');
		
		$config['upload_path'] = realpath(APPPATH . '../images');
		$config['allowed_types'] = 'pdf|doc|docx|xls|ppt|txt|xlsx|jpg|jpeg|gif|png';
		$config['max_size'] = 0; // Set 0 to get default value from php.ini
		
		$this->load->library('upload', $config);	
		
		if($this->upload->do_upload('file')){
	   
		    $image_data = $this->upload->data();
			
			 $this->load->model('Model_Online_Platter');
			  
			  $this->Model_Online_Platter->save_edited_image1($image_data['file_name']);		 
	  
	    }
		
		if($cat_id){
		
				$this->load->model('Model_Online_Platter');
			  
				$this->Model_Online_Platter->save_edited_category();
			   
				$data['categories'] = $this->Model_Online_Platter->get_all();
			
				$this->load->view('view_onl_plat_categories', $data);
		  
				}
				else{
				
			    $this->load->model('Model_Online_Platter');
			  
				//$this->Model_Online_Platter->save_category($image_data['file_name']);
				$this->Model_Online_Platter->save_category();
			   
				$data['categories'] = $this->Model_Online_Platter->get_all();
			
				$this->load->view('view_onl_plat_categories', $data);
				
				}	
	      }
	
	
	function save_edited_product(){
	
	    $config['upload_path'] = realpath(APPPATH . '../images');
		$config['allowed_types'] = 'pdf|doc|docx|xls|ppt|txt|xlsx|jpg|jpeg|gif|png';
		$config['max_size'] = 0; // Set 0 to get default value from php.ini
	  
	   $this->load->library('upload', $config);		
					
	   $product_id = $this->input->post('product_id');
	   
	  if($this->upload->do_upload('file')){
	   
		    $image_data = $this->upload->data();
			
			 $this->load->model('Model_Online_Platter');
			  
			  $this->Model_Online_Platter->save_edited_image($image_data['file_name']);		 
	  
	   }
	   
	   if($product_id){
	   
	            $this->load->model('Model_Online_Platter');
			  
				$this->Model_Online_Platter->save_edited_products();
			   
				$data['products'] = $this->Model_Online_Platter->get_all_products_admin();
	
	            $this->load->view('view_onl_plat_products', $data);
		 
	   }
	   else {
	   
	            $this->load->model('Model_Online_Platter');
			  
				$this->Model_Online_Platter->save_new_products($image_data['file_name']);
			   
				$data['products'] = $this->Model_Online_Platter->get_all_products_admin();
	
	            $this->load->view('view_onl_plat_products', $data);
	   }
	
	}
	
	
	function view_paid_bookings(){
	
	   $this->load->model('Model_Online_Platter');
	   
	  
	$this->load->library('pagination');
	$config['base_url'] = base_url().'/index.php/admin_onli_plat_ord_sys/view_paid_bookings/';
	$config['total_rows'] = 200;
	$config['per_page'] = 10;
	$config['num_links'] = 2;
	$config['full_tag_open'] = '<p>';
	$config['full_tag_close'] = '</p>';

    $this->pagination->initialize($config);
	
	$offset = $this->uri->segment(3); 

    $data['pagi_links'] =  $this->pagination->create_links();
	  
	  
	   $data['paid_bookings'] = $this->Model_Online_Platter->view_paid_bookings($config['per_page'], $offset);
	   
	     $this->load->view('onli_plater_paid_bookings', $data);
	
	}
	
	
	function view_unpaid_bookings(){
	
	   $this->load->model('Model_Online_Platter');

		$this->load->library('pagination');
		$config['base_url'] = base_url().'/index.php/admin_onli_plat_ord_sys/view_unpaid_bookings/';
		$config['total_rows'] = 200;
		$config['per_page'] = 10;
		$config['num_links'] = 2;
	    $config['full_tag_open'] = '<p>';
	    $config['full_tag_close'] = '</p>';
		
	    $this->pagination->initialize($config);
	  
	    $offset = $this->uri->segment(3); 
		
		$data['unpaid_bookings'] = $this->Model_Online_Platter->view_unpaid_bookings($config['per_page'], $offset);
		
		$data ['pagi_links'] =  $this->pagination->create_links();
	   
	     $this->load->view('onli_plater_unpaid_bookings', $data);
	
	}
	
	function delete_the_customer($paid_book_id){
	
	   $this->load->model('Model_Online_Platter');
	   
	    $this->Model_Online_Platter->delete_paidbooking($paid_book_id);
		
		 $this->view_paid_bookings();
	
	}
	
	function delete_the_customer1($paid_book_id){
	
	   $this->load->model('Model_Online_Platter');
	   
	    $this->Model_Online_Platter->delete_unpaidbooking($paid_book_id);
		
		 $this->view_unpaid_bookings();
	
	}
	
	
	
	function edit_paid_cust($paid_book_id){
	
	    $this->load->model('Model_Online_Platter');
		
		$data['edit_paid_bookings'] = $this->Model_Online_Platter->edit_paidbooking($paid_book_id);
		
		$this->load->view('onli_plater_paid_bookings_edit', $data);
	
	}
	
	function edit_unpaid_cust($paid_book_id){
	
	    $this->load->model('Model_Online_Platter');
		
		$data['edit_unpaid_bookings'] = $this->Model_Online_Platter->edit_unpaidbooking($paid_book_id);
		
		//echo '<pre>'; print_r($data['edit_unpaid_bookings']);s
		
		
		$this->load->view('onli_plater_unpaid_bookings_edit', $data);
	
	}
	
	
	
	function save_editcust_details(){
	
	  $this->load->model('Model_Online_Platter');
	  
	  $this->Model_Online_Platter->save_edited_paid_customer();
	   
	  $this->view_paid_bookings();
	
	}
	
	function save_editcust_details1(){
	
	   $this->load->model('Model_Online_Platter');
	  
	  $this->Model_Online_Platter->save_edited_unpaid_customer();
	  
	  $this->view_unpaid_bookings();
	
	}
	
	function set_platter_price123(){
	
	   $this->load->model('Model_Online_Platter');
	   
	   $data['change_platter_price'] = $this->Model_Online_Platter->get_platter_price();
	   
	  // echo '<pre>'; print_r($data['change_platter_price']);
	   
	   $this->load->view('set_platter_price', $data);
	
	}
	
	function save_platter_price(){
	
	  $this->load->model('Model_Online_Platter');
	  
	  $this->Model_Online_Platter->save_platr_price();
	  
	  $this->set_platter_price123();
	
	}
        
        public function mail_unpaid_platters(){
            $this->load->model('Model_Online_Platter');
	  
            $this->Model_Online_Platter->automatic_mail_unpaid_platters();
        }
	
}

?>