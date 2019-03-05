/*
* Slider carousel with interval=false so that if we wanna make
* it slide at some time interval
* we can do so.
* */
$('#recipeCarousel').carousel({
    interval: false
})

$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length>0) {
        next.next().children(':first-child').clone().appendTo($(this));
    }
    else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
});

