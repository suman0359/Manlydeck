<table width="960px;" align="center">
<tr>
<br />
<!-- <h4 style="text-align:center;">USER PROFILE PAGE</h4> -->
</tr>
<tr>
<?php $function_name = $this->uri->segment(2); ?>
<td width="215px" id="<?php if( $function_name == 'view_profile' || $function_name == 'save_update_details') { echo 'menu_active';  } ?>" class="green-btn" style="text-align:center; margin:0px 5px 0px 70px; font-weight:bold; height:22px" class="side"><?php echo anchor('user_deck_area_booking/view_profile','Your Profile');?></td>
<td width="215px" id="<?php if( $function_name == 'nobookingslot' || $function_name == 'user_view_categories' || $function_name == 'return_url' || $function_name == 'cancel_url' || $function_name == 'check_available_dates' || $function_name == 'show' || $function_name == 'view_booked_dates' || $function_name == 'category_products' || $function_name == 'add_to_combination' || $function_name == 'add_to_cart' || $function_name == 'user_checkout_page' || $function_name == 'platter_payment_gateway') { echo 'menu_active';  } ?>" class="green-btn" style="text-align:center; margin:0px 30px 0px 30px; font-weight:bold; height:22px" class="side"><?php echo anchor('User_online_platter_system/view_booked_dates','Function Bookings');?></td>
<td width="215px" id="<?php if( $function_name == 'onl_pla_sucess_trans') { echo 'menu_active';  } ?>" class="green-btn" style="text-align:center; margin:0px 50px 0px 5px; font-weight:bold; height:22px" class="side"><?php echo anchor('User_online_platter_system/onl_pla_sucess_trans','Platter Order History');?></td>
</tr>
</table>  