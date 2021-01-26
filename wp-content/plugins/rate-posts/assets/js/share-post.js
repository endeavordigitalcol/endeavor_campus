(function($){
    $('#fb-share').click(() => {
        fb_sharer = 'https://www.facebook.com/sharer/sharer.php?u=';
        window.open( fb_sharer + $(location).attr('href') );
    })
})(jQuery);