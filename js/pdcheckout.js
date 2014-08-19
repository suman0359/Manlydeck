
function shipmentDetails(ths){
	
var value = ths.value;

var splitV = value.split(":");

document.getElementById("ship_city").value = splitV[0];
document.getElementById('ship_amount').value = splitV[1];

var a = parseFloat(splitV[1]); 

var b = parseFloat(splitV[2]);


var result = a + b;

 
document.getElementById('grand_amount').value = result;

}

function checkpayment_type(){
	
 var payment_type = document.getElementById('payment_type').checked;
 
 var payment_type1 = document.getElementById('payment_type1').checked;	

if(payment_type == false && payment_type1 == false){
	 
	  alert("Select Payment Type");  
	  return false;
 }
	
}

var DateDiff = {
 
    inDays: function(d1, d2) {
        var t2 = d2.getTime();
        var t1 = d1.getTime();
 
        return parseInt((t2-t1)/(24*3600*1000));
    }
}


function booking_slot(){

 var book_slot = document.getElementById('check_in').value;

 	//var dString = document.getElementById("check_in").value; 
	var d1 = new Date(book_slot);
	var d2 = new Date();
	var d3 = DateDiff.inDays(d2, d1);
	
	if(d3 < 0){
		
	  alert("Please Select A Valid Date"); 
	   return false; 	
		
	}
 
}


function booking_slot_cust(){  

   var booking_slot_cust = document.getElementById('booking_slot1').value;
  
  if(booking_slot_cust == 'select_book_slot')  
	  { 
	   alert("Please select 'Time of Day'!"); 
	   return false;
	  }
	  
  if(booking_slot_cust == 'not_available') 
	  { 
	   alert("Booking Date Not Available"); 
	   return false;
	  }
}



function check_cart_delete()
{

var r=confirm("Are you sure that you want to delete this Platter from your Cart?")
if (r==true)
  {
      return true;
  }
else
  {
  return false;
  }
}

function booking_slot123(){
	
	
	
	
}
		
function sucess_message(){
	
	alert('Profile successfully updated!');
	
	return true;
	
	
}

$('a').each(function(){
    var a = $(this).attr('title');
    var b = a.replace('lineBreak','\n');
    $(this).attr('title', b);
});

		
		
		$(function(){
		   $('.myclassname .mylink').click(function(){
			  $(this).hide();
			  $('.myclassname .form').show();
			  return false;
		   });
		});
		
		
$('#pops a').hover(function(e) {
    var file = $(this).attr("href").match(/page=(.*)/)[1];
    $('#pop-up').html('file name is ' + file);
    $('#pop-up').show();
    return false
    a.preventDefault();
});