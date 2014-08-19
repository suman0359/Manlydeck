     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/online_platter_admin_menus"); ?>
		<br />
		<div class="page-title" >Platter Items&nbsp;<span class="title-event-info">Add/remove/modify Platter Items</span> <br /></div>
		<table width="900px" id="table_styling" cellpadding="3" cellspacing="0" class="display" id="example" style="border-collapse: separate; border-spacing: 0px; margin-top:20px; padding:0px;" align="center">
	<thead>
	
<div style="float:left; padding-left:430px;"></div> <div class="manage_products" style="float:right; padding-right:35px;"> <?php echo anchor('admin_onli_plat_ord_sys/admin_add_product','ADD ITEM');?> </div>
    	 
	  <tr bgcolor="#29ABE2" style="color:#FFFFFF; font-size:14px;">
       <th width="7%" class="booking-summary-header">Sl.No</th> 
	    <th class="booking-summary-header">Item Name</th> 
		<th class="booking-summary-header">Item Image</th>
		<th class="booking-summary-header">Platter Category</th> 
		<!--<th>Product Price</th> 
		<th>Product Tax (%)</th>-->
		<th class="booking-summary-header">Modify</th> 
		<th class="booking-summary-header">Delete</th>  
      </tr>
    </thead>	
	<?php  
	 $i=1;
	 foreach ($products as $product):
	?>
	<tbody>					
       <tr>						
		<td align="center" style="background: #fff;" width="7%"><?php echo $i; ?></td>
	 	<td align="center" style="background: #fff;"><?php echo $product->product_name; ?></td>
		<td align="center" style="background: #fff;" class="image_align1" >
		<img src="<?php echo base_url().'/images/'.$product->product_image_url?>" width="60px" height="60px" />
		</td>
	    <td align="center" style="background: #fff;"><?php echo $product->product_category; ?></td>
		<!--<td align="center" style="background: #fff;"><?php echo $product->product_price; ?></td>
		<td align="center" style="background: #fff;"><?php echo $product->product_tax; ?></td>-->
<td align="center" width="10%" style="background: #fff;" class="platter_price_modify"><?php echo anchor('admin_onli_plat_ord_sys/product_edit/'.$product->product_id,'Modify');?>
</td>
	<td align="center" width="10%" style="background: #fff;" class="platter_price_modify"><?php echo anchor('admin_onli_plat_ord_sys/product_delete/'.$product->product_id,'Delete', "onclick='javascript: return check1();'");?></td>		
	  </tr>				
	</tbody>
	<?php 
	
	$i++;
	endforeach;
	
	?>
</table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>