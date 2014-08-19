<?php

class Model_Online_Platter extends CI_Model 
{
	
	function get_all()
	{
		$this->db->from('online_platter_order_categories');
		$this->db->order_by("cat_id", "asc");
		$result = $this->db->get();
		return $result->result();		
	}
	
	function get_all_product($cat_id)
	{
		$this->db->from('online_platter_order_products');
		$this->db->where('cat_id',$cat_id);
		$this->db->order_by("product_id", "asc");
		$result = $this->db->get();
		return $result->result();		
	}
	
	function get_all_products($catid){
	
	  $this->db->from('online_platter_order_products');
		$this->db->where('cat_id',$catid);
		$this->db->order_by("product_id", "asc");
		$result = $this->db->get();
		return $result->result();
	
	}
	
	function get_all_products_admin(){
	
	  $this->db->from('online_platter_order_products');
		$this->db->order_by("product_id", "asc");
		$result = $this->db->get();
		return $result->result();
	}
	
	
	function get_all_categories()
	{
		$this->db->from('online_platter_order_categories');
		$this->db->order_by("cat_id", "asc");
		$this->db->limit(2);
		$result = $this->db->get();
		return $result->result();		
	}
	
	
	/*function insert_category(){
	
	$category_add = array(
				'cat_name'=>$this->input->post('category_name'),
				'cat_description'=>$this->input->post('category_description'),
				'cat_entered_date'=>date('Y-m-d H:i:s')
		);
		
		$this->db->insert('online_platter_order_categories', $category_add );
	}*/
	
	function delete_category($cat_id){
	
	    $this->db->delete('online_platter_order_categories', array('cat_id' => $cat_id)); 
	}
	
	function edit_category($cat_id){
	
	  $this->db->from('online_platter_order_categories');
		$this->db->where('cat_id',$cat_id);
		$result = $this->db->get();
		return $result->result();
	}
	
	function edit_product($pro_id){
	
	 $this->db->from('online_platter_order_products');
		$this->db->where('product_id',$pro_id);
		$result = $this->db->get();
		return $result->result();
	}
	
	function save_edited_category(){
	
	  $cat_id = $this->input->post('cat_id');
	  
	  $updated_data = array(
				'cat_name'=>$this->input->post('category_name'),
				'cat_description'=>$this->input->post('category_description'),
				'platter_price'=>$this->input->post('platter_price'),
				'cat_entered_date'=>date('Y-m-d H:i:s')
		);
	  
	  $this->db->where('cat_id', $cat_id);
	  $this->db->update('online_platter_order_categories',$updated_data);
	
	}
	
	function save_edited_image($file){
	
	     $product_id = $this->input->post('product_id');
	     $updated_data = array(
				'product_image_url'=>$file
		     );
	
	   $this->db->where('product_id', $product_id);
	  $this->db->update('online_platter_order_products',$updated_data);
	}
	
	function save_edited_image1($file){
	
	     $cat_id = $this->input->post('cat_id');
	     $updated_data = array(
				'product_image_url'=>$file
		     );
	
	   $this->db->where('cat_id', $cat_id);
	  $this->db->update('online_platter_order_categories',$updated_data);
	}
	
	
	
	function delete_product($pro_id) {
	
	    $this->db->delete('online_platter_order_products', array('product_id' => $pro_id)); 
	
	}
	
	function save_edited_products(){
	 
	  $product_id = $this->input->post('product_id');
	  
	
	    $updated_data = array(
				
				'product_name'=>$this->input->post('product_name'),
				'product_category'=>$this->input->post('product_category'),
				'product_price'=>$this->input->post('product_price'),
				'product_tax'=>$this->input->post('product_tax'),
				'product_description'=>$this->input->post('product_description'),
		 		'product_recorded_date'=>date('Y-m-d H:i:s')
		    );
	  
	  $this->db->where('product_id', $product_id);
	  $this->db->update('online_platter_order_products',$updated_data);
	
	}
	
	
	function get_pro_category_name($catid){
	
	$this->db->select('cat_name');
	    $this->db->from('online_platter_order_categories');
		$this->db->where('cat_id',$catid);
		$result = $this->db->get();
	
	   foreach ($result->result() as $row)
			{
			   
			}
	     
		 return $row->cat_name;  
	
	}
	
