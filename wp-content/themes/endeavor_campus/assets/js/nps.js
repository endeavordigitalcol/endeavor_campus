(function ($) {
    function fill_score_html() {
        for (i = 1; i <= 10; i++) {
            html = `
                <div class="form-check form-check-inline form-check-radio">
                    <input type="radio" name="nps-score" id="nps-score-${i}" value="nps-score-${i}" class="form-check-input" required>
                    <label class="form-check-label" for="nps-score-${i}">${i}</label>
                </div>
            `;

            $('#nps-score').append(html);
        }

        html = '';
    }

    $('#nps-button').on('click', e => {
        e.preventDefault();

        form = {
            action:     'nps_form',
            email:      $('#email').val(),
            nps_score:  $('[name=nps-score]:checked').val(),
            reason:     $('#nps-reason').val(),
            themes:     $('#nps-themes').val(),
            formats:    nps_format_checked(),
        }

        if(!form.email || !form.nps_score){
            alert(`Debe diligenciar los campos obligatorios (*)`);
            return;
        }

        $.post(filter_obj.ajax_url, form).always(function (data){
            if(data){
                alert('¡Gracias por su respuesta!');

                window.location.replace(filter_obj.home_url);
            }
        });
    })

    fill_score_html();

    const nps_format_checked = () => {
        checked_items = [];

        $('[name=nps-format]').each((i, e) => {
            if(e.checked){
                checked_items.push(e.value);
            }
        })

        return checked_items;
    }
})(jQuery);