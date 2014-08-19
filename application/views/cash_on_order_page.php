    <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php //$this->load->view("top_bottom/menus"); ?> 
		<?php $this->load->view("top_bottom/user_default_menus"); ?>
		<br/>
		<?php echo validation_errors();	?>
		<?php echo form_open('User_online_platter_system/platter_payment_gateway'); 
                $function_name = $this->session->userdata('event_name');
                $function_date = $this->session->userdata('event_date');
                //var_dump($function_date);
                ?>
		<table align="center" width="900px">
			<tbody>
			<tr  >
				<div><h3 align="left" style="padding-left:30px;">YOUR PLATTER ORDER HAS BEEN SUCCESSFULLY PROCESSED!</h3></div>				
			</tr>

				<tr> 
		     <td align="center" style="font-weight:bold; font-size:16px">Payment Type: Cash at Restaurant </td>
		   </tr>
		   
		   <tr>
		    <td> <p style="font-size:15px; line-height:150%">Your Platter Order for <?php echo $function_name; ?> on <?php echo $function_date; ?> is processed! You will receive a mail regarding the same. </p></td>
		   </tr>
		   
		   <tr> <td> </td> </tr>
		   
		   <tr> <td> </td> </tr>
		   
		   <tr>
		    <td><div> <b style="text-align:center">ATTENTION!! </b> 
			<p style="font-size:15px; line-height:150%">Your Platter Order will be saved in our system till 7 days before the function date. You will need to pay the amount at the Restaurant not later than 7 days from the date of the function. Else, the order will only be taken up at the discretion of the Restaurant. So please ensure that you pay for your Platters well before that.</p>

			<br /></div> </td>
		   </tr>
			
</table>
</div>
</div>			
<?php $this->load->view("top_bottom/footer"); ?>