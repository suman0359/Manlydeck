     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php //$this->load->view("top_bottom/menus"); ?> <?php $this->load->view("top_bottom/user_default_menus"); ?><br/>
		<?php echo validation_errors();	?>
		<?php echo form_open('#'); 
                $function_name = $this->session->userdata('event_name');
                $function_date = $this->session->userdata('event_date');
                ?> 
		<table>
			<tr>
		<td width="100px;"></td>
		<td width="700px;">
		<table>
			<tbody>
			<tr>
				<div>
				<p style="font-size:15px; line-height:150%">PAYMENT FOR PLATTER ORDER HAS BEEN SUCCESSFULLY PROCESSED!</p>
		<p style="font-size:15px; line-height:150%">Your Platter Order for <?php echo $function_name; ?> on <?php echo $function_date; ?> is confirmed! You will receive a mail regarding the same.</p>
				</div>
			</tr>
			
		</tbody></table>
		</td>
		<td width="100px;">
		</td>
		</tr>
		</table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>