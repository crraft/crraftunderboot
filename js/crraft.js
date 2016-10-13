$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

// Menu appear after scrolling dropdown
$("nav").hide();
$(window).scroll(function() {
    if ($(window).scrollTop() > 219) {
        $("nav").fadeIn("slow");
    }
    else {
        $("nav").fadeOut("fast");
    }
});
