     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open('user_deck_area_booking/check_available_dates'); ?> <br />
		<table>
			<tr>
		<td width="590px;" align="right">
		<table>
			<tbody>
			<tr>
				<h4 style="text-align:center; padding-left:53px;"><strong>Select Function Hall Booking Date</strong></h4>
			</tr>
			<tr>
				<th></th>
				<th style="text-align:left;"></th>
			</tr>
			
			
			<tr>
				<td class="profile-titles">Booking Date</td>
                <td> <input name="booking_date" id="check_in"  type="text" required="required">
				</td>
			    </tr>
			
			</tr>
				<tr>
				<td></td>
				<td>
					
					<input value="Book Function Hall" style="width:135px; float:right" tabindex="4" type="submit" onclick="return booking_slot()">
				</td>
			</tr>	
		</tbody>
		</table>
		</td>
		<td width="345px;" style="border:0px solid #3399CC;">
		
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