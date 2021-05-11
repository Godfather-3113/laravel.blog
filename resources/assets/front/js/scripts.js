$(document).ready(function() {

    var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
    };


    $().UItoTop({ easingType: 'easeOutQuart' });

});

// You can also use "$(window).load(function() {"
$(function () {
    // Slideshow 4
    $("#slider4").responsiveSlides({
        auto: true,
        pager:true,
        nav:true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
            $('.events').append("<li>after event fired.</li>");
        }
    });

});

$( "span.menu" ).click(function() {
    $( ".top-menu ul" ).slideToggle(300, function() {
        // Animation complete.
    });
});

jQuery(document).ready(function($) {
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
    });
});

