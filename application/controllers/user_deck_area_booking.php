<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_deck_area_booking extends CI_Controller {

	
	/*
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{		

			 if(($this->session->userdata('id') == '')) { 
			
			   redirect('login');
			
			  } 

		$this->load->model('Model_Login');
		
		if($this->Model_Login->is_logged_in())
		{
			if($this->session->userdata('type')=='admin'){
				
				 redirect('admin_deck_area_booking');
			}
			else{
				   
			    // $this->load->view('user_profile'); view_profile()
				//$this->view_profile();
				
				 redirect('User_online_platter_system/view_booked_dates');
			    
			}
		}
		else
		{			
			
			$this->load->view('login');			
		}
	}
   
  
  
  function view_profile(){
  
     $this->load->model('Model_Login');
     
	  $data ['user_details'] = $this->Model_Login->get_logged_in_user_details();
	 
	  $data ['check_deck_booking_status'] = $this->Model_Login->get_check_deck_booking_status();
	  
	  $this->session->set_flashdata('result', 'Details Are Successfully Updated.');
	  
	  $this->load->view('user_edit_profile',$data);

  }
  
  function save_update_details(){
  
     $this->load->model('Model_Login');
     
	 $data ['user_details'] = $this->Model_Login->save_update_details();
	 
	 $this->session->set_flashdata('result', 'Profile successfully updated!.');
	 
	 $this->view_profile();
  
  }
  
  
               function pay_the_money(){
  
					ob_start();
					
					$this->load->model('Model_Login'); //loading login model
					
					 $digits = 9;
    
	                 $rand_value = rand(pow(10, $digits-1), pow(10, $digits)-1); 
					
					
					$this->Model_Login->dab_store_booking_details($rand_value); 
		  
                            $id = $this->session->userdata('id');
				     
			if($this->input->post('payment_type') == 'Paypal'){
					  // start paypal implementation
				$paypal_vars = array();
				$paypal_vars += array(
					'business' => 'deb_1335848049_biz@wvs.in',	
					'return' =>  base_url().'index.php/user_deck_area_booking/return_url',
					'rm' => '2',
					'notify_url' =>  base_url().'index.php/user_deck_area_booking/notify_url',
					'cancel_return' =>  base_url().'index.php/user_deck_area_booking/cancel_url', 
					'no_note' => '1',
					'charset' => 'utf-8',
					'paymentaction' => 'sale',
					'purchase-successful' => 3,
					'custom' => $id,
					'cmd' => '_xclick',
					'amount' => $this->input->post('booking_amount'), 
					'invoice' => $rand_value,
					'item_name' => 'Deck Area Booking',
					'no_shipping' => '1',
					'handling' => '0',
					'currency_code' => 'AUD',
					'lc' => 'AU',
					'cbt' => 'Return to the DECK AREA',
					'bn' => 'PP-BuyNowBF',
				);	
											
						$name_value_pairs = array();
						
						foreach($paypal_vars as $key => $value) {
						
						$name_value_pairs[]= $key . '=' . urlencode($value);
						
						}		
										
						$gateway_values =  implode('&', $name_value_pairs);	
											
						$redirect = "https://www.sandbox.paypal.com/cgi-bin/webscr"."?".$gateway_values;
						
						//echo '<pre>'; print_r($paypal_vars);
						redirect ( $redirect );
			        }
			 
			  // end paypal implementation
			  
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

			$order_id = $_POST['invoice'];
			
			
			$client_details = $this->Model_Login->get_booking_client_Details($order_id); 

					foreach ($client_details as $client_details1):
					
					endforeach;
			
					$admin_email = $this->Model_Login->get_administrator_email();
					
					$to      = $client_details1->cust_email;
					$subject = 'DECK AREA BOOKING SUCESS DETAILS';  
					$message = ' 
					Deck Area Booking Details 
					------------------------ 
					Name: '.$client_details1->cust_name.' 
					Date: '.$client_details1->booking_date.' 
					Booking Slot: '.$client_details1->booking_slot.' 
					Payment Amount: '.$client_details1->booking_amount.' 
					------------------------ 
					'; 
					//$headers = 'From:manjunath@wvs.in' . "\r\n"; 
					
					$headers = "From:manjunath@wvs.in" ;
					$headers .= "Reply-To: $client_details1->cust_email" ;
					$headers .= "Return-Path: $client_details1->cust_email" ;
					$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
					$headers .= 'MIME-Version: 1.0' . " " ;
					$headers .= 'Content-type: text/html; UTF-8' . " " ;     
					
					
					
				mail($to, $subject, $message, $headers); //mail function is commented //this is mail to the deck area booked user
						
				mail($admin_email, $subject, $message, $headers); //mail function is commented //the same copy of the mail is sent to the admin
			
			$this->Model_Login->dab_update_booking_details($order_id);
			
			
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
 
  
   function view_booking_calender($year=-1, $month=-1){
	
	$url = base_url().'index.php/user_deck_area_booking/show';
	
	 $prefs['template'] = '
    {cal_cell_content}<span class="day_listing">{day}</span>&nbsp;&bull; {content}&nbsp;{/cal_cell_content}
    {cal_cell_content_today}<div class="today"><span class="day_listing">{day}</span>&bull; {content}</div>{/cal_cell_content_today}
    {cal_cell_no_content}<span class="day_listing">{day}</span>&nbsp;{/cal_cell_no_content}
    {cal_cell_no_content_today}<div class="today"><span class="day_listing">{day}</span></div>{/cal_cell_no_content_today}
'; 
	 
	 // $config['day_type'] = 'long';  
	 
	 $prefs = array (
               'show_next_prev'  => TRUE,
               'next_prev_url'   => $url,
			   'day_type' => 'long'
             );
			 
	 $this->load->library('calendar', $prefs);

	 $this->load->model('Model_Login');
	 
	  //if($this->uri->segment(3)!= date('Y')-1 && $this->uri->segment(4)!= date('m')-1 && $this->uri->segment(3)!= date('Y')+1)
     
	 if($this->uri->segment(3)!= date('Y')-1 && $this->uri->segment(4)!= date('m')-1)
	 {
	        $month = $this->uri->segment(4); 
		   
		    $year = $this->uri->segment(3);
   
			$date = mktime(0,0,0,$month,1,$year); 
			$data =array();
			
			for($n=0; $n <= date('t',$date); ++$n){	
	 
				$val = $this->Model_Login->room_available_logic_admin($year, $month, $n );
				
				// start red
				
				 if($val =='1'){		

								  $current_month = date('m');
								  
								  $date = date('d'); 
								
								 if($current_month == $month )
								   {
									    if( $n < $date ) {
												 $url = '#tab5?id=INVALID DATE'; // show white NO SELECTION
										   }
											   else{
												 $url = '#tab17?id=AVAILABLE'; //show green  		 
										   }
									}
									else{
									
									             $url = '#tab17?id=AVAILABLE'; //show green
									  }
					
					    }
				
    	        //end red
				
			   //start yello
			   
			   else if($val =='3'){		  
					
	                    $url = '#tab10?id=LUNCH BOOKED';  // show yellow
					 
					  //$url = base_url().'index.php/admin_deck_area_booking/change_status/'.$year.'/'.$month.'/'.$n;
					
					  }	
					  
			         else if($val =='4'){		  
					
	                   $url = '#tab11?id=DINNER BOOKED';  // show purple
					  //$url = base_url().'index.php/admin_deck_area_booking/change_status/'.$year.'/'.$month.'/'.$n;	
					  }	
			   
			          else {		  
                                              
	                   $url = '#tab12?id=BOOKED'; //show red
					  //$url = base_url().'index.php/admin_deck_area_booking/change_status/'.$year.'/'.$month.'/'.$n;

					  }	   	  
				  
							 
							 
							 $data[] =   $url;
							 

			            }
	          
			  if($data)
			   {
			    
						// $this->uri->segment(4) == date('m'); 
						 
			             $details['calender'] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4), $data);
						
						
						/*if(!($this->uri->segment(3) == date('Y') && $this->uri->segment(4) == date('m')-1))
						{
						    
					   $this->uri->segment(4) == date('m'); 
						 
			           $details['calender'] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4), $data);
					   
						 /*}
			   }
			   else{
			   
						if(!($this->uri->segment(3) == date('Y') && $this->uri->segment(4) == date('m')-1))
						{
						
						 $this->uri->segment(4) == date('m');
				
				    $details['calender'] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4), $data);
					   
						 } */
			   }
	    
		 }
	  
	  else{
	        
			$month = date('m'); 
		   
		    $year = date('Y');
   
			$date = mktime(0,0,0,$month,1,$year); 
			$data =array();
			for($n=1;$n <= date('t',$date);$n++){	
					
	$url = base_url().'index.php/user_deck_area_booking/booking_form/'.$year.'/'.$month.'/'.$n;
				
				    $data[] = $url; 					
			}
	          $details['calender'] = $this->calendar->generate($year, $month, $data);
	  
	  }
	  
	    //echo '<pre>'; print_r($details); exit;
		
		 $this->load->view('booking_calender',$details);	
	
	}

   
   public function booking_form($year=0, $month=0, $date=0){
   
	  
	  if($year=="0" && $month=="0")
	  {
			  
		    
			  
			  $this->load->model('Model_Login'); 
			  
			  $book_date['day_amount'] = $this->Model_Login->get_amount_day($year, $month, $date);
			   
			  $book_date['logged_in_user_details'] = $this->Model_Login->get_logged_in_user_details();     
					 
					$year = date('Y');
					$month = date('m');
					$date = date('d');
			 
			  $book_date['booking_date'] = array($year,$month,$date);
					
			  
			  $date = "$year/$month/$date"; 
			  
			  $book_date['book_slot_options'] = $this->Model_Login->book_slot_options();
			  
			 // echo '<pre>'; print_r($book_date);  
			  
			  $this->load->view('booking_form',$book_date);
	  }
	  else{
	  
			 $this->load->model('Model_Login'); 
			  
			  $book_date['day_amount'] = $this->Model_Login->get_amount_day($year, $month, $date);
			   
			  $book_date['logged_in_user_details'] = $this->Model_Login->get_logged_in_user_details();     
					 
			  $book_date['booking_date'] = array($year,$month,$date);
					
			  $date = "$year/$month/$date"; 
			 
			  $book_date['book_slot_options'] = $this->Model_Login->book_slot_options($date);  
			  
			  //echo '<pre>'; print_r($book_date);  
			 
			  $this->load->view('booking_form',$book_date);
	  
	  }
	  
   
   }
   
   
   public function show($year=-1, $month=-1)
	{		
		if($year == -1 && $month == -1){
			
			$year = date('Y');
			$month = date('m');
			
			if($year){
			
			    $this->view_booking_calender($year, $month);
			
			}
		}
		else{
		      if($year){
			  
			     $this->view_booking_calender($year, $month);
			  
			  }
		 }
		//$this->load->view('welcome_message');
	}
	
	function online_platter(){
	
	   $this->load->view('online_platter_view');
	}


              function return_url(){
				  
                    $this->load->model('model_login');
                    $this->model_login->send_deck_booking_details();
                    $this->model_login->change_payment_status();
                    /*var_dump($_GET);
                    var_dump($_POST);*/
                    $this->load->view('payment_redirect_url'); //Your payment is sucessfull
                }
			  
			  
			  function cancel_url(){
                              /*var_dump($_GET);
                              var_dump($_POST);*/
                           $this->load->model('model_login');
                            $this->model_login->delete_payment_invoice();
                              $this->load->view('payment_cancel_url'); //Your Transaction is Failure Payment Unsucessfull
			  
			   }					  
	
				
				function book_function_hall(){
				 
				   $this->load->view('book_func_hall');
				 
				  }

               function check_available_dates(){  //implementing the functionaltuy for restrictigng booking slot restriction
 
					   $this->load->model('Model_Login');
					 
					   $date = $this->input->post('booking_date');
					   
					   $year_month_day = explode("-", $date);
					   
					   $year = $year_month_day[2];
					   
					   $month = $year_month_day[1];
					   
					   $day = $year_month_day[0];				   
					   
					   $new_date = $year.'-'.$month.'-'.$day;
                                           //var_dump($new_date);
					   
					   
					   $data['day_amount'] = $this->Model_Login->get_amount_day($year, $month, $day);
					   
					  // echo '<pre>'; print_r($book_date['day_amount']);
			   
                                            $data['logged_in_user_details'] = $this->Model_Login->get_logged_in_user_details();  
					   
					   $data['cust_date'] = $new_date;
					 
					   $data['book_slot_options'] = $this->Model_Login->book_slot_options($new_date); 
					   
					   //echo '<pre>'; print_r($data['book_slot_options']);

					   $this->load->view('booking_form', $data);
					 
                       }
                 public function nobookingslot(){
                     
                     $this->load->view("nobookingslot");
                 }
		 
		 
		 }





/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */