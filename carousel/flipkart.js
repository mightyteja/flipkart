function slideAnimationAbsolute(targetLeft) {
    return function() {
        $('#carousel_cont').animate({
            'left': targetLeft + 'px'
        }, 
        1000);
    };
};

function slideAnimationRelative(offset) {
    return function() {
        $('#carousel_cont').animate({
            'left': (parseInt($('#carousel_cont').css('left'), 10) + offset) + 'px'
        }, 
        1000);
    };
};

$('#carousel_left_ind').click(slideAnimationRelative(204));
$('#carousel_right_ind').click(slideAnimationRelative(-204));