<br />
<table width="960px;" align="center">
<tr>
<h4 style="text-align:center">DECK AREA PLATTER MANAGEMENT</h4>
</tr>

<tr>
<td></td>
<td></td>
<td align="right"><?php //echo anchor('admin_deck_area_booking/deck_admin_profile','Deck Area Booking');?></td>
<td align="right"><?php //echo anchor('admin_platter_catering','Platter Delivery / Catering System');?></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<?php $function_name = $this->uri->segment(2); ?>
<td class="green-btn" id="<?php if( $function_name == 'cat_mgmt' || $function_name == 'category_edit' ) { echo 'menu_active';  } ?>" style="width:173px; margin-left:32px" align="center"><?php echo anchor('admin_onli_plat_ord_sys/cat_mgmt','Platter Categories');?></td>

<td class="green-btn" id="<?php if( $function_name == 'prod_mgmt' || $function_name == 'product_edit' ) { echo 'menu_active';  } ?>" style="width:170px; margin-left:20px" align="center"><?php echo anchor('admin_onli_plat_ord_sys/prod_mgmt','Platter Items');?></td>

<td class="green-btn" id="<?php if( $function_name == 'view_paid_bookings' || $function_name == 'edit_paid_cust' ) { echo 'menu_active';  } ?>" style="width:170px; margin-left:20px" align="center"><?php echo anchor('admin_onli_plat_ord_sys/view_paid_bookings','Paid Platter Orders');?></td>

<td class="green-btn"  id="<?php if( $function_name == 'view_unpaid_bookings' || $function_name == 'edit_unpaid_cust' ) { echo 'menu_active';  } ?>" style="width:175px; margin-left:20px" align="center"><?php echo anchor('admin_onli_plat_ord_sys/view_unpaid_bookings','Unpaid Platter Orders');?></td>

</tr>
</table>