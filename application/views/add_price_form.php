     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
        <?php $this->load->view("top_bottom/admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open('admin_deck_area_booking/save_edit_price'); ?>
		<?php 
		    foreach ($day_details as $day_details):
			
			             $booking_day = $day_details->booking_day;
						 $booking_amount = $day_details->booking_amount;
			
			
			endforeach;
		   ?> <br />
		<div class="page-title">Price Manager &nbsp;</div> 
		<table align="center" width="960px">
			<input type="hidden" name="id" value="<?php echo  $day_details->booking_id; ?>"
			<tr>
		<td width="28px;"></td>
		<td width="419px;">
		<table>
			<tbody>
			<tr>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td class="profile-titles">Day of Week</td>
	<td><input name="add_day" style="background:#ECE9D8!important" value="<?php echo $booking_day;  ?>" tabindex="1" type="text" required="required" readonly=""></td>
			</tr>
			<tr>
				<td class="profile-titles">Price</td>
				<td><input name="add_price" value="<?php echo $booking_amount; ?>" tabindex="2" type="text" required="required"></td>
			</tr>
			<tr>
				<td><input value="Save" class="gray-btn-round" style="width:100px;" tabindex="4" type="submit"> </td>
				<td><?php echo anchor('admin_deck_area_booking/price_manager','Cancel','class="gray-btn-round"');?> </td>
			</tr>	
		
		      
		         <tr>
		    		<td> </td>
				    <td>  </td>
			    </tr>
		        
				 <tr>
		    		<td>  </td>
				    <td>  </td>
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
<?php $this->load->view("top_bottom/footer"); ?>