     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/online_platter_admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php //echo form_open('admin_onli_plat_ord_sys/save_edited_category');
		
		 echo form_open_multipart('admin_onli_plat_ord_sys/save_edited_category') ;
		
		if(isset($categories_edit)){
		
				foreach($categories_edit as $categories_edit):
				
				endforeach;
		}
		 ?>
		 <br />
		<?php  if(isset($categories_edit)){ ?> 
				<span class="page-title" style="margin-right:10px"> Modify Platter Category </span> <br />
				<?php }  else {?>
			   <span class="page-title" style="margin-right:10px"> Add Platter Category </span> <br />
				<?php } ?> <br />
		
		<table align="center" width="960px">
			<tr>
		<td width="20px;"></td>
		<td width="500px;">
		<table>
			<tbody>
			<tr>
				<td class="profile-titles">Category:</td>
				<input type="hidden" name="cat_id" value="<?php if(isset($categories_edit)) echo $categories_edit->cat_id; else echo '';?>" />
                                <td><input name="category_name"  id="category_name" value="<?php if(isset($categories_edit)) echo $categories_edit->cat_name; else echo '';?>" tabindex="1" type="text" required="required" readonly=""></td>
			</tr>
			
			<!--<tr>
			<td class="profile-titles">Category Image:</td>
			<td><input type="file" name="file" id="file" required="required" value = "
			 <?php if(isset($categories_edit)){
					 echo $categories_edit->product_image_url;
			  }  else{
			  
				 echo '';
			  
			  }?>"  style="width:160px; font-size::13px!important;"/></td>
			</tr>				
		
		<tr>
<td></td>
<td><?php if(isset($categories_edit)){ ?> <img src="<?php echo base_url().'/images/'.$categories_edit->product_image_url?>" width="60px" height="60px" />     <?php } ?>  </td>
</tr>-->	
			<tr>
				<td class="profile-titles">Category Description:</td>
                                <td><textarea name="category_description" id="category_description" style="width:147px" rows="3" cols="15" readonly=""><?php if(isset($categories_edit)) echo $categories_edit->cat_description; else echo '';?></textarea></td>
			</tr>
			
			
			<tr>
				<td class="profile-titles">Platter Price:</td>
<td><input name="platter_price"  id="platter_price" value="<?php if(isset($categories_edit)) echo $categories_edit->platter_price; else echo '';?>" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input value="Save" style="width:100px;" tabindex="4" type="submit" class="gray-btn-round">
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