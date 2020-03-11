"use strict";

$(document).ready(function(){


    $(".login_btn").click(function (e) {
        $("#register").toggle("display:", "block");
        e.preventDefault();

    });

     $("#icon").click(function (e) {
        $("#register").toggle();
        e.preventDefault();

     });

    $(window).scroll(function() {
            if ($(this).scrollTop() > 500){
                $('.navbar').addClass('fixed').fadeIn('500');
            }
            if ($(this).scrollTop() < 200){
                $('.navbar').removeClass('fixed').fadeIn('500');
            }
    });


});
