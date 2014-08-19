     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/online_platter_admin_menus"); ?>
		<br />
		<div class="page-title" > Platter Categories&nbsp; <span class="title-event-info">Add/remove/modify Platter Categories</span><br /></div>	
		<table width="900px" id="table_styling" cellpadding="3" cellspacing="0" class="display" id="example" style="border-collapse: separate; border-spacing: 0px; margin-top:20px; padding:0px;" align="center">
	<thead>
     
	 <tr>
	 
	 
	 </tr>
	 
	 
	 <tr>
<td colspan="6" style="border:0px none" class="manage_categories">
<span style="float:right;padding-left: 10px;"> <?php //echo anchor('admin_onli_plat_ord_sys/set_platter_price123','Manage Platter Price');?> </span> <!--<span style="float:right;padding-left: 36px;"><?php //echo anchor('admin_onli_plat_ord_sys/admin_add_category','ADD CATEGORY');?> </span> -->
</td>     
	  </tr>
	 
	  <tr bgcolor="#29ABE2" style="color:#FFFFFF; font-size:14px;">
       <th width="15px" class="booking-summary-header">Sl.No</th> 
	    <th class="booking-summary-header">Category</th> 
		<th class="booking-summary-header">Category Description</th> 
		<th class="booking-summary-header">Platter Price</th>
		<th class="booking-summary-header">Modify</th> 
		<!--<th class="booking-summary-header">Delete</th> -->
      </tr>
    </thead>	
	<?php  
	 $i=1;
	 foreach ($categories as $category):
	?>
	<tbody>					
       <tr>						
		<td align="center" style="background: #fff;"><?php echo $i; ?></td>
	 	<td align="center" style="background: #fff;"><?php echo $category->cat_name; ?></td>
	    <td align="center" style="background: #fff;" width="286px"><?php echo $category->cat_description; ?></td>
		<td align="center" style="background: #fff;" width="286px"><?php echo $category->platter_price; ?></td>
<td align="center" style="background: #fff;" class="platter_price_modify"><?php echo anchor('admin_onli_plat_ord_sys/category_edit/'.$category->cat_id,'Modify');?></td>
	<!--<td align="center" style="background: #fff;" class="platter_price_modify"><?php //echo anchor('admin_onli_plat_ord_sys/category_del/'.$category->cat_id,'Delete', "onclick='javascript: return check();'");?></td>-->		
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