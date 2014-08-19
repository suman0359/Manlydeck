     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php //$this->load->view("top_bottom/menus"); ?> <br/>
		<?php $this->load->view("top_bottom/online_platter_admin_menus"); ?>
		<?php echo form_open('admin_onli_plat_ord_sys/save_platter_price'); ?>
		
		<?php foreach ($change_platter_price as $change_platter_price1): ?>
		
		
		<?php endforeach;  ?> <br />
		<table width="950px">
		<tr>
				<div style="padding-left:29px;"><h3>Manage Platter price<h3></div>
				
			<tr>
		<tr>
		<td style="width:300px;"></td>
		<td style="width:300px;">
						<table>
							<tr>
							<td class="side">Platter Price</td>
							<td>  <input type="text" style="width: 70px;" name="change_platter"  value="<?php echo $change_platter_price1->platter_amount; ?>"/>   </td>
							</tr>
							
							<tr>
							<td></td>
							<td>  <input type="submit" style="width: 70px;" name="Update"  value="Update"/>   </td>
							</tr>
							
							</table>
			</td>
			<td style="width:300px;"></td>
			</tr>
			</table>	
			
		</form>
	</div>
</div>

</script>
<?php $this->load->view("top_bottom/footer"); ?>