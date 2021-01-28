(function ($) {
    $(document).on('click', '#submit-button-filter', function (e) {
        e.preventDefault();

        let form = {
            action: 'filter_content_click',
            category: $('#category-content').val(),
            sector: $('#sector-content').val(),
            format: $('#format-content').val(),
        };

        $.post(filter_obj.ajax_url, form).always(function (data) {
            $("#spinner").show();
            show_contents(data);
        });
    })

    function show_contents(contents) {
        $('#filtered-contents').html('');

        if (contents.length == 0) {
            html = `
                <div class="col-12">
                    <p class="text-center mt-4">
                        No hay contenidos para la busqueda realizada
                    <p>
                </div>`;

            $("#filtered-contents").append(html);
            $("#spinner").hide();

            return;
        }

        contents.forEach((element, index) => {
            if (element.thumbnail.length == 0) {
                element.thumbnail = `
                    <img width="3023" height="1700" src="${filter_obj.file_uri}/assets/images/BannerGenericoPosts.png" class="w-100 wp-post-image" alt="" loading="lazy"></img>`;
            }

            let d = new Date(element.date);

            html = '<div class="col-lg-4 col-md-6 p-3">';
            html += '<div class="lc-card h-100">';
            html += '<div class="lc-card--header">';
            html += '<a href=' + element.link + '>';
            html += element.thumbnail + '</a>';
            html += '<hr class="lc-card--overlay ' + element.category[0].slug + '"></hr></div>';
            html += '<div class="lc-card--body">';
            html += '<h5 class="lc-card--cat-name color-teal">';
            html += '<a href="' + filter_obj.home_url + 'categorias/' + element.category[0].slug + '">';
            html += element.category[0].name + '</a></h5>';
            html += '<img src="' + filter_obj.file_uri + '/assets/images/lc-card.png" alt=""></img>';
            html += '<p><a href="' + element.link + '">' + element.title + '</a></p></div>';
            html += '<div class="lc-card--footer">';
            html += '<p class="lc-card--date">' + d.getDay() + '/' + d.getMonth() + '/' + d.getFullYear() + '</p>';
            html += '<div class="lc-card--time">';
            html += '<p class="color-gray">' + element.read_time + ' min</p></div></div>';

            $('#filtered-contents').append(html);
        })

        $("#spinner").hide();
    }
})(jQuery);