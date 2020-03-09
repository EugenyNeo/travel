"use strict";

$(document).ready(function(){

   /* var input_from;
    var input_to;
    var input_date;

    $("[type=submit], button").on("click", function(){
        input_from =$("input_from");
        input_to =$("input_to");
        input_date =$("input_date");
        alert("From =  "+input_from.toString() + "To = "+ input_to.toString() + " Data: " + input_date.toString() );
    });*/

   /* $( ".fas" ).click(function() {
        $(".menu").css("display:","block");

    });*/

    $(window).scroll(function() {
            if ($(this).scrollTop() > 500){
                $('.navbar').addClass('fixed').fadeIn('500');
            }
            if ($(this).scrollTop() < 200){
                $('.navbar').removeClass('fixed').fadeIn('500');
            }
    });


});



