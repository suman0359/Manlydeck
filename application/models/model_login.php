<?php
class Model_Login extends CI_Model 
{
	/*
	Determines if a given person_id is an employee
	*/
	/*function exists($person_id)
	{
		$this->db->from('user_registeration_table');	
		$this->db->where('employees.person_id',$person_id);
		$query = $this->db->get();
		
		return ($query->num_rows()==1);
	}	*/
	/*
	Returns all the employees
	*/
	function get_all()
	{
		$this->db->from('user_booking_details');
		$this->db->order_by("booking_id", "asc");
		$result = $this->db->get();
		return $result->result();	
	}
	
	
function insert_entry()
    {
                    $hash = md5( rand(0,1000) );
                    $password = rand(1000,5000);
                    $activation_key_db = date("Ymdhms");
                    $activation_key_mail = '0';

                    $newsletter_subscription = $this->input->post('newsletter'); 

                    if($newsletter_subscription == 'yes') { 

                       $newsletter_subscription_status = 'yes';
                    }
                    else {

                       $newsletter_subscription_status = 'no';
                    }
                    
                    $register_data = array(
				'email'=>$this->input->post('email'),
				'name'=>$this->input->post('name'),
				'phone'=>$this->input->post('phone'),
				'city'=>$this->input->post('city'),
				'country'=>$this->input->post('country'),
				'pin_code'=>$this->input->post('pin_code'),
				'address'=>$this->input->post('address'),
				'password'=>md5($password),
				'test_password'=>$password,
				'newsletter_subscription'=>$newsletter_subscription_status,
				'user_type'=>'normal',
				'user_activation_key'=>$hash,
				'activation_key_db'=>$activation_key_db,
				'activation_key_mail'=>$activation_key_mail,
				'entry_date'=>date('Y-m-d H:i:s'),
				'modified_date'=>date('Y-m-d H:i:s')
                        );
		
                        $this->session->unset_userdata($register_data);
                        $this->session->set_userdata($register_data);
    
                        
                        $expiration = time()-7200; // Two hour limit
			$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);
			// Then see if a captcha exists:
			$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
			$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
			$query = $this->db->query($sql, $binds);
			$row = $query->row();
			
