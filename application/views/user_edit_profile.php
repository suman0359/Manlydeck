     <?php 
	  
		   /*$val = base_url().'captcha/CaptchaSecurityImages.php'; 
		   include($val);*/
		  
		  //$this->load->view("captcha/CaptchaSecurityImages.php");
		   $this->load->view("top_bottom/header");
	    
	  ?>
	 
	<div id="login">
	<div class="inner">
	<?php $this->load->view("top_bottom/user_default_menus"); ?>
		<?php echo validation_errors();	?>
		<?php echo form_open('user_deck_area_booking/save_update_details'); ?>
		<?php   
	
		foreach ($user_details as $user_details1):
		
		endforeach;
		 ?>
		<br />
		
		
<div>	

<?php 
if ($this->session->flashdata('result') != '' && $this->uri->segment(2) != 'view_profile'): ?>
	<script type="text/javascript">
	$(document).ready(function() {	
		alert("<?php echo $this->session->flashdata('result') ?>");	
	});
	//-->				
	</script>
<?php endif; $this->session->unset_userdata('result'); ?>


	
<table width=960px>
<tr>

<td width="450px" style="padding-left:30px; float:left">

<table>
			<tbody>
			<tr>
				<div class="page-title" style="margin-left:0px">Your Profile &nbsp; <span class="title-event-info">Manage your profile</span></div>
			</tr>
			<br />
			<tr><td colspan="2"> <br /></td></tr>
			<tr>
				<td class="profile-titles">Name</td>
<td><input name="name" value="<?php echo $user_details1->name;  ?>" id="name" tabindex="1" type="text" required="required"></td>
			</tr>
			<tr>
				<td class="profile-titles">Email</td>
				<td><input name="email" value="<?php echo $user_details1->email;  ?>" id="email" tabindex="1" type="text" required="required" readonly="readonly"></td>
			</tr>
			<tr>
				<td class="profile-titles">Phone</td>
				<td><input name="phone" value="<?php echo $user_details1->phone;  ?>" id="phone" tabindex="1" type="text" required="required"></td>
			</tr>
			
			<tr>
				<td class="profile-titles">City</td>
				<td><input name="city" value="<?php echo $user_details1->city;  ?>" id="city" tabindex="1" type="text" required="required"></td>
			</tr>

			<tr>
				<td class="profile-titles">Postcode</td>
				<td><input name="pin_code" value="<?php echo $user_details1->pin_code;  ?>" id="pin_code" tabindex="1" type="text" required="required"></td>
			</tr>
		
		    <tr>
			<td class="profile-titles">Address</td>
			<td><textarea name="address" rows="3" cols="40" id="address" style="width:147px;" required="required"><?php echo $user_details1->address;  ?></textarea></td>
			</tr>	
			
			<tr>
				<td class="profile-titles">Current Password</td>
				<td><input name="old_password" value="<?php echo $user_details1->test_password;  ?>" id="old_password" tabindex="1" type="password" required="required" readonly=""></td>
			</tr>
			
			<tr>
				<td class="profile-titles">New Password</td>
				<td><input class="buttons" name="new_password"  id="new_password" tabindex="1" type="password"></td>
			</tr>
			
			<tr>
				<td >
				<br />	
				<input value="Update" class="gray-btn-round" tabindex="4" type="submit" onclick="return sucess_message12();">
					
				</td>
				<td>
				<br/>
				<a href="user_deck_area_booking"> <div class="gray-btn-round"> Cancel </div> </a> 
				</td> 
			</tr>	
         </tbody>
		 </table>
</td>

			       <!--<span style="color:#FF0000; font-size: 15px;">For Further Details Contact</span> <br /> <br />
					
					<span style="color:#294C88; font-weight:bold">MANLY DECK </span><br />
					
					1/45 Cambridge Parade, <br />
			
					Manly, QLD-4179 (upstairs) <br />
			
					info@manlydeck.com.au <br />
			
					Phone : 33963824  <br />-->



</tr>
</table>  
<div style="color: gray !important;float: left;font-style: italic;margin-top: -90px; margin-left: 390px;">If you wish to change your password, please fill in your new password here.</div>
</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>