$(window).on("load", function () {
    $('.animation-element1').addClass("in-view");
})

$(window).scroll(function () {
    // if ($(this).scrollTop() > 100) {
    //     $('.animation-element1').addClass("in-view");
    // }
    if ($(this).scrollTop() > 700) {
        $('.animation-element2').addClass("in-view");
    }

    if ($(this).scrollTop() > 159) {
        $('.sticky-nav').addClass("show-sticky-nav flex-div")
    }

    if ($(this).scrollTop() < 159) {
        $('.sticky-nav').removeClass("show-sticky-nav flex-div")
    }

});

var $root = $('html, body');

$('a[href^="#"]').click(function () {
    $root.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 600);

    return false;
});

$(window).resize(function () { location.reload(); });



