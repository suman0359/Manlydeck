$(document).ready(function(){

    //$('#check_in').datepicker({ dateFormat: 'dd-mm-yy' }).val();
    $('#username').blur(function(){

        if( $('#username').val().length >= 3 )
            {
              var username = $('#username').val();
              getResult(username); 
            }
        return false;
    })
    function getResult(name){
        var baseurl = $('.hiddenUrl').val();
        $('.checkUser').addClass('preloader');
        $.ajax({
            url : baseurl + 'getResultfromdb/' + name,
            cache : false,
            success : function(response){
                $('.checkUser').removeClass('preloader');
                if(response == 'userOk') $('.checkUser').removeClass('userNo').addClass('userOk');
                else $('.checkUser').removeClass('userOk').addClass('userNo');;
            }
        })
    }
})


$(function(){    
   $("#username").click(function(){           
     
	 alert('manju');
	 $.post("ajaxserverpage.php?data1=your_data_to_pass&data2=second_value",function(data){
         //do something with the response which is available in the "data" variable
     });
   });
  return false;    
});