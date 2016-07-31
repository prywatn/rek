$(document).ready(function(){
    $('.cl').click(function(){
        $('.well').toggle(2500);
    });

    $('.addition').click(function(){
        $('.addition').show();
        $('.subtraction').toggle(2500);
        $('.multiplication').toggle(2500);
        $('.division').toggle(2500);    
        $('.element').toggle(2500);
        $('.logarithm').toggle(2500);
    });
   $('.subtraction').click(function(){
        $('.subtraction').show();
        $('.addition').toggle(2500);
        $('.multiplication').toggle(2500);
        $('.division').toggle(2500);    
        $('.element').toggle(2500);
        $('.logarithm').toggle(2500);     
    });

    $('.multiplication').click(function(){
        $('.multiplication').show(2500);
        $('.addition').toggle(2500);
        $('.subtraction').toggle(2500);
        $('.division').toggle(2500);    
        $('.element').toggle(2500);
        $('.logarithm').toggle(2500);     
    });

    
    $('.division').click(function(){
        $('.addition').toggle(2500);
        $('.subtraction').toggle(2500);
        $('.multiplication').toggle(2500);    
        $('.element').toggle(2500);
        $('.logarithm').toggle(2500);
    });

    $('.element').click(function(){
        $('.addition').toggle(1500);
        $('.subtraction').toggle(1500);
        $('.multiplication').toggle(1500);    
        $('.division').toggle(1500);
        $('.logarithm').toggle(1500);
    });

    $('.logarithm').click(function(){
        $('.addition').toggle(1500);
        $('.subtraction').toggle(1500);
        $('.multiplication').toggle(1500);    
        $('.division').toggle(1500);
        $('.element').toggle(1500);
    });
        
});

/* 
$(document).ready(function(){
  
       $("#obdodawanie").click(function(){
                     
           $.ajax({
           type: "GET",
           url:"../controller/controller.php",
           data:{"liczba1":$("#liczba1").val(),
           "liczba2":$("#liczba1").val(),
           
           complete: function() {
            $("#liczba1").hide();
            $("#liczba2").hide();
            $("#odejmowanie").hide();
        },
           
           success: function(msg) {
              $("#liczba").val(console.log(msg));
               alert('ajax działa');
               
           },
           
        error: function() {
            $("#liczba").val( "Wystąpił błąd w połączniu :(");
        }
           
           }
       });
        // alert(suma);
       });
}) */