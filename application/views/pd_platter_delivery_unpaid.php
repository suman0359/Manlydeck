     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/platter_delivery_admin_menus"); ?>
		<br />
		<table width="956px" border="1" bordercolor="#999999" cellpadding="3" cellspacing="0" class="display" id="example" style="border-collapse: separate; border-spacing: 0px; margin-top:20px; padding:0px;" align="center">
	<thead>
<div style="float:left; padding-left:400px;"> <h3> UNPAID BOOKINGS </div> <div style="float:right; padding-right:20px;"> <?php //echo anchor('admin_onli_plat_ord_sys/admin_add_category','ADD CATEGORY');?> </div>
	 
	  <tr bgcolor="#29ABE2" style="color:#FFFFFF; font-size:14px;">
       <th width="15px">Sr.No</th> 
	    <th>Customer Name</th> 
		<th>Phone</th> 
		<th>Email</th>
		<th>Serve Time</th> 
		<th>Platter Combination</th>  
		<th>Payment</th>
		<th>Status</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>	
	<?php  
	 $i=1;
	 foreach ($unpaid_bookings as $unpaid_bookings1):
	?>
	<tbody>					
       <tr>						
		<td align="center" style="background: #fff;"><?php echo $i; ?></td>
	 	<td align="center" style="background: #fff;"><?php echo $unpaid_bookings1->customer_name; ?></td>
		<td align="center" style="background: #fff;"><?php echo $unpaid_bookings1->customer_phone; ?></td>
		<td align="center" style="background: #fff;"><?php echo $unpaid_bookings1->customer_email; ?></td>
		<td align="center" style="background: #fff;"><?php echo $unpaid_bookings1->customer_serve_time; ?></td>
		<td align="center" style="background: #fff;"><?php echo $unpaid_bookings1->customer_platter_combination; ?></td>
		<td align="center" style="background: #fff;"><?php echo $unpaid_bookings1->payment_amount; ?></td>
	    <td align="center" style="background: #fff;"><?php if(!$unpaid_bookings1->payment_status){
		   echo 'Unpaid'; } ?></td>	
		   
 <td align="center" style="background: #A7BFDE;"><?php echo anchor('admin_platter_catering/pdedit_unpaid_cust/'.$unpaid_bookings1->paid_book_id,'Edit');?></td>
<td align="center" style="background: #A7BFDE;"><?php echo anchor('admin_platter_catering/pddelete_the_customer1/'.$unpaid_bookings1->paid_book_id,'Delete',"onclick='javascript: return paid_customer1();'");?></td>	   
		   	
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