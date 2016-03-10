$(function() {

    var flashMessage = $('.flash-message');

    flashMessage.hide().fadeIn(700, function(){
        setTimeout(function () {
            flashMessage.fadeOut(700);
        }, 4000);
    });


});
