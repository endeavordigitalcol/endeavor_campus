(function ($) {
    $('#fb-share').click(() => {
        FB.ui({
            display: 'popup',
            method: 'share',
            href: $(location).attr('href'),
        }, function (response) { });
    })
})(jQuery);