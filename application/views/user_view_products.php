    <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
<?php //$this->load->view("top_bottom/menus"); ?>
<?php $this->load->view("top_bottom/user_default_menus"); 

           $id = $this->session->userdata('id');
		   
		    $this->db->from('payment_orders');
			$this->db->where('booking_date', $platter_date);
			$this->db->where('user_id',$id);
			$result = $this->db->get();
			
			foreach($result->result() as $row){ 
			
			  $event_name = $row->event_name;
			
			}
?>


<table width="960px" border="0" cellpadding="0" cellspacing="0" class="display" id="example" style="border-collapse: separate;border-spacing: 1px;" align="center"> <br />
<tr><td class="page-title" style="margin-left:10px;">Platter Selection <span class="title-event-info"> For <?php if(isset($event_name)){ echo $event_name;} else { echo '';  }?> On

<input type="hidden" name="event_name" value="<?php echo $event_name; $this->session->set_userdata('event_name',$event_name);?>" />

<?php $value_result = $platter_date ; $date_pieces = explode("-", $value_result); $final_value1 = $date_pieces[2].'-'.$date_pieces[1].'-'.$date_pieces[0];?>
<?php echo $final_value1; $this->session->set_userdata('event_date',$final_value1);?></td><td><?php echo '&nbsp;';?>


     <?php //echo anchor('User_online_platter_system/onpla_usr_acc/'.$platter_date,'My Account');?> </span></td>
</tr>

<tr><td style="padding-left:10px; padding-top:10px;" width="40%"><div class="category"><h3 style="color:#FFFFFF; font-size:19px; padding-left:10px">ITEMS for: <?php echo '&nbsp;'; if(isset($category_name)) { echo "<span style='text-transform: uppercase;'>"; echo $category_name; echo "</span>"; } ?> PLATTERS </h3></div><div style="float:right; padding-right:12px; class="booking_slot_cust">

<input type="hidden" name="category_name" value="<?php if(isset($category_name))  echo $category_name;   ?>"/> 
<span class="switchto"><br />
<?php if($category_name == 'hot'){ ?> <input type="hidden" name="cn" id="cn" value='24'/><input type="hidden" name="cn1" id="cn1" value='23'/><?php   echo anchor('User_online_platter_system/category_products/24/'.$platter_date.'/'.$book_slot,'See ITEMS for COLD PLATTERS'); } 

else { ?> <input type="hidden" name="cn1" id="cn1" value='23'/><input type="hidden" name="cn" id="cn" value='24'/><?php echo anchor('User_online_platter_system/category_products/23/'.$platter_date.'/'.$book_slot,'See ITEMS for HOT PLATTERS'); } ?></span><div style="border-bottom:1px dotted #F7931E;">

