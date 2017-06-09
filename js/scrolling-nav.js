//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $('#toTop').addClass('active');
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $('#toTop').removeClass('active');
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    $.get('http://127.0.0.1:8080/', function(data) {
        $('#testaodaporra').html(data);
    });
});