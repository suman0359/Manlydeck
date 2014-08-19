<table width="960px;" align="center" style="margin:auto">
<tr> <br />
<h4 style="text-align:center">DECK AREA BOOKING MANAGEMENT</h4>
</tr>

<tr>
<td></td>
<td align="right"><?php //echo anchor('admin_onli_plat_ord_sys','Online Platter Order System');?></td>
<td align="right"><?php //echo anchor('admin_platter_catering','Platter Delivery / Catering System');?></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
</tr>


<tr>
<?php $function_name = $this->uri->segment(2);?>
<td width="191px" id="<?php if( $function_name == 'price_manager' || $function_name == 'add_price' || $function_name == 'save_edit_price' ) { echo 'menu_active';  } ?>" 
class="green-btn" style="text-align:center; margin:0px 5px 0px 47px; font-weight:bold; height:22px"><?php echo anchor('admin_deck_area_booking/price_manager','Deck Area Prices');?></td>

<td width="202px" id="<?php if( $function_name == 'nobookingslot' || $function_name == 'show' || $function_name == 'check_available_dates') { echo 'menu_active';  } ?>"  class="green-btn" style="text-align:center; margin:0px 5px 0px 9px; font-weight:bold; height:22px"><?php echo anchor('admin_deck_area_booking/show/'.date('Y').'/'.date('m'),'Booking Calendar');?></td>

<td width="140px" id="<?php if( $function_name == 'payments_orders_p') { echo 'menu_active';  } ?>" class="green-btn" style="text-align:center; margin:0px 5px 0px 9px; font-weight:bold; height:22px"><?php echo anchor('admin_deck_area_booking/payments_orders_p','Past Bookings');?></td>


<td width="140px" id="<?php if( $function_name == 'payments_orders') { echo 'menu_active';  } ?>" class="green-btn" style="text-align:center; margin:0px 5px 0px 9px; font-weight:bold; height:22px"><?php echo anchor('admin_deck_area_booking/payments_orders','Current Bookings');?></td>
</tr>
</table>