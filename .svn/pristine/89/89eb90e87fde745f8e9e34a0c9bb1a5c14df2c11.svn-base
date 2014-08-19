     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/menus"); ?> <br/>
		<?php echo form_open('User_platter_delivery/pdupcart_database'); ?>
		
		<?php foreach ($update_cart as $update_cart1): ?>
		
		
		<?php endforeach;  ?>
		
		<div style="text-align:center"><h3>PLATTER DELIVERY CHECKOUT PAGE<h3></div>
		<table width="950px">
		
		<tr>
		<td style="width:300px;"></td>
		<td style="width:300px;">
						<table>
							<tr>
								<div><h3>UPDATE CART<h3></div>
	<input type="hidden" name="cart_id"  value="<?php echo $update_cart1->cart_id; ?>"/>							
							</tr>
							
							<tr>
							<td class="side">Platter Combination</td>
							<td><?php echo '{'; echo $update_cart1->cart_combination; echo '}'; ?></td>
							</tr>
							
							<tr>
							<td class="side">Quantity</td>
							<td>  <input type="text" style="width: 70px;" name="quantity"  value="<?php echo $update_cart1->combination_quantity; ?>"/>   </td>
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