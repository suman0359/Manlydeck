     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/platter_delivery_admin_menus"); ?>
		<br />
		<table width="956px" border="1" bordercolor="#999999" cellpadding="3" cellspacing="0" class="display" id="example" style="border-collapse: separate; border-spacing: 0px; margin-top:20px; padding:0px;" align="center">
	<thead>
	
 <div style="float:left; padding-left:430px;"> <h3> CATEGORIES </div> <div style="float:right; padding-right:20px;"> <?php echo anchor('admin_platter_catering/pdadmin_add_category','ADD CATEGORY');?> </div>
     	 
	  <tr bgcolor="#29ABE2" style="color:#FFFFFF; font-size:14px;">
       <th width="15px">Sr.No</th> 
	    <th>Category Name</th> 
		<th>Category Description</th> 
		<th>Edit</th> 
		<th>Delete</th> 
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
<td align="center" style="background: #fff;"><?php echo anchor('admin_platter_catering/pdcategory_edit/'.$category->cat_id,'Edit');?></td>
	<td align="center" style="background: #fff;"><?php echo anchor('admin_platter_catering/pdcategory_del/'.$category->cat_id,'Delete', "onclick='javascript: return check();'");?></td>		
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