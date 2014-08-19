     <?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
		<?php //$this->load->view("top_bottom/menus"); ?> 
		<?php $this->load->view("top_bottom/user_default_menus"); ?>
		<br/>
		<?php echo validation_errors();	?>
		<?php echo form_open('User_online_platter_system/platter_payment_gateway'); ?>
		
		<table width="900px" cellpadding="3" cellspacing="0" class="display" id="table_styling" align="center" style="margin-top:20px">
		<!--
		<th width="15px">Sl.No</th>
		<th>Invoice No</th>
		<th>Booked Date</th> 
		<th>Platter Comibination</th> 
		<th>Paid Amount</th>
		<th>Deck Area DATE</th> 
		
		<td align="center" style="background: #A7BFDE;"><?php echo $i; ?></td>
	 	<td align="center" style="background: #A7BFDE;"><?php echo $sucess_trans1->invoice_no; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $sucess_trans1->cust_name; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $sucess_trans1->recorded_date; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $sucess_trans1->platter_combination; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $sucess_trans1->grand_amount; ?></td>
		<td align="center" style="background: #A7BFDE;"><?php echo $sucess_trans1->platter_date; ?></td>
		-->

			<tbody>
			<tr>
			     <div class="page-title">Platter Order History &nbsp;<span class="title-event-info">Your paid Platters</span></div>

			</tr> <br /><br />
		<tr bgcolor="#4F81BD" style="color:#FFFFFF; font-size:14px;">
                <th width="5%" class="booking-summary-header">Sl.No</th>
		<!--<th width="10%" class="booking-summary-header">Invoice No</th>-->
		<th width="20%" class="booking-summary-header">Function Date</th>
		<th width="30%" class="booking-summary-header">Platters Ordered</th> 
		<!--<th width="10%" class="booking-summary-header">Paid Amount</th>
		<!--<th width="15%">Platter Ordered Date</th> -->
		
      </tr>
    </thead>	
	<?php  
	 $i=1;
	 foreach ($sucess_trans as $sucess_trans1):
	
	$value_result = $sucess_trans1->platter_date ; 
	$date_pieces = explode("-", $value_result); 
	$final_value1 = $date_pieces[2].'-'.$date_pieces[1].'-'.$date_pieces[0];
	
	?>
	<tbody>					
       <tr>						
		<td width="5%" align="center"><?php echo $i; ?></td>
	 	<!--<td width="10%" align="center"><?php echo $sucess_trans1->invoice_no; ?></td>-->
		<!--<td width="15%" align="center" style="background: #A7BFDE;"><?php echo $sucess_trans1->recorded_date; ?></td>-->
		
                <td  width="15%" align="center"><?php echo $final_value1; ?></td>
                <td width="62%" align="left" style="padding:10px;"><?php 
		
		$platter_items = $sucess_trans1->platter_combination; 
                //var_dump($platter_items);
		
		$platter_quantity = $sucess_trans1->combination_quantity;
                //var_dump($platter_quantity);
        
		$divide_platters = explode("{", $platter_items);
		
                $divide_platters = explode("}", $divide_platters[1]);
                        
		$divide_quantity = explode("~", $platter_quantity);
		//$divide_quantity = $platter_quantity;
		
		//for($j=0; $j < count($divide_platters)-1; $j++) {
                $divide_platters[0] = "{ ".$divide_platters[0]." }";
		
		   echo $divide_platters[0].'&nbsp;&nbsp;&nbsp; - '.$platter_quantity.' Nos.'; echo '<br /><br />'; 
		
		//}
		
		?></td>
		<!--<td  width="10%" align="center"><?php echo $sucess_trans1->grand_amount; ?></td>-->
		
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