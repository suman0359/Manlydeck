    <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/user_default_menus"); ?> <br/>
		
		<div style="width:960px; margin:0px auto; padding: 15px;">
		<div style="font-size:18px; font-weight:bold; text-align:center">Online Platter Order System</div> <br />
		<ul>
		<li><div><h3>USER ACCOUNT</h3></div> <br />
		<ul>
		   <li><?php echo anchor('user_deck_area_booking/view_profile','My Details');?></li>   <br />
		   <li><?php echo anchor('User_online_platter_system/onl_pla_sucess_trans','Purchase History');?></li> 
		      <ul> <br />
		         <li><?php echo anchor('User_online_platter_system/user_checkout_page/'.$platter_date,'CheckOut Page');?></li>  <br />
		         <li><?php echo anchor('User_online_platter_system/user_view_categories/'.$platter_date,'Continue Buying');?></li>  <br />
		      </ul>
		   </li>  
		 </ul>
		 </li>
		</ul>
	 </div>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>