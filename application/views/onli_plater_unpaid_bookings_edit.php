     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/online_platter_admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open('admin_onli_plat_ord_sys/save_editcust_details1'); ?>
		
		<br />
		<div class="page-title" > Modify Platter</div>	<br /> <br />
		<table align="center" width="960px">
			<tr>
		<td width="20px;"></td>
		<td width="320px;">
		<table>
			<tbody>
			<tr>
			<td>  <?php   
			
					foreach ($edit_unpaid_bookings as $edit_unpaid_bookings1):
				 
				   
				      endforeach;
								
			?> </td>	
			</tr>

			<tr>
				<td class="profile-titles">Customer Name</td>
				<td>
<input type="hidden" name="pay_id" id="pay_id" value="<?php echo $edit_unpaid_bookings1->id; ?>" />		
				<input name="name1"  id="name" value="<?php echo $edit_unpaid_bookings1->cust_name; ?>" tabindex="1" type="text" readonly="readonly" required="required"></td>
			</tr>
			
			<tr>
	<td class="profile-titles">Phone</td>
<td><input name="phone"  id="phone"  value="<?php echo $edit_unpaid_bookings1->cust_phone; ?>" tabindex="1" type="text" required="required" readonly="readonly"></td>
			</tr>
			
			
			<tr>
				<td class="profile-titles">Email</td>
			<td><input name="email" id="email" value="<?php echo $edit_unpaid_bookings1->cust_email; ?>" tabindex="1" type="text" readonly="readonly"required="required"></td>
			</tr>
			
			<tr>
				<td class="profile-titles">Function Date</td>
				<td><input name="serve_date"  id="serve_date" value="<?php echo $edit_unpaid_bookings1->select_date; ?>"  tabindex="1" type="text" required="required" readonly="readonly"></td>
			</tr>
			
			<tr>
				<td class="profile-titles">Platter Order</td>
				<td><!--<input name="platter_combination"  id="platter_combination" value="<?php //echo $edit_unpaid_bookings1->platter_combination; ?>">-->
				
<textarea name="platter_combination"  id="platter_combination" rows="5" cols="55" tabindex="1" type="text" required="required"><?php echo $edit_unpaid_bookings1->platter_combination; ?></textarea>				
				</td>
			</tr>
			
			
			
			<tr>
				<td class="profile-titles">Serve Time</td>
				<td><input name="serve_time"  id="serve_time" value="<?php echo $edit_unpaid_bookings1->timepicker_6; ?>"  tabindex="1" type="text" required="required" readonly="readonly"></td>
			</tr>
			
			<tr>
				<td class="profile-titles">Payment</td>
				<td><input name="payment" id="payment" value="<?php echo $edit_unpaid_bookings1->grand_amount; ?>" tabindex="1" type="text" required="required" readonly="readonly"></td>
			</tr>
			
		<tr>
				<td class="profile-titles">Payment Status</td>
				<td><select name="payment_status" readonly="readonly">
					  <option value="<?php echo '1'; ?>">Paid</option>
					  <option value="<?php echo $edit_unpaid_bookings1->payment_status; ?>"  selected="selected">Unpaid</option>
					  </select> </td>
			   </tr>	
			
			
			<tr>
				<td colspan="2">
<span style="padding-left:10px"> <a href="<?php echo base_url();?>index.php/admin_onli_plat_ord_sys/view_unpaid_bookings"> <div class="gray-btn-round"> Cancel  </div> </a> </span>			                        
	<span style="padding-left:26px"> <input value="Save" style="width:100px;" tabindex="4" type="submit" class="gray-btn-round"> </span>
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