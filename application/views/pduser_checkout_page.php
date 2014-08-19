     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/menus"); ?> <br/>
		<?php echo validation_errors();	?>
		<?php echo form_open('User_platter_delivery/pdplatter_payment_gateway'); ?>
		<table>
			<tr>
		<td width="200px;"></td>
		<td width="400px;">
		<table>
			<tbody>
			<tr>
				<div><h3>PLATTER DELIVERY CHECKOUT PAGE<h3></div>
				
			<tr>
			
			<table style=" margin-left:3px;">
	       <tr> 
		   
		     <th>Platter Combinations</th>
		   </tr> 
	 
	<?php $i=1; $result = array();?>
	<?php foreach ($cart_data as $cart_data1): ?>
	<tr>
	<td>
	<div style="width:445px; border:0px solid red; height:50px;">
	
	<input type="hidden" name="cart_id-<?php echo $i ?>" value="<?php  echo $cart_data1->cart_id; ?>"/>
	
	<input type="hidden" name="cart_combination-<?php echo $i ?>" value="<?php  echo $cart_data1->cart_combination; ?>"/>
	
	<input type="hidden" name="combination_price-<?php echo $i ?>" value="<?php  echo $cart_data1->combination_price; ?>"/>
	
	<input type="hidden" name="total_values" value="<?php  echo $i; ?>"/>
	
	<div style="float:left; width:12px; padding:4px;"><?php  echo $i; echo '.';?></div>
	<div style="float:left; width:160px; padding:4px;"><?php echo '{'; echo '';  echo $cart_data1->cart_combination; echo '}'; ?></div>
	<div style="float:left; width:40px; padding:4px;"><?php  echo $cart_data1->combination_price; ?></div>
	<div style="float:left; width:40px; padding:4px;">
	
     <?php  echo $cart_data1->combination_quantity; ?>
	
	</div>
	<div style="float:left; width:40px; padding:4px;">
	
	<input type="hidden" name="combination_quantity-<?php echo $i ?>" value="<?php  echo $cart_data1->combination_quantity; ?>"/>
	
	<?php 
	
	 $value = $cart_data1->combination_price * $cart_data1->combination_quantity;
	
	
	$result[$i] = $value;
	
	echo $value;
	
	 ?>
	 
	 <input type="hidden" name="combination_total_price-<?php echo $i ?>" value="<?php  $value; ?>"/>
	
	</div>
		<div style="float:left; width:40px; padding:4px;"><?php echo anchor('User_platter_delivery/pdedit_checkout_page_details/'.$cart_data1->cart_id,'Update');?></div>
			<div style="float:right; width:40px; padding:4px;"><?php echo anchor('User_platter_delivery/pddelete_checkout_page_details/'.$cart_data1->cart_id,'Delete');?></div>
	</div>
	</td>
	<td></td>
	</tr>
	<?php  $i++; endforeach;  ?>
	
	
	        <tr>
			<td class="side" width="100px!important;">Select Date</td>
            <input type="hidden" name="select_date" />
			<td> <input name="select_date" id="select_date" value="2013-03-02"  type="text"></td>
			</tr>
	
	        <tr>
			<td class="side"  style="width:100px!important;">Select Time</td>
			<input type="hidden"  name="timepicker_6" />
            <td>  <input type="text" style="width: 70px;"  name="timepicker_6" id="timepicker_6" value="08:05 AM" />   </td>
			</tr>
					
	        <tr>
			<td class="side"  style="width:100px!important;">Shipment Type</td>
            <input type="hidden" name="shipment" />
			<td>  <input type="radio" name="shipment" value="Delivery" onclick="delivery()"> Delivery  <br>
            <input type="radio" name="shipment" value="pick_up" onclick="pickup()"> Pick Up<br>   </td>
			</tr>
			
			<tr>
			<td class="side"  style="width:100px!important;"><div id='shipment1' style="display:none;">Location</div></td>
					 <td> <div id='shipment' style="display:none;">
					      
    <select name='shipment_city' id='shipment_city' onChange="shipmentDetails(this);" >					  		
	<option selected>Select City</option>
   <?php foreach ($shipment_amount as $shipment_amount1):?>
	