			if ($row->count == 0)
			{
				//echo "You must submit the word that appears in the image";  
				
				return 22;  
			}
			else{
				
		
		
		
                $this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('country', 'country', 'required');
		$this->form_validation->set_rules('pin_code', 'pin code', 'required');
		$this->form_validation->set_rules('address', 'address', 'required');
		$this->form_validation->set_rules('captcha', 'captcha', 'required');
	    
                
                //$this->session->set_flashdata($form_data, $register_data);
                
                if ($this->form_validation->run() == FALSE)
		{
		    /*$this->load->view('register_form'); 
                    $this->user_register();*/
                    return 10;
                    
		} 
                
		//echo $this->input->post('captcha');
		$email = $this->input->post('email'); 
                $name = $this->input->post('name');
		//$password = md5($this->input->post('password'));
		
				$this->db->select('email');
				$this->db->from('user_registeration_table');
				$this->db->where('email',$email);
				
				$query = $this->db->get();
				
				if($query->num_rows()==1)
				{
					return 8;
				}		

		$this->db->insert('user_registeration_table', $register_data);
			
			$to      = $email; 
			$subject = 'Signup | Verification';  
			
			
			$message = ' 
                        Dear '.$name.',

                        Welcome to an easy way to book at Manly Deck!

                        To activate your account, please click on this link.

                        http://codeigniter.mucheli.com/index.php/login/verify?email='.$email.'&hash='.$password.'&activation='.$activation_key_db.'


                        Account details:
                        Email: '.$email.' 

                        Password: '.$password.'


                        For any queries or clarifications, please contact us at 33963824 or info@manlydeck.com.au .

                        Thank you once again! '; 
			$headers = "From:shashank@mucheli.com" ;
                        $headers .= "Reply-To: $email" ;
                        $headers .= "Return-Path: $email" ;
                        $headers .= "X-Mailer: PHP/" . phpversion (). " " ;
                        $headers .= 'MIME-Version: 1.0' . " " ;
                        $headers .= 'Content-type: text/html; UTF-8' . " " ;
			
			//$headers = '' . "\r\n"; 
			
			//echo $message;
			
			mail($to, $subject, $message, null, '-fshashank@mucheli.com'); //mail function is commented
			
    /*$msg = 'Your account has been made, please verify it by clicking the activation link that has been send to your email.';  
		
			print '<script type="text/javascript">';
			print 'alert(" '. $msg.' ")';
			print '</script>'; */
			
          // $this->load->view('login');
			    return 1;
			}
		
		
		
    }


    /*function update_entry($id)
    {	
		$person_data = array(
				'name'=>$this->input->post('name'),
				'company_name'=>$this->input->post('company_name'),
				'company_reg_no'=>$this->input->post('company_reg_no'),
				'email'=>$this->input->post('email'),
				'phone'=>$this->input->post('phone'),
				'user_name'=>$this->input->post('user_name'),
				'password'=>md5($this->input->post('password')),
				'type'=>'normal',
				'record_updated_date'=>date('Y-m-d H:i:s')
		);
		$this->db->where('id', $id);
		$this->db->update('user_registeration_table',$person_data);
    }*/
	
	/*
	Gets information about a particular employee
	*/
	/*function get_info($id)
	{
		$this->db->from('user_registeration_table');
		$this->db->where('id',$id);
		$query = $this->db->get();
		
		if($query->num_rows()==1)
		{
			return $query->row();
		}		
	 }   */
	/*
	Deletes one employee
	*/
	/*function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->update('user_registeration_table', array('deleted' => 1));		
	}*/
	
	/*
	Attempts to login employee and set session. Returns boolean based on outcome.
	*/
  
  function login($email, $password)
	{
	  
	    error_reporting(0);
	    
	    
	    
        $this->db->select('activation_key_mail');
        $this->db->from('user_registeration_table');
        $this->db->where('email',$email);
		
		$query_act_email = $this->db->get();
	  
	    if ($query_act_email->row()->activation_key_mail != '0')
		{
	  
	         $query = $this->db->get_where('user_registeration_table', array('email' => $email,'password'=>md5($password)), 1);
		
		if ($query->num_rows() == 1)
		{
			$row=$query->row();
			
			$newdata = array(
                   'id'  => $row->id,
                   'name'  => $row->name,
                   'user_type' => $row->user_type
               );
			
			
			$this->session->set_userdata($newdata);
			
			return true;
		}
		
		else {
		
		   return false;
		
		   }
		}
	 }
	
	
	
	function login_m($email, $password, $activation)
	{
		$this->db->select('activation_key_db');
		$this->db->from('user_registeration_table');
		$this->db->where('activation_key_db',$activation);
		
		$query_act_db = $this->db->get();
		
		if ($query_act_db->num_rows() == 1)
		{
		
			$save_data_act = array(
						'activation_key_mail'=>$activation,
					);
				$this->db->where('activation_key_db', $activation);
				$this->db->update('user_registeration_table',$save_data_act);	
				return true;
        }
	
	}
	
	
	function send_an_email($email){
	
			if($email){
			 $query = $this->db->get_where('user_registeration_table', array('email' => $email));
			}
	
	foreach ($query->result() as $row)
			{
                            $name = $row->name;
                            $password = $row->test_password;
			}
		
		if($query->num_rows()==1)
		{
		
					$to      = $email; 
					$subject = 'Reset Password';  
					/*$message = ' 
					Your Password has been sent. 
					------------------------ 
					Email: '.$email.' 
					Password: '.$password.' 
					------------------------ 
					'; */
                                        
                                        $message = '
                                            
                                        Dear '.$name.',

                                        You have asked for a reset of password for your account at Manly Deck Bar & Restaurant’s Online Booking System.

                                        Find your password below:

                                        Password: '.$password.' 


                                        For any queries or clarifications, please contact us at 33963824 or info@manlydeck.com.au .
                                        
                                        Regards,
                                        Manly Deck Bar & Restaurant

                                            ';
                                        
					//$headers = 'From:manjunath@wvs.in' . "\r\n"; 
					
					$headers = "From:shashank@wisely.co" ;
					$headers .= "Reply-To: $email" ;
					$headers .= "Return-Path: $email" ;
					$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
					$headers .= 'MIME-Version: 1.0' . " " ;
					$headers .= 'Content-type: text/html; UTF-8' . " " ;
					
					
					mail($to, $subject, $message, null, '-fshashank@mucheli.com'); //mail function is commented
					
					$data['error'] = 'Your Password has been mailed to your Email Id.';  
				
					/*print '<script type="text/javascript">';
					print 'alert(" '. $msg.' ")';
					print '</script>'; */
					
					 $this->load->view('login', $data );
		}
		else{
			   $this->load->view('forget_password_form');
		    }		
	}
	
	/*
	Determins if a employee is logged in
	*/
	function is_logged_in()
	{
		return $this->session->userdata('id')!=false;
	}
	
	function get_amount_day($year, $month, $date){
		
		$cur_year = date('Y');
		
		$month1 = date('m');
		
		if($year == $cur_year && $month == $month1){
				
				$year = date('Y');
				$month = date('m');
				$data = $year.'-'.$month.'-'.$date;
			    $weekday = date('l', strtotime(date($data ))); 
		} 
		else{
		  
				  
				    $data = $year.'-'.$month.'-'.$date;
				    $weekday = date('l', strtotime(date($data ))); 
				   
		}
		
		$this->db->from('user_booking_details');
		$this->db->where('booking_day',$weekday);
		$result = $this->db->get();
		return $result->result();	
	}
	
	function get_logged_in_user_details(){
	
	    $id = $this->session->userdata('id');
		$this->db->from('user_registeration_table');
		$this->db->where('id',$id);
		$result = $this->db->get();
		return $result->result();
	}
	
   function get_all_the_day_details($booking_id){
   
        $this->db->from('user_booking_details');
		$this->db->where('booking_id',$booking_id);
		$result = $this->db->get();
		return $result->result();
   
   }
   
   
  function save_edit_price_details(){
  
			 $id = $this->input->post('id');
			 
			 $save_data = array(
				'booking_day'=>$this->input->post('add_day'),
				'booking_amount	'=>$this->input->post('add_price'),		
	    	);
		$this->db->where('booking_id', $id);
		$this->db->update('user_booking_details',$save_data);
			 
  }
  
  
  function get_pay_order_details($per_page, $offset){
  //function get_pay_order_details(){
  	
		$current_date = date("Y-m-d");
		
		$this->db->where('book_status','1');

		$this->db->where('booking_date >=', $current_date);
		
		$this->db->order_by("booking_date", "asc");
		
		$query =  $this->db->get('payment_orders', $per_page, $offset);
		//$query =  $this->db->get('payment_orders');
		
                return $query->result();
  }
  
    function get_pay_order_details_p($per_page, $offset){
	
		$current_date = date("Y-m-d");
		
		$this->db->where('book_status','1');
		
		$this->db->where('booking_date <', $current_date); 
		
		$this->db->order_by("booking_date", "asc");
		
	        $query =  $this->db->get('payment_orders', $per_page, $offset);
		
                return $query->result();
  }

  
   /* function get_logged_in_user_details()
   {
	$id = $this->session->userdata('id');
	$this->db->from('user_registeration_table');
	$this->db->where('id',$id);
	$query = $this->db->get();
	
	if($query->num_rows()==1)
	{
		return $query->row();
	}
    }*/

  function insert_cust(){
  
	 
	   $date1 = $this->input->post('booking_date');
		
		$this->db->select('booking_date');
		$this->db->from('payment_orders');
		$this->db->where('booking_date',$date1);
		
                $bookingdate = $this->input->post('booking_date');
                $year_month_day = explode("-", $bookingdate);
					   
					   $year = $year_month_day[2];
					   
					   $month = $year_month_day[1];
					   
					   $day = $year_month_day[0];				   
					   
					   $bookingdate = $year.'-'.$month.'-'.$day;
                                           
		$query = $this->db->get();;
		
		if($query->num_rows()==2){
		
			   echo 'This Date is Already Booked Please Try With Another';
		
		} 
    else{
			 
			  $digits = 9;
    
	          $rand_value = rand(pow(10, $digits-1), pow(10, $digits)-1); 
			 
			  $email_id = $this->input->post('email');
			  
			  $customer_data = array(
						'invoice_no'=>$rand_value,
						'cust_name'=>$this->input->post('name'),
						'cust_email'=>$this->input->post('email'),
						'cust_phone'=>$this->input->post('phone'),
						'cust_city'=>$this->input->post('city'),
						'cust_country'=>$this->input->post('country'),
						'booking_date'=>$bookingdate,
						'booking_amount'=>$this->input->post('payment'),
						'booking_slot'=>$this->input->post('booking_slot_cust'),
						'booking_amount'=>$this->input->post('booking_amount'),
						'event_name'=>$this->input->post('event_name'),
						'event_type'=>$this->input->post('event_type'),
						'no_of_guests'=>$this->input->post('no_of_guests'),					
						'book_status'=>'1',
						'record_entry_date'=>date('Y-m-d H:i:s')
				);
				
				
				

				$res = $this->check_customer_type($email_id);

				$this->db->insert('payment_orders', $customer_data );
				
				
						$this->db->select('id');
						$this->db->from('user_registeration_table');
						$this->db->where('email', $email_id);
					
						$query = $this->db->get();
			 
			          
					   foreach ($query->result() as $row)
							{
								$update_data = array(
								'user_id'=>$row->id,
								'record_entry_date'=>date('Y-m-d H:i:s'));
			
							 // echo $row->test_password;
							
							 $this->db->where('cust_email', $email_id);
							
							 $this->db->update('payment_orders',$update_data);
							
						
				        $to      = $email_id; 
					
					$subject1 = 'Deck Area Booking Details';
					 
					
					$message1 = ' 
					Booking Details. 
					------------------------ 
					Date: '.$this->input->post('booking_date').' 
					Amount Paid: '.$this->input->post('booking_amount').' 
					------------------------ 
                                        
                                        Regards,
                                        Manly Deck Bar & Restaurant
					'; 

					//$headers = 'From:manjunath@wvs.in' . "\r\n"; 
					
					$headers = "From:shashank@wisely.co" ;
					$headers .= "Reply-To: $email_id" ;
					$headers .= "Return-Path: $email_id" ;
					$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
					$headers .= 'MIME-Version: 1.0' . " " ;
					$headers .= 'Content-type: text/html; UTF-8' . " " ;
					
					
					
					
					
					mail($to, $subject1, $message1, null, '-fshashank@mucheli.com'); //booking confirmation mail is sent to the customer..
					
					$data['error'] = 'Your Password is sent to mail please check and then Login.';  
							
							}
					   
	            }
  
  }

