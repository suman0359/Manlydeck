<?php

class User_online_platter_system extends CI_Controller{

	public function _construct() 
	{ 
		
		parent::__construct(); 
		
	}
	
	function index($cat_id, $platt_date, $book_slot){

	 $this->load->model('Model_Online_Platter');
	
	 $data['platter_date'] = $platt_date;
	 
	 $data['book_slot'] = $book_slot;
	 
	 $data['category_name'] = $this->Model_Online_Platter->get_pro_category_name($cat_id);
	 
	  $data['cart_data'] = $this->Model_Online_Platter->display_cart_options($platt_date);
	
      $data['products'] = $this->Model_Online_Platter->get_all_product($cat_id);
	
	  $data['combination'] = $this->Model_Online_Platter->get_all_combinations($platt_date);
	
	  $this->load->view('user_view_products' , $data);	
		
	}
	
	function user_view_categories($platter_date, $book_slot){
	
		 $data['platter_Date'] = $platter_date;
		 
		 $data['book_slot'] = $book_slot;
		 
		 $this->load->model('Model_Online_Platter');
		
		 //$data['procategories'] = $this->Model_Online_Platter->get_all_categories();
		
		 $this->load->view('user_view_categories', $data);
	
	}
	
	function category_products($catid, $platter_date, $book_slot){

			 $this->load->model('Model_Online_Platter');
		
			 $data['platter_date'] = $platter_date;
			 
			 $data['book_slot'] = $book_slot;
			
			 $data['cart_data'] = $this->Model_Online_Platter->display_cart_options($platter_date);
		
			 $data['products'] = $this->Model_Online_Platter->get_all_products($catid);
		
			 $data['category_name'] = $this->Model_Online_Platter->get_pro_category_name($catid);
			
			 $data['combination'] = $this->Model_Online_Platter->get_all_combinations($platter_date);
		
			 $this->load->view('user_view_products' , $data);
	  
	}
	

	function add_to_combination($cat_id, $platt_date, $book_slot){
	  
	  $this->load->model('Model_Online_Platter');  
	  
	  $data['category_name'] = $this->Model_Online_Platter->get_pro_category_name($cat_id);
	  
	  $this->Model_Online_Platter->store_user_combination();
	 
	  $this->index($cat_id, $platt_date, $book_slot);
	
	}
	
	function add_to_cart($cat_id, $platt_date, $book_slot){
	  
	  error_reporting(0);
	  
	  if ($_POST['add_to_cart'] == 'ADD PLATTER TO CART')
	  {
	  
	   $this->load->model('Model_Online_Platter');
	   
	    $data['category_name'] = $this->Model_Online_Platter->get_pro_category_name($cat_id);
	   
	   $data1['platter_no'] = $this->Model_Online_Platter->get_platterno_bydate($platt_date, $book_slot);
		
		if($data1['platter_no'] < 6)
		 {	 
		  ?>
		
		  <?php
		 }
	   
	   
	   
	   $combination_data = $this->Model_Online_Platter->get_all_the_combinations();
	  
	   $var = '';
	   
	   foreach($combination_data as $combination ){
	   
	      $var .= $combination->product_name.', ';
	   
	   }
	  
	    $data = $this->Model_Online_Platter->store_cart_in_db($var, $platt_date);
	  	
		$this->index($cat_id, $platt_date, $book_slot);
		}
		
		else{
		   
		    $this->load->model('Model_Online_Platter');
			
			 $data['category_name'] = $this->Model_Online_Platter->get_pro_category_name($cat_id);
			 
			$this->Model_Online_Platter->remove_the_combination();
 
			$this->index($cat_id, $platt_date, $book_slot);
		
		}
	 
    }
	
	function make_the_payment(){
	   
	 $this->load->view('online_platter_view');
	
	}
	
