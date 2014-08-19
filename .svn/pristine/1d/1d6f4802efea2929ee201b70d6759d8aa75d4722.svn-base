    <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php //$this->load->view("top_bottom/menus"); ?> 
		<?php $this->load->view("top_bottom/user_default_menus"); ?>
		<br/>
		<?php echo validation_errors();	?>
		<?php echo form_open('User_online_platter_system/platter_payment_gateway'); ?>
		
		<?php  

		$user_name = $this->session->userdata('id');
		
		if($book_slot == 'l')
		{
		
		   $food_type = 'lunch';
		}
		else {
		   $food_type = 'dinner';
		}
		
		$result_event = mysql_query("SELECT event_name FROM  payment_orders WHERE booking_date = '$platter_date' && booking_slot = '$food_type' && user_id = $user_name"); 
		
		$data = mysql_fetch_row($result_event);
		
		//echo '<pre>'; print_r($data);

		?> <!-- fetch event name from database -->
		
		
		<table>
			<tr>
		<td width="25px;"></td>
		<td width="312px;">
		<table>
			<tbody> 
			<tr>
<div class="page-title" style="margin-left:0px;">Platter Order Checkout</div><div style="float:right; margin-top: 45px;" class="go_back_to_modify_platters">
           <?php echo anchor('User_online_platter_system/add_to_cart/23/'.$platter_date.'/'.$book_slot,'Go Back to Platter Selection');?>			
			</div><br />
			<tr>
			
			<tr>  <br />
				<input type="hidden" name="platter_date" value="<?php echo $platter_date; ?>" />
				
				<input type="hidden" name="book_slot" value="<?php echo $book_slot; ?>" />
				
				<div  style="float:left; margin-top:22px; font-family: 'Droid Serif',serif; font-size: 16px;"><h4>Platter Order <span class="title-event-info" style="font-size:14px;">For  <?php echo $data[0];  ?> On 
				<?php echo '&nbsp'; 
	$value_result = $platter_date ; $date_pieces = explode("-", $value_result); $final_value1 = $date_pieces[2].'-'.$date_pieces[1].'-'.$date_pieces[0];
		echo $final_value1;?></span><h4></div>
				
			<tr>
			
			<table style=" margin-left:3px; padding-top:20px;" width="800px;">
	        
			<!--<tr> 
		     <th align="left">Pending Orders</th>
		   </tr>
			
			
			<tr> 
		     <th><div style="width:100%;"><div style="float:left">Platter Combinations</div> <div style="float:right"><?php echo anchor('User_online_platter_system/delete_all_platters/'.$platter_date.'/'.$book_slot,'Delete All Platters');?></div></div></th>
		   </tr> -->
	 
	        <tr>
			
			<td> <div style="width:115%;">
			<div style="width:6%; float:left; text-align:left; color:#000000; font-weight:bold; text-decoration:underline">Sr.No</div>
			<div style="width:28%; float:left; color:#000000; font-weight:bold; text-decoration:underline">Platters</div>
			<div style="width:10%; float:left; color:#000000; font-weight:bold; text-decoration:underline">Price (in $)</div>
			<div style="width:4%; float:left; color:#000000; font-weight:bold; text-decoration:underline">Qty</div>
			<div style="width:16%; float:left; color:#000000; font-weight:bold; text-decoration:underline">Total (in $)</div>
			<div style="width:8%; float:left; color:#000000; font-weight:bold; text-decoration:underline"></div>
			<div style="width:16%; float:left; color:#000000; font-weight:bold; text-decoration:underline"></div>
			<div style="width:23%; float:right; color:#000000; font-weight:bold; text-decoration:underline">Serve Platter at</div>
			 </div></td>
			
			</tr>
	
	
	<?php
	
	  foreach ($dab_booked_date as $dab_booked_date1):     
	
	          //$dab_booked_date1->booking_date;
	  
	  endforeach;
	  
	?>
	
	<?php
	
	  foreach ($check_booking_status_platter as $check_booking_status_platter1):  
	
	         $slot_value =  $check_booking_status_platter1->booking_slot;
	  
	  endforeach;
	  
	?>
	
	<?php $i=1; ?>
	<?php foreach ($cart_data as $cart_data1): ?>
	
	<input type="hidden" name="cart_id-<?php echo $i ?>" value="<?php  echo $cart_data1->cart_id; ?>"/>
	
	<input type="hidden" name="cart_combination-<?php echo $i ?>" value="<?php  echo $cart_data1->cart_combination; ?>"/>
	
	<input type="hidden" name="combination_price-<?php echo $i ?>" value="<?php  echo $cart_data1->combination_price; ?>"/>
	
	<input type="hidden" name="total_values" value="<?php  echo $i; ?>"/>
	
	
	<tr>
	<td>
	<div style="width:800px; border:0px solid red; height:50px;">
	
	<input type="hidden" name="combination_items-<?php echo $i ?>" value="<?php echo '{'; echo $cart_data1->cart_combination;echo '}'; ?>"/>

	<div style="float:left; width:38px; padding:4px;"><?php  echo $i; echo '.';?></div>
	<div style="float:left; width:266px; padding:4px;"><?php echo '{'; echo '';  echo $cart_data1->cart_combination; echo '}'; ?></div>
	
	<div style="float:left; width:74px; padding:4px;"><?php  echo $cart_data1->combination_price; ?></div>
	<div style="float:left; width:30px; padding:4px;">
	
