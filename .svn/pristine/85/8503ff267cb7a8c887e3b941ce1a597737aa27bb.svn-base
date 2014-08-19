<?php

class User_platter_delivery extends CI_Controller{

	public function _construct() 
	{ 
		
		parent::__construct(); 
		
	}
	
	function index(){
		
	$this->load->model('Model_platter_delivery_catering');
	
   $data['cart_data'] = $this->Model_platter_delivery_catering->display_cart_options();
	
	$data['products'] = $this->Model_platter_delivery_catering->get_all_delivery_product();
	
	$data['combination'] = $this->Model_platter_delivery_catering->get_all_combinations();
	
	$this->load->view('user_view_catering_products' , $data);	
		
	}
	
	function add_to_combination(){
	 
	  $this->load->model('Model_platter_delivery_catering');
	  
	  $this->Model_platter_delivery_catering->store_user_combination();
	 
	  $this->index();
	
	}
	
	function add_to_cart(){
	  
	  
	  if ($_POST['add_to_cart'] == 'ADD TO CART')
	  {
	  
	   $this->load->model('Model_platter_delivery_catering');
	   
	   $combination_data = $this->Model_platter_delivery_catering->get_all_the_combinations();
	  
	   $var = '';
	   
	   foreach($combination_data as $combination ){
	   
	      $var .= $combination->product_name.', ';
	   
	   }
	  
	    $data = $this->Model_platter_delivery_catering->store_cart_in_db($var);
	   
	    $this->index();
		}
		
		else{
		   
		    $this->load->model('Model_platter_delivery_catering');
			
			$this->Model_platter_delivery_catering->remove_the_combination();
			
			 $this->index();
		
		}
	 
    }
	
	function make_the_payment(){
	   
	 $this->load->view('online_platter_view');
	
	}
	
	function pgonpla_usr_acc(){
	   
	   $this->load->view('user_account_deliverymenus');
	
	}
	
	function pduser_checkout_page(){
	
	  $this->load->model('Model_platter_delivery_catering');
	  
	  $this->load->model('Model_login');
	  
	 $data['login_user_details'] = $this->Model_login->get_logged_in_user_details();
	
	 $data['cart_data'] = $this->Model_platter_delivery_catering->display_cart_options();
	  
	  $data['shipment_amount'] = $this->Model_platter_delivery_catering->get_shipment_amount();
	
	 $this->load->view('pduser_checkout_page', $data);
	
	}
	
	function pddelete_checkout_page_details($cart_id){
	
	 $this->load->model('Model_platter_delivery_catering');
	 
	$this->Model_platter_delivery_catering->remove_combination_from_cart($cart_id);
	
	$this->pduser_checkout_page();
	
	}
	
	function pdedit_checkout_page_details($cart_id){
	
	 $this->load->model('Model_platter_delivery_catering');
	 
	$data['update_cart'] = $this->Model_platter_delivery_catering->update_cart_details($cart_id);
	
	$this->load->view('user_cart_delivery_update', $data);
	
	}
	
	function pdupcart_database(){
	
	$this->load->model('Model_platter_delivery_catering');
	
	$this->Model_platter_delivery_catering->edit_combination_from_cart();
	 
	 $this->pduser_checkout_page();
	
	}
	
	
	function pdplatter_payment_gateway(){
	
	 $digits = 9;
    
	 $rand_value = rand(pow(10, $digits-1), pow(10, $digits)-1); 
	
	
	$this->load->model('Model_platter_delivery_catering');
	
	$this->Model_platter_delivery_catering->bf_py_str_val_indb($rand_value);
	
    $id = $this->session->userdata('id');
 
 if($this->input->post('payment_type') == 'Paypal')
 {
 
  // start paypal implementation
  
			$paypal_vars = array();
			$paypal_vars += array(
			'business' => 'deb_1335848049_biz@wvs.in',	
			'return' =>  base_url().'index.php/User_platter_delivery/return_url',
			'rm' => '2',
			'notify_url' =>  base_url().'index.php/User_platter_delivery/notify_url',
			'cancel_url' =>  base_url().'index.php/User_platter_delivery/cancel_url', 
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
			
			$paypal_vars += array(
			'shipping_1' => $this->input->post('ship_amount'),
			);
			
			
			// Customer details
			$paypal_vars += array(
			'email' => $this->input->post('cust_email'),
			'name' => $this->input->post('cust_name'),
			'address1' => $this->input->post('cust_addrs'),
			'city' => $this->input->post('shipment_city'),
			//'country' => $this->input->post('cust_country'),
			'country' => 'AU',
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
  
         echo 'cash on order';
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
			mail("deb@wvs.in", "IPN interaction verified", "$req", "From: wvsoftek" );
			exit();	
			//mail('deb@wvs.in', $subject, $adminmessage, $customerheaders);	
			}
			else{
			mail('deb@wvs.in', 'duplicate transaction id', 'duplicate transaction id', 'From: Paypal<donotreply@paypal.com>');
			}
			exit();
			} else {
			$req .= "\n\nData NOT verified from Paypal!";
			mail('deb@wvs.in', 'HI', 'paymentstatus', 'From: Paypal<info@paypal.com>');
			exit();
			}
			}
	
                  
              function return_url(){
			  
				  $this->load->view('payment_redirect_url'); //Your payment is sucessfull
			  
			  }
			  
			  
			  function cancel_url(){
			  
			   $this->load->view('payment_cancel_url'); //Your Transaction is Failure Payment Unsucessfull
			  
			  }					  
	
      }

?>