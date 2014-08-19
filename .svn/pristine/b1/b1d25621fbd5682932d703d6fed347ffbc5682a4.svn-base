     <?php $this->load->view("top_bottom/header");  $function_name = $this->uri->segment(2);  ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/admin_menus"); ?>
		<br />
	
	
	<?php if($function_name == 'payments_orders' || $function_name == 'insert_cust' || $function_name == 'check_out_customer' )  {?> 
	
	<div class="page-title">Current Bookings &nbsp;<span class="title-event-info">Already booked Functions</span></div>	<?php } else { ?>
	
	<div class="page-title">Past Bookings &nbsp;<span class="title-event-info">Bookings of past date</span></div> <?php } ?>
	
	
	 <br />
		<table width="900px" id="table_styling" style="margin:0px auto; margin-top:22px;" cellpadding="3"  cellspacing="0" >
	<thead>
     <tr>  <div style="float:left; margin-left:430px;"></div> <div style="float:right; margin-right:34px; font-size:14px;"> <?php echo $pagi_links; ?> </div></tr>
	    <tr bgcolor="#29ABE2" style="color:#FFFFFF; font-size:14px;">
	    <th width="3%" class="booking-summary-header">Sl.No</th> 
	    <th width="7%" class="booking-summary-header">Function Date</th> 
		<th width="15%" class="booking-summary-header">Function Type</th>
		<th width="9%" class="booking-summary-header">Function Name</th> 
		<th width="9%" class="booking-summary-header">Time(slot)</th>
		<th width="9%" class="booking-summary-header">No of Guests </th> 
		<th width="9%" class="booking-summary-header">Customer Name</th> 
		<th width="10%" class="booking-summary-header">Email</th>
		<th width="10%" class="booking-summary-header">Phone</th>
		<?php if($function_name == 'payments_orders' || $function_name == 'insert_cust'|| $function_name == 'check_out_customer') { ?> 
		<th width="5%" class="booking-summary-header">Booking</th>    
               <?php } ?>
		
	  </tr>
    </thead>	
	<?php  
	 $i=1;
	 foreach ($payment_order as $order_details):
	
	    $sub_dates = explode("-", $order_details->booking_date);
	
	   $value_result = $order_details->booking_date ; 
	   $date_pieces = explode("-", $value_result); 
	   $final_value_date = $date_pieces[2].'-'.$date_pieces[1].'-'.$date_pieces[0];
	?>
	<tbody>					
       <tr>						
	<td width="3%" align="center" style="background: #fff;"><?php echo $i; ?></td>
	<td  width="10%" align="center" style="background: #fff;"><?php echo $final_value_date; ?></td>
	<td width="10%" align="center" style="background: #fff;"><?php echo $order_details->event_type; ?></td>
	<td width="10%" align="center" style="background: #fff;"><?php echo $order_details->event_name; ?></td>
	<td width="10%" align="center" style="background: #fff;"><?php echo $order_details->booking_slot; ?></td>
	<td width="10%" align="center" style="background: #fff;"><?php echo $order_details->no_of_guests; ?></td>
	<td width="10%" align="center" style="background: #fff;"><?php echo $order_details->cust_name; ?></td>
	<td width="10%" align="center" width="10%" style="background: #fff;"><?php echo $order_details->cust_email; ?></td>	
	<td width="10%" align="center" style="background: #fff;"><?php echo $order_details->cust_phone; ?></td>	
	<?php if($function_name == 'payments_orders' || $function_name == 'insert_cust' || $function_name == 'check_out_customer') { ?> 
	<td align="center" width="5%" style="background: #fff;"><?php echo anchor('admin_deck_area_booking/change_status/'.$sub_dates[0].'/'.$sub_dates[1].'/'.$sub_dates[2],'Cancel','class="blue-btn-round2"');?></td>	 
	 <?php } ?>	
	  </tr>				
	</tbody>
	<?php 
	
	$i++;
	endforeach;
	
	?>
</table>
		</form>
<table>   

        <?php  //if(empty($payment_order)){
		 
             ?>  <!--<tr><div style="text-align:center; font-weight:bold; margin-top:20px">Your Current Bookings are empty</div> --> <?php
        
	       //}  ?>

</table> <br>		
		
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>