<!--<input style="width:12px; !important"  type="text" name='quantity<?php echo $i ?>' value="<?php  $cart_data1->combination_quantity; ?>" />-->

<?php  echo $cart_data1->combination_quantity; ?>

<input type="hidden" name="combination_quantity-<?php echo $i ?>" value="<?php  echo $cart_data1->combination_quantity; ?>"/>

    <?php 
	
		   
	
	 ?>
	
	</div>
<div style="float:left; width:60px; padding:4px;">
<?php  

$value = $cart_data1->combination_price * $cart_data1->combination_quantity;
$result[$i] = $value;
echo $value; ?>

</div>
		<div style="float:left; width:108px; padding:4px;"><?php echo anchor('User_online_platter_system/edit_checkout_page_details1/'.$cart_data1->cart_id.'/'.$platter_date.'/'.$book_slot,'Modify Quantity');?></div>
			<div style="float:left; width:44px; padding:4px;"><?php echo anchor('User_online_platter_system/delete_checkout_page_details/'.$cart_data1->cart_id.'/'.$platter_date.'/'.$book_slot,'Delete',"onclick='javascript: return check_cart_delete();'");?></div>
	
<div style="float:right; width:86px; padding:4px;" class="time_selection">

<?php  if($book_slot == 'l') { ?>

<select name='timepicker_6[]' style="padding:0px!important;">
		 <option value='11:30' selected='selected'>11:30 AM</option>
		 <option value='12:00'>12:00 PM</option>
		 <option value='12:30'>12:30 PM</option>
		 <option value='1:00' >1:00 PM</option>
		 <option value='1:30' >1:30 PM</option>
		 <option value='2:00' >2:00 PM</option>
		 <option value='2:30' >2:30 PM</option>
		 <option value='3:00' >3:00 PM</option>
		 <option value='3:30' >3:30 PM</option>
</select>	

<?php  } ?>

<?php  if($book_slot == 'd') { ?>

<select name='timepicker_6[]' style="padding:0px!important;">
		  <option value='4:00' selected="selected">4:00 PM</option>
		 <option value='4:30'>4:30 PM</option>
		 <option value='5:00' >5:00 PM</option>
		 <option value='5:30' >5:30 PM</option>
		 <option value='6:00' >6:00 PM</option>
		 <option value='6:30' >6:30 PM</option>
		 <option value='7:00' >7:00 PM</option>
		 <option value='7:30' >7:30 PM</option>
		 <option value='8:00' >8:00 PM</option>
		 <option value='8:30' >8:30 PM</option>
		 <option value='9:00' >9:00 PM</option>
		 <option value='9:30' >9:30 PM</option>
		 <option value='10:00' >10:00 PM</option>
		 <option value='10:30' >10:30 PM</option>
		 <option value='11:00' >11:00 PM</option>
		 <option value='11:30' >11:30 PM</option>
</select>	

<?php  } ?>


