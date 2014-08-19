/* English/UK initialisation for the jQuery UI date picker plugin. */
/* Written by Stuart. */
jQuery(function($){
	$.datepicker.regional['en-GB'] = {
		closeText: 'Done',
		prevText: 'Prev',
		nextText: 'Next',
		currentText: 'Today',
		monthNames: ['January','February','March','April','May','June',
		'July','August','September','October','November','December'],
		monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
		'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
		dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		dayNamesMin: ['Su','Mo','Tu','We','Th','Fr','Sa'],
		weekHeader: 'Wk',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	$.datepicker.setDefaults($.datepicker.regional['en-GB']);
});

function check()
{

var r=confirm("Are you sure that you want to delete this Platter Category?")
if (r==true)
  {
      return true;
  }
else
  {
  return false;
  }
}

function check1()
{

	var r=confirm("Are you sure that you want to delete this Platter Item?")
	
	if (r==true)
	  {
		  return true;
	  }
	else
	  {
	  return false;
	  }
}

function paid_customer(){
	
var r=confirm("Are you sure that you want to delete this Paid Platter Order?")
	if (r==true)
	  {
		  return true;
	  }
	else
	  {
	  return false;
	  }	
	
	
}

function unpaid_customer(){
	
var r=confirm("Are you sure that you want to delete this Unpaid Platter Order?")
	if (r==true)
	  {
		  return true;
	  }
	else
	  {
	  return false;
	  }	
	
	
}


function shipment(){
	
var r=confirm("Do You Really Want to Delete Shipping Location!")
	if (r==true)
	  {
		  return true;
	  }
	else
	  {
	  return false;
	  }		
	
}


function test111(){
  
var select_date = document.getElementById('select_date').value;
	
alert(select_date);

var currentDate = new Date('d/m/Y')

alert(currentDate);


var oneDay = 24*60*60*1000;

/*var secondDate = new Date(year,month,dat);

alert(secondDate);*/


var diffDays = Math.round(Math.abs((currentDate.getTime() - select_date.getTime())/(oneDay)));

alert(diffDays);


}


var DateDiff = {
 
    inDays: function(d1, d2) {
        var t2 = d2.getTime();
        var t1 = d1.getTime();
 
        return parseInt((t2-t1)/(24*3600*1000));
    }
}


function datediffer(){

	var dString = document.getElementById("select_date").value;
	var d1 = new Date(dString);
	var d2 = new Date();
	var d3 = DateDiff.inDays(d2, d1);
	
	var shipment_city = document.getElementById("shipment_city").value;
	
	
	var payment_type = document.getElementById('payment_type').checked;
 
		 var payment_type1 = document.getElementById('payment_type1').checked;	
		
		if(payment_type == false && payment_type1 == false){
			 
			  alert("Please select 'Payment Type'!");  
			  return false;
		 }
	
	
	if(shipment_city == 'Select City') {
		
		alert('Please Select The City');
		return false;	
	}
	
	if(d3 <= 7){
		
		alert('The Selected Date Is Not Available Please Select 7days in Advance');
		var dString = document.getElementById("select_date").value='';
		return false;
		
	}
	else{
		
	   return true;	
	}

}


function check_combination(){
		
	 var select11 = document.getElementById('cart_combination').value;
	   
	   if(select11 > 5) {
	   
	   alert('You can have a maximum of only 5 Items in a Platter!');
	    return false;
		
	   }
	
	var category_name0 = document.getElementById('category_name-0').value;    
	
	var category_name1 = document.getElementById('category_name-1').value;
	
    if(((category_name0 == 'cold')&& (category_name1 == 'cold')) || ((category_name0 == 'hot')&& (category_name1 == 'hot'))) 
	{
		return true;
	}
	else{
		
		alert('You cannot mix Hot & Cold Items in a single Platter! Please order separate Platters!');
		return false;
	}
	
}



function check_cart2() {
	
	var selected_products = document.getElementById('selected_products').value;
	
	if(selected_products == '1') {
	
	alert('There are no Items in the Platter!'); 
	
	  return false;
	
	}
	else {
		
	    return true;	
	}
	
	
}




function check_cart1(){
	
	
	var selected_products = document.getElementById('selected_products').value;
	
	if(selected_products == '1') {
	
	alert('There is no Platter to add!'); 
	
	return false;
	
	}
	
	
	
	
	var result = document.getElementById('category_name-1').value;
	 
	 var result1 = document.getElementById('category_name-2').value;
	
	 if( (result == 'hot' && result1 == 'hot') || (result == 'cold' && result1 == 'cold' )) {
			
			   return true;
		
			}
			
			else{
				
			   alert("Please Select Both The Food Platters From The Same Category" + '\n' + "Please Remove Food Platters And Select Again");
			   
			   return false;
				
			}
		
	
var cart_value = document.getElementById('cart_check').value;

  
  alert(cart_value);
  
  if(cart_value == '1'){
		
		alert('Please Select atleast 2 platters');
		
		return false;	
	}
	
	else{
	
	   return true;
	}
	
	
}

function delivery(){
	
    document.getElementById('shipment').style.display='block';
    document.getElementById('shipment1').style.display='block';
    document.getElementById('shipment3').style.display='block';
    document.getElementById('shipment4').style.display='block';
	 document.getElementById('shipment9').style.display='block';
   document.getElementById('shipment10').style.display='block';
	
	 
	
}

function pickup(){
	
   document.getElementById('shipment').style.display='none';
   document.getElementById('shipment1').style.display='none';
   document.getElementById('shipment3').style.display='none';
   document.getElementById('shipment4').style.display='none';
   document.getElementById('shipment9').style.display='none';
   document.getElementById('shipment10').style.display='none';
   
    var value1 = document.getElementById('total_amount').value; 
   
  document.getElementById('grand_amount').value = value1;
  
  document.getElementById('shipment3').value = 0; 
}

function checkpayment_type(){
	
 var payment_type = document.getElementById('payment_type').checked;
 
 var payment_type1 = document.getElementById('payment_type1').checked;	

if(payment_type == false && payment_type1 == false){
	 
	  alert("Please select 'Payment Type'!");  
	  return false;
 }
	
}


function datediffer1(){
	
var dString = document.getElementById("select_date").value;
	
	    var d1 = new Date(dString);
	
	    var database_date = document.getElementById("dab_date").value;
	
	    var dab_date = new Date(database_date);
		 
		var check_date = DateDiff.inDays(dab_date, d1); 
	
    	//var d2 = new Date();
	
	
	//var d3 = DateDiff.inDays(d2, dab_dates);
		 
	if( dString == ''){
		
	   alert('Please Enter the Date');	
	   return false;
		
	 }

	var payment_type = document.getElementById('payment_type').checked;
 
	 var payment_type1 = document.getElementById('payment_type1').checked;	
	
	if(payment_type == false && payment_type1 == false){
		 
		  alert("Please select 'Payment Type'!");  
		  return false;
	 }
	
	
	if( check_date <= 7){
		
		alert('The Selected Date Is Not Available Please Select 7days in Advance');
		
		var dString = document.getElementById("select_date").value='';
		
		return false;
		
	}
	else{
		
	   return true;	
	}
	
	
}


function datediffer2(){
	
	var payment_type = document.getElementById('payment_type').checked;
 
	 var payment_type1 = document.getElementById('payment_type1').checked;	
	
	if(payment_type == false && payment_type1 == false){
		 
		  alert("Please select 'Payment Type'!");  
		  return false;
	 }
	
	
}

$("#mainMenu td").click(function() {
    $(this).addClass('selected');
});



