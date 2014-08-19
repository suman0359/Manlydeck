<?php

class Admin_platter_catering extends CI_Controller{
	
	public function _construct() 
	{ 
		
		parent::__construct(); 
		
	}
	
	//default function which invokes platter delivery menus
	
	function index(){
		
		//$this->load->view('platter_delivery_catering_admin');	
		
		$this->pdget_all_products();
	}
	
	//displays all the categories list
	
	function category_mgmt(){
	
	$this->load->model('Model_platter_delivery_catering');
	
	$data['categories'] = $this->Model_platter_delivery_catering->get_all();
	
	$this->load->view('view_catering_categories', $data);
	
	}
	
	//this function delets the category based on the PK
	
	function pdcategory_del($cat_id){
	
	  $this->load->model('Model_platter_delivery_catering');
	  
	  $this->Model_platter_delivery_catering->delete_category($cat_id);
	
	  $this->category_mgmt();
	
	}
	
	//this function is to edit the specific category record
	
	function pdcategory_edit ($cat_id){
	
	     $this->load->model('Model_platter_delivery_catering');
		
	     $data['categories_edit'] = $this->Model_platter_delivery_catering->edit_category($cat_id);
		  
		  $this->load->view('pdadd_category_form', $data);
	
	}
	
	//to save edited category and to add the new category
	
	function pdsave_edited_category(){
	   
	    $cat_id = $this->input->post('cat_id');
		
		if($cat_id){
		
				$this->load->model('Model_platter_delivery_catering');
			  
				$this->Model_platter_delivery_catering->save_edited_category();
			   
				$data['categories'] = $this->Model_platter_delivery_catering->get_all();
			
				$this->load->view('view_catering_categories', $data);
		  
				}
				else{
				
			    $this->load->model('Model_platter_delivery_catering');
			  
				$this->Model_platter_delivery_catering->save_category();
			   
				$data['categories'] = $this->Model_platter_delivery_catering->get_all();
			
				$this->load->view('view_catering_categories', $data);
				
				}	
	      }
		  
		 //function to display the new category form
		 
		  function pdadmin_add_category(){
	
        	$this->load->view('pdadd_category_form');	
	
	      }
		  
		  //this function is to get the shipping details
		  
		  function shipping_mgmt(){
		  
		    $this->load->model('Model_platter_delivery_catering');
			
			$data['shipping'] = $this->Model_platter_delivery_catering->get_all_shipping();
	
	        $this->load->view('pd_ship_details_view', $data);
		  
		  }
		  
		  //this function is to get the specific shipping record based on the primary key
		  
		  function pdship_edit($ship_id){
		  
		      $this->load->model('Model_platter_delivery_catering');
			  
			  $data['shipping_edit'] = $this->Model_platter_delivery_catering->get_specific_shipping($ship_id);
			  
			  $this->load->view('pdadd_shipping_form', $data);
		  }
		  
		
	      function pdship_del($ship_id){
		
		    $this->load->model('Model_platter_delivery_catering');
		
		    $this->Model_platter_delivery_catering->delete_shipping($ship_id);
			
			$this->shipping_mgmt();
		  }

		
		//this function is to load new shipment form
		
		 function pdadmin_add_shipping(){
		 
		 $this->load->view('pdadd_shipping_form');
		 
		 }
		 
		  //to save the editted shipping details
		  
		  function pdsave_shipping(){
		  
		      $ship_id = $this->input->post('ship_id');
		
	    	if($ship_id){
		
				$this->load->model('Model_platter_delivery_catering');
			  
				$this->Model_platter_delivery_catering->save_edited_shipping();
			
				$this->shipping_mgmt();
		  
				}
				else{
				
			    $this->load->model('Model_platter_delivery_catering');
			  
				$this->Model_platter_delivery_catering->save_shipping();
			   
				$this->shipping_mgmt();
				
				}	
		   
		    }
		  
     // to get all the catering products
	
	 function pdget_all_products(){
				
			$this->load->model('Model_platter_delivery_catering');
			
			$data['products'] = $this->Model_platter_delivery_catering->pdget_all_products();
		
			$this->load->view('pd_view_products', $data);
	 
	  }
	  
	//to display the catering add product form  
	
	  function pd_admin_add_product(){
	  
	    $this->load->view('pd_add_product_form');
	  
	  }
	  
