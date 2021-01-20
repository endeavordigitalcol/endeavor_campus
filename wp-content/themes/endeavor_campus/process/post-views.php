<?php

function post_views(){
    global $post;

    if( !is_single() )
        return;

    $post_views = get_post_meta( $post->ID, 'post_views', true );

    $post_views = empty($post_views) ? 0 : $post_views;
    $post_views++;
    
    update_post_meta($post->ID, 'post_views', $post_views);
}