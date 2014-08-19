     <?php $this->load->view("top_bottom/header"); ?>
	
	<div id="login">
	<div class="inner">
		<?php $this->load->view("top_bottom/admin_menus"); ?>
		<br />
<div class="page-title" style="margin-bottom:13px;">Deck Area Prices&nbsp;<span class="title-event-info">Deck Area rent for day of week</span></div> 
 <br />
		<table width="900px" id="table_styling" style="margin:0px auto; margin-top:22px;" >

	<thead>
	<tr>
        <th width="30%" class="booking-summary-header">Day of Week</th>        
        <th width="30%" class="booking-summary-header">Price</th>
        <th width="30%" class="booking-summary-header">Modify</th>
      </tr>
    </thead>	
	<?php foreach ($users as $set_money):
	
	$url = "admin_deck_area_booking/add_price/".$set_money->booking_id;;
	
	?>
	<tbody>					
       <tr>						
		<td align="center" style="background: #FFFFFF;"><?php echo $set_money->booking_day; ?></td>
		<td align="center" style="background: #FFFFFF;"><?php echo $set_money->booking_amount; ?></td>
		<td width="15%" align="center" style="background: #FFFFFF;" class="platter_price_modify"><?php echo anchor($url,'Edit'); ?> </td>				
	  </tr>				
	</tbody>
	<?php endforeach;?>
</table>
		</form>
	</div>
</div>
<?php $this->load->view("top_bottom/footer"); ?>