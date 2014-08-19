    <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php //$this->load->view("top_bottom/menus"); ?> <br/>
		<?php $this->load->view("top_bottom/user_default_menus"); ?>
		<?php echo form_open('User_online_platter_system/upcart_database1/'.$platter_date.'/'.$book_slot); ?>
		
		<?php foreach ($update_cart as $update_cart1): ?>
		
		
		<?php endforeach;  ?> <br/>
		<table width="950px">
		<tr>
               <div class="page-title">Modify Platter Quantity</div>						
		<tr>
		<tr>
		<td style="width:21px;"></td>
		<td style="width:535px;">
						<table>
							<tr> <br/>
								<div><h3>Platter Details<h3></div> 
															
	<input type="hidden" name="cart_id"  value="<?php echo $update_cart1->cart_id; ?>"/>							
							</tr>
							
							<tr>
							<td class="profile-titles">Platter Combination</td>
							<td><?php echo '{'; echo $update_cart1->cart_combination; echo '}'; ?></td>
							</tr>
							
							<tr>
							<td class="profile-titles">Quantity</td>
							<td>  <input type="text" style="width: 70px;" name="quantity"  value="<?php echo $update_cart1->combination_quantity; ?>"/>   </td>
							</tr>
							
							<tr>
							<td></td>
							<td>  <input type="submit" style="width: 70px;" name="Update"  value="Modify"/>   </td>
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