<!-- end implementation from here booking time slots -->

	
	<!--<script type="text/javascript">
            $(document).ready(function() {
                $('#timepicker_6-<?php echo $i ;?>').timepicker({
                    showPeriod: true,
                    showLeadingZero: true
                });
            });
	</script>-->


</div>	
	</div>
	</td>
	</tr>
	<?php  $i++; endforeach;  ?>
	</table>			
	</tr>
	
	        <tr>
			<td></td>
			<td style="display:none" class="side">Select Date</td>
            <td style="display:none"> <input name="select_date1" id="select_date1" value= "<?php echo date("F, j, Y")?>"  type="text"></td>
			</tr>
			
			<input name="dab_date" id="dab_date" value="<?php if(isset($dab_booked_date1->booking_date)) { echo $dab_booked_date1->booking_date; }?>"  type="hidden">
				
			<?php foreach ($login_user_details as $login_user_details1): ?>
			 
			 <input type="hidden" name="cust_name" value="<?php echo $login_user_details1->name; ?>" />
			 
			 <input type="hidden" name="cust_phone" value="<?php echo $login_user_details1->phone; ?>" />
			 
			 <input type="hidden" name="cust_email" value="<?php echo $login_user_details1->email; ?>" />
			 
			 <input type="hidden" name="cust_addrs" value="<?php echo $login_user_details1->address; ?>" />
			 
			 <input type="hidden" name="cust_country" value="<?php echo $login_user_details1->country; ?>" />
			
			<?php  $i++; endforeach;  ?>
			
			
			 <input type="hidden" name="platter_date"  id="platter_date" value="<?php echo $platter_date; ?>" />
			
			<tr>
			<td></td>
			<td class="profile-titles"  style="background-color:#57A8DE; width:100px!important; height:30px;" colspan="2">Payment Type<span style="float:right"> <input type="radio" name="payment_type" id="payment_type" value="Paypal">Paypal/Credit Card&nbsp;&nbsp;<input type="radio" name="payment_type" id="payment_type1" value="cash_on_order">Cash at Restaurant<br> </span>  </td>
			</tr>	
				
            <tr>
			<td></td>
			<td class="profile-titles"  style="background-color:#57A8DE; width:100px!important; height:30px;" colspan="2">Grand Total<span style="float:right"><?php echo '<b>';  echo '$'; echo array_sum($result); echo '&nbsp;';  echo '</b>'; ?> </span> <input type="hidden" id="grand_amount" name="grand_amount" value = <?php echo array_sum($result);?> /> </td>
			</tr>				
				
				<tr>
				<td></td>
				
				<td>
					<br />
<input class="gray-btn-round" style="width:200px; float:right; margin-left:125px;" value="Make Payment" name=" Payment" onclick="return datediffer2();" tabindex="4" type="submit">
				</td>
		
			    </tr>
		        
		</tbody></table>
		</td>
		<td width="320px;">
		</td>
		</tr>
		</table>
		</form>
	</div>
</div>

<script type="text/javascript">
            $(document).ready(function() {
                $('#timepicker_6').timepicker({
                    showPeriod: true,
                    showLeadingZero: true
                });
            });
        </script>


<script type="text/javascript" src="<?php echo base_url();?>js/datepickr.js"></script>
<script type="text/javascript">	
new datepickr('select_date', {
'fullCurrentMonth': false,
'dateFormat': 'F, d, Y'
});
</script>
<?php $this->load->view("top_bottom/footer"); ?>