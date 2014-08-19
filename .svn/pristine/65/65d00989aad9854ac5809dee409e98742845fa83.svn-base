     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/online_platter_admin_menus"); ?>
		<br />
		<table width="960" align="center" border="0" cellpadding="0" cellspacing="0" class="display" id="example" style="border-collapse: separate;border-spacing: 1px;">
	<thead>
     <tr>
<td><h4>PAID</h4></td> <td><h4> BOOKINGS</h4></td> <td></td> <td> <td></td><td></td></td><td style="text-align:right"> <?php //echo anchor('admin_onli_plat_ord_sys/admin_add_category','ADD CATEGORY');?></td>
      </tr>
	 
	  <tr bgcolor="#4F81BD" style="color:#FFFFFF; font-size:14px;">
       <th width="15px">Sr.No</th> 
	    <th>Customer Name</th> 
		<th>Phone</th> 
		<th>Email</th>
		<th>Serve Time</th> 
		<th>Platter Combination</th>  
		<th>Payment</th>
		<th>Status</th>
		<th></th>
		<th></th>
      </tr>
    </thead>	
	<?php  
	 $i=1;
	 foreach ($paid_bookings as $paid_bookings1):
	?>
	<tbody>					
       <tr>						
		<td align="center" style="background: #A7BFDE;"><?php echo $i; ?></td>
	 	<td align="center" style="background: #A7BFDE;"><?php echo $paid_bookings1->customer_name; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $paid_bookings1->customer_phone; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $paid_bookings1->customer_email; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $paid_bookings1->customer_serve_time; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $paid_bookings1->customer_platter_combination; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $paid_bookings1->payment_amount; ?></td>
	    <td align="center" style="background: #A7BFDE;"><?php if($paid_bookings1->payment_status){
		   echo 'paid'; } ?></td>	
		   <td align="center" style="background: #A7BFDE;"><?php echo anchor('admin_onli_plat_ord_sys/edit_paid_cust/'.$paid_bookings1->paid_book_id,'Edit');?></td>
		   <td align="center" style="background: #A7BFDE;"><?php echo anchor('admin_onli_plat_ord_sys/delete_the_customer/'.$paid_bookings1->paid_book_id,'Delete',"onclick='javascript: return paid_customer();'");?></td>	
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