<?php

class Model_platter_delivery_catering extends CI_Model 
{
	
	function get_all()
	{
		$this->db->from('platter_deli_cater_categories');
		$this->db->order_by("cat_id", "asc");
		$result = $this->db->get();
		return $result->result();		
	}
	
	function get_shipment_amount(){
	
	    $this->db->from('pd_shipping_mgmt_table');
		$this->db->order_by("ship_id", "asc");
		$result = $this->db->get();
		return $result->result();	
	
	}
	
	//query to save the edited category
	
	function save_edited_category(){
	
	  $cat_id = $this->input->post('cat_id');
	  
	  $updated_data = array(
				'cat_name'=>$this->input->post('category_name'),
				'cat_description'=>$this->input->post('category_description'),
				'cat_entered_date'=>date('Y-m-d H:i:s')
		);
	  
	  $this->db->where('cat_id', $cat_id);
	  $this->db->update('platter_deli_cater_categories',$updated_data);
	
	}
	
	function save_edited_shipping(){
	
	   $ship_id = $this->input->post('ship_id');
	  
	  $updated_data = array(
				'location_name'=>$this->input->post('location_name'),
				'shipping_amount'=>$this->input->post('shipping_amount'),
				'record_entry_date'=>date('Y-m-d H:i:s')
		);
	  
	  $this->db->where('ship_id', $ship_id);
	  $this->db->update('pd_shipping_mgmt_table',$updated_data);
	
	
	}
	
	function save_shipping(){
	
	 $updated_data = array(
				'location_name'=>$this->input->post('location_name'),
				'shipping_amount'=>$this->input->post('shipping_amount'),
				'record_entry_date'=>date('Y-m-d H:i:s')
		);
		
		$this->db->insert('pd_shipping_mgmt_table', $updated_data );
	
	}
		
	function get_all_shipping()
	{
		$this->db->from('pd_shipping_mgmt_table');
		$this->db->order_by("ship_id", "asc");
		$result = $this->db->get();
		return $result->result();		
	}
	
	
	function pdget_all_products()
	{
		$this->db->from('pd_platter_delivery_products');
		$this->db->order_by("product_id", "asc");
		$result = $this->db->get();
		return $result->result();		
	}
	
	function delete_category($cat_id){
	
	    $this->db->delete('platter_deli_cater_categories', array('cat_id' => $cat_id)); 
	}
	
	function delete_shipping($ship_id){
	
	    $this->db->delete('pd_shipping_mgmt_table', array('ship_id' => $ship_id)); 
	}
	
	
	function edit_category($cat_id){
	
	    $this->db->from('platter_deli_cater_categories');
		$this->db->where('cat_id',$cat_id);
		$result = $this->db->get();
		return $result->result();
	}
	
	function get_specific_shipping($ship_id){
	
	    $this->db->from('pd_shipping_mgmt_table');
		$this->db->where('ship_id',$ship_id);
		$result = $this->db->get();
		return $result->result();
	
	}
	
	function edit_product($pro_id){
	
	 $this->db->from('pd_platter_delivery_products');
		$this->db->where('product_id',$pro_id);
		$result = $this->db->get();
		return $result->result();
	}
	
	
	function save_category(){
	
	 $category_add = array(
				'cat_name'=>$this->input->post('category_name'),
				'cat_description'=>$this->input->post('category_description'),
				'cat_entered_date'=>date('Y-m-d H:i:s')
		);
		
		$this->db->insert('platter_deli_cater_categories', $category_add );
	}
	
	
	
	
	function save_edited_image($file){
	
	     $product_id = $this->input->post('product_id');
	     $updated_data = array(
				'product_image_url'=>$file
		     );
	
	   $this->db->where('product_id', $product_id);
	  $this->db->update('pd_platter_delivery_products',$updated_data);
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
	  $this->db->update('pd_platter_delivery_products',$updated_data);
	
	}
	
	
	
	
	function save_new_products($file){
	
	  if(!$file)
          {
              $file = "NO Image Uploaded.";              
          }
            
            $updated_data = array(
				
				'product_name'=>$this->input->post('product_name'),
				'product_category'=>$this->input->post('product_category'),
				'product_price'=>$this->input->post('product_price'),
				'product_tax'=>$this->input->post('product_tax'),
				'product_image_url'=>$file,
				'product_description'=>$this->input->post('product_description'),
				'product_recorded_date'=>date('Y-m-d H:i:s')
		);
	  
	  $this->db->insert('pd_platter_delivery_products', $updated_data );
	
	}
	
	function delete_product($pro_id) {
	
	    $this->db->delete('pd_platter_delivery_products', array('product_id' => $pro_id)); 
	
	}
	
	
	function store_user_combination(){
	
	  $this->input->post('product_id');
	  
	  $this->input->post('product_name');
	  
	  $this->session->userdata('id');
	  
	   $store_combination = array(
	   
				'product_id'=>$this->input->post('product_id'),
				'product_image'=>$this->input->post('product_image'),
				'product_name'=>$this->input->post('product_name'),
				'user_id'=> $this->session->userdata('id')
				
		    );
	
	  $this->db->insert('pduser_store_combinations', $store_combination );
	}
	
	
	function get_all_combinations(){
	
	   $user_session_id = $this->session->userdata('id');
	   
	    $this->db->from('pduser_store_combinations');
		$this->db->where('user_id', $user_session_id);
		$result = $this->db->get();
		return $result->result();
	
	}
	
