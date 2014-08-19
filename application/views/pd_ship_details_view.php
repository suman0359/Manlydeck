     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/platter_delivery_admin_menus"); ?>
		<br />
		<table width="956px" border="1" bordercolor="#999999" cellpadding="3" cellspacing="0" class="display" id="example" style="border-collapse: separate; border-spacing: 0px; margin-top:20px; padding:0px;" align="center">
	<thead>

<div style="float:left; padding-left:400px;"> <h3> SHIPPING MANAGEMENT  </div> <div style="float:right; padding-right:20px;"> <?php echo anchor('admin_platter_catering/pdadmin_add_shipping','ADD LOCATION');?> </div>
	 
	  <tr bgcolor="#29ABE2" style="color:#FFFFFF; font-size:14px;">
       <th width="15px">Sr.No</th> 
	    <th>Location Name</th> 
		<th>Shipping Amount</th> 
		<th></th> 
		<th></th> 
      </tr>
    </thead>	
	<?php  
	 $i=1;
	 foreach ($shipping as $shipping1):
	?>
	<tbody>					
       <tr>						
		<td align="center" style="background: #fff;"><?php echo $i; ?></td>
	 	<td align="center" style="background: #fff;"><?php echo $shipping1->location_name; ?></td>
	    <td align="center" style="background: #fff;" width="286px"><?php echo $shipping1->shipping_amount; ?></td>
<td align="center" style="background: #fff;"><?php echo anchor('admin_platter_catering/pdship_edit/'.$shipping1->ship_id,'Edit');?></td>
	<td align="center" style="background: #fff;"><?php echo anchor('admin_platter_catering/pdship_del/'.$shipping1->ship_id,'Delete', "onclick='javascript: return shipment();'");?></td>		
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