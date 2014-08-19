     <?php 
	  
		   /*$val = base_url().'captcha/CaptchaSecurityImages.php'; 
		   include($val);*/
		  
		  //$this->load->view("captcha/CaptchaSecurityImages.php");
		   $this->load->view("top_bottom/header");
	    
	  ?>
	 
	<div id="login">
	<div class="inner">
		<?php echo validation_errors();	?>
		<?php echo form_open('login/add_user'); ?>
		<table>
			
			<tr>
		<td width="324px;"></td>
		<td width="354px;">
		<table>
			<tbody>
			
			<tr>
			
			<div style="color:#FF3399; margin:0px auto;"> 

			
			<span style="color:#FF0000; height:10px;"><?php if(isset($error))
							  {
								echo $error; 
							  } ?>  </span>
			
	         </div>
			
			</tr>
			
			<tr>
				<td colspan="2" style="font-size:18px; font-weight:bold">NEW USER REGISTRATION </td>
				<!--<th style="text-align:center;">REGISTERATION</th>-->
			</tr>
			<tr>
				<td></td>
				<td style="text-align:left;"></td>
			</tr>
			<tr>
				<td class="profile-titles">Name</td>
				<td><input name="name" value="<?php echo $data['name']; ?>" id="name" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Email</td>
				<td><input name="email" value="<?php echo $data['email']; ?>" id="email" tabindex="1" type="email" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Phone</td>
				<td><input name="phone" value="<?php echo $data['phone']; ?>" id="phone" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">City</td>
				<td><input name="city" value="<?php echo $data['city']; ?>" id="city" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr style="display:none">
				<td class="profile-titles">Country</td>
				<td>
				<select name="country" class="textform" id="country" required="required" style="width:157px;">
                <option value="Australia" selected="selected">Australia</option>
                </select>
				</td>
			</tr>
			<tr>
				<td class="profile-titles">Postcode</td>
				<td><input name="pin_code" value="<?php echo $data['postcode']; ?>" id="pin_code" tabindex="1" type="text" required="required"></td>
			</tr>
			
			<tr>
			<td class="profile-titles">Address</td>
			<td><textarea name="address" rows="3" cols="40" id="address" style="width:147px;" required="required" ><?php echo $data['address']; ?></textarea></td>
			</tr>
			
			<tr>
			<td><?php 	echo $image; ?></td>


<td><input type="text" name="captcha" value="" required='required' style="margin-top:-5px;" /></td>
			</tr>
			
			
		        <tr>
			<!--<td colspan="2"> <span class="refresh_captcha">  <a href='#' onclick='location.reload(true); return false;'>Refresh Captcha</a> </span> </td>-->
			<td colspan="2"> <span class="refresh_captcha">  <a href= <?php base_url().'index.php/login/user_register_refresh_captcha' ?> >Refresh Captcha</a> </span> </td>
			</tr>	
			
			
			<tr>
			
<td colspan="2"><input type="checkbox" name="newsletter" value="yes">&nbsp; I wish to receive Email updates on offers and happenings at Manly Deck Bar & Restaurant. <br /> <br /></td>
			
			</tr>
			<tr>
				
				<td colspan="2">
		<span style="padding-right:7px"><input value="Register" style="width:97px;" class="register_buttons" tabindex="4" type="submit"> </span>			
		<span style="padding-right:7px"><input type="reset" style="width:97px;" class="register_buttons" name="reset" value="Reset"/> </span>
		<span><input type="button" style="width:97px;" value="Back" class="register_buttons" onclick="history.back(-1)" /></span>		

				</td>
			</tr>	
		         <tr>
		    		<td> </td>
				    <td>  </td>
			    </tr>
		        
				 <tr>
		    		<td style="text-align:right">   </td>
				    <td style="text-align:right; background:transparent; border:none;">   </td> <?php //echo anchor('login','Reset');?>
					
			</tr>
		</tbody></table>
		</td>
		<td width="305px;" align="left">
		

		</td>
		</tr>
		</table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>