$(window).on("load", function () {
    $(".headline").addClass("headline-load");
    $(".circle").addClass("circle-load");

})

$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.animation-element1').addClass("in-view");
    }
    if ($(this).scrollTop() > 1200) {
        $('.animation-element2').addClass("in-view");
    }
});


// else {
//     $('.animation-element').removeClass("in-view");
// }

$(window).resize(function () { location.reload(); });