	function save_new_products($file){
	
	  $product_category = $this->input->post('product_category'); 
	    
		$this->db->select('cat_id');
	    $this->db->from('online_platter_order_categories');
		$this->db->where('cat_name',$product_category);
		$result = $this->db->get();
		//return $result->result();
	  
	  foreach ($result->result() as $row)
			{
			    $row->cat_id;
			   
			}
	 
	 
	  $updated_data = array(
				
				'cat_id'=>$row->cat_id,
				'product_name'=>$this->input->post('product_name'),
				'product_category'=>$this->input->post('product_category'),
				'product_price'=>$this->input->post('product_price'),
				'product_tax'=>$this->input->post('product_tax'),
				'product_image_url'=>$file,
				'product_description'=>$this->input->post('product_description'),
				'product_recorded_date'=>date('Y-m-d H:i:s')
		);
	  
	  $this->db->insert('online_platter_order_products', $updated_data );
	
	}
	
	function save_category(){
	
	$cat_name = $this->input->post('category_name');
        $cat_description = $this->input->post('category_description');
	 $category_add = array(
				'platter_price'=>$this->input->post('platter_price'),
                                'cat_description'=> $cat_description,
				'cat_entered_date'=>date('Y-m-d H:i:s')
		);
                //'product_image_url'=>$file,         
		//$this->db->insert('online_platter_order_categories', $category_add );
         
                $this->db->where('cat_name', $cat_name);
                $this->db->update('online_platter_order_categories', $category_add); 
	}
	
	function store_user_combination(){
	
	 $this->input->post('product_id');

	  $this->input->post('product_name');
	  
	  $this->session->userdata('id');
	  
	   $store_combination = array(
	   
				'product_id'=>$this->input->post('product_id'),
				'product_image'=>$this->input->post('product_image'),
				'product_name'=>$this->input->post('product_name'),
				'category_namee'=>$this->input->post('category_name'),
				'booked_date'=>$this->input->post('booked_date'),
				'user_id'=> $this->session->userdata('id')
				
		    );
			
			//echo '<pre>'; print_r($store_combination);
	
	       $this->db->insert('user_store_combinations', $store_combination );
	}
	
	
	function get_all_combinations($platt_date){
	
	   $user_session_id = $this->session->userdata('id');
	   
	    $this->db->from('user_store_combinations');
		$this->db->where('user_id', $user_session_id);
		$this->db->where('booked_date',$platt_date);
		$result = $this->db->get();
		return $result->result();
	}
	
	function get_all_the_combinations(){
	
	    $user_session_id = $this->session->userdata('id');
	   
	    $this->db->select('product_name');
	    $this->db->from('user_store_combinations');
		//$this->db->where('category_namee', 'hot');
		$this->db->where('user_id', $user_session_id);
		$result = $this->db->get();
		return $result->result();
	
	}
	
	function remove_the_combination(){
	
	  $user_id = $this->session->userdata('id');
	  
	    $this->db->delete('user_store_combinations', array('user_id' => $user_id)); 
	
	}
	
	
	function get_dab_dates_of_user(){
	
	        $user_session_id = $this->session->userdata('id');
	        $current_date = date("Y-m-d");
	        $this->db->from('payment_orders');
			$this->db->where('user_id', $user_session_id);
			//$this->db->where('booking_date >=', $current_date);
			$this->db->order_by("booking_date");
			$result = $this->db->get();
			return $result->result();
	}
	
	
	function store_cart_in_db($var, $platt_dat){  // to store the cart values in the database 
	
		 $user_id = $this->session->userdata('id');
		 
		 $cate = $this->input->post('category_name');
		 
		 
		 $store_cart = array(
				'category_name'=>$this->input->post('category_name'),
				'cart_combination'=>$var,
				'combination_price'=>$this->get_platter_price123($cate),   //make the price dynamic
				'platt_dat'=>$platt_dat,
				'combination_quantity'=> 1,
				'user_id'=> $this->session->userdata('id')	
		    );
			
			 $this->db->insert('user_cart_table', $store_cart );
			 
			  $this->db->delete('user_store_combinations', array('user_id' => $user_id)); 	 
			 
	}
	
	
	function get_platter_price123($cate){  // to implement category price platter
	
				$this->db->select('platter_price');
				$this->db->from('online_platter_order_categories');
				$this->db->where('cat_name', $cate);
				$result = $this->db->get(); 
			
					 foreach ($result->result() as $row)
						{
						   
						}
				 
				       return $row->platter_price ;  
	           }
	

