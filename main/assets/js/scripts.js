/*!
    * Start Bootstrap - Agency v6.0.3 (https://startbootstrap.com/theme/agency)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
    */
    (function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
            ) {
            var target = $(this.hash);
        target = target.length
        ? target
        : $("[name=" + this.hash.slice(1) + "]");
        if (target.length) {
            $("html, body").animate(
            {
                scrollTop: target.offset().top - 72,
            },
            1000,
            "easeInOutExpo"
            );
            return false;
        }
    }
});

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    $(document).ready(function() {
        $('.plant').trigger('click');
    })

    $(document).ready(function() {
        $('.rope').trigger('click');
    })

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 74,
    });

    // Collapse Navbar
    var navbarCollapse = function () {
        if ($("#mainNav").offset().top > 500) {
            $("#mainNav").addClass("navbar-shrink");
            $("#mainNav").addClass("shadow");
            $(".whatsapp-icon").fadeIn();
            $('#tombolScrollTop').fadeIn();

        } else {
            $("#mainNav").removeClass("navbar-shrink");
            $("#mainNav").removeClass("shadow");
            $("#mainNav").addClass("fixed-top");
            $(".whatsapp-icon").fadeOut();
            $('#tombolScrollTop').fadeOut();
            
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);
})(jQuery); // End of use strict
// $(document).ready(function(){
//   $(".about-image").mouseleave(function(){
//     $(".about-commit-text").fadeIn();
//     $(".about-commit-text").fadeIn("slow");
//     $(".about-commit-text").fadeIn(3000);
//     $(".about-commit-text2").fadeOut();
//     $(".about-commit-text2").fadeOut("slow");
//     $(".about-commit-text2").fadeOut(3000);
// });
//   $(".about-image").mouseenter(function(){
//     $(".about-commit-text").fadeOut();
//     $(".about-commit-text").fadeOut("slow");
//     $(".about-commit-text").fadeOut(3000);
//     $(".about-commit-text2").fadeIn();
//     $(".about-commit-text2").fadeIn("slow");
//     $(".about-commit-text2").fadeIn(3000);
// });
// });
$(document).ready(function(){
    $(".preloader").fadeOut();
})

// $(document).ready(function(){
//     $("#carouselTagline").fadeOut(6000);
// })
function scrolltotop()
{
    $('html, body').animate({scrollTop : 0},500);
}
$(document).ready(function(){
    load_data();
    function load_data(size, qty)
    {
        $.ajax({
            method:"POST",
            url:"http://localhost/cococreative/Order/harga",
            data: {size: size, qty:qty},
            success:function(hasil)
            {
                $('#harga').html(hasil);
            }
        });
    }
    $('#qty').keyup(function(){
        var size = $("#size").val();
        var qty = $("#qty").val();
        load_data(size, qty);
    });
    $('#size').change(function(){

        var size = $("#size").val();
        var qty = $("#qty").val();
        load_data(size, qty);
    });
});