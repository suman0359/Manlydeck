	 <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/online_platter_admin_menus"); ?>
		<br />
	<div class="page-title" style="float:left"> UnPaid Platter Orders&nbsp; <span class="title-event-info">Listing of Platters Unpaid</span></div> 
		<div style="float:right; padding-top: 16px; padding-right: 30px; font-size:14px;"><?php echo $pagi_links; ?></div>		  <br /> <br />
		<table width="900px" id="table_styling" cellpadding="3" cellspacing="0" class="display" id="example" style="border-collapse: separate; border-spacing: 0px; margin-top:20px; padding:0px;" align="center">
	<thead>

	 
	   <tr bgcolor="#29ABE2" style="color:#FFFFFF; font-size:13px;">
           <tr bgcolor="#29ABE2" style="color:#FFFFFF; font-size:14px;">
           <th width="15px" class="booking-summary-header">Sl.No</th> 
	   <th class="booking-summary-header">Function Date</th> 
	   <th width="40%" class="booking-summary-header">Platter Order</th>
	   <th class="booking-summary-header">Serve Time</th>
	   <th class="booking-summary-header" width="20%">Customer Details</th> 
		<th class="booking-summary-header">Payment</th>
		<th class="booking-summary-header">Payment Type</th>
		<th class="booking-summary-header">Modify</th>
		<th class="booking-summary-header">Delete</th>
      </tr>
      </tr>
    </thead>	
	<?php  
	 $i=1;
	 foreach ($unpaid_bookings as $paid_bookings1):
	 
	   $value_result = $paid_bookings1->select_date; 
	   $date_pieces = explode("-", $value_result); 
	   $unpaid_value_date = $date_pieces[2].'-'.$date_pieces[1].'-'.$date_pieces[0];
	?>
	<tbody>					
       <tr>						
		<td align="center" style="background: #fff;"><?php echo $i; ?></td>
	 	<td align="center" style="background: #fff;"><?php echo $unpaid_value_date; ?></td>
		<td align="center" style="background: #fff;" width="40%">
		<?php 
		
		$platter_items = $paid_bookings1->platter_combination; 
		
		$platter_quantity = $paid_bookings1->combination_quantity; 
        
		$divide_platters = explode("{", $platter_items);
		
                $divide_platters = explode("}", $divide_platters[1]);
                
                $divide_platters = "";
		$divide_quantity = explode("~", $platter_items);
                $platter_items = str_replace("~",",",$platter_items); 
		
		//for($j=0; $j < count($divide_platters)-1; $j++) {
		
		   echo $platter_items.' - '.$platter_quantity.' Nos.'; echo '<br /><br />'; 
		
		//}
		?>
		</td>
		<td align="center" style="background: #fff;"><?php echo $paid_bookings1->timepicker_6; ?></td>
		<td align="left" style="background: #fff;" width="20%">Name:&nbsp;<?php echo $paid_bookings1->cust_name; ?> <br />
		                                           Email:&nbsp;<?php echo $paid_bookings1->cust_email; ?> <br />
							   Phone:&nbsp;<?php echo $paid_bookings1->cust_phone; ?> <br /> </td>
	    <td align="center" style="background: #fff;"><?php echo $paid_bookings1->grand_amount; ?></td>
		 <td align="center" style="background: #fff;"><?php if($paid_bookings1->payment_status){
		   echo 'Paypal'; }  else{
		      echo 'Cash On Order';
		   }
		   ?></td>
		
		   <td align="center" style="background: #fff;" class="platter_price_modify"><?php echo anchor('admin_onli_plat_ord_sys/edit_unpaid_cust/'.$paid_bookings1->id,'Modify');?></td>
		   <td align="center" style="background: #fff;" class="platter_price_modify"><?php echo anchor('admin_onli_plat_ord_sys/delete_the_customer1/'.$paid_bookings1->id,'Delete',"onclick='javascript: return unpaid_customer();'");?></td>	
	  </tr>				
	</tbody>
	<?php 
	
	$i++;
	endforeach;
	
	?>

<tr align="center"><div></div></tr>
</table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>