     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<!--<form method="post" action="index.php">-->
		<?php echo validation_errors();	?>
		<?php echo form_open('login/login_check'); ?>
		<table style="border-collapse: separate; border-spacing: 1px;">
			<tr>
		<td width="665px;" valign="top">
		<br />
		<div style="padding:15px;">
		                     
		<h3>Welcome to the Function Booking section of Manly Deck Bar & Restaurant!</h3>
		<p>We offer you the exclusive and fun setting of our Deck Area for your function. Our Deck Area has the capacity to host 80-100 guests at a time. If you are expecting more guests, you can contact us at 33963824or info@manlydeck.com.auto book the complete restaurant! Else, this portal will help you with the booking! </p> <br />
		<h4>In this portal you can do the following:</h4>
		
		<div style="padding:19px" class="loogin">
		<ul>
		 <li>Choose the date and time for your function and book our Deck Area through Online Payment </li>
         <li>Order Hot/Cold Food Platters for your function after booking the Deck Area </li>
         <li>If you are not sure what food you want to order for the function, go ahead and book only the Deck Area now. Come back at a later date (not later than 7 days before the function) and order your Food Platters here. You can also select your Food Platters and come back to placethe order at a later date. </li>
       </ul>
	   </div>
	<p>NOTE:
If you prefer a 2-course/3-course meal or a Buffet for the function, then please contact us directly at 33963824or info@manlydeck.com.au after booking the Deck Area.
 </p>	
		
		
		</div>
		
		</td>
		
		<td width="335px;" valign="top">
						
						<div id="login_container">
						<h1>Log In</h1>
						<?php
                                                    if(isset($flag))
                                                    {
                                                        if($flag == 0){
                                                ?>
						<span style="color:#7A7ACC; height:10px;"><?php if(isset($error))
							  {
								echo $error; 
                                                    }}
                                                    else if($flag == 1){?></span>
                                                    <span style="color:#FF0000; height:10px;"> 
                                                    <?php if(isset($error))
							  {
								echo $error; 
                                                    }}
                                                          } ?>  </span>
						
						<fieldset id="inputs">
							<input id="username1" name="email" type="text"  placeholder="Email" autofocus required>   
							<input id="password" name="password" type="password" placeholder="Password" required>
						</fieldset>
						<fieldset id="actions">
							<input id="submit" value="Login" tabindex="4" type="submit">
							<?php echo anchor('login/user_register','New User? Register');?> <?php echo anchor('login/forgot_your_password','Forgot Password?');?>
						</fieldset>
						</div>
						
						
						
						<!--<table>
							<tbody>
							
							<tr>
							
							<div style="color:#FF3399; margin:0px auto;"> <?php 
							
							if(isset($error))
							  {
								echo $error; 
							  }
							
							?>    </div>
							
							</tr>
							
							<tr>
								<th>LOGIN HERE</th>
								<th></th>
							</tr>
							<tr>
								<td class="profile-titles">Email</td>
								<td><input name="email" value="" tabindex="1" type="text" required="required"></td>
							</tr>
							<tr>
								<td class="profile-titles">Password</td>
								<td><input name="password" value="" tabindex="2" type="password" required="required"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									
									<input value="Login" style="width:100px; float:right" tabindex="4" type="submit">
								</td>
							</tr>	
						
							  
								 <tr>
									<td> </td>
									<td>  </td>
								</tr>
								
								 <tr>
									<td>  <?php echo anchor('login/user_register','Register');?> </td>
									<td>  <?php echo anchor('login/forgot_your_password','Forgot Your Password');?> </td>
							</tr>
						</tbody></table>-->
		</td>
		</tr>
		</table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>