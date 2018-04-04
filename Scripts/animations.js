//typewriter effect on marquee.
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

    //activate section header animations when the div is in the middle of the viewing window.

    var h = window.innerHeight;
    var top1 = h + h - 100;
    var top1remove = h + (h / 4);
    var top2 = h + h + h + h - 300;
    var top2remove = h + h + h;

    console.log(top);

    if ($(this).scrollTop() > top1) {
        $('.overlay1').addClass("scale-and-skew");
    }

    if ($(this).scrollTop() < top1remove) {
        $('.overlay1').removeClass("scale-and-skew");
    }

    if ($(this).scrollTop() > top2) {
        $('.overlay1').removeClass("scale-and-skew");
        $('.overlay2').addClass("scale-and-skew");
    }

    if ($(this).scrollTop() < top2remove) {
        $('.overlay2').removeClass("scale-and-skew");
    }

    //activate sticky nav when static nav moves off the top of the scroll area and stick it to the top. 

    if ($(this).scrollTop() > 159) {
        $('.sticky-nav').addClass("show-sticky-nav flex-div")
    }

    if ($(this).scrollTop() < 159) {
        $('.sticky-nav').removeClass("show-sticky-nav flex-div")
    }

});

//Smooth scroll instead of jumping to anchor links.

var $root = $('html, body');

$('a[href^="#"]').click(function () {
    $root.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 600);

    return false;
});






$(window).resize(function () { location.reload(); });