//START CUSTOMER TYPE IMPLEMENTATION

function check_customer_type($email_id){

        $this->db->select('email');
		$this->db->from(' user_registeration_table');
		$this->db->where('email', $email_id);
		
			$result = $this->db->get();
			
			if($result->num_rows()===1)
			{
				 $this->existing_customer();
			}
			else{
				$this->new_customer($email_id);
			}	


}

//END CUSTOMER TYPE IMPLEMENTATION


function existing_customer(){

   //echo 'manju';

}

function new_customer($email_id){

        $email = $this->input->post('email'); 
		$password = md5($this->input->post('password'));
		
		$hash = md5( rand(0,1000) );
		$password = rand(1000,5000);
		$register_data = array(
				'email'=>$this->input->post('email'),
				'name'=>$this->input->post('name'),
				'phone'=>$this->input->post('phone'),
				'city'=>$this->input->post('city'),
				'country'=>$this->input->post('country'),
				'address'=>$this->input->post('address'),
				'password'=>md5($password),
				'test_password'=>$password,
				'user_type'=>'normal',
				'user_activation_key'=>$hash,
				'entry_date'=>date('Y-m-d H:i:s'),
				'modified_date'=>date('Y-m-d H:i:s')
		);
		
		
		$to = $this->input->post('email');
		
		$subject = 'Your | Login Details'; 

                                $message = ' 				
					Your Login Details. 
					------------------------ 
					Email: '.$this->input->post('email').' 
					Password: '.$password.' 
					------------------------ 
					'; 

                                        $headers = "From:shashank@wisely.co" ;
					$headers .= "Reply-To: $email_id" ;
					$headers .= "Return-Path: $email_id" ;
					$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
					$headers .= 'MIME-Version: 1.0' . " " ;
					$headers .= 'Content-type: text/html; UTF-8' . " " ;					



                              mail($to, $subject, $message, NULL, '-fshashank@mucheli.com'); //admin registers user and mail is sent to the user 

		              $this->db->insert('user_registeration_table', $register_data);
			   
		    
			//fetch user-id from the database based on the emai-id
			
			/*$this->db->select('id');
			$this->db->from('user_registeration_table');
			$this->db->where('email', $email_id);
			$result = $this->db->get();
			 
			           echo  $row->id = $result->first_row();
					
						$update_data = array(
						'user_id'=>$row->id,
						'record_entry_date'=>date('Y-m-d H:i:s')
						
						);
		
						 $this->db->where('cust_email', $email_id);
						 $this->db->update('payment_orders',$update_data);*/

			  //fetch user-id from the database based on the emai-id
    }