	function display_cart_options($platt_date){
	
			$user_session_id = $this->session->userdata('id'); 
			$this->db->from('user_cart_table');
			$this->db->where('user_id', $user_session_id);
			$this->db->where('platt_dat', $platt_date);
			$result = $this->db->get();
			return $result->result();
	}
	
	
	function view_paid_bookings($per_page, $offset){

		  $this->db->where('payment_status', '1'); 
		  $this->db->order_by("select_date", "asc");	
		  $query =  $this->db->get('opos_before_making_payment_table', $per_page, $offset);
          return $query->result();
			
	}
	
	function view_unpaid_bookings($per_page, $offset){
	    
		  $this->db->where('payment_status', '0'); 
		  $this->db->order_by("select_date", "asc");	
		  $query =  $this->db->get('opos_before_making_payment_table', $per_page, $offset);
          return $query->result();
	}
	
	
	function remove_combination_from_cart($cart_id){
		
		  $this->db->delete('user_cart_table', array('cart_id' => $cart_id));  
	
	}
	
	
	//delete all combinations from the cart
	
	function remove_all_combination_from_cart($platter_date){
		
		   $id = $this->session->userdata('id');
		  
		  $this->db->delete('user_cart_table', array('user_id' => $id, 'platt_dat' => $platter_date));  
	
	}
	
	
	
	function edit_combination_from_cart(){
	
	 
	 $cart_id = $this->input->post('cart_id');
	 
	 $store_cart = array(
				
				'combination_quantity'=> $this->input->post('quantity')
		    );
	  
	  
	  $this->db->where('cart_id', $cart_id);
	  $this->db->update('user_cart_table',$store_cart);
	
	}
	
	function update_cart_details($cart_id){
	
		$this->db->from('user_cart_table');
			$this->db->where('cart_id', $cart_id);
			$result = $this->db->get();
			return $result->result();
	
	}
	
	function delete_paidbooking($paid_book_id){
	
	  $this->db->delete('opos_before_making_payment_table', array('id' => $paid_book_id)); 
	
	}
	
	function delete_unpaidbooking($paid_book_id){
	
	  $this->db->delete('opos_before_making_payment_table', array('id' => $paid_book_id)); 
	
	}
	
	
	
	function edit_paidbooking($paid_book_id){
	
	$this->db->from('opos_before_making_payment_table');
			$this->db->where('payment_status', '1');
			$this->db->where('id', $paid_book_id);
			$result = $this->db->get();
			return $result->result();
	
	}
	
   function edit_unpaidbooking($paid_book_id){
	
	$this->db->from('opos_before_making_payment_table');
			$this->db->where('payment_status', '0');
			$this->db->where('id', $paid_book_id);
			$result = $this->db->get();
			return $result->result();
	
	}
	
	
   function save_edited_paid_customer(){
   
     $pay_id = $this->input->post('pay_id');
	  
				/*name1,
				phone,
				email,
				serve_date,
				serve_time,
				platter_combination,
				payment,
				payment_status*/
	  
	  $updated_data = array(	
				'cust_name'=>$this->input->post('name1'),
				'cust_phone'=>$this->input->post('phone'),
				'cust_email'=>$this->input->post('email'),
				'select_date'=>$this->input->post('serve_date'),
				'timepicker_6'=>$this->input->post('serve_time'),
				'platter_combination'=>$this->input->post('platter_combination'), 
				'grand_amount'=>$this->input->post('payment'),
				'payment_status'=>$this->input->post('payment_status'),
				'recorded_date'=>date('Y-m-d H:i:s')
		    );
	  
	 
	 $this->db->where('id', $pay_id);
	 $this->db->update('opos_before_making_payment_table',$updated_data);
   
   }
   
