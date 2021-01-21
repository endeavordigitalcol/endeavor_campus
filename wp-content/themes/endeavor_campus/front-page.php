<?php get_header() ?>

<section id="slider-home">
    <div class="slider-home--container pt-4">
        <img class="slider-home--img" src="https://endeavorcampus.com/wp-content/uploads/2021/01/banner_Banner-Home.png" alt="">
    </div>

    <div class="slider-home-mobile--container">
        <img class="slider-home--img" src="https://via.placeholder.com/562x675" alt="">
    </div>
</section>

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
                    <div class="swiper-wrapper">
                        <?php get_template_part('inc/partials/slider-categories'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="special-content">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <div class="sc-card">
                    <div class="sc-card--header">
                        <img src="https://via.placeholder.com/600x338" alt="">
                    </div>
                    <div class="sc-card--body">
                        <h2 class="font-weight-bold">
                            CONTENIDO ESPECIAL
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis ut augue sit amet pretium. Mauris ullamcorper ipsum dolor, scelerisque posuere nibh finibus eu.
                        </p>
                        <a class="cat-button" href="#">Ver contenido <span class="icon-Right-arrow btn-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="special-resource">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col">
                <div class="sc-card sp-resource">
                    <div class="sc-card--body">
                        <h2 class="font-weight-bold text-white">
                            RECURSO ESPECIAL
                        </h2>
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis ut augue sit amet pretium. Mauris ullamcorper ipsum dolor, scelerisque posuere nibh finibus eu.
                        </p>
                        <a class="sp-button" href="#">Ver contenido <span class="icon-Right-arrow btn-icon"></span></a>
                    </div>
                    <div class="sc-card--header">
                        <img src="https://via.placeholder.com/600x338" alt="">
                        <div class="sp-resource--overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('inc/partials/nl-suscription') ?>
<?php get_template_part('inc/partials/popular-contents') ?>

<?php get_footer() ?>