<?php

function pf_activate_plugin(){
    // Version review
    if( version_compare( get_bloginfo( 'version' ), '5.0', '<' ) ){
        wp_die( __( "You must update Wordpress to use this plugin.", 'recipe') );
    }

    pf_init();
    flush_rewrite_rules();
}