<option value="<?php echo $shipment_amount1->location_name; ?>:<?php echo $shipment_amount1->shipping_amount; ?>:<?php echo array_sum($result); ?>"><?php echo $shipment_amount1->location_name; ?></option>
   
   <?php endforeach;?>  

</select>
										 					  
 </div>   
	</td>
  </tr>
			<?php foreach ($login_user_details as $login_user_details1): ?>
			 
			 <input type="hidden" name="cust_name" value="<?php echo $login_user_details1->name; ?>" />
			 
			 <input type="hidden" name="cust_phone" value="<?php echo $login_user_details1->phone; ?>" />
			 
			 <input type="hidden" name="cust_email" value="<?php echo $login_user_details1->email; ?>" />
			 
			 <input type="hidden" name="cust_addrs" value="<?php echo $login_user_details1->address; ?>" />
			 
			 <input type="hidden" name="cust_country" value="<?php echo $login_user_details1->country; ?>" />
			 
			 <tr>
			<td class="side"  style="width:100px!important;">Customer Shipping Details</td>
 <td><?php echo 'NAME::'; echo $login_user_details1->name;  echo '</br>'; echo 'PHONE::'; echo $login_user_details1->phone;  echo '</br>'; echo 'EMAIL::'; echo $login_user_details1->email; echo '</br>'; echo 'ADDRESS::'; echo $login_user_details1->address; echo '</br>'; echo 'COUNTRY::'; echo $login_user_details1->country;  ?> </td>
			</tr>
			
			<?php  $i++; endforeach;  ?>
			
			 <!--<tr>
			<td class="side"  style="width:100px!important;">Payment Type</td>
<td>  <input type="radio" name="payment_type" value="Paypal">Paypal <br><input type="radio" name="payment_type" value="cash_on_order">Cash On Order<br>   </td>
</tr>-->
	     
		 <tr>
			<td class="side"  style="width:100px!important;">Payment Type</td>
			<td>  <input type="radio" name="payment_type" id="payment_type" value="Paypal">Paypal <br><input type="radio" name="payment_type" id="payment_type1" value="cash_on_order">Cash On Order<br>   </td>
			</tr>
		 
		 
			 <tr>
			<td class="side"  style="width:100px!important;">Shipping City</td>
            <td>  <input type="text" id="ship_city" name="ship_city" value="" />  </td>
			</tr>
			
			 <tr>
			<td class="side"  style="width:100px!important;"><div style="display:none" id="shipment9">Total Amount</div></td>
<td>  <div style="display:none" id="shipment10"> <input type="text" name='total_amount' id="total_amount" value = <?php echo array_sum($result); ?>  />  </td>
			</tr>
			
			<td class="side"  style="width:100px!important;"><div id='shipment1' style="display:none;">Location</div></td>
					 <td> <div id='shipment' style="display:none;">
			
			
			
			<tr>
			<td class="side"  style="width:100px!important;"><div id='shipment3' style="display:none;">Shipping Amount</div></td>	
            <td> <div id='shipment4' style="display:none;"><input type="text" id="ship_amount" name="ship_amount" />   </td>
			</tr>
			
			
			 <tr>
			<td class="side"  style="width:100px!important;">Grand Total Amount</td>
            <td>  <input type="text" id="grand_amount" name="grand_amount" />  </td>
			</tr>
			
			
	       </table>			
          </tr>	
				</br>
				<tr>
				<td style="width:200px"></td>
				
				<td>
					
<input style="margin-left:10px; width:133px;" value="Make Payment" name="Payment" onclick="return datediffer();" tabindex="4" type="submit">
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