</div></div></td><td></td>
</tr>
	<tr>
	<td style="text-align:center; border:0px solid red; width:68%" valign="top">
	<div align="justify" style="padding:10px 10px; font-size:14px; line-height:150%;"> You can order any number of Hot & Cold Platters, each Platter having a combination of up to 5 items. Each Platter feeds about 8-10 people! <br /> <br /> Select Items for your Platter from our listing and then add each Platter to the Cart. Once you have all the Platters you need, proceed to order. Happy ordering!! </div> <br /> <br />
	
	
	<?php foreach ($products as $product): $i = 0; $attributes = array('name' => 'product_form');?>
	
	
	<?php echo form_open('User_online_platter_system/add_to_combination/'.$product->cat_id.'/'.$platter_date.'/'.$book_slot, $attributes); ?>
	
	<input type="hidden" name="product_id" value="<?php echo $product->product_id; ?>" />
	
	<input type="hidden" name="product_name" value="<?php echo $product->product_name; ?>" />
	
	<input type="hidden" name="product_image" value="<?php echo $product->product_image_url; ?>" />
	
	<input type="hidden" name="category_name" id="category_name-<?php echo $i; ?>" value="<?php echo $category_name;?>" />
	
	<input type="hidden" name="booked_date" id="booked_date" value=<?php echo $platter_date; ?> />
	
	<input type="hidden" name="category[]" id="category[]" value="<?php echo $category_name;?>" />
	
	<div style="float:left; width:140px; height:153px; border:0px solid red;  margin: -10px 10px 74px;">
	<table align="center">
	<tr> <img src="<?php echo base_url().'/images/'.$product->product_image_url?>" width="140px" height="110px" /></tr>
	<tr><td style="text-align:center; font-weight:bold"><span style="font-weight:normal"><?php echo $product->product_name; ?></span></td></tr>
    <tr><td>
	<input value="ADD TO PLATTER" class="gray-btn" style="width:132px; font-size:12px" tabindex="4" type="submit" 
	id="check_combinatioon" onclick="return check_combination();"></td></tr>
	<input type="hidden" name="product_no" id="product_no-<?php echo $i; ?>" value="<?php echo $i; ?>" />
	</table>
	 </div> 
	</form>
	<?php endforeach; $i++;?>
	</td>
	<td valign="top"  style="text-align:center; border:1px solid #D0D0D0; width:33%; background:#EFEFEF"> <br />
<!-------------------------------------START------------------------------------------------------------------------------>		
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="display" id="example" style="border-collapse: separate; border-spacing: 1px;">
	<tr></tr>
	<tr><span th style="color:#999999; border-bottom:1px dotted #F7931E;text-transform: uppercase;">Platter Combination</th> </span></tr> 
	<tr>
	<td style="text-align:center">	
	
<?php echo form_open('User_online_platter_system/add_to_cart/'.$product->cat_id.'/'.$platter_date.'/'.$book_slot); ?>
	
	<?php $i=1; foreach ($combination as $combination1):  ?>
		 
	 <?php
		  
		   if( $i >= '5'){  
		    ?>   
					
			<?php 
		   }
	  ?>
	<div style="float:left; padding:10px; width:104px; height:80px; border:0px solid red; margin:5px;">
	<input type="hidden" name="category_name-<?php echo $i; ?>" id="category_name-<?php echo $i; ?>" value="<?php echo $combination1->category_namee; ?>" /> 
	<input type="hidden" name="product_no" id="product_no-<?php echo $i; ?>" value=<?php echo $i; ?> />
	<table>
<tr> <img src="<?php echo base_url().'/images/'.$combination1->product_image?>" width="83px" height="63px" /></tr>
<tr><?php echo $combination1->product_name; ?></tr>
	</table>
	 </div>
	<?php $i++; endforeach;   ?><input type='hidden' name='cart_combination' id = 'cart_combination' value="<?php echo $i; ?>" /> <?php
	
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
<br /><br />
<div style="text-align:center; margin-bottom:8px; margin-top:3px;">
<input type="hidden" id="selected_products" name="selected_products" value=<?php echo $i; ?> />
<input type="hidden" class="blue-btn" name="category_name" value="<?php if(isset($category_name))  echo $category_name;?>"/>
<input type="submit" class="blue-btn" name="add_to_cart" value="CLEAR PLATTER" onclick="return check_cart2();" /> 
<input type="submit" class="blue-btn"  name="add_to_cart" value="ADD PLATTER TO CART" onclick="return check_cart1();"  /> 
</form>
</div>
 </div>
	