	function onpla_usr_acc($platter_date){
	   
	   $data['platter_date'] = $platter_date;
	   
	   $this->load->view('user_account_menus', $data);
	
	}
	
	
	function view_booked_dates(){

	 $this->load->model('Model_Online_Platter'); 
	  
	 $this->load->model('Model_Login');
     
	  $data ['user_details'] = $this->Model_Login->get_logged_in_user_details();
	 
	  $data ['check_deck_booking_status'] = $this->Model_Login->get_check_deck_booking_status();
	  
	  $data['dab_booked_date'] = $this->Model_Online_Platter->get_dab_dates_of_user();
	  
	  $data['get_user_cart_pending_orders'] = $this->Model_Online_Platter->get_dab_cart_dates_of_user(); //get pending order dates from the user cart table please be mindfull
	   
	  $data['get_pro_cat_id'] = $this->Model_Online_Platter->get_user_product_id();
	  
	  $this->load->view('user_dab_booked_dates',$data);
	}
	
	
	function user_checkout_page($platt_date, $book_slot){
		 
		 $this->load->model('Model_login');
	 
	     $this->load->model('Model_Online_Platter');
	  
	     $data['platter_date'] = $platt_date;
		 
		 $data['book_slot'] = $book_slot;
		 
		 //$data['cat_id'] = $cat_id;
		 
		 $data['login_user_details'] = $this->Model_login->get_logged_in_user_details(); //to get the user login details
	
		 $data['check_booking_status_platter'] = $this->Model_Login->get_booking_slot_checkout();
		 
		 $data['dab_booked_date'] = $this->Model_Online_Platter->get_dab_booked_date(); //to get the DAB booked date
		
		 $data['cart_data'] = $this->Model_Online_Platter->display_cart_options($platt_date); // to display the cart options
	
	     $result = $this->Model_Online_Platter->get_user_dab_or_not(); //to check whether user booked deck area or not
	 
		$count = count($data['cart_data']);
		
		  if($result && ($count > 0)) //to check whether cart details are existing or not
		  {
	                 $this->load->view('user_checkout_view', $data); //to load the checkout view
	          }
		  else{
		  
		        $this->load->view('user_checkout_empty', $data); //to load if checkout is empty
		  }
	
	}
	
	
   function delete_checkout_page_details($cart_id, $platter_date, $book_slot){
	
		$this->load->model('Model_Online_Platter');
		 
		$this->Model_Online_Platter->remove_combination_from_cart($cart_id);
		
		$this->user_checkout_page($platter_date, $book_slot);
	
	}
	
	function delete_checkout_page_details_from_products($cart_id, $platter_date, $book_slot,$cat_id){
	
		$this->load->model('Model_Online_Platter');
		 
		$this->Model_Online_Platter->remove_combination_from_cart($cart_id);
		
		$this->add_to_combination($cat_id, $platter_date, $book_slot); 
		
		redirect('/User_online_platter_system/add_to_cart/'.$cat_id.'/'.$platter_date.'/'.$book_slot);
	
	}
	
	function clear_your_cart($cat_id, $platter_date, $book_slot){  //clear your cart in the view products page
	
	
	$this->load->model('Model_Online_Platter');
	 
	$this->Model_Online_Platter->remove_all_combination_from_cart($platter_date);
	
	//$this->user_view_categories($platter_date, $book_slot);
	
	$this->index($cat_id, $platter_date, $book_slot);
	
	//redirect('/User_online_platter_system/add_to_cart/'.$cat_id.'/'.$platter_date.'/'.$book_slot);
	
	}
	
	function delete_all_platters($platter_date, $book_slot){
	
	$this->load->model('Model_Online_Platter');
	 
	$this->Model_Online_Platter->remove_all_combination_from_cart($platter_date);
	
	$this->user_checkout_page($platter_date, $book_slot);
	
	}
	
	
	/*function delete_checkout_page_details1($cart_id){
	
	$cat_id =  $cart_id;
	
	 $this->load->model('Model_Online_Platter');
	 
	$this->Model_Online_Platter->remove_combination_from_cart($cart_id);
	
    $data['cart_data'] = $this->Model_Online_Platter->display_cart_options();
	
    $data['products'] = $this->Model_Online_Platter->get_all_product($cat_id);
	
	$data['combination'] = $this->Model_Online_Platter->get_all_combinations();
	
	$this->load->view('user_view_products' , $data);
	
	}*/
	
	
	function edit_checkout_page_details($cart_id, $platter_date, $book_slot, $cat_id){
	
		$this->load->model('Model_Online_Platter');
		 
		$data['book_slot'] = $book_slot;
		
		$data['cat_id'] = $cat_id;
		
		$data['platter_date'] = $platter_date;
		
		$data['update_cart'] = $this->Model_Online_Platter->update_cart_details($cart_id);
		
		$this->load->view('user_cart_update', $data);
	
	}
	
	
	function edit_checkout_page_details1($cart_id, $platter_date, $book_slot){
	
		$this->load->model('Model_Online_Platter');
		 
		$data['book_slot'] = $book_slot;

		$data['platter_date'] = $platter_date;
		
		$data['update_cart'] = $this->Model_Online_Platter->update_cart_details($cart_id);
		
		$this->load->view('user_cart_update1', $data);
	
	}
	

	function upcart_database($platter_date, $book_slot, $cat_id){
	
		 $this->load->model('Model_Online_Platter');
		
		 $this->Model_Online_Platter->edit_combination_from_cart();
		 
		 //$this->user_checkout_page($platter_date, $book_slot, $cat_id);
		 
		  redirect('/User_online_platter_system/add_to_cart/'.$cat_id.'/'.$platter_date.'/'.$book_slot);
	
	}
	
	
	function upcart_database1($platter_date, $book_slot){
	
		 $this->load->model('Model_Online_Platter');
		
		 $this->Model_Online_Platter->edit_combination_from_cart();
		 
		 $this->user_checkout_page($platter_date, $book_slot);
	
	}
	
	
	
