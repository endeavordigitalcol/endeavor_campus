<?php

function load_more_contents(){
    $cat_id = isset($_POST['catId']) ? absint($_POST['catId']) : '';
    $page   = isset($_POST['page']) ? absint($_POST['page']) : '';
    $posts = [];

    $category = get_term( $cat_id );

    $args = array(
        'posts_per_page'    => 3,
        'category_name'     => $category->name,
        'paged'             => $page + 1
    );

    $query = new WP_Query( $args );

    if( $query->have_posts() ){
        while( $query->have_posts() ){
            $query->the_post();

            $post['thumbnail']      = get_the_post_thumbnail();
            $post['title']          = get_the_title();
            $post['permalink']      = get_the_permalink();
            $post['date']           = get_the_date('d/m/Y');
            $post['time']           = get_post_meta(get_the_id(), 'Tiempo de lectura', true);
            $post['category']       = $category->name;
            $post['categorySlug']  = $category->slug;

            array_push($posts, $post);
        }
    }

    wp_send_json( $posts );
}