<!-------------------------------------END------------------------------------------------------------------------------>	
	
	<br /> <br />
	<table  style=" margin-left:3px; margin-top:-50px;" width="100%">
	
	<tr><span th style="color:#999999; border-bottom:1px dotted #F7931E;text-transform: uppercase;">Your Cart: Platters you've ordered</th></span></tr> <br />
	<tr><th style="color:#3399CC; width:100%; padding-top:40px;"><div style="width:100%;">
	<div style="width:15%; float:left; text-align:left; color:#000000; font-weight:bold; text-decoration:underline">Sl.No</div>
	<div style="width:16%; float:left; color:#000000; font-weight:bold; text-decoration:underline">Platter</div>
	<div style="width:17%; float:left; color:#000000; font-weight:bold; text-decoration:underline">Price ($)</div>
	<div style="width:7%; float:left; color:#000000; font-weight:bold; text-decoration:underline">Qty</div>
	<div style="width:16%; float:left; color:#000000; font-weight:bold; text-decoration:underline">Total ($)</div>
	</div></th>
	</tr> 
	<br />
	<?php $i=1; ?>
	<?php foreach ($cart_data as $cart_data1): ?>
	<tr>
	<td>
	<div style="width:290px; border:0px solid red; height:15px;">
	
	<div style="float:left; width:9px; padding:4px;"><?php  echo $i; echo '.';?></div>
	<div style="float:left; width:70px; padding:4px;"><?php echo '{'; echo '&nbsp;';  echo $cart_data1->cart_combination; echo '}'; ?></div>
	<div style="float:left; width:29px; padding:4px;"><?php  echo $cart_data1->combination_price; ?></div>
	<div style="float:left; width:20px; padding:4px;">
	
	<input style="width:40px; !important"  type="hidden" name='quantity<?php echo $i ?>' value="<?php  echo $cart_data1->combination_quantity; ?>" />
	
<?php  echo $cart_data1->combination_quantity; ?>
	
	</div>
	<div style="float:left; width:35px; padding:4px;"><?php echo $cart_data1->combination_price * $cart_data1->combination_quantity  ?></div>
	<div style="float:left; width:20px; padding:4px;" class="delete_edit"><?php echo anchor('User_online_platter_system/edit_checkout_page_details/'.$cart_data1->cart_id.'/'.$platter_date.'/'.$book_slot.'/'.$product->cat_id,'Modify Quantity');?></div>
	<div style="float:right; width:25px; padding:4px;" class="delete_edit"><?php echo anchor('User_online_platter_system/delete_checkout_page_details_from_products/'.$cart_data1->cart_id.'/'.$platter_date.'/'.$book_slot.'/'.$product->cat_id,'Delete', "onclick='javascript: return check_cart_delete();'");?></div>
	</div>
	</td>
	</tr>
	<?php  $i++; endforeach;  ?>
	 <tr> 
	 <td>
<br/>
<div style="float:left; padding-left: 50px;">
<input type = "hidden" name="category_id" id="category_id" value=<?php ?> />

<?php if($i=='1') { ?>

<input type="button" class="blue-btn" name="clear_cart" value="CLEAR CART" onclick="check_clear_cart()"  />

<?php } else {?>

<input type="button" class="blue-btn" value="CLEAR CART" onclick="javascript:window.location.href='<?php echo base_url()."index.php/User_online_platter_system/clear_your_cart/23/".$platter_date.'/'.$book_slot ?>'" />

<?php } ?>

</div>

<div style="float:right; padding-right: 50px;">
<input type="button" class="blue-btn" value="ORDER" onclick="javascript:window.location.href='<?php echo base_url()."index.php/User_online_platter_system/user_checkout_page/".$platter_date.'/'.$book_slot.'/'.$product->cat_id ?>'" /> 
	</td>
	</tr>
	
	 <tr> 
	 <td>
<!--<input type="button" value="CLEAR CART" onclick="javascript:window.location.href='<?php echo base_url()."index.php/User_online_platter_system/clear_your_cart/".$platter_date.'/'.$book_slot ?>'" /> <br />-->
	</td>
	</tr>
	
	
	</table>
	</td>
	</tr>
</table>
	
<!--START IMPLEMENTING THE COMBINATION AREA FOR THE USER -->


<!--END IMPLEMENTING THE COMBINATION AREA FOR THE USER -->		
	
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>