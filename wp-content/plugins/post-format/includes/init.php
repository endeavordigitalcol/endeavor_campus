<?php

function pf_init(){
    
    $labels = array(
        'name'              => _x( 'Post formats', 'Taxonomy general name' ),
        'singular_name'     => _x( 'Post format', 'Taxonomy singular name' ),
        'edit_item'         => __( 'Edit Post Format' ),
        'update_item'       => __( 'Update Post Format' ),
        'add_new_item'      => __( 'Add New Post Format' ),
        'new_item_name'     => __( 'New Post Format Name' ),
        'menu_name'         => __( 'Post Format' )
    );
    
    $args = array(
        'labels'            => $labels,
        'description'       => __( 'Post format' ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => [ 'slug' => 'format' ],
    );

    register_taxonomy('custom_post_format', [ 'post' ], $args);
}