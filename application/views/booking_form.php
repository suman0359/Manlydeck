     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/user_default_menus"); ?>
		<?php  // $this->load->view("top_bottom/menus"); ?> 
		<?php echo validation_errors();	?>
		<?php echo form_open('user_deck_area_booking/pay_the_money'); ?>
		<table width="960px">
			<tr>
		<!--<td width="396px;" style="float:left"></td>-->
		<td width="320px;" style="padding-left:30px; float:left">
		
		<table>
		          <h3></h3>
                   <br>
			<tbody>
			<tr>
				<div class="page-title" style="margin-left:0px">Booking Details &nbsp; <span class="title-event-info">Fill in your Function Details</span></div>
			</tr>
		</table> <br />
		<table width="500px">
			<tbody>
			<tr>
			<td>  <?php   
			
			//echo $day_amount; exit;
			  
			   //$date = "$booking_date[1]/$booking_date[2]/$booking_date[0]"; 
					
					 foreach ($day_amount as $day_amount1):
				 
					         $total_amount = $day_amount1->booking_amount;
				   
				      endforeach;

					foreach ($logged_in_user_details as $user_detail):
				 
					              $name1  = $user_detail->name;	
								  $email1 = $user_detail->email;
								  $phone1 = $user_detail->phone;	
								  $city1  = $user_detail->city;	
								  $country1 = $user_detail->country;	 
								  $pin_code1 = 	$user_detail->pin_code;
								  $address1 = $user_detail->address;
				   
				      endforeach; 
								
						 /*foreach ($book_slot_options as $book_slot_options1):

				         endforeach;*/
						 
						 $book_slot = array(); $i=0;
		
                                                 foreach ($book_slot_options as $book_slot_options1):
					
								$book_slot[$i] = $book_slot_options1->booking_slot;
                                                                
							 
							$i++; endforeach;
						
						
						
						//echo '<pre>'; print_r($logged_in_user_details);
			?> </td>	
			</tr>
			<tr>

				<td class="profile-titles">Function Date</td>
                <td> <input name="booking_date" id="check_in121" value="<?php if(isset($cust_date)){  echo $cust_date;  } ?>" type="text" readonly="">
			</tr>
			
	        <tr>
				<td class="profile-titles">Time of Day</td>
				<td>
				
				<?php $val_count = count($book_slot);
                                    if($val_count >= 2){
                                        $url = base_url()."index.php/user_deck_area_booking/nobookingslot";
                                        redirect($url);
                                    }
                                ?>

				<select name="booking_slot1" id="booking_slot1" style="width:157px;">
					  <option value="select_book_slot" selected="selected">Select Slot</option> 
					  
					 
					 <!--<option value="select_book_slot" selected="selected">Select Book Slot</option>--> 
					 
					   <?php if($val_count >= '2') { ?>
					       <option value="">Not Available</option>
					   <?php } ?>
					   
					   <?php if(($val_count == '1') && ($book_slot_options1->booking_slot == 'Dinner')) { ?>
					        <option value="Lunch">Lunch (11:30 am to 3:30 pm)</option>
					   <?php } ?>
					   
					   <?php if(($val_count == '1') && ($book_slot_options1->booking_slot == 'Lunch')) { ?>
					       <option value="Dinner">Dinner (4:30 pm to Midnight)</option>
					   <?php } ?>
					   
					   <?php if(($val_count == '') && ($book_slot_options1->booking_slot == '')) { ?>
					       
						  <!-- <option value="" selected="selected">Select Book Slot</option>-->
						   <option value="Lunch">Lunch (11:30 am to 3:30 pm)</option>
						   <option value="Dinner">Dinner (4:30 pm to Midnight)</option>
					   <?php } ?>
					
					
					</select> 
				</td>
			   </tr>		
			
			
			
			<tr>
				<td class="profile-titles">Deck Area Rent (in $)</td>
				<td>
				
