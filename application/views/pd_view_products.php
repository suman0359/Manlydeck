     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/platter_delivery_admin_menus"); ?>
		<br />
		<table width="956px" border="1" bordercolor="#999999" cellpadding="3" cellspacing="0" class="display" id="example" style="border-collapse: separate; border-spacing: 0px; margin-top:20px; padding:0px;" align="center">
	<thead>

 <div style="float:left; padding-left:430px;"> <h3> PRODUCTS  </div> <div style="float:right; padding-right:20px;"> <?php echo anchor('admin_platter_catering/pd_admin_add_product','ADD PRODUCTS');?> </div>
	 
	  <tr bgcolor="#29ABE2" style="color:#FFFFFF; font-size:14px;">
       <th width="15px">Sr.No</th> 
	    <th>Product Name</th> 
		<th>Product Image</th>
		<th>Product Category</th> 
		<th>Product Price</th> 
		<th>Product Tax (%)</th>
		<th>Edit</th> 
		<th>Delete</th>  
      </tr>
    </thead>	
	<?php  
	 $i=1;
	 foreach ($products as $product):
	?>
	<tbody>					
       <tr>						
		<td align="center" style="background: #fff;"><?php echo $i; ?></td>
	 	<td align="center" style="background: #fff;"><?php echo $product->product_name; ?></td>
		<td align="center" style="background: #fff;" class="image_align1" >
		<img src="<?php echo base_url().'/images/'.$product->product_image_url?>" width="60px" height="60px" />
		</td>
	    <td align="center" style="background: #fff;"><?php echo $product->product_category; ?></td>
		<td align="center" style="background: #fff;"><?php echo $product->product_price; ?></td>
		<td align="center" style="background: #fff;"><?php echo $product->product_tax; ?></td>
<td align="center" width="10%" style="background: #fff;"><?php echo anchor('admin_platter_catering/pdproduct_edit/'.$product->product_id,'Edit');?></td>
	<td align="center" width="10%" style="background: #fff;"><?php echo anchor('admin_platter_catering/pdproduct_delete/'.$product->product_id,'Delete', "onclick='javascript: return check1();'");?></td>		
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