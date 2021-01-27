<?php 

get_header(); 
$banner_args = array(
    'desktop-banner' => 'https://endeavorcampus.com/wp-content/uploads/2021/01/banner_Banner-contenidos.png',
    'mobile-banner'  => 'https://endeavorcampus.com/wp-content/uploads/2021/01/banner_Banner-contenidos-Mobile.png'
);
get_template_part('inc/partials/main-banners', null, $banner_args);

?>

<section class="page-description">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h2 class="text-center">
                    <?php  _e('CATEGORÍAS DE CONTENIDO', 'campus') ?>
                </h2>
                <p class="text-center pt-3">
                ¿Cuál es el reto de tu empresa que quieres resolver?<br>
                Selecciona el área de tu emprendimiento en la que tienes un desafío.<br>
                ¡Seguro tenemos un contenido para ayudarte a resolverlo! 
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/partials/filter-block-contents') ?>

<section>
    <div class="container">
        <div class="row">
            <?php
            $cats = get_categories( array( 'hide_empty' => false ) );

            foreach ($cats as $cat) {
                $cat_img = get_term_meta( $cat->term_id );
            ?>

                <div class="col-sm-4">
                    <div class="cat-card">
                        <a href="<?php echo home_url('categorias/').$cat->slug ?>">
                            <img src="<?php echo $cat_img['img'][0] ?>" alt="<?php echo $cat->name ?>">
                        </a>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php

$featured_post = get_post(188);
$featured_post_args = array(
    'thumbnail'     => get_the_post_thumbnail($featured_post->ID),
    'title'         => $featured_post->post_title,
    'excerpt'       => $featured_post->post_excerpt,
    'link'          => get_post_permalink($featured_post->ID)
);

var_dump($featured_post_args['link']);

get_template_part('inc/partials/special-content', null, $featured_post_args);

$featured_resource = get_post(80);
$featured_resource_args = array(
    'thumbnail'     => get_the_post_thumbnail($featured_resource->ID),
    'title'         => $featured_resource->post_title,
    'excerpt'       => $featured_resource->post_excerpt,
    'link'          => get_post_permalink($featured_resource->ID)
);

get_template_part('inc/partials/special-resource', null, $featured_resource_args);
get_template_part('inc/partials/nl-suscription');
get_template_part('inc/partials/popular-contents');
get_footer(); 

?>