function room_available_logic($year, $month, $date){
		
		$date = $date;
		$day = $year.'-'.$month.'-'.$date;
		
		//$book_slot = 'lunch_dinner';
        $current_date = date("Y-m-d");
        $this->db->select('booking_slot');
		$this->db->from('payment_orders');
		$this->db->where('booking_date',$day);
		$this->db->where('book_status','1');
                $this->db->where('booking_date >=', $current_date);
    	
		$result = $this->db->get();
		
		foreach ($result->result() as $result1)
		{
		       		
				if((($result->num_rows()===2)) )
				{
					 return 1;
				}
				else{ 
						   
						if($result1->booking_slot == 'Lunch')
						{
						   return 2;
						}
						
						if($result1->booking_slot == 'Dinner')
						{
						   return 3;
						}
					
					       return 0;
				 }	
             }
		
		
		}
		   
		
   
   function room_available_logic_admin($year, $month, $date){
		
/*	    $date = $date;
		$day = $year.'-'.$month.'-'.$date;
		
		$book_slot = 'lunch_dinner';

        $this->db->select('booking_slot');
		$this->db->from('payment_orders');
		$this->db->where('booking_date',$day);
 
    	$result = $this->db->get();
		
		foreach ($result->result() as $result1)
		{
		       		
				if( (($result->num_rows()===1) && ($result1->booking_slot == 'lunch_dinner'))
				 || (($result->num_rows()===2)) )
				{
					return 0;
				}
				else{ 
						   
						if($result1->booking_slot == 'lunch')
						{
						   return 2;
						}
						
						if($result1->booking_slot == 'dinner')
						{
						   return 3;
						}
					
					       return 1;
				 }	
             }*/
	
	    $current_date = date("Y-m-d");
        $date = $date;
		$day = $year.'-'.$month.'-'.$date;
		$this->db->select('booking_date, booking_slot');
		$this->db->from('payment_orders');
		$this->db->where('booking_date',$day);
		$this->db->where('book_status','1');
		$this->db->where('booking_date >=', $current_date);
      
		$result = $this->db->get();
		
		
		foreach ($result->result() as $row)
			{
			    $row->booking_slot;  
			}
		
		
			if($result->num_rows()===2 )
				{  
					  return 0; //this is booked
				}
				else if($result->num_rows()===1){
					  
						 if($row->booking_slot == 'Lunch')  //this is for lunch
							{ 
							
							   return 3;
							}
				     
						 if($row->booking_slot == 'Dinner')  //this is for dinner
						 
							{ 
							   return 4;
							}
				    }
				else{
					   return 1;  //available
		         }
		 }
  
  
  
  function get_checkout_customer($day){
  
		$current_date = date("Y-m-d");
		$this->db->from('payment_orders');
		$this->db->where('booking_date',$day);
        $result = $this->db->get();
		return $result->result();
  }
  
  function check_out_cust(){
  
       $book_id = $this->input->post('book_id');
	   
	   $customer_checkout_data = array(
				'booking_date'=>$this->input->post('booking_date'),
				'customer_name'=>$this->input->post('cust_name'),
				'customer_email'=>$this->input->post('cust_email'),
				'customer_phone'=>$this->input->post('cust_phone'),
				'cust_city'=>$this->input->post('cust_city'),
				'customer_country'=>$this->input->post('cust_country'),
				'booking_amount'=>$this->input->post('booking_amount'),
				'record_entry_date'=>date('Y-m-d H:i:s')
		);
		
		$this->db->insert('checkout_customer_details', $customer_checkout_data );
		
		$this->db->delete('payment_orders', array('book_id' => $book_id));   
  }
  
  
  function get_administrator_email(){  //to get the administrator email-id only one administrator  for the application
  
        $this->db->select('email');
		$this->db->from(' user_registeration_table');
		$this->db->where('user_type','admin');
		$result = $this->db->get();
        
		foreach ($result->result() as $row)
			{
			    return $row->email;  
			}
       }
  
  function dab_store_booking_details($rand_value){ 
					  
					   $result = $this->input->post('booking_date'); 
					  
					   //$pieces = explode("/", $result);
						
					   //$booking_date = $pieces[2].'-'.$pieces[0].'-'.$pieces[1];
					  
				
				       $booking_slot1 = $this->input->post('booking_slot1');
				       

					  $customer_data = array(
						'user_id'=>$this->session->userdata('id'),
						'invoice_no'=>$rand_value,
						'cust_name'=>$this->input->post('name'),
						'cust_email'=>$this->input->post('email'),
						'cust_phone'=>$this->input->post('phone'),
						'cust_city'=>$this->input->post('city'),
						'cust_country'=>$this->input->post('country'),
						'booking_slot'=>$this->input->post('booking_slot1'), 
						'book_status'=>0,
						'booking_date'=>$this->input->post('booking_date'),
						'booking_amount'=>$this->input->post('booking_amount'),
						/*'remark_description'=>$this->input->post('remark_description'),*/
						'event_name'=>$this->input->post('event_name'),
						'event_type'=>$this->input->post('event_type'),
						'no_of_guests'=>$this->input->post('no_of_guests'),
						'record_entry_date'=>date('Y-m-d H:i:s')
			     	);
	
                                     //var_dump($customer_data['cust_email']);
                                        $this->session->set_userdata($customer_data);  
					$this->db->insert('payment_orders', $customer_data );	
	
     }
     
     public function send_deck_booking_details(){
         $email_id =  $this->session->userdata('cust_email'); 
         $cust_name = $this->session->userdata('cust_name'); 
         $event_name = $this->session->userdata('event_name'); 
         $booking_date = $this->session->userdata('booking_date'); 
         $booking_slot = $this->session->userdata('booking_slot'); 
         $event_type = $this->session->userdata('event_type'); 
         $no_of_guests = $this->session->userdata('no_of_guests'); 
         $booking_amount = $this->session->userdata('booking_amount'); 
         
         $booking_date = explode("-", $booking_date);
         $booking_date = $booking_date[2]."-".$booking_date[1]."-".$booking_date[0];
         
                                        $to      = $email_id; 
					
					$subject1 = 'Function Booking for the Deck Area';
					 
					
					/*$message = ' 
					Booking Details. 
					------------------------ 
					Date: '.$this->input->post('booking_date').' 
					Amount Paid: '.$this->input->post('booking_amount').' 
					------------------------ 
					'; */

					//$headers = 'From:manjunath@wvs.in' . "\r\n"; 
                                        
                                        $message1 = 'Dear'. $cust_name .',

                                        Your booking for '.$event_name.' on '.$booking_date.' is confirmed!

                                        Thank you for choosing Manly Deck for your function! We’ll strive to make your special occasion a memorable one!!

                                        Food Platters for the function need to be booked and paid for more than 7 days in advance. You can do it using the ORDER PLATTERS button in the FUNCTION BOOKINGS page after you log into our booking system here:

                                        http://codeigniter.mucheli.com/

                                        Function Details:
                                        Function Date: '.$booking_date.'
                                        Time of Day: '.$booking_slot.'
                                        Function Name: '.$event_name.'
                                        Function Type: '.$event_type.'
                                        No. of Guests: '.$no_of_guests.'
                                        Deck Area Rent (in $): '.$booking_amount.'

                                        Contact Details:
                                        Name: Shishir Raj
                                        Email: shishir.18@gmail.com
                                        Phone:  9886739718
                                        City: Udupi
                                        Address: Test Address

                                        For any queries or clarifications, please contact us at 33963824 or info@manlydeck.com.au .

                                        Thank you once again!

                                        Regards,
                                            Manly Deck Bar & Restaurant
                                        ';					
					
                                        $headers = "From:shashank@wisely.co" ;
					$headers .= "Reply-To: shashank@wisely.co" ;
					$headers .= "Return-Path: shashank@wisely.co" ;
					$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
					$headers .= 'MIME-Version: 1.0' . " " ;
					$headers .= 'Content-type: text/html; UTF-8' . " " ;
					
					
					
					
					
					mail($to, $subject1, $message1, null, '-fshashank@mucheli.com'); //booking confirmation mail is sent to the customer..
         
     }
             
     
     public function change_payment_status(){
       $invoice_no =  $this->session->userdata('invoice_no'); 
       
       $data = array(
               'book_status' => 1
            );
       
       $this->db->where('invoice_no', $invoice_no);
       $this->db->update('payment_orders', $data); 
     }
     
     public function delete_payment_invoice(){
          $invoice_no =  $this->session->userdata('invoice_no'); 
       
       $data = array(
               'invoice_no' => $invoice_no
            );
       
       $this->db->delete('payment_orders', $data); 
     }
             
	 function book_slot_options($date){
            
             $date = explode('-', $date);
             $date = $date[2]."-".$date[1]."-".$date[0];
             
             
	    $this->db->select('booking_slot');
	    $this->db->from('payment_orders');
	    $this->db->where('book_status','1');
	    $this->db->where('booking_date',$date);
            $result = $this->db->get();
		return $result->result();
	 
	 }
	 
	 function save_update_details(){
	  
	   $id =  $this->session->userdata('id'); 
	   
	   $this->session->set_flashdata('result', 'Details Are Successfully Updated.');

	   $old_password = $this->input->post('old_password');
	   $new_password = $this->input->post('new_password');
	   
	   if($new_password == '')
	   {
	       $old_password = $this->input->post('old_password');
		   
		   $hash_password = md5($old_password);
	   }
	   else{
	  
	       $old_password = $this->input->post('new_password');
		   
		    $hash_password = md5($old_password);
	   }
	   
	   $update_data = array(
				
				'email'=>$this->input->post('email'),
				'name'=>$this->input->post('name'),
				'phone'=>$this->input->post('phone'),
				'city'=>$this->input->post('city'),
				'pin_code'=>$this->input->post('pin_code'),
				'password'=>$hash_password,
				'test_password'=>$old_password,
				'address'=>$this->input->post('address'),
				'entry_date'=>date('Y-m-d H:i:s'),
				'modified_date'=>date('Y-m-d H:i:s')
		);
		
		 
		 //echo '<pre>'; print_r($update_data);
		
		 $this->db->where('id', $id);
		 $this->db->update('user_registeration_table',$update_data);
	 
	 }
	 
	 function get_check_deck_booking_status(){
	   
	   $current_date = date("Y-m-d");
	   $id =  $this->session->userdata('id');
	  //  $this->db->select('booking_slot');
	    $this->db->from('payment_orders');
		$this->db->where('user_id',$id);
		$this->db->where('book_status','1');
		 $this->db->where('booking_date >=', $current_date);
		 $this->db->order_by("booking_date", "asc");
        $result = $this->db->get();
		return $result->result();  
	 
	 }
	 
	  function get_booking_slot_checkout(){
	 
	    $id =  $this->session->userdata('id');
	    $this->db->select('booking_slot');
	    $this->db->from('payment_orders');
		$this->db->where('user_id',$id);
        $result = $this->db->get();
		return $result->result();  
	 
	 }
	 
	 function dab_update_booking_details($order_id) {
	 
	      $save_data = array(
				'book_status'=>1,		
	    	);
		
		$this->db->where('invoice_no', $order_id);
		$this->db->update('payment_orders',$save_data);
	 }
	 
	  function get_booking_client_Details($order_id) {
	    
			$this->db->from('payment_orders');
			$this->db->where('invoice_no',$order_id);
			$result = $this->db->get();
			return $result->result();
	 }
         
         public function send_email($email){
             
                        $sql = "SELECT email, password, test_password, activation_key_db FROM user_registeration_table WHERE email = '".$email."'";
                        /*$sql = $this->db->get_where('email, password, test_password, activation_key_db', array('email' => $email));
                        $this->db->select('email, password, test_password, activation_key_db');
			$this->db->from('user_registeration_table');
			$this->db->where('email',$email);*/
                        
                        $sql = $this->db->query($sql);
                        
                        
                        foreach ($sql->result() as $row) {
                            $to      = $row->email; 
                            $subject = 'Signup | Verification';  


                            $message = ' 
                            Thanks for signing up! 
                            Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below. 
                            ------------------------ 
                            Email: '.$row->email.' 
                            Password: '.$row->test_password.' 
                            ------------------------ 
                            Please click this link to activate your account: 
                            http://wvs.in/mdrwi/mdr/index.php/login/email_vefication?email='.$row->email.'&hash='.$row->password.'&activation='.$row->activation_key_db.''; 

                            $headers = "From:manjunath@wvs.in" ;
                            $headers .= "Reply-To:".$row->email;
                            $headers .= "Return-Path:".$row->email ;
                            $headers .= "X-Mailer: PHP/" . phpversion (). " " ;
                            $headers .= 'MIME-Version: 1.0' . " " ;
                            $headers .= 'Content-type: text/html; UTF-8' . " " ;

                            //$headers = '' . "\r\n"; 

                            //echo $message;

                            mail($to, $subject, $message, $headers);
                        }
                        return 1;
         }
 
   }
?>
