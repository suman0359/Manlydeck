     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/platter_delivery_admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open('admin_platter_catering/pdsave_shipping');
		
		if(isset($shipping_edit)){
		
				foreach($shipping_edit as $shipping_edit1):
				
				endforeach;
		}
		 ?>
		<table align="center" width="960px">
			<tr>
		<td width="320px;"></td>
		<td width="320px;">
		
		<table>
			<tbody>
			<tr>
				<th> </th>
				<?php  if(isset($shipping_edit)){ ?> 
				<th style="text-align:left;">EDIT SHIPPING</th>
				<?php }  else {?>
			    <th style="text-align:left;">ADD SHIPPING</th>
				<?php } ?>
			</tr>
		</table>
		<table>
			<tbody>
			<tr>
			<td>  </td>	
			</tr>
			<tr>
		<td class="profile-titles">Location Name</td>
	<input type="hidden" name="ship_id" value="<?php if(isset($shipping_edit)) echo $shipping_edit1->ship_id; else echo '';?>" />
<td><input name="location_name"  id="location_name" value="<?php if(isset($shipping_edit)) echo $shipping_edit1->location_name; else echo '';?>" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Shipping Amount</td>
<td>
<input name="shipping_amount"  id="shipping_amount" value="<?php if(isset($shipping_edit)) echo $shipping_edit1->shipping_amount; else echo '';?>" tabindex="1" type="text" required="required">
</td>
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