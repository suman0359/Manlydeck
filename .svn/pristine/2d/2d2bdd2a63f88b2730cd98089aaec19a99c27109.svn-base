     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/platter_delivery_admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open('admin_platter_catering/save_editcust_details1'); ?>
		<table align="center" width="960px"> 
			<tr>
		<td width="320px;"></td>
		<td width="320px;">
		
		<table>
			<tbody>
			<tr>
				<th> </th>
				<th style="text-align:left;">EDIT UNPAID CUSTOMER</th>
			</tr>
		</table>
		<table>
			<tbody>
			<tr>
			<td>  <?php   
			
					foreach ($edit_unpaid_bookings as $edit_unpaid_bookings1):
				 
				   
				      endforeach;
								
			?> </td>	
			</tr>

			<tr>
				<td class="profile-titles">Name</td>
				<td>
<input type="hidden" name="pay_id" id="pay_id" value="<?php echo $edit_unpaid_bookings1->paid_book_id; ?>" />		
				<input name="name1"  id="name" value="<?php echo $edit_unpaid_bookings1->customer_name; ?>" tabindex="1" type="text" required="required"></td>
			</tr>
			
			<tr>
	<td class="profile-titles">Phone</td>
	<td><input name="phone"  id="phone"  value="<?php echo $edit_unpaid_bookings1->customer_phone; ?>" tabindex="1" type="text" required="required"></td>
			</tr>
			
			
			<tr>
				<td class="profile-titles">Email</td>
			<td><input name="email" id="email" value="<?php echo $edit_unpaid_bookings1->customer_email; ?>" tabindex="1" type="text" required="required"></td>
			</tr>
			
			
			<tr>
				<td class="profile-titles">Serve Time</td>
				<td><input name="serve_time"  id="serve_time" value="<?php echo $edit_unpaid_bookings1->customer_serve_time; ?>"  tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Platter Combination</td>
				<td><input name="platter_combination"  id="platter_combination" value="<?php echo $edit_unpaid_bookings1->customer_platter_combination; ?>" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Payment</td>
				<td><input name="payment" id="payment" value="<?php echo $edit_unpaid_bookings1->payment_amount; ?>" tabindex="1" type="text" required="required"></td>
			</tr>
			
		<tr>
				<td class="profile-titles">Status</td>
				<td><select name="payment_status">
					  <option value="<?php echo '1'; ?>">Paid</option>
					  <option value="<?php echo $edit_unpaid_bookings1->payment_status; ?>"  selected="selected">Unpaid</option>
					  </select> </td>
			   </tr>	
			
			
			<tr>
				<td></td>
				<td>
					
					<input value="Save" style="width:100px;" tabindex="4" type="submit">
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