$(document).ready(function(){
    $number1 = $("#number1");
    $number2 = $("#number2");
   $('#calculate').click(function(){
        $("#number").val("0");
       getajax($number1.val(),$number2.val());
   });
   
    $('#subtraction').click(function(){
        $("#subnumber").val("0");
       getajax($number1.val(),$number2.val());
   });
    
    $('#multiplication').click(function(){
        $("#mulnumber").val("0");
        getajax($number1.val(),$number2.val());
    });

    $('#division').click(function(){
        $("#divnumber").val("0");
        getajax($number1.val(),$number2.val());
    });
    
    $('#element').click(function(){
        $("#elnumber").val("0");
        getajax($number1.val(),$number2.val());    
    });
    
    $('#logarithm').click(function(){
        $("#lognumber").val("0");
        getajax($number1.val(),$number2.val());
    })

})

function getajax(number1,number2){

    $.ajax({
        url:'controller/calculator.php',
        data: { 
            number1 : 2, //number1,
            number2 : 2, //mumber2,
        },
        
        type: 'get',
        
        dataType : 'json',
        
        success : function(json) {
            $('#number').val(json);
        },
        
        error : function(xhr, status) {
        $('.panel, body').css('background-color','#C91F16');
        $('body').html('<a href="index.php"><h1 class="text-center">Sorry an unexpected problem!!</h1></a>');
        },
        
        complete : function(xhr, status) {
//        alert('Żądanie wykonane!');
        $number1.html('<i class="fa fa-shield fa-flip-horizontal"></i> fa-flip-horizontal<br>');
        }
        
    });
}