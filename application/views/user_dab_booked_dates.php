	     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/user_default_menus"); ?>
		<br />
		
		<table width="900px" cellpadding="3" cellspacing="0" class="display" id="table_styling" align="center">
	<thead>
	 
	   <tr>
	        <br />
	  </tr> 
	  
	   <tr>
	     <div class="page-title">Function Bookings &nbsp;<span class="title-event-info">Your Deck Area bookings & history</span></div>
		 
	  </tr>
	  
	  <tr  style=" background-color:#29ABE2; color:#FFFFFF; font-size:12px;"> 
        <th  width="11%" style="padding:2px;" class="booking-summary-header">Function Date</th>        
        <th  width="11%" style="padding:2px;" class="booking-summary-header">Time</th>
        <th  width="29%" class="booking-summary-header">Function Type</th>
		<th  width="29%" class="booking-summary-header">Function Name</th>
		<th  width="10%" class="booking-summary-header">No. of Guests</th>
		<th  width="10%" class="booking-summary-header">Food Platters</th>
      </tr>
    </thead>	
	<?php  
	     $i=0;
		 $result = array();
	     foreach ($get_user_cart_pending_orders as $get_user_cart_pending_orders1):
	
	       $result[$i] = $get_user_cart_pending_orders1->platt_dat;
		   
		 $i++; endforeach; 
	
	     foreach ($get_pro_cat_id as $get_pro_cat_id1):
		 
		    $category_id = $get_pro_cat_id1->cat_id;
		 
		 endforeach; 
	?>
	
	<?php foreach ($check_deck_booking_status as $check_deck_booking_status1):
	
				 if($check_deck_booking_status1->book_status){     
				 
					   $value_result = $check_deck_booking_status1->booking_date ;
					   
					   $date_pieces = explode("-", $value_result);
					   
					   $final_value = $date_pieces[2].'-'.$date_pieces[1].'-'.$date_pieces[0];	
				   
				    }		
	                  
					   if($check_deck_booking_status1->booking_slot == 'lunch') {
					   
					        $value = 'l';
					   }
					   else{
					   
					        $value = 'd';
					   }	
  
					 $today = date("Y-m-d");
		  
					  $diff = strtotime($check_deck_booking_status1->booking_date) - strtotime($today);
					  
					  $days = floor($diff/(3600*24));
					  
					  if($days >7) {

					     $url = "user_online_platter_system/user_checkout_page/".$check_deck_booking_status1->booking_date.'/'.$value;
					 
					   }
					   else{ 
					   
					      $url = "User_online_platter_system/view_booked_dates/";
					   }
	
	 ?>
	<input type="hidden" id="platter_date" name="platter_date" value="<?php echo $value_result;?>" />
	<tbody>					
	   <tr >						
		<td align="center" style="background: #FFFFFF;"><?php echo $final_value; ?></td>
<td style="text-align:center; background: #FFFFFF; font-size:14px; padding:3px;"><?php if($check_deck_booking_status1->booking_slot == 'lunch_dinner') { echo 'Luch & Dinner'; } else{ echo $check_deck_booking_status1->booking_slot;} ?></td>
<td align="center" style="background: #FFFFFF; padding:5px"><?php echo $check_deck_booking_status1->event_type; ?></td> 
<td align="center" style="background: #FFFFFF; padding:5px"><?php echo $check_deck_booking_status1->event_name; ?></td>	
<td align="center" style="background: #FFFFFF;"><?php echo $check_deck_booking_status1->no_of_guests; ?></td>		  
<td align="center">

<div class="blue-btn-round">
<?php 

       if (in_array($check_deck_booking_status1->booking_date , $result)) {   
	   
	      $today = date("Y-m-d");
		  
		  $diff = strtotime($check_deck_booking_status1->booking_date) - strtotime($today);
		  
		  $days = floor($diff/(3600*24));
		  
		  if($days >7) {
		      echo anchor('User_online_platter_system/category_products/'.$category_id.'/'.$check_deck_booking_status1->booking_date.'/'.$value,  'Order Platters');
	       } 
		   else{ 
		         echo '<span id="You_cannot_book_plat">';
		        echo anchor('User_online_platter_system/view_booked_dates/','Order Platters', array('title' => 'This Platter Order is for a function of past date or you are trying to order for a function that is within 7 days from today. For last minute Platter Orders please contact the restaurant directly at 33963824.','class' => 'vtip'));
				 echo '</span>';
		   }
	   
	   }
	   else{
	   
	     $today = date("Y-m-d");
		  
		  $diff = strtotime($check_deck_booking_status1->booking_date) - strtotime($today);
		  
		  $days = floor($diff/(3600*24));
		
		  if($days >7) {
		     
			 echo anchor('User_online_platter_system/user_view_categories/'.$check_deck_booking_status1->booking_date.'/'.$value,'Order Platters');
		  }
		  else{
		      
			  echo '<span id="You_cannot_book_plat">';
			  echo anchor('User_online_platter_system/view_booked_dates/','Order Platters', array('title' => 'This Platter Order is for a function of past date or you are trying to order for a function that is within 7 days from today. For last minute Platter Orders please contact the restaurant directly at 33963824.','class' => 'vtip'));
			  echo '</span>';
		  }
	   }

?> 
</div>
</td>
	  </tr>				
	</tbody>
	<?php endforeach;?>
</table>

<!--------------------------------------------------------------------------------------------------------------------------->
<br />

 <table>   

        <?php  if(empty($check_deck_booking_status1)){
		 
             ?>  <tr><div style="text-align:center; font-weight:bold; margin-top:20px">You have no Bookings currently!</div>  <?php
        
	       }  ?>

</table> <br>

<table>
<td> <tr align="center">	    	
<td width="200"></td>
<td width="188"></td>

<td width="350px" class="red-btn" align="center" ><?php echo anchor('user_deck_area_booking/show/'.date('Y').'/'.date('m'),'Book DECK AREA for NEW FUNCTION');?></td>
<td width="200"></td>
<td width="200"></td> 
</tr>
</table>
<br /><br />
		
		
		<!--<table width="500px" border="0" cellpadding="0" cellspacing="0" class="display" id="example" style="border-collapse: separate;border-spacing: 1px;" align="center">
	<thead>
	 
	 <tr bgcolor="#4F81BD" style="color:#FFFFFF; font-size:14px;">
        <div><h3>Bookings & Orders</h3></div>
      </tr>
	 
	  <tr bgcolor="#4F81BD" style="color:#FFFFFF; font-size:14px;">
        <th>Customer Name</th>
	    <th>Booked Slot</th>
		<th>Booked Date</th>        
      </tr>
    </thead>	
	<?php //$i=0; foreach ($dab_booked_date as $dab_booked_date1):
	
	//$url = "user_online_platter_system/user_checkout_page/".$dab_booked_date1->booking_date;
	
	?>
	<tbody>					
       <tr>						
		<td align="center" style="background: #A7BFDE;"><?php echo $dab_booked_date1->cust_name; ?></td>
<td align="center" style="background: #A7BFDE;"><?php// if($dab_booked_date1->booking_slot == 'lunch_dinner'){  echo 'Lunch & Dinner'; } else{  echo '<span style="text-transform: capitalize;">';// echo $dab_booked_date1->booking_slot ;  echo '</span>'; } ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo anchor($url, $dab_booked_date1->booking_date); ?></td>			
	  </tr>				
	</tbody>
	<?php //$i++; endforeach;?>
</table>-->
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>