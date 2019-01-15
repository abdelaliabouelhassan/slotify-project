
$(document).ready(function(){
       
$("#registerform").hide();

});

$(document).ready(function(){

     $("#khabilogin").click(function(){
             
             $("#loginform").hide() ;
              $("#registerform").show();

     });

     $("#khabiregister").click(function(){

              $("#registerform").hide();
              $("#loginform").show();

     });

});

