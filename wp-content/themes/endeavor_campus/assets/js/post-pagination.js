(function ($) {
    $('#more-contents-button').on('click', () => {
        const form = {
            action: 'load_more_contents',
            catId: $('#more-contents-button').data('id'),
            page: $('#more-contents-button').data('page')
        }

        $.post(filter_obj.ajax_url, form).always(function (data) {
            $('#more-contents-button').data('page', form.page + 1);
            showPosts(data);
        });
    })

    function showPosts(data) {
        $(data).each((i, e) => {
            html = `
                <div class="col-md-4 p-3">
                    <div class="lc-card h-100">
                        <div class="lc-card--header">
                            <a href="${e.permalink}">
                                ${e.thumbnail}
                            </a>
                            <hr class="lc-card--overlay ${e.category_slug}">
                        </div>
                        <div class="lc-card--body">
                            <h5 class="lc-card--cat-name color-teal">
                                <a href="${filter_obj.home_url}/categorias/${e.category_slug}">
                                    ${e.category_slug == 'cultura-y-rrhh' ? 'Cultura y recursos humanos' : e.category}
                                </a>
                            </h5>
                            <img src="${filter_obj.file_uri}/assets/images/lc-card.png" alt="">
                            <p>
                                <a href="${e.permalink}">${e.title}</a>
                            </p>
                        </div>
                        <div class="lc-card--footer">
                            <p class="lc-card--date">${e.date}</p>
                            <div class="lc-card--time">
                                <p class="color-gray">
                                    <span class="icon-clock"></span> ${e.time} min                               
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            $("#more-contents").append(html);
        })

        console.log($('#more-contents-button').data('page'));
    }
})(jQuery);