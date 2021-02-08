(function ($) {
    $('#more-contents-button').on('click', () => {
        $("#spinner").show();
        
        const form = {
            action: 'load_more_contents',
            catId: $('#more-contents-button').data('id')  || '',
            page: $('#more-contents-button').data('page')
        }

        $.post(filter_obj.ajax_url, form).always(function (data) {
            $('#more-contents-button').data('page', form.page + 1);
            showPosts(data);
        });
    })

    function showPosts(data) {
        if(data.length == 0){
            html = `
                <div class="col-12">
                    <p class="text-center">
                        No hay más contenidos para la categoría
                    <p>
                </div>`;

            $("#more-contents").append(html);
            $("#spinner").hide();

            return;
        }
        $(data).each((i, e) => {
            if(e.thumbnail.length == 0){
                e.thumbnail = `<img width="3023" height="1700" src="${filter_obj.file_uri}/assets/images/BannerGenericoPosts.png" class="w-100 wp-post-image" alt="" loading="lazy"></img>`;
            }

            html = `
                <div class="col-lg-4 col-md-6 p-3">
                    <div class="lc-card h-100">
                        <div class="lc-card--header">
                            <a href="${e.permalink}">
                                ${e.thumbnail}
                            </a>
                            <hr class="lc-card--overlay ${e.categorySlug}">
                        </div>
                        <div class="lc-card--body">
                            <h5 class="lc-card--cat-name color-teal">
                                <a href="${filter_obj.home_url}categorias/${e.categorySlug}">
                                    ${e.categorySlug == 'cultura-y-rrhh' ? 'Cultura y recursos humanos' : e.category}
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
            $("#spinner").hide();
        })
    }
})(jQuery);