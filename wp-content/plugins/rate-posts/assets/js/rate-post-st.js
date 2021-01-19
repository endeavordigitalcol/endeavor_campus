(function ($) {
    const stars = $(".icon-star");

    if ($('#rating-list').data('rateit-readonly') == false || $('#rating-list').data('rateit-readonly') == null) {
        $("#rating-list").on("mouseover", () => {
            stars.each(function (index, element) {
                $(element).on(
                    "mouseover", () => {
                        for (let i = index; i >= 0; i--) {
                            stars[i].style.color = "var(--red)";
                        }
                    }
                );
                $(element).on(
                    "mouseleave", () => {
                        for (let i = index; i >= 0; i--) {
                            stars[i].style.color = "rgb(200, 200, 200)";
                        }
                    }
                );
            });
        })

        $("#rating-list").on("mouseleave", () => {
            stars_style($('#rating-list').data('rateit-value'));
        });

        stars.each(function (index, element) {
            $(element).on(
                "click", () => {

                    let form = {
                        action: 'r_rate_post',
                        pid: $("#rating-list").data('pid'),
                        rating: index
                    }

                    $.post(rate_post_obj.ajax_url, form, function (data) {
                        if (data.status == 2) {
                            $('#rating-list').data('rateit-value', data.rating);
                            $('#rating-list').attr('data-rateit-readonly', true);
                            stars_style(data.rating);
                        }
                    });
                }
            );
        })
    }

    function stars_style(num = 0) {
        for (i = 0; i < num; i++) {
            stars[i].style.color = "rgb(255, 102, 102)";
        }
    }

    stars_style($('#rating-list').data('rateit-value'));
})(jQuery);