	function platter_payment_gateway(){
	
	       
	        $id = $this->session->userdata('id');
	       
	       
	         $digits = 9;
    
		 $rand_value = rand(pow(10, $digits-1), pow(10, $digits)-1); 
		
		
	    	$this->load->model('Model_Online_Platter');
		
		    if($this->input->post('payment_type') == 'Paypal')
          {
            
		   $this->Model_Online_Platter->po_bf_py_str_val_indb($rand_value);
		  	
			// start paypal implementation
  
			$paypal_vars = array();
			$paypal_vars += array(
			'business' => 'deb_1335848049_biz@wvs.in',	
			'return' =>  base_url().'index.php/User_online_platter_system/return_url',
			'rm' => '2',
			'notify_url' =>  base_url().'index.php/User_online_platter_system/notify_url',
			'cancel_return' =>  base_url().'index.php/User_online_platter_system/cancel_url', 
			'currency_code' => 'AUS',
			'no_note' => '1',
			'lc' => 'AU',
			'charset' => 'utf-8',
			'paymentaction' => 'sale',
			'purchase-successful' => 3,
			'custom' => $id,	
			);
			
			// IPN data
			// Order settings to be sent to paypal
			$paypal_vars += array(
			'invoice' => $rand_value,
			);
			
			// Shipping
			/*
			$paypal_vars += array(
			'shipping' => $this->input->post('ship_amount'),
			);*/
			
			
			// Customer details
			$paypal_vars += array(
			'email' => $this->input->post('cust_email'),
			'name' => $this->input->post('cust_name'),
			'city' => $this->input->post('shipment_city'),
			'phone' => $this->input->post('phone'),
			'country' => 'AU',
                        'cbt' => 'Return to the DECK AREA',
			);
			
			$paypal_vars += array(
			'upload' => '1',
			'cmd' => '_ext-enter',
			'redirect_cmd' => '_cart',
			);
			
			for($i=1; $i <= $this->input->post('total_values'); $i++)   
			 {
				//$name = $this->input->post('cust_name');
					
					$paypal_vars += array(
					
					"item_name_$i" => $this->input->post('cart_combination-'.$i), 
					"amount_$i" => $this->input->post('combination_price-'.$i),       
					"quantity_$i" => $this->input->post('combination_quantity-'.$i),
					"item_number_$i" => $this->input->post('cart_id-'.$i),
					);	
			    }
			
			/*foreach($paypal_vars as $key => $value) {
				echo $key . '=' . $value.'<br>';
			}
			die();*/
			$name_value_pairs = array();
			foreach($paypal_vars as $key => $value) {
			$name_value_pairs[]= $key . '=' . urlencode($value);
			}
			
			$gateway_values =  implode('&', $name_value_pairs);
			
			$redirect = "https://www.sandbox.paypal.com/cgi-bin/webscr"."?".$gateway_values;	
			
			redirect ( $redirect );
  
  // end paypal implementation
  
  } 
  
  else{
  
        $platter_date = $this->input->post('platter_date');
		
		$book_slot = $this->input->post('book_slot');
		
		$this->Model_Online_Platter->po_bf_py_str_val_indb($rand_value);
		
		//$this->user_checkout_page($platter_date, $book_slot); 
		
                $this->Model_Online_Platter->platter_book_email();
                $this->load->view('cash_on_order_page'); // to display the cash on order message page
 
   } 
	
	}
	
	
			  public function notify_url(){
			/***************** websyntax.blogspot.com **************************/
			/*****************      Paypal IPN      * **************************/
			/**********for questions email me at falconerie.04@gmail.com *******/
			if ($_SERVER['REQUEST_METHOD'] != "POST") die ("No Post Variables");
			// Initialize the $req variable and add CMD key value pair
			$req = 'cmd=_notify-validate';
			// Read the post from PayPal
			foreach ($_POST as $key => $value) {
			   $value = urlencode(stripslashes($value));
			   $req .= "&$key=$value";
			}
			// Now Post all of that back to PayPal's server using curl, and validate everything with PayPal
			// We will use CURL instead of PHP for this for a more universally operable script (fsockopen has issues on some environments)
			$url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
			//$url = "https://www.paypal.com/cgi-bin/webscr";
			$curl_result=$curl_err='';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded", "Content-Length: " . strlen($req)));
			curl_setopt($ch, CURLOPT_HEADER , 0);   
			curl_setopt($ch, CURLOPT_VERBOSE, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			$curl_result = @curl_exec($ch);
			$curl_err = curl_error($ch);
			curl_close($ch);
			$req = str_replace("&", "\n", $req);  // Make it a nice list in case we want to email it to ourselves for reporting
			// Check that the result verifies
			if (strpos($curl_result, "VERIFIED") !== false) {
			if ($_POST['payment_status'] == "Completed") {	   	
			$req .= "\n\nPaypal Verified OK";
			$req .= '\npayer_email: '.$_POST['payer_email'];
			$req .= '\nfirst_name: '.$_POST['first_name'];
			$req .= '\nlast_name: '.$_POST['last_name'];
			$req .= '\npayment_date: '.$_POST['payment_date'];
			$req .= '\nmc_gross: '.$_POST['mc_gross'];
			$req .= '\npayment_currency: '.$_POST['payment_currency'];
			$req .= '\ntxn_id: '.$_POST['txn_id'];
			$req .= '\naddress_street: '.$_POST['address_street'];
			$req .= '\naddress_city: '.$_POST['address_city'];
			$req .= '\naddress_state: '.$_POST['address_state'];
			$req .= '\naddress_zip: '.$_POST['address_zip'];
			$req .= '\naddress_country: '.$_POST['address_country'];
			
			
			        $this->load->model('Model_Login'); //to load login module  
				
				$this->load->model('Model_Online_Platter'); //to load platter module
					
					$order_id = $_POST['invoice'];  //post invoice variable from invoice
				    
					$this->Model_Online_Platter->update_platter_values_in_database($order_id); //update the platter values in the database
					
					$client_platter_details = $this->Model_Online_Platter->get_platter_booking_client_Details($order_id); 
					
					foreach ($client_platter_details as $client_platter_details1):
					
					endforeach;
					
					$admin_email = $this->Model_Login->get_administrator_email();

			$email = $client_platter_details1->cust_email;   //cust_email  cust_name platter_combination timepicker_6 grand_amount
			$to      = $email; 
			$subject = 'Manly Deck Restaurant | Platter Order Booking';  

			$message = ' 
			Thanks You For Ordering Platters! 
			Your Platter Orders are sucessfully Booked. 
			------------------------ 
			Name: '.$client_platter_details1->cust_name.' 
                        Email: '.$email.' 
			Platters: '.$client_platter_details1->platter_combination.' 
                        Serve Time: '.$client_platter_details1->timepicker_6.'
                        Payment Amount: '.$client_platter_details1->grand_amount.'   	
                        Platter Date: '.$client_platter_details1->platter_date.'
			------------------------'; 
			
			$headers = "From:manjunath@wvs.in" ;
			$headers .= "Reply-To: $email" ;
			$headers .= "Return-Path: $email" ;
			$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
			$headers .= 'MIME-Version: 1.0' . " " ;
			$headers .= 'Content-type: text/html; UTF-8' . " " ;
			
			//$headers = '' . "\r\n"; 
			
			mail($to, $subject, $message, null, '-fshashank@mucheli.com'); //user mail function is commented
			
			mail($admin_email, $subject, $message, null, '-fshashank@mucheli.com'); //admin mail function is commented
			

			mail("manjunath@wvs.in", "IPN interaction verified", "$req", "From: wvsoftek" );
			exit();	
			//mail('deb@wvs.in', $subject, $adminmessage, $customerheaders);	
			}
			else{
			mail('manjunath@wvs.in', 'duplicate transaction id', 'duplicate transaction id', 'From: Paypal<donotreply@paypal.com>');
			}
			exit();
			} else {
			$req .= "\n\nData NOT verified from Paypal!";
			mail('manjunath@wvs.in', 'HI', 'paymentstatus', 'From: Paypal<info@paypal.com>');
			exit();
			}
			}

             function return_url(){
                 
                 $this->load->model('model_online_platter');           
                 $this->model_online_platter->platter_book_email_paypal();
                 $this->model_online_platter->change_payment_status_platter();
                 $this->load->view('payment_redirect_url_platter'); //Your payment is sucessfull
			  
			 }
			  
			  
			  function cancel_url(){
			  
                           $this->load->model('model_online_platter');
                            $this->model_online_platter->delete_payment_invoice();
			   $this->load->view('payment_cancel_url'); //Your Transaction is Failure Payment Unsucessfull
			  
			  }	
			  
			  function onl_pla_sucess_trans(){
			  
			     $this->load->model('Model_Online_Platter');
	
	             $data['sucess_trans'] = $this->Model_Online_Platter->get_sucecc_payments();
                     //var_dump($data['sucess_trans']);
				
				 if($data['sucess_trans']){
				 
                                        $this->load->view('user_checkout_succtrans', $data);
				 
				 }
				 
				 else{
				 
				     $this->load->view('empty_trans_msg');
				 }
			  
			  }

       }

?>