<?php

function filter_content_click()
{
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $sector   = isset($_POST['sector']) ? $_POST['sector'] : '';
    $format   = isset($_POST['format']) ? $_POST['format'] : '';

    $query_args = array(
        'category_name'     =>  $category,
        'tax_query'         => array(
            'relation'  => 'AND',
            array(
                'taxonomy'  => 'custom_post_sector',
                'field'     => 'slug',
                'terms'     => $sector
            ),
            array(
                'taxonomy'  => 'custom_post_format',
                'field'     => 'slug',
                'terms'     => $format
            )
        )
    );

    $filter_query = new WP_Query($query_args);
    $contents = [];

    global $post;

    if ($filter_query->have_posts()) {
        while ($filter_query->have_posts()) {
            $filter_query->the_post();

            $content = array(
                'title'     => get_the_title(),
                'link'      => get_the_permalink(),
                'category'  => get_the_category(),
                'thumbnail' => get_the_post_thumbnail( null, 'post-thumbnail', array('class' => 'w-100')),
                'date'      => $post->post_date,
                'read_time' => get_post_meta( $post->ID, 'Tiempo de lectura', true )
            );

            array_push( $contents, $content );
        }
    }

    wp_send_json( $contents );
}
