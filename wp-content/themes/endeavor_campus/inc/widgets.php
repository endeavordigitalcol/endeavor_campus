<?php

function ca_widgets(){
    register_sidebar([
        'name'          => __('Endeavor Campus sidebar', 'campus'),
        'id'            => 'ca_sidebar',
        'description'   => __('Sidebar for Endeavor Campus Site', 'campus'),
        'before_widget' => '<div class="sidebar-content">',
        'after_widhet'  => '</div>',
        'before_title'  => '<h4 class="sidebar-title">',
        'after_title'   => '</h4>'
    ]);
}