<?php 

get_header(); 
$banner_args = array(
    'desktop-banner' => 'https://endeavorcampus.com/wp-content/uploads/2021/02/Banner_Recursos.png',
    'mobile-banner'  => 'https://endeavorcampus.com/wp-content/uploads/2021/02/Banner_Recursos_Movil.png'
);
get_template_part('inc/partials/main-banners', null, $banner_args);

?>

<section>
    <div class="container">
        <div class="row pt-5">
            <?php

            $rec_args = array(
                'tax_query'         => array(
                    array(
                        'taxonomy'  => 'custom_post_format',
                        'field'     => 'slug',
                        'terms'     => 'Recurso'
                    )
                ),
                'posts_per_page'    => 12
            );

            $rec_query = new WP_Query($rec_args);

            if ($rec_query->have_posts()) {
                while ($rec_query->have_posts()) {
                    $rec_query->the_post();

                    $args = array(
                        'cat'   => get_the_category(),
                    );

                    get_template_part('inc/partials/content', 'post', $args);
                }
            }

            ?>
        </div>
        <div id="more-contents" class="row"></div>
        <div class="row pt-4">
            <div class="col text-center">
                <a 
                    id="more-contents-button"
                    class="cat-button"
                    data-category="<?php echo $args['cat'][0]->slug ?>"
                    data-id="<?php echo $args['cat'][0]->term_id ?>"
                    data-page="1"
                >
                    Cargar más contenidos
                </a>
                <hr class="div-bar mt-4">
            </div>
        </div>
    </div>
</section>

<section class="bg-lgray pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold">
                    <?php _e('CATEGORÍAS DE CONTENIDO', 'campus') ?>
                </h2>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col">
                <div class="swiper-container swiper-cat-home">
                    <?php get_template_part('inc/partials/slider-categories') ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/partials/nl-suscription') ?>
<?php get_template_part('inc/partials/popular-contents') ?>
<?php get_footer(); ?>

<?php get_footer(); ?>