	function get_all_the_combinations(){
	
	   $user_session_id = $this->session->userdata('id');
	   
	    $this->db->select('product_name');
	    $this->db->from('pduser_store_combinations');
		$this->db->where('user_id', $user_session_id);
		$result = $this->db->get();
		return $result->result();
	
	}
	
	function remove_the_combination(){
	
	  $user_id = $this->session->userdata('id');
	  
	    $this->db->delete('pduser_store_combinations', array('user_id' => $user_id)); 
	
	}
	
	function store_cart_in_db($var){
	
		 $user_id = $this->session->userdata('id');
		 
		 $store_cart = array(
				'cart_combination'=>$var,
				'combination_price'=> 80,
				'combination_quantity'=> 1,
				'user_id'=> $this->session->userdata('id')	
		    );
			
			 $this->db->insert('user_cart_delivery_table', $store_cart );
			 
			  $this->db->delete('pduser_store_combinations', array('user_id' => $user_id)); 	 
			 
	}
	
	function display_cart_options(){
	
	   $user_session_id = $this->session->userdata('id');  
	    $this->db->from('user_cart_delivery_table');
		$this->db->where('user_id', $user_session_id);
		$result = $this->db->get();
		return $result->result();
	
	}
	
	function view_paid_bookings(){
	
		$this->db->from('user_platter_delivery_catering_paid_bookings');
			$this->db->where('payment_status', '1');
			$result = $this->db->get();
			return $result->result();
	}
	
	function view_unpaid_bookings(){
	    
		$this->db->from('user_platter_delivery_catering_paid_bookings');
			$this->db->where('payment_status', '0');
			$result = $this->db->get();
			return $result->result();
	
	
	}
	
	
	function remove_combination_from_cart($cart_id){
		
		  $this->db->delete('user_cart_delivery_table', array('cart_id' => $cart_id));  
	
	}
	
	function edit_combination_from_cart(){
	
	 
	 $cart_id = $this->input->post('cart_id');
	 
	 $store_cart = array(
				
				'combination_quantity'=> $this->input->post('quantity')
		    );
	  
	  
	  $this->db->where('cart_id', $cart_id);
	  $this->db->update('user_cart_delivery_table',$store_cart);
	
	}
	
	function update_cart_details($cart_id){
	
		$this->db->from('user_cart_delivery_table');
			$this->db->where('cart_id', $cart_id);
			$result = $this->db->get();
			return $result->result();
	
	}
	
	function delete_paidbooking($paid_book_id){
	
	
	  $this->db->delete('user_platter_delivery_catering_paid_bookings', array('paid_book_id' => $paid_book_id)); 
	
	}
	
	function edit_paidbooking($paid_book_id){
	
	$this->db->from('user_platter_delivery_catering_paid_bookings');
			$this->db->where('payment_status', '1');
			$this->db->where('paid_book_id', $paid_book_id);
			$result = $this->db->get();
			return $result->result();
	
	}
	
   function edit_unpaidbooking($paid_book_id){
	
	$this->db->from('user_platter_delivery_catering_paid_bookings');
			$this->db->where('payment_status', '0');
			$this->db->where('paid_book_id', $paid_book_id);
			$result = $this->db->get();
			return $result->result();
	
	}
	
	
   function save_edited_paid_customer(){
   
     $pay_id = $this->input->post('pay_id');
	  
	  $updated_data = array(	
				'customer_name'=>$this->input->post('name1'),
				'customer_phone'=>$this->input->post('phone'),
				'customer_email'=>$this->input->post('email'),
				'customer_serve_time'=>$this->input->post('serve_time'),
				'customer_platter_combination'=>$this->input->post('platter_combination'), 
				'payment_amount'=>$this->input->post('payment'),
				'payment_status'=>$this->input->post('payment_status'),
		 		'record_entry_date'=>date('Y-m-d H:i:s')
		    );
	  
	 
	 $this->db->where('paid_book_id', $pay_id);
	 $this->db->update('user_platter_delivery_catering_paid_bookings',$updated_data);
   
   }
   
  	function get_all_delivery_product()
	{
		$this->db->from('pd_platter_delivery_products');
		$this->db->order_by("product_id", "asc");
		$result = $this->db->get();
		return $result->result();		
	}
	
	function bf_py_str_val_indb($rand_value){
	
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
	
	 $this->db->update('user_cart_delivery_table',$invoice_data);
	
	 }
	
	 $store_data = array(	
				'invoice_no'=>$rand_value,
				'buy_date'=>$this->input->post('select_date'),
				'buy_time'=>$this->input->post('timepicker_6'),
				'shipping_type'=>$this->input->post('shipment'),
				'shipping_city'=>$this->input->post('shipment_city'),
				'cust_name'=>$this->input->post('cust_name'), 
				'cust_phone'=>$this->input->post('cust_phone'),
				'cust_email'=>$this->input->post('cust_email'),
				'cust_address'=>$this->input->post('cust_addrs'),
				'cust_country'=>$this->input->post('cust_country'),
				'payment_typr'=>$this->input->post('payment_type'),
				'total_amount'=>$this->input->post('total_amount'),
				'shipping_amount'=>$this->input->post('ship_amount'),
				'grand_total'=>$this->input->post('grand_amount'),
				'record_entry_date'=>date('Y-m-d H:i:s')
		    );
	
	              $this->db->insert('podc_before_making_payment_table', $store_data );
	
	}
	
}

?>