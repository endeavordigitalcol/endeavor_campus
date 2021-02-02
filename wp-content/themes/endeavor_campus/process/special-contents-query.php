<?php

$special_query = new WP_Query($args);

if ($special_query->have_posts()) {
    while ($special_query->have_posts()) {
        $special_query->the_post();

        $special_query_args = array(
            'cat' => get_the_category()
        );

        get_template_part('inc/partials/content-post', null, $special_query_args);
    }
}

wp_reset_postdata();
