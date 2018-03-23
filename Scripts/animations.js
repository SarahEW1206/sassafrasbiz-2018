$(window).on("load", function () {
    $(".headline").addClass("headline-load");
    $(".circle").addClass("circle-load");

})

$(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
        $('.animation-element').addClass("in-view");
    }
});


// else {
//     $('.animation-element').removeClass("in-view");
// }

$(window).resize(function () { location.reload(); });