  function save_edited_unpaid_customer(){    //save edited unpiad custommer
   
      $pay_id = $this->input->post('pay_id');
	  
	  $updated_data1 = array(	
                'cust_name'=>$this->input->post('name1'),
				'cust_phone'=>$this->input->post('phone'),
				'cust_email'=>$this->input->post('email'),
				'select_date'=>$this->input->post('serve_date'),
				'timepicker_6'=>$this->input->post('serve_time'),
				'platter_combination'=>$this->input->post('platter_combination'), 
				'grand_amount'=>$this->input->post('payment'),
				'payment_status'=>$this->input->post('payment_status'),
				'recorded_date'=>date('Y-m-d H:i:s')
		    );
			
			//echo '<pre>'; print_r($updated_data1);
	 
	 $this->db->where('id', $pay_id);
	 //$this->db->where('payment_status', '0');
	 $this->db->update('opos_before_making_payment_table',$updated_data1);
   
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
   

   function po_bf_py_str_val_indb($rand_value){
   
    $var = '';
	
	 for($i=1; $i <= $this->input->post('total_values'); $i++)   
	 {
		 $var = $var.$this->input->post('cart_id-'.$i).','; 
	 }
	 
	 $pieces = explode(",", $var);
	 
	 for($i=0; $i <= $this->input->post('total_values'); $i++)   
	 {
		
		
		$invoice_data = array(	'invoice_no'=>$rand_value );
	  
	 
	 $this->db->where('cart_id', $pieces[$i]);
	 
	  $this->db->where('cart_id', $pieces[$i]);
	
	 $this->db->update('user_cart_table',$invoice_data);
	
	 }
	 
	 //start to store the time
	 
	// $this->input->post('timepicker_6-1'); 
	 
	 /*$var1 = '';
	 
	 for($i=1; $i <= $this->input->post('timepicker_6'); $i++)   
	 {
		 $var1 = $var1.$this->input->post('timepicker_6-'.$i).','; 
	 }*/
	 
	 $time_picker[0] = $this->input->post('timepicker_6');
	 
	 $time_pick = implode(",", $time_picker[0]); 
	 
	//echo $var1; exit;
	
	//start to end the time
	
	// to implement quantity
	
	$combination_quantity = '';
	
	for($i=1; $i <= $this->input->post('total_values'); $i++)   
	 {
       $combination_quantity = $combination_quantity.$this->input->post('combination_quantity-'.$i).'~'; 
	 }
	
	
	
	$var5 = '';
	
	for($i=1; $i <= $this->input->post('total_values'); $i++)   
	 {
       $var5 = $var5.$this->input->post('combination_items-'.$i).'~'; 
	 }
	
	//echo '<pre>'; print_r($var5);
	
	$payment_type = $this->input->post('payment_type');

	if($payment_type == 'Paypal'){ 
	
	    $val = 0; 
	}
	else{
	
	    $val = 0;   
	    
	   $val = 0;  
		
           $platter_date = $this->input->post('platter_date');
           $platter_date = explode("-", $platter_date);
           $platter_date = $platter_date[2]."-".$platter_date[1]."-".$platter_date[0];
           
           $admin_email = $this->get_administrator_email();
			
			$email = $this->input->post('cust_email');   //cust_email  cust_name platter_combination timepicker_6 grand_amount
			$to      = $email; 
			$subject = 'Manly Deck Restaurant | Platter Order Booking (Cash On Order)';  

			$message = ' 
			Thanks You For Ordering Platters! 
			Your Platter Orders are sucessfully Booked & pay the Cash at Restaurant. 
			------------------------ 
			Name: '.$this->input->post('cust_name').' 
                        Email: '.$email.' 
			Platters: '.$var5.' 
                        Serve Time: '.$time_pick.'
                        Payment Amount: '.$this->input->post('grand_amount').'   	
                        Platter Date: '.$platter_date.'
			------------------------
                        

                        Regards,
                        Manly Deck Bar & Restaurant
                        '; 
			
			$headers = "From:shashank@mucheli.com" ;
			$headers .= "Reply-To: $email" ;
			$headers .= "Return-Path: $email" ;
			$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
			$headers .= 'MIME-Version: 1.0' . " " ;
			$headers .= 'Content-type: text/html; UTF-8' . " " ;
			
			//$headers = '' . "\r\n"; 
			
			mail($to, $subject, $message, $headers); //user mail function is commented
			
			mail($admin_email, $subject, $message, null, '-fshashank@mucheli.com'); //admin mail function is commented 
	    
	}
	
	//echo $this->input->post('payment_type'); exit;
	
	 $id = $this->session->userdata('id');  //combination_quantity
	 
	 $store_data = array(	
				'user_id'=>$id,
				'invoice_no'=>$rand_value,
				'select_date'=>$this->input->post('platter_date'),
				'timepicker_6'=>$time_pick,
				'platter_combination'=>$var5,
				'combination_quantity'=>$combination_quantity,
				'payment_type'=>$this->input->post('payment_type'),
				'cust_name'=>$this->input->post('cust_name'),
				'cust_phone'=>$this->input->post('cust_phone'),
				'cust_email'=>$this->input->post('cust_email'),
				'platter_date'=>$this->input->post('platter_date'),
				'payment_status'=>$val,
				'cust_country'=>$this->input->post('cust_country'),
				'grand_amount'=>$this->input->post('grand_amount'),
				'recorded_date'=>date('Y-m-d H:i:s')
		    );
			
                        $this->session->set_userdata($store_data);
			 $this->db->insert('opos_before_making_payment_table', $store_data );
                        /*$sql = 'SELECT booking_slot, event_name, event_type, no_of_guests FROM payment_orders WHERE user_id = "'. $this->session->userdata('user_id') .'"';
                        $result = $this->db->query($sql);*/
                        /*foreach($result as $row){
                            var_dump($row);
                        }*/
			
			 $user_id_no = $this->session->userdata('id');
			 
			 $this->db->delete('user_cart_table', array('user_id' => $user_id_no)); 
			 
			
	}
        
        public function platter_book_email(){
                        $email = $this->session->userdata('cust_email');   //cust_email  cust_name platter_combination timepicker_6 grand_amount
                        
                        $this->db->select('booking_slot,event_name,event_type, no_of_guests');
                        $this->db->from(' payment_orders');
                        $this->db->where('user_id', $this->session->userdata('user_id'));
                        $this->db->where('booking_date', $this->session->userdata('select_date'));
                        $result = $this->db->get();
                        foreach($result->result() as $row){
                             $event_slot = $row->booking_slot;
                             $event_name = $row->event_name;
                             $event_type = $row->event_type;
                             $event_guests = $row->no_of_guests;
                        }
                        
                        $platter_date = $this->input->post('platter_date');
                        $platter_date = explode("-", $platter_date);
                        $platter_date = $platter_date[2]."-".$platter_date[1]."-".$platter_date[0];
                        $combination_quantity = $this->session->userdata('combination_quantity');
                        
                        $id = $this->session->userdata('user_id');
                        
			$to      = $email; 
			$subject = 'Manly Deck Restaurant | Platter Order for Function – CASH AT RESTAURANT';  

			$message = ' 
			Dear '.$this->session->userdata('cust_name').',

                            Your Platter Order for '.$event_name.' on '.$this->session->userdata('platter_date').' is processed! Thank You for your Order!

                            You have chosen to pay Cash at the Restaurant. Please note that your Platter Order will be saved in our system till 7 days before the function date. You will need to pay the amount at the Restaurant not later than 7 days from the date of the function. Else, the order will only be taken up at the discretion of the Restaurant. So please ensure that you pay for your Platters well before that.

                            Function Details:
                            Function Date: '.$platter_date.'
                            Time of Day: '.$event_slot.'
                            Function Name: '.$event_name.'
                            Function Type: '.$event_type.'
                            No. of Guests: '.$event_guests.'

                            Platter Details:
                            Platters:
                            '.$this->session->userdata('platter_combination').'
                            Platter Quantity: '.$combination_quantity.'
                            Serve Time: '.$this->session->userdata('timepicker_6').'
                            Total (in $): '.$this->session->userdata('grand_amount').'

                            Contact Details:
                            Name: Shishir Raj
                            Email: shishir.18@gmail.com
                            Phone:  9886739718

                            For any queries or clarifications, please contact us at 33963824 or info@manlydeck.com.au .

                            Thank you once again!

                            
                            Regards,
                            Manly Deck Bar & Restaurant
                            '; 
			
			$headers = "From:shashank@mucheli.com" ;
			$headers .= "Reply-To: $email" ;
			$headers .= "Return-Path: $email" ;
			$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
			$headers .= 'MIME-Version: 1.0' . " " ;
			$headers .= 'Content-type: text/html; UTF-8' . " " ;
			
			//$headers = '' . "\r\n"; 
			
			mail($to, $subject, $message, NULL, '-fshashank@mucheli.com'); //user mail function is commented
        }
        
        public function platter_book_email_paypal(){
                $email = $this->session->userdata('cust_email');   //cust_email  cust_name platter_combination timepicker_6 grand_amount
                        
                        $this->db->select('booking_slot,event_name,event_type, no_of_guests');
                        $this->db->from(' payment_orders');
                        $this->db->where('user_id', $this->session->userdata('user_id'));
                        $this->db->where('booking_date', $this->session->userdata('select_date'));
                        $result = $this->db->get();
                        foreach($result->result() as $row){
                             $event_slot = $row->booking_slot;
                             $event_name = $row->event_name;
                             $event_type = $row->event_type;
                             $event_guests = $row->no_of_guests;
                        }
                        
                        $id = $this->session->userdata('user_id');
                        $event_date = $this->session->userdata('platter_date');
                        $combination_quantity = $this->session->userdata('combination_quantity');
                        
                        $event_date = explode('-',$event_date);
                        
                        $event_date = $event_date[2].'-'.$event_date[1].'-'.$event_date[0];
                        
			$to      = $email; 
			$subject = 'Manly Deck Restaurant | Platter Order for Function – PAID ONLINE';  

			$message = ' 
			Dear '.$this->session->userdata('cust_name').',

                            Your Platter Order for '.$event_name.' on '.$event_date.' is processed! Thank You for your Order!

                            Function Details:
                            Function Date: '.$event_date.'
                            Time of Day: '.$event_slot.'
                            Function Name: '.$event_name.'
                            Function Type: '.$event_type.'
                            No. of Guests: '.$event_guests.'

                            Platter Details:
                            Platters:
                            '.$this->session->userdata('platter_combination').'
                            Platter Quantity: '.$combination_quantity.'
                            Serve Time: '.$this->session->userdata('timepicker_6').'
                            Total (in $): '.$this->session->userdata('grand_amount').'

                            Contact Details:
                            Name: Shishir Raj
                            Email: shishir.18@gmail.com
                            Phone:  9886739718

                            For any queries or clarifications, please contact us at 33963824 or info@manlydeck.com.au .

                            Thank you once again!

                            
                            Regards,
                            Manly Deck Bar & Restaurant
                            '; 
			
			$headers = "From:shashank@mucheli.com" ;
			$headers .= "Reply-To: $email" ;
			$headers .= "Return-Path: $email" ;
			$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
			$headers .= 'MIME-Version: 1.0' . " " ;
			$headers .= 'Content-type: text/html; UTF-8' . " " ;
			
			//$headers = '' . "\r\n"; 
			
			mail($to, $subject, $message, NULL, '-fshashank@mucheli.com');
        }
        
       public function change_payment_status_platter(){
       $invoice_no =  $this->session->userdata('invoice_no'); 
       
       $data = array(
               'payment_status' => 1
            );
       
       $this->db->where('invoice_no', $invoice_no);
       $this->db->update('opos_before_making_payment_table', $data); 
     }
     
     public function delete_payment_invoice(){
          $invoice_no =  $this->session->userdata('invoice_no'); 
       
       $data = array(
               'invoice_no' => $invoice_no
            );
       
       $this->db->delete('opos_before_making_payment_table', $data); 
     }
                
		function get_user_dab_or_not(){
		
		$user_id = $this->session->userdata('id');
		
		$this->db->select('book_status');
		$this->db->from('payment_orders');
		$this->db->where('user_id', $user_id);
		
			$result = $this->db->get();
			
			if($result->num_rows())
			{
				return 1;
			}
			else{
				
				return 0;
			}	
			  
		}
		
		
	  function get_dab_booked_date(){
	 
	    $id =  $this->session->userdata('id');
	    $this->db->select('booking_date');
	    $this->db->from('payment_orders');
		$this->db->where('user_id',$id);
        $result = $this->db->get();
		return $result->result();  
	
	 }
	 
	 function get_sucecc_payments(){   //get the sucessfull transactions
	 
	    $id =  $this->session->userdata('id');
	    $this->db->from('opos_before_making_payment_table');
		$this->db->where('user_id',$id);
		$this->db->where('payment_status','1');
        $result = $this->db->get();
		return $result->result();  
	 
	 }
	 
	 function get_platter_price(){
	    $this->db->select('platter_amount');
	    $this->db->from('set_platter_price');
        $result = $this->db->get();
		return $result->result();  
	 }
	 
	 function save_platr_price(){
	 
		   $save_platter = array(	
					'platter_amount'=>$this->input->post('change_platter')
				);
		  
		     $this->db->update('set_platter_price',$save_platter);
	 }
	 
	 function get_dab_cart_dates_of_user(){ //to get the cart dates of the user for perticular date
	 
	    $id =  $this->session->userdata('id');
		$this->db->select('platt_dat');
		$this->db->from('user_cart_table');
		$this->db->where('user_id',$id);
        $result = $this->db->get();
		return $result->result(); 
	 
	 }
	 
	 function get_user_product_id(){  // to get the first product_id
	 
	    $this->db->select('cat_id');
		$this->db->from('online_platter_order_categories');
		$this->db->limit(1);
        $result = $this->db->get();
		return $result->result(); 
	 
	 }
	 
	 function send_automatic_emails(){
	 
	    $this->db->select('*');
		$this->db->from('payment_orders');
		$this->db->where('payment_status','0');
        $result = $this->db->get();
		$current_date = date("Y-m-d"); 
		
		foreach ($result->result() as $row)
			{
				$diff = strtotime($row->booking_date) - strtotime($current_date);
					  
			    $days = floor($diff/(3600*24));
				
				if($days == '7') {
				
            $email = $row->cust_email;
			$to      = $email; 
			$subject = 'Manly Deck Restaurant | Platter Order Booking';  
			
			
			$message = ' 
			Today is the Last day to book for the platters. 
			------------------------ 
			Name: '.$row->cust_name.' 
                        Email: '.$email.' 
			------------------------
                        
                        Regards,
                        Manly Deck Bar & Restaurant
                        '; 
			
			$headers = "From:manjunath@wvs.in" ;
			$headers .= "Reply-To: $email" ;
			$headers .= "Return-Path: $email" ;
			$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
			$headers .= 'MIME-Version: 1.0' . " " ;
			$headers .= 'Content-type: text/html; UTF-8' . " " ;
			
			//$headers = '' . "\r\n"; 
			
			mail($to, $subject, $message, null,'-fshashank@mucheli.com'); //mail function is commented
				
				}
				
				if($days == '8') {
				
            $email = $row->cust_email;
			$to      = $email; 
			$subject = 'Manly Deck Restaurant | Platter Order Booking';  
			
			
			$message = ' 
			You Have only one day to book for the Platters Hurry Up. 
			------------------------ 
			Name: '.$row->cust_name.' 
                        Email: '.$email.' 
			------------------------
                        

                        Regards,
                        Manly Deck Bar & Restaurant
                        '; 
			
			$headers = "From:manjunath@wvs.in" ;
			$headers .= "Reply-To: $email" ;
			$headers .= "Return-Path: $email" ;
			$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
			$headers .= 'MIME-Version: 1.0' . " " ;
			$headers .= 'Content-type: text/html; UTF-8' . " " ;
			
			mail($to, $subject, $message, null,'-fshashank@mucheli.com'); //mail function is commented
				
				}
				
				if($days == '10') {
				
            $email = $row->cust_email;
			$to      = $email; 
			$subject = 'Manly Deck Restaurant | Platter Order Booking';  
			
			
			$message = ' 
			You Have only Three days Left Over to book for the Platters Hurry Up. 
			------------------------ 
			Name: '.$row->cust_name.' 
                        Email: '.$email.' 
			------------------------
                        
                        Regards,
                        Manly Deck Bar & Restaurant
                        '; 
			
			$headers = "From:manjunath@wvs.in" ;
			$headers .= "Reply-To: $email" ;
			$headers .= "Return-Path: $email" ;
			$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
			$headers .= 'MIME-Version: 1.0' . " " ;
			$headers .= 'Content-type: text/html; UTF-8' . " " ;
			
			mail($to, $subject, $message, null,'-fshashank@mucheli.com'); //mail function is commented
				
				}
			   
			}
	 
	 }
	 
	  function update_platter_values_in_database($order_id) {
	  
	      $save_data = array(
				'payment_status'=>1,		
	    	);
		
		$this->db->where('invoice_no', $order_id);
		$this->db->update('opos_before_making_payment_table',$save_data);
	  
	  }
	  
	  
	  function get_platter_booking_client_Details($order_id){

	        $this->db->from('opos_before_making_payment_table');
			$this->db->where('invoice_no',$order_id);
			$result = $this->db->get();
			return $result->result();
	  
	  
	  }
	  
	  function get_platterno_bydate($platt_date, $book_slot) {
	  
	                $id =  $this->session->userdata('id');
			
			$this->db->select('*');

			$this->db->from('user_store_combinations');
		
			$this->db->where('user_id', $id);
		
			$total_sold = $this->db->count_all_results();
		  
		    return $total_sold;
	  
	  }
          
          public function automatic_mail_unpaid_platters(){
                $this->db->select('*');
		$this->db->from('opos_before_making_payment_table');
		$this->db->where('payment_status','0');
                $result = $this->db->get();
		$current_date = date("Y-m-d"); 
		
		foreach ($result->result() as $row)
			{
				$diff = strtotime($row->platter_date) - strtotime($current_date);
					  
			    $days = floor($diff/(3600*24));
				
                            $divide_platters = $row->platter_combination;
                            //$divide_quantity = explode("~", $divide_platters);
                            $divide_platters = str_replace("~",",",$divide_platters); 
                            
				if($days == '7') {
                                    $date = explode("-", $row->select_date);
                                    $date = $date[2]."-".$date[1]."-".$date[0];
                                    $email = $row->cust_email;
                                    $to      = $email; 
                                    $subject = 'Manly Deck Restaurant | Platter Order Payment – Last day for payment';  


                                    $message = ' 
                                    Dear '.$row->cust_name.',

                                        Greetings from Manly Deck Bar & Restaurant!
                                        This mail is a reminder regarding the payment for the Food Platter Order for your function on '.$date.'.

                                        You have chosen to pay Cash at the Restaurant while placing your order. As informed through our mails before this, today is the last day for you to make the payment for your Platter Order. You will need to make a Cash payment at the Restaurant today, else the order will only be taken up at the discretion of the Restaurant. So please ensure payment.


                                        Platter Details:
                                        Platters:
                                        '.$divide_platters.'
                                        Platter Quantity: '.$row->combination_quantity.'
                                        Serve Time: '.$row->timepicker_6.'
                                        Total (in $): '.$row->grand_amount.'

                                        Contact Details:
                                        Name: Shishir Raj
                                        Email: shishir.18@gmail.com
                                        Phone:  9886739718

                                        For any queries or clarifications, please contact us at 33963824 or info@manlydeck.com.au .

                                        Regards,
                                            Manly Deck Bar & Restaurant

                                    '; 

                                    $headers = "From:manjunath@wvs.in" ;
                                    $headers .= "Reply-To: $email" ;
                                    $headers .= "Return-Path: $email" ;
                                    $headers .= "X-Mailer: PHP/" . phpversion (). " " ;
                                    $headers .= 'MIME-Version: 1.0' . " " ;
                                    $headers .= 'Content-type: text/html; UTF-8' . " " ;

                                    //$headers = '' . "\r\n"; 

                                    mail($to, $subject, $message, null,'-fshashank@mucheli.com'); //mail function is commented
                                }
                                
                                if($days == '10'){
                                    $date = explode("-", $row->select_date);
                                    $date = $date[2]."-".$date[1]."-".$date[0];
                                    $email = $row->cust_email;
                                    $to      = $email; 
                                    
                                    $subject = 'Manly Deck Restaurant | Platter Order Payment – 3 days remaining';  


                                    $message = ' 
                                    Dear '.$row->cust_name.',

                                        Greetings from Manly Deck Bar & Restaurant!
                                        This mail is a reminder regarding the payment for the Food Platter Order for your function on '.$date.'.

                                        You have chosen to pay Cash at the Restaurant while placing your order. Please note that your Platter Order will be saved in our system till 7 days before the function date, which is 3 days from today. You will need to pay the amount at the Restaurant not later than 7 days from the date of the function. Else, the order will only be taken up at the discretion of the Restaurant. So please ensure that you pay for your Order well before that.


                                        Platter Details:
                                        Platters:
                                        '.$divide_platters.'
                                        Platter Quantity: '.$row->combination_quantity.'
                                        Serve Time: '.$row->timepicker_6.'
                                        Total (in $): '.$row->grand_amount.'

                                        Contact Details:
                                        Name: Shishir Raj
                                        Email: shishir.18@gmail.com
                                        Phone:  9886739718

                                        For any queries or clarifications, please contact us at 33963824 or info@manlydeck.com.au .

                                        Regards,
                                            Manly Deck Bar & Restaurant

                                    '; 

                                    $headers = "From:manjunath@wvs.in" ;
                                    $headers .= "Reply-To: $email" ;
                                    $headers .= "Return-Path: $email" ;
                                    $headers .= "X-Mailer: PHP/" . phpversion (). " " ;
                                    $headers .= 'MIME-Version: 1.0' . " " ;
                                    $headers .= 'Content-type: text/html; UTF-8' . " " ;

                                    //$headers = '' . "\r\n"; 

                                    mail($to, $subject, $message, null,'-fshashank@mucheli.com'); //mail function is commented                                   
                                    
                                }
          }
          }
}
?>