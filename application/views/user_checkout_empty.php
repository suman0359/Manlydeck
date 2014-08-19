     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php //$this->load->view("top_bottom/menus"); ?> 
		<?php $this->load->view("top_bottom/user_default_menus"); ?>
		<br/>
		<?php echo validation_errors();	?>
		<?php echo form_open('User_online_platter_system/platter_payment_gateway'); ?>
		<table>
			<tr>
		<td width="320px;"></td>
		<td width="320px;">
		<table>
			<tbody>
			<tr>
				<div><h3>ONLINE PLATTER CHECKOUT PAGE<h3></div>
				
			</tr>
			<td>User Cart Is Empty</td>
			
		</table>
		</td>
		<td width="320px;"></td>
		</table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>