<input  style="background:#ECE9D8!important" name="booking_amount" value="<?php if(isset($total_amount)){  echo $total_amount;  } ?>" id="email" tabindex="1" type="text" required="required" readonly></td>
	<td>	
			</tr>
			
			<tr>
				<td class="profile-titles">Name</td>
				<td><input name="name"  id="name" value="<?php echo $name1; ?>" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Email</td>
				<td><input name="email" id="email" value="<?php echo $email1; ?>" tabindex="1" type="text" required="required" readonly=""></td>
			</tr>
			
			<tr>
				<td class="profile-titles">Phone</td>
	<td><input name="phone"  id="phone"  value="<?php echo $phone1; ?>" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">City</td>
				<td><input name="city"  id="city" value="<?php echo $city1; ?>"  tabindex="1" type="text" required="required"></td>
			</tr>
			
			<tr>
				<td class="profile-titles">Address</td>
				<td><textarea name="address" rows="3" cols="40"  id="address" style="width:165px;" required="required" >
				<?php echo $address1; ?>
				</textarea></td>
			</tr>
			
			
			<tr>
				<td class="profile-titles">Function Name</td>
				<td><input name="event_name" id="event_name"  tabindex="1" type="text" required="required" onclick="if(this.value=='Enter Event Name'){this.value=''}" placeholder="e.g. Bob's Birthday"></td>
			</tr>
			
			<tr>
				<td class="profile-titles">Function Type</td>
				<td><input name="event_type" id="event_type"  tabindex="1" type="text" required="required"  onclick="this.value = '';" placeholder="e.g. 21st Birthday Party">
				&nbsp; <span style="width:75px; font-weight:bold"> <a href="#" class="vtip" title="If your function is an 18th or 21st Birthday Party, you will have to pay a $50/hour (min 4 hours) charge for Security Service at the Restaurant in Cash.">                 <img src="<?php echo base_url();?>/images/tooltip-icon.jpg" height="26" width="26" style="padding-top: 2px; position: absolute;" /></a> </span>
				</td>
			</tr>
			
			<tr>
				<td class="profile-titles">Expected Number of Guests</td>
				<td><input name="no_of_guests" id="no_of_guests"  tabindex="1" type="text" required="required" onclick="this.value = '';" placeholder="e.g. 50-60"></td>
			</tr>
			
			<!--<tr>
					<td class="profile-titles">Event Description</td>
					<td><textarea id="remark_description" name="remark_description" required="required" style="width:141px;" cols="40" rows="3" name="address"></textarea> </td>
			</tr>-->
			
			
			<tr>
			<td class="profile-titles"  style="width:100px!important;">Payment Type</td>
			<td>  <input type="radio" name="payment_type" id="payment_type" value="Paypal" checked="checked">Paypal/Credit Card<br><!--<input type="radio" name="payment_type" id="payment_type1" value="cash_on_order">Cash On Order<br> -->  </td>
			</tr>
			
			
			
			<tr>
				
				<td>
					<br />	
<input class="gray-btn-round" value="Make Payment" style="width:150px; float:left;" tabindex="4" type="submit" 
onclick="return booking_slot_cust()">
				</td>
				<td>
				<br/>
				<?php echo anchor('user_deck_area_booking/show/'.date('Y').'/'.date('m'),'Cancel', 'class="gray-btn-round"');?>   
				</td> 
			</tr>	
		       
		  </tbody>
		</table>
		</td>
		<td width="320px;">	
						
<!--	<span style="color:#294C88; font-weight:bold">MANLY DECK </span><br />
		
		1/45 Cambridge Parade, <br />

        Manly, QLD-4179 (upstairs) <br />

        info@manlydeck.com.au <br />

        Phone : 33963824  <br />-->

		<!--<div style="margin-top:275px;  margin-right:495px; width:75px; font-weight:bold"> <a href="#" title="Please Enter The Event Name, Event Type & Expected Guests"> >>Tool Tip</a> </div>-->
		</td>
		</tr>
		</table>
		</form>
	</div>
</div>
<script type="text/javascript">
/*jQuery(document).ready(function() {
var $el = $('input[name=email]');
$el.attr('disabled', 'disabled');
});*/
    
</script>
<?php $this->load->view("top_bottom/footer"); ?>