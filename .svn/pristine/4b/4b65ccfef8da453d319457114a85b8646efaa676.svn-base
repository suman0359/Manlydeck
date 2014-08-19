     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open('admin_deck_area_booking/check_out_customer'); ?> <br />
		<table>
			<tr>
		<td width="22px;"></td>
		<td width="550px;">
		
		<table>
			<tbody>
			<tr>
				<td colspan="2"> <div class="page-title" style="margin-left:0px">Booking Cancellation &nbsp;</div> </td>
			</tr>
		</table>
		<table>
			<tbody>
			<tr>
			<td>  <?php   				
					foreach ($checkout_cust as $checkout_cust_details):
				   
				        endforeach;
			?> </td>	
			</tr>
			
			<tr>
<input  name="book_id" value="<?php echo $checkout_cust_details->book_id; ?>" id="name" tabindex="1" type="hidden" required="required">
<td class="profile-titles">Function Date</td>
<td><input style="background:#ECE9D8!important"  name="booking_date" value="<?php echo $checkout_cust_details->booking_date; ?>" id="name" tabindex="1" type="text" required="required" readonly>
<input type="hidden" name="new_date" value="<?php echo $checkout_cust_details->booking_date; ?>" />
</td>
			</tr>
			
		<tr>
<td class="profile-titles">Name</td>
<td><input style="background:#ECE9D8!important"  name="cust_name" value="<?php echo $checkout_cust_details->cust_name; ?>" id="name" tabindex="1" type="text" required="required" readonly></td>
			</tr>	
			
<tr>
<td class="profile-titles">Email</td>
<td><input style="background:#ECE9D8!important"  name="cust_email" value="<?php echo $checkout_cust_details->cust_email; ?>" id="name" tabindex="1" type="text" required="required" readonly></td>
			</tr>
			
<tr>
<td class="profile-titles">Phone</td>
<td><input style="background:#ECE9D8!important"  name="cust_phone" value="<?php echo $checkout_cust_details->cust_phone; ?>" id="name" tabindex="1" type="text" required="required" readonly></td>
			</tr>

<tr>
<td class="profile-titles">City</td>
<td><input style="background:#ECE9D8!important"  name="cust_city" value="<?php echo $checkout_cust_details->cust_city; ?>" id="name" tabindex="1" type="text" required="required" readonly></td>
			</tr>	

<tr style="display:none">
<td class="profile-titles">Country</td>
<td><input style="background:#ECE9D8!important"  name="cust_country" value="<?php echo $checkout_cust_details->cust_country; ?>" id="name" tabindex="1" type="text" required="required" readonly></td>
</tr>

<tr>
<td class="profile-titles">Function Name</td>
<td><input style="background:#ECE9D8!important"  name="event_name" value="<?php echo $checkout_cust_details->event_name; ?>" id="name" tabindex="1" type="text" required="required" readonly></td>
</tr>

<tr>
<td class="profile-titles">Function Type</td>
<td><input style="background:#ECE9D8!important"  name="event_type" value="<?php echo $checkout_cust_details->event_type; ?>" id="name" tabindex="1" type="text" required="required" readonly></td>
</tr>

<tr>
<td class="profile-titles">No Of Guests</td>
<td><input style="background:#ECE9D8!important"  name="no_of_guests" value="<?php echo $checkout_cust_details->no_of_guests; ?>" id="name" tabindex="1" type="text" required="required" readonly></td>
</tr>
			


<tr>
<td class="profile-titles">Payment</td>
<td><input style="background:#ECE9D8!important"  name="booking_amount" value="<?php echo $checkout_cust_details->booking_amount; ?>" id="name" tabindex="1" type="text" required="required" readonly></td>
			</tr>			
					
			<tr>
				<td></td>
				<td>
					<br />
					<input value="Cancel Booking" class="gray-btn-round" style="float:right" tabindex="4" type="submit">
				</td>
			</tr>	
		         <tr>
		    		<td> </td>
				    <td>  </td>
			    </tr>
		    </tbody>
		</table>
		</td>
		<td width="320px;">
		</td>
		</tr>
		</table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>