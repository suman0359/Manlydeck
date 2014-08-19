     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
<?php $this->load->view("top_bottom/menus"); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="display" id="example" style="border-collapse: separate;border-spacing: 1px;">
<tr><td><h3>PLATTER DELIVERY</h3></td><td style="float:right;margin-right: 2px; margin-top: 17px;"><?php echo '&nbsp;';?>
<?php echo anchor('User_platter_delivery/pgonpla_usr_acc','MY ACCOUNT');?></td>
</tr>
	
	<tr>
	<td style="text-align:center; border:0px solid red; width:68%">
	<?php foreach ($products as $product): ?>
	
	<?php echo form_open('User_platter_delivery/add_to_combination'); ?>
	
	<input type="hidden" name="product_id" value="<?php echo $product->product_id; ?>" />
	
	<input type="hidden" name="product_name" value="<?php echo $product->product_name; ?>" />
	
	<input type="hidden" name="product_image" value="<?php echo $product->product_image_url; ?>" />
	
	<div style="float:left; width:140px; height:153px; border:0px solid red;  margin: 10px 10px 74px;">
	<table>
	<tr> <img src="<?php echo base_url().'/images/'.$product->product_image_url?>" width="140px" height="110px" /></tr>
	<tr><td style="text-align:left; font-weight:bold">Name:<span style="font-weight:normal"><?php echo $product->product_name; ?></span></td></tr>
	<tr><td style="font-weight:bold; text-align:left">Category:<span style="font-weight:normal"><?php echo $product->product_category; ?></span></td></tr>
<tr><td><input value="Add To Combination" style="width:120px; font-size:12px" tabindex="4" type="submit" onclick="return check_combination();"></td></tr>
	</table>
	 </div>
	</form>
	<?php endforeach; ?>
	</td>
	<td valign="top"  style="text-align:center; border:1px solid #D0D0D0; width:33%">
	<table  style=" margin-left:3px;">
	<tr><th>USER CART VIEW</th></tr>
	<?php //echo form_open('User_online_platter_system/make_the_payment'); ?>
	<?php $i=1; ?>
	<?php foreach ($cart_data as $cart_data1): ?>
	<tr>
	<td>
	<div style="width:290px; border:0px solid red; height:50px;">
	
	<div style="float:left; width:12px; padding:4px;"><?php  echo $i; echo '.';?></div>
	<div style="float:left; width:160px; padding:4px;"><?php echo '{'; echo '';  echo $cart_data1->cart_combination; echo '}'; ?></div>
	<div style="float:left; width:20px; padding:4px;"><?php  echo $cart_data1->combination_price; ?></div>
	<div style="float:left; width:20px; padding:4px;">
	
	<input style="width:20px; !important"  type="text" name='quantity<?php echo $i ?>' value="<?php  echo $cart_data1->combination_quantity; ?>" />
	
	</div>
	<div style="float:right; width:20px; padding:4px;"><?php echo $cart_data1->combination_price * $cart_data1->combination_quantity  ?></div>
	</div>
	</td>
	</tr>
	<?php  $i++; endforeach;  ?>
	<tr> 
	<td>
	
<input type="button" value="Check Out" onclick="javascript:window.location.href='<?php echo base_url()."/index.php/User_platter_delivery/pduser_checkout_page" ?>'" />
	</td>
	</tr>
	</table>
	</td>
	</tr>
</table>
	
<!--START IMPLEMENTING THE COMBINATION AREA FOR THE USER -->
<br />
<div style="width:962px; border:1px solid #D0D0D0; min-height:160px; margin-top:30px; margin-bottom:5px;">
<h3 style="margin-top:9px; margin-left:10px;">COMBINATION AREA</h3>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="display" id="example" style="border-collapse: separate;border-spacing: 1px;">
	<tr></tr>
	<tr>
	<td style="text-align:center">
	
<?php echo form_open('User_platter_delivery/add_to_cart'); ?>
	
	<?php $i=1; foreach ($combination as $combination1):  ?>
		 
	 <?php
		  
		   if( $i >= '2'){ 
		    ?>   
					<div onLoad="check_combination();">
					<input type='hidden' name='cart_combination' id = 'cart_combination' value="<?php echo $i; ?>" />
					</div>
			<?php 
		   }
	  ?>
	<div style="float:left; width:70px; height:70px; border:0px solid red;  margin: 5px;;">
	<table>
<tr> <img src="<?php echo base_url().'/images/'.$combination1->product_image?>" width="70px" height="50px" /></tr>
<tr><?php echo $combination1->product_name; ?></tr>
	</table>
	 </div>
	<?php $i++; endforeach; 
	
	 if($i == '1'){
		   
		     ?>   
					<div>
					<input type='hidden' name='cart_check' id = 'cart_check' value="<?php echo $i; ?>" />
					</div>
			<?php 
		 
		  }	   
	
	 ?>
	</td>
</tr>
</table>
<div style="text-align:center; margin-bottom:8px; margin-top:3px;">
<input type="submit" name="add_to_cart" value="CLEAR CART"  /> 
<input type="submit" name="add_to_cart" value="ADD TO CART" onclick="return check_cart();"  /> 
</form>
</div>
 </div>

<!--END IMPLEMENTING THE COMBINATION AREA FOR THE USER -->		
	
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>