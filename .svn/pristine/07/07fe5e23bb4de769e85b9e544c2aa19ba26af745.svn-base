     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/platter_delivery_admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open_multipart('admin_platter_catering/pdsave_edited_product') ;
		
		if(isset($products_edit)){
		
				foreach($products_edit as $products_edit):
				
				endforeach;
		}
		 ?>
		<table  align="center" width="960px">
			<tr>
		<td width="320px;"></td>
		<td width="320px;">
		
		<table>
			<tbody>
			<tr>
				<th> </th>
				<?php  if(isset($products_edit)){ ?> 
				<th style="text-align:left;">EDIT PRODUCT</th>
				<?php }  else {?>
			    <th style="text-align:left;">ADD PRODUCT</th>
				<?php } ?>
			</tr>
		</table>
		
		<table>
			<tbody>
			<tr>
			<td>  </td>	
			</tr>
			<tr>
				<td class="profile-titles">Product Name</td>
				<input type="hidden" name="product_id" value="<?php if(isset($products_edit)) echo $products_edit->product_id; else echo '';?>" />
<td><input name="product_name"  id="product_name" value="<?php if(isset($products_edit)) echo $products_edit->product_name; else echo '';?>" tabindex="1" type="text" required="required"></td>
			</tr>
			
<tr>
<td class="profile-titles">Product Category</td>
<td><!--<input name="product_category"  id="product_category" value="<?php if(isset($products_edit)) echo $products_edit->product_category; else echo '';?>" tabindex="1" type="text" required="required">-->

<select name="product_category" style="width:184px; color:#0565BA;" required="required">

		<?php
		$res = mysql_query("SELECT cat_name FROM platter_deli_cater_categories");
		
	if(isset($products_edit)){
	
	echo "<option value=\"$products_edit->product_category\" selected> $products_edit->product_category </option>\n";
	
	}
	else{
	
	echo "<option  selected> Select Category </option>\n";
	
	}	
		
		while( $row = @mysql_fetch_array($res)) {
		
					 echo "<option value=\"$row[cat_name]\">$row[cat_name]</option>\n";
			 }
		?>

</td>
	</tr>
				
 <tr>
<td class="profile-titles">Product Price</td>
<td><input name="product_price"  id="product_price" value="<?php if(isset($products_edit)) echo $products_edit->product_price; else echo '';?>" tabindex="1" type="text" required="required"></td>
			</tr>	
			
 <tr>
<td class="profile-titles">Product Tax</td>
<td><input name="product_tax"  id="product_tax" value="<?php if(isset($products_edit)) echo $products_edit->product_tax; else echo '';?>" tabindex="1" type="text" required="required"></td>
</tr>						
			
 <tr>
<td class="profile-titles">Upload Document:</td>
<td><input type="file" name="file" id="file" value = "
 <?php if(isset($products_edit)){
         echo $products_edit->product_image_url;
  }  else{
  
     echo '';
  
  }?>"  style="width:160px; font-size::13px!important;"/></td>
</tr>							
			
<tr>
<td></td>
<td><?php if(isset($products_edit)){ ?> <img src="<?php echo base_url().'/images/'.$products_edit->product_image_url?>" width="60px" height="60px" />     <?php } ?>  </td>
</tr>			
			
			<tr>
				<td class="profile-titles">Product Description</td>
<td><textarea name="product_description" id="product_description" rows="3" cols="15"><?php if(isset($products_edit)) echo $products_edit->product_description; else echo '';?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					
					<input value="Save" style="width:100px; float:right" tabindex="4" type="submit">
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