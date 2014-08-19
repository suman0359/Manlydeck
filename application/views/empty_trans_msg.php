     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php //$this->load->view("top_bottom/menus"); ?> 
		<?php $this->load->view("top_bottom/user_default_menus"); ?>
		<br/>
		<?php echo validation_errors();	?>
		<?php echo form_open('User_online_platter_system/platter_payment_gateway'); ?>
		
		<table>
			<tbody>
			
			<tr align="center">
				<td><div class="page-title" style="text-align:center">Purchase History</div></td>
			</tr>
			
			<tr align="center">
				<td> <div style="font-size: 15px; line-height: 150%;padding-left: 57px;padding-top: 14px;text-align: center;">You have no Platter Orders currently!</div> </td>	
			</tr>
			
         </table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>