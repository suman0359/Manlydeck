<?php $this->load->view("top_bottom/header"); ?>
	<div id="login">
	<div class="inner">
<?php

   //echo $_GET['id'];
   
   if($this->session->userdata('user_type') == 'admin')
   {
      $this->load->view("top_bottom/admin_menus"); 
   }
   else{
     
	 $this->load->view("top_bottom/user_default_menus"); 
	
	 /*	 $this->load->view("top_bottom/menus"); */
   
   }

 ?>
	
<table width="600px;" align="center" style="margin-left:25px;">
<tr>
<h3></h3> <br />
</tr>
<tr> 

<?php if($this->session->userdata('user_type') == 'admin') { ?>

<div class="page-title">Booking Calendar  &nbsp; <span class="title-event-info">View Deck Area availability</span></div>

<?php } else { ?>

<div class="page-title">Function Bookings  &nbsp; <span class="title-event-info">Select your Function Date</span></div>

<?php } ?>
</tr>
<br /> <br />

<?php if($this->session->userdata('user_type') != 'admin') { ?>

<div class="space"> <br /> <br />
<!-- <font style="font-family:'BebasNeueRegular'; font-size:14px;"> -->
<p style="font-size:15px; line-height:150%">Our Deck Area has the capacity to host 80-100 guests at a time. If you are expecting more guests, please contact us at <b>33963824</b> or <b>info@manlydeck.com.au</b> to book the complete restaurant!</p>
<p  style="font-size:15px; line-height:150%">Kindly use the calendar below to check for availability of Deck Area for your function. The color code next to the calendar will help you. </p>
<br />

<?php } ?>


<tr style="height:300px">
<td width="20x;"></td>

<?php 

 

if($this->session->userdata('user_type') == 'admin') {

   echo form_open('admin_deck_area_booking/check_available_dates');
}

else {

  echo form_open('user_deck_area_booking/check_available_dates');

}


if($this->session->userdata('user_type') == 'admin') {

$var = 'booking_calender_admin';

		if(date('m')-1){
		
			$last_month_cal_background = 'last_month_cal_background';
		
		}

}
else{
 $var = 'booking_calender_user';
}
?>

<td width="220px;" id="<?php echo $var; ?>" class="<?php  ?>" style="text-align:center; padding: 1px 0; border: 1px dashed;" id="pop-up">
<span style="font-family: arial;">		
<?php 
   echo $calender;
?>
</span>		
</td> 
<td width="111px;">

<table style="font-family: arial,times,verdana; padding-left:10px;" align="right" cellpadding="10px" width="350px" >
<?php if($this->session->userdata('user_type') == 'admin') {?>
<tr><td bgcolor="#6633FF" style="width:20px"></td> <td>Lunch slot available</td></tr>
<tr><td style="background:Yellow; width:20px"></td> <td>Dinner slot available</td></tr>
<tr><td style="background:#00FF00; width:20px"></td> <td>Both slots available</td></tr>
<tr><td style="background:#FF0000; width:20px"></td> <td>Both slots booked</td></tr>
<tr><td></td> <td></td></tr>
<tr> <td colspan="2" align="left"><b>Select Function Date</b> &nbsp; &nbsp; <input name="booking_date" id="check_in"  type="text" required="required"> </td>  </tr>
<tr>
<td colspan="2"><span><input value="Book Deck Area" class="book-function-btn"  tabindex="4" type="submit" onclick="return booking_slot()"></span></td>
</tr>
<!--<tr bgcolor="black" style="font-size:16px; font-weight:bold">
<td class="book_customer" colspan="2"><?php //echo anchor('admin_deck_area_booking/admin_adds_customer','Book Customer');?></td>
</tr>-->
<?php } else { ?>
<tr><td bgcolor="#6633FF" style="width:20px"></td> <td>Lunch slot available</td></tr>
<tr><td style="background:Yellow; width:20px"></td> <td>Dinner slot available</td></tr>
<tr><td style="background:#00FF00; width:20px"></td> <td>Both slots available</td></tr>
<tr><td style="background:#FF0000; width:20px"></td> <td>Both slots booked</td></tr>
<tr><td></td> <td></td></tr>
<tr> <td colspan="2" align="left"><b>Select Function Date</b> &nbsp; &nbsp; <input name="booking_date" id="check_in"  type="text" required="required"> </td>  </tr>
<tr>
<td colspan="2"><span><input value="Book Deck Area" class="book-function-btn"  tabindex="4" type="submit" onclick="return booking_slot()"></span></td>
</tr>
<?php  } ?>
</table>
</td>
</tr>
<tr>

</tr>
</table>
	
</form>	
	
	
</div>
</div>
<script type="text/javascript" src="<?php echo base_url();?>js/datepickr.js"></script>
<script type="text/javascript">	
new datepickr('check_in', {
'dateFormat': 'd-m-Y',
'minDate' : 0
});
</script>
<?php $this->load->view("top_bottom/footer"); ?>