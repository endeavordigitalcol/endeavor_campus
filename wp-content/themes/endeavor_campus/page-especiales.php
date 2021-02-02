<?php

get_header();
$banner_args = array(
    'desktop-banner' => 'https://endeavorcampus.com/wp-content/uploads/2021/02/Banner_Especiales.png',
    'mobile-banner'  => 'https://endeavorcampus.com/wp-content/uploads/2021/02/Banner_Especiales_Movil.png'
);
get_template_part('inc/partials/main-banners', null, $banner_args);

?>

<section id="podcast">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1><?php _e('PODCAST', 'campus') ?></h1>
            </div>
            <div class="col-lg-10">
                <p class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat posuere porta. Duis ac est dapibus, posuere velit in, scelerisque magna. Duis gravida, nisi nec vehicula dapibus, magna nibh fringilla sapien, at pellentesque sapien mi vitae metus. Suspendisse vulputate dui ligula. Pellentesque et velit at augue iaculis dignissim. Etiam sed diam justo.
                </p>
            </div>
        </div>
        <div class="row" id="think-big">
            <div class="col-12">
                <h2>
                    <?php _e('Think Big', 'campus') ?>
                </h2>
            </div>
            <?php
            $args = array(
                'posts_per_page'    => 3,
                'tag'               => 'Think-big',
                'tax_query'         => array(
                    array(
                        'taxonomy'  => 'custom_post_format',
                        'field'     => 'slug',
                        'terms'     => 'podcast'
                    )
                )
            );

            get_template_part('process/special-contents-query', null, $args);
            ?>
        </div>
        <div class="row" id="tour-endeavor">
            <div class="col-12">
                <h2>
                    <?php _e('Tour Endeavor', 'campus') ?>
                </h2>
            </div>
            <?php
            $args = array(
                'posts_per_page'    => 3,
                'tag'               => 'tour-endeavor',
                'tax_query'         => array(
                    array(
                        'taxonomy'  => 'custom_post_format',
                        'field'     => 'slug',
                        'terms'     => 'podcast'
                    )
                )
            );

            get_template_part('process/special-contents-query', null, $args);
            ?>
        </div>
    </div>
</section>

<section id="momento">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1><?php _e('MOMENTO', 'campus') ?></h1>
            </div>
            <div class="col-lg-10">
                <p class="mt-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat posuere porta. Duis ac est dapibus, posuere velit in, scelerisque magna. Duis gravida, nisi nec vehicula dapibus, magna nibh fringilla sapien, at pellentesque sapien mi vitae metus. Suspendisse vulputate dui ligula. Pellentesque et velit at augue iaculis dignissim. Etiam sed diam justo.
                </p>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'posts_per_page'    => 3,
                'tag'               => 'momento,momento-endeavor',
            );

            get_template_part('process/special-contents-query', null, $args);
            ?>
        </div>
    </div>
</section>

<?php get_footer() ?>