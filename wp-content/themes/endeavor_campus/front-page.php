<?php

get_header();
$banner_args = array(
    'desktop-banner' => 'https://endeavorcampus.com/wp-content/uploads/2021/01/banner_Banner-Home.png',
    'mobile-banner'  => 'https://endeavorcampus.com/wp-content/uploads/2021/01/banner_Banner-Home-Mobile.png'
);
get_template_part('inc/partials/main-banners', null, $banner_args);

?>

<section id="home-description">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h2 class="text-center">
                    <?php _e('ENDEAVOR CAMPUS', 'campus') ?>
                </h2>
                <p class="text-center pt-3">
                    Herramientas y contenidos desarrollados por nuestros Emprendedores Endeavor,<br>
                    mentores y aliados que te ayudarán a escalar tu emprendimiento.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="last-content">
    <div class="container">
        <div class="row pt-4">
            <div class="col">
                <h4 class="section-title">
                    ÚLTIMOS CONTENIDOS
                </h4>
            </div>
        </div>
        <div class="row pt-4">
            <?php

            global $post;
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 3
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();

                    $cat = get_the_category();

                    $args = array(
                        'cat' => $cat
                    );

                    get_template_part('inc/partials/content', 'post', $args);
                }
            }
            ?>
        </div>
    </div>
</section>

<section id="cat-home">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="font-weight-bold">
                    CATEGORÍAS DE CONTENIDO
                </h2>
            </div>
            <div class="col-lg-8">
                <p>
                    ¿Cuál es el reto de tu empresa que quieres resolver?<br>
                    Selecciona el área de tu emprendimiento en la que tienes un desafío.<br>
                    ¡Seguro tenemos un contenido para ayudarte a resolverlo!
                </p>
                <a class="cat-button" href="<?php echo home_url('/contenidos') ?>">Ver todas las categorías <span class="icon-Right-arrow btn-icon"></span></a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col">
                <div class="swiper-container swiper-cat-home">
                    <?php get_template_part('inc/partials/slider-categories'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$featured_post = get_post(188);
$featured_post_args = array(
    'thumbnail'     => get_the_post_thumbnail($featured_post->ID),
    'title'         => $featured_post->post_title,
    'excerpt'       => $featured_post->post_excerpt,
    'link'          => get_page_link($featured_post->ID)
);

get_template_part('inc/partials/special-content', null, $featured_post_args);

$featured_resource = get_post(80);
$featured_resource_args = array(
    'thumbnail'     => get_the_post_thumbnail($featured_resource->ID),
    'title'         => $featured_resource->post_title,
    'excerpt'       => $featured_resource->post_excerpt,
    'link'          => get_page_link($featured_resource->ID)
);

get_template_part('inc/partials/special-resource', null, $featured_resource_args);
get_template_part('inc/partials/nl-suscription');
get_template_part('inc/partials/popular-contents');
get_footer(); 

?>