(function ($) {
    $('#fb-share').click(() => {
        FB.ui({
            display: 'popup',
            method: 'share',
            href: $(location).attr('href'),
        }, function (response) { });
    });
    $('#tw-share').click(() => {
        let tw_url = 'https://twitter.com/share?url=';
        window.open( tw_url + $(location).attr('href') );
    });
    $('#in-share').click(() => {
        let in_url = 'https://www.linkedin.com/sharing/share-offsite/?url=';
        window.open( in_url + $(location).attr('href') );
    });
    $('#copy-link').click(() => {
        let $temp = $("<input>");
        $('#copy-link').append($temp);
        $temp.val($(location).attr('href')).select();
        document.execCommand("copy");
        $temp.remove();
    });
})(jQuery);