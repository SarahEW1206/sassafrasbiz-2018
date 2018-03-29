var i = 0;
var txt = 'Web design with a smile! :)'; /* The text */
var speed = 100; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
    if (i < txt.length) {
        document.getElementById("headline-text").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
};

window.onload = typeWriter;

$(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
        $('.animation-element1').addClass("in-view");
    }
    if ($(this).scrollTop() > 1000) {
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