	function pdproduct_edit($pro_id){
	
	$this->load->model('Model_platter_delivery_catering');
		
	     $data['products_edit'] = $this->Model_platter_delivery_catering->edit_product($pro_id);
		 
		  $this->load->view('pd_add_product_form', $data);
	
	}
	
	
	function pdproduct_delete($pro_id){
	
	  $this->load->model('Model_platter_delivery_catering');
	  
	  $this->Model_platter_delivery_catering->delete_product($pro_id);
	  
    $data['products'] = $this->Model_platter_delivery_catering->pdget_all_products();
	
	$this->load->view('pd_view_products', $data);
	
	}
	
	
	//to save the edited product and the new product  
	  
	  function pdsave_edited_product(){
	
	    $config['upload_path'] = realpath(APPPATH . '../images');
		$config['allowed_types'] = 'pdf|doc|docx|xls|ppt|txt|xlsx|jpg|jpeg|gif|png';
		$config['max_size'] = 0; // Set 0 to get default value from php.ini
	  
	   $this->load->library('upload', $config);		
					
	   $product_id = $this->input->post('product_id');
	   
	  if($this->upload->do_upload('file')){
	   
		    $image_data = $this->upload->data();
			
			 $this->load->model('Model_platter_delivery_catering');
			  
			  $this->Model_platter_delivery_catering->save_edited_image($image_data['file_name']);		 
	  
	   }
           else{
               $image_data = "NO Image Uploaded.";
			
			 $this->load->model('Model_platter_delivery_catering');
			  
			  $this->Model_platter_delivery_catering->save_edited_image($image_data['file_name']);
           }
	   
	   if($product_id){
	   
	            $this->load->model('Model_platter_delivery_catering');
			  
				$this->Model_platter_delivery_catering->save_edited_products();
			   
				$data['products'] = $this->Model_platter_delivery_catering->pdget_all_products();
	
	           $this->load->view('pd_view_products', $data);
		 
	   }
	   else {
	   
	            $this->load->model('Model_platter_delivery_catering');
			  
				if($image_data['file_name'])
                                {
                                    $this->Model_platter_delivery_catering->save_new_products($image_data['file_name']);
                                }
			   
				$data['products'] = $this->Model_platter_delivery_catering->pdget_all_products();
	
	            $this->load->view('pd_view_products', $data);
	   }
	
	}
	
	function pdview_paid_bookings(){
	
	   $this->load->model('Model_platter_delivery_catering');
	   
	   $data['paid_bookings'] = $this->Model_platter_delivery_catering->view_paid_bookings();
	   
	     $this->load->view('plater_delivery_paid_bookings', $data);
	
	}
	
	function pdview_unpaid_bookings(){
	
	   $this->load->model('Model_platter_delivery_catering');
	   
	   $data['unpaid_bookings'] = $this->Model_platter_delivery_catering->view_unpaid_bookings();
	   
	     $this->load->view('pd_platter_delivery_unpaid', $data);
	
	}
	
	function pddelete_the_customer($paid_book_id){
	
	   $this->load->model('Model_platter_delivery_catering');
	   
	    $this->Model_platter_delivery_catering->delete_paidbooking($paid_book_id);
		
		 $this->pdview_paid_bookings();
	
	}
	
	function pddelete_the_customer1($paid_book_id){
	
	   $this->load->model('Model_platter_delivery_catering');
	   
	    $this->Model_platter_delivery_catering->delete_paidbooking($paid_book_id);
		
		 $this->pdview_unpaid_bookings();
	
	}
	
	function pdedit_paid_cust($paid_book_id){
	
	    $this->load->model('Model_platter_delivery_catering');
		
		$data['edit_paid_bookings'] = $this->Model_platter_delivery_catering->edit_paidbooking($paid_book_id);
		
		$this->load->view('plater_delivery_paid_bookings_edit', $data);
	
	}
	
	function pdedit_unpaid_cust($paid_book_id){
	
	    $this->load->model('Model_platter_delivery_catering');
		
		$data['edit_unpaid_bookings'] = $this->Model_platter_delivery_catering->edit_unpaidbooking($paid_book_id);
		
		$this->load->view('plater_delivery_unpaid_bookings_edit', $data);
	
	}
	
	
	function save_editcust_details(){
	
	  $this->load->model('Model_platter_delivery_catering');
	  
	  $this->Model_platter_delivery_catering->save_edited_paid_customer();
	   
	  $this->pdview_paid_bookings();
	
	}
	
	function save_editcust_details1(){
	
	   $this->load->model('Model_platter_delivery_catering');
	  
	  $this->Model_platter_delivery_catering->save_edited_paid_customer();
	  
	  $this->pdview_unpaid_bookings();
	
	}
	  
  }

?>