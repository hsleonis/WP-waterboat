jQuery.fn.dataPanel = function(arr) {
    
};

jQuery(document).ready(function ($) {
    var timer = 700;
    if($(window).width>500)
        timer = 400;
    $(document).on('click','.service-block .readMore-button > div', function () {
        $('#'+$(this).attr('data-slide')).animate({
            'opacity': 1
        }, 1, function () {
            $(this).animate({
               'left': 0
            }, timer);
        });
    });
    $(document).on('click', '.tmx-close-data-panel .close', function () {
        $(this).parents('.bg-service').animate({
            'left': 100+'%'
        }, timer, function () {
            $(this).animate({
                'opacity': 0
            }, 1);
        });
    });
});