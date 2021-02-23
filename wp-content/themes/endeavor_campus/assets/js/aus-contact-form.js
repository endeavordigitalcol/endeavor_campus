(function ($){
    $('#aus-contact-form-button').on('click', e => {
        e.preventDefault();

        form = {
            action: 'aus_contact_form',
            name:   $('#name').val(),
            email:  $('#email').val(),
            msg:    $('#mensaje').val()
        }

        $.post(filter_obj.ajax_url, form).always(function (data){});
    });
})(jQuery);