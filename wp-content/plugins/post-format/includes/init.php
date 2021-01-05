<?php

function pf_init(){
    
    $labels_format = array(
        'name'              => _x( 'Post formats', 'Taxonomy general name' ),
        'singular_name'     => _x( 'Post format', 'Taxonomy singular name' ),
        'edit_item'         => __( 'Edit Post Format' ),
        'update_item'       => __( 'Update Post Format' ),
        'add_new_item'      => __( 'Add New Post Format' ),
        'new_item_name'     => __( 'New Post Format Name' ),
        'menu_name'         => __( 'Formatos' )
    );
    
    $args_format = array(
        'labels'            => $labels_format,
        'description'       => __( 'Post format' ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => [ 'slug' => 'format' ],
    );

    $labels_sector = array(
        'name'              => _x( 'Posts sectors', 'Taxonomy general name' ),
        'singular_name'     => _x( 'Post sector', 'Taxonomy singular name' ),
        'edit_item'         => __( 'Edit Post Sector' ),
        'update_item'       => __( 'Update Post Sector' ),
        'add_new_item'      => __( 'Add New Post Sector' ),
        'new_item_name'     => __( 'New Post Sector Name' ),
        'menu_name'         => __( 'Sectores' )
    );

    $args_sector = array(
        'labels'            => $labels_sector,
        'description'       => __( 'Post sector' ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true,
        'rewrite'           => [ 'slug' => 'sector' ],
    );

    register_taxonomy('custom_post_format', [ 'post' ], $args_format);
    register_taxonomy('custom_post_sector', [ 'post' ], $args_sector);
}