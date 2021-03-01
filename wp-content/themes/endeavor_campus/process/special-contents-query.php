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

?>

<div class="col-12 mt-3 mb-3">
    <p class="text-center">
        <a href="<?php echo home_url('tag/' . $args['tag']) ?>" class="button">
            Ver más <span class="icon-Right-arrow"></span>
        </a>
    </p>
</div>

<?php wp_reset_postdata(); ?>