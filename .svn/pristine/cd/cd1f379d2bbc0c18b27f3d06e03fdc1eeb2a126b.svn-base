     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open('admin_deck_area_booking/insert_cust'); 
		
		//echo '<pre>'; print_r($book_slot_options);

		$book_slot = array(); $i=0;
		
		foreach ($book_slot_options as $book_slot_options1):

		    $book_slot[$i] = $book_slot_options1->booking_slot;
		 
		$i++; endforeach; 
		
		foreach ($day_amount as $day_amount1):
				 
					         $total_amount = $day_amount1->booking_amount;
				   
				      endforeach;
		
		?> <br />
		<table>
			<tr>
		<td width="22px"> </td>
		<td width="590px;">
                    
                    <?php $val_count = count($book_slot);
                                    if($val_count >= 2){
                                        $url = base_url()."index.php/user_deck_area_booking/nobookingslot";
                                        redirect($url);
                                    }
                     ?>
		<table>
			<tbody>
			<tr>
				<div class="page-title" style="margin-left:0px">Booking Details &nbsp;<span class="title-event-info">Fill in Function Details</span></div></div>
			</tr>
			<tr>
				<td class="profile-titles">Customer Name</td>
				<td><input name="name" value="" id="name" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Email</td>
				<td><input name="email" value="" id="email" tabindex="1" type="email" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Phone</td>
				<td><input name="phone" value="" id="phone" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">City</td>
				<td><input name="city" value="" id="city" tabindex="1" type="text" required="required"></td>
			</tr>
			
			<tr>
			<td class="profile-titles">Address</td>
			<td><textarea name="address" rows="3" cols="40" id="address" style="width:147px;" required="required"></textarea></td>
			</tr>
			
			
			<tr style="display:none">
		<td class="profile-titles">Country</td>
		       <td><select name="country" class="textform" id="country" required="required" style="width:151px;">
                <option value="Australia" selected="selected">Australia</option>
                </select>
				</td>
			</tr>
			
			<tr>
				<td class="profile-titles">Function Date</td>
                <td> <input name="booking_date" id="check_in121" value="<?php if(isset($cust_date)){  echo $cust_date;  } ?>" type="text" readonly="">
				</td>
			    </tr>
			
			<tr>
				<td class="profile-titles">Time of Day</td>
                                <td>     <?php $val_count = count($book_slot); ?>
				
				<select name="booking_slot_cust" id="booking_slot_cust" style="width:157px;" required="required">
				
					  <!--<option value="select_book_slot" selected="selected">Select Book Slot</option>--> 
					 
					   <?php if($val_count >= '2') { ?>
					       <option value="">Not Available</option>
					   <?php } ?>
					   
					   <?php if(($val_count == '1') && ($book_slot_options1->booking_slot == 'Dinner')) { ?>
					        <option value="lunch">Lunch (11:30 am to 3:30 pm)</option>
					   <?php } ?>
					   
					   <?php if(($val_count == '1') && ($book_slot_options1->booking_slot == 'Lunch')) { ?>
					       <option value="dinner">Dinner (4:30 pm to Midnight)</option>
					   <?php } ?>
					   
					   <?php if(($val_count == '') && ($book_slot_options1->booking_slot == '')) { ?>
					       
						   <option value="" selected="selected">Select Slot</option>
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
				<td class="profile-titles">Function Name</td>
				<td><input name="event_name" id="event_name"  tabindex="1" type="text" required="required" placeholder="e.g. Bob's Birthday"></td>
			</tr>
			
			<tr>
				<td class="profile-titles">Function Type</td>
				<td><input name="event_type" id="event_type"  tabindex="1" type="text" required="required" placeholder="e.g. 21st Birthday Party">
				<!--<span style="width:75px; font-weight:bold"> <a href="#" class="vtip" title="18th & 21st birthday will have $50/hour (min 4 hours) charge for security service.">                 <img src="<?php echo base_url();?>/images/tooltip-icon.jpg" height="26" width="26" style="padding-top: 2px; position: absolute;" /></a> </span>--></td>
			</tr>
			
			<tr>
				<td class="profile-titles">Expected Number of Guests</td>
				<td><input name="no_of_guests" id="no_of_guests"  tabindex="1" type="text" required="required" placeholder="e.g. 50-60"></td>
			</tr>
				
				<tr>
				<td></td>
				<td>
					
					<input value="Book" class="gray-btn-round" style="width:100px; float:right" tabindex="4" type="submit" onclick="return booking_slot_cust()">
				</td>
			</tr>	
		</tbody>
		</table>
		</td>
		<td width="100px;" style="border:0px solid #3399CC;">
		
		<?php //echo $calender; ?>
		
		
		</td>
		</tr>
		</table>
		</form>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>js/datepickr.js"></script>
<script type="text/javascript">	
new datepickr('check_in', {
'dateFormat': 'Y-m-d'
});
</script>

<?php $this->load->view("top_bottom/footer"); ?>