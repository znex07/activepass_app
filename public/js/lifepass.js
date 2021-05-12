$(window).on('load',function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");
    $("#example-basic").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        autoFocus: true
    });
});
