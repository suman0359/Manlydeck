     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/platter_delivery_admin_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open('admin_platter_catering/pdsave_edited_category');
		
		if(isset($categories_edit)){
		
				foreach($categories_edit as $categories_edit):
				
				endforeach;
		}
		 ?> <br />
		<table align="center" width="960px">
			<tr>
		<td width="320px;"></td>
		<td width="320px;">
		
		<table>
			<tbody>
			<tr>
				<th> </th>
				<?php  if(isset($categories_edit)){ ?> 
				<th style="text-align:left;">EDIT CATEGORY</th>
				<?php }  else {?>
			    <th style="text-align:left;">ADD CATEGORY</th>
				<?php } ?>
			</tr>
		</table>
		<table>
			<tbody>
			<tr>
			<td>  </td>	
			</tr>
			<tr>
				<td class="profile-titles">Category Name</td>
				<input type="hidden" name="cat_id" value="<?php if(isset($categories_edit)) echo $categories_edit->cat_id; else echo '';?>" />
<td><input name="category_name"  id="category_name" value="<?php if(isset($categories_edit)) echo $categories_edit->cat_name; else echo '';?>" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Category Description</td>
<td><textarea name="category_description" id="category_description" rows="3" cols="15"><?php if(isset($categories_edit)) echo $categories_edit->cat_description; else echo '';?></textarea></td>
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