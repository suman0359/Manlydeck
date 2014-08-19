     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<!--<form method="post" action="index.php">-->
		<?php echo validation_errors();	?>
		<?php echo form_open('login/login_check'); ?>
		<table style="border-collapse: separate; border-spacing: 1px;">
			<tr>
		<td width="340px;"></td>
		<td width="461px;" align="center">
		<table>
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
				<th><h1>LOG IN </h1></th>
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
		</tbody></table>
		</td>
		<td width="320px;">
		
		<!--<span style="color:#FF0000">For Further Details Contact</span><br />
		
		<span style="color:#294C88; font-weight:bold">MANLY DECK </span><br />
		
		1/45 Cambridge Parade, <br />

        Manly, QLD-4179 (upstairs) <br />

        info@manlydeck.com.au <br />

        Phone : 33963824  <br />-->
		
		</td>
		</tr>
		</table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>