<?php get_header() ?>

<section id="slider-home">
    <div class="slider-home--container pt-4">
        <img class="slider-home--img" src="https://via.placeholder.com/1920x500" alt="">
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
                    DESCRIPCIÓN GRANDE
                </h2>
                <p class="text-center pt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                    Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
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
            ?>

                    <div class="col-md-4 p-3">
                        <div class="lc-card h-100">
                            <div class="lc-card--header">
                                <a href="<?php the_permalink() ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('post-thumbnail', array('class' => 'w-100'));
                                    } else {
                                    ?>
                                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                                    <?php
                                    }
                                    ?>
                                </a>
                                <hr class="lc-card--overlay <?php echo $cat[0]->slug ?>">
                            </div>
                            <div class="lc-card--body">
                                <h5 class="lc-card--cat-name color-teal">
                                    <a href="<?php echo home_url('/') . 'categorias/' . $cat[0]->slug ?>">
                                        <?php
                                        if ($cat[0]->name == 'Cultura y RRHH') {
                                            echo 'Cultura y recursos humanos';
                                        } else {
                                            echo $cat[0]->name;
                                        }
                                        ?>
                                    </a>
                                </h5>
                                <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                                <p>
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                </p>
                            </div>
                            <div class="lc-card--footer">
                                <p class="lc-card--date"><?php echo date('d/m/Y', strtotime($post->post_date)) ?></p>
                                <div class="lc-card--time">
                                    <p class="color-gray">
                                        <?php
                                        if (get_post_meta($post->ID, 'Tiempo de lectura', true) != '') {
                                            echo get_post_meta($post->ID, 'Tiempo de lectura', true) . ' min';
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis ut augue sit amet pretium. Mauris ullamcorper ipsum dolor, scelerisque posuere nibh finibus eu.
                </p>
                <a class="cat-button" href="<?php echo home_url('/contenidos') ?>">Ver todas las categorías</a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col">
                <div class="swiper-container swiper-cat-home">
                    <div class="swiper-wrapper">
                        <?php
                        get_template_part( 'inc/partials/slider-categories' );
                        //$categories = get_categories(array('hide_empty' => false));
                        //do_action('get_categories_imgs', $categories);
                        ?>
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
                        <a class="cat-button" href="#">Ver contenido</a>
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
                        <a class="sp-button" href="#">Ver contenido</a>
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

<section class="bg-lgray most-visited">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h3 class="most-visited--title">
                    CONTENIDOS POPULARES
                </h3>
            </div>
        </div>
        <div class="row pt-3 pb-5">
            <div class="col-lg-4">
                <div class="pc-card">
                    <h5 class="pc-card--cat-name color-teal m-0">
                        FINANZAS
                    </h5>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                    <p class="m-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis ut augue sit amet pretium.
                    </p>
                </div>
                <p class="pc-card--date pt-2 font-size-xs">
                    <small>10/01/2020</small>
                </p>
            </div>
            <div class="col-lg-4">
                <div class="pc-card">
                    <h5 class="pc-card--cat-name color-teal m-0">
                        DIGITAL
                    </h5>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                    <p class="m-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis ut augue sit amet pretium.
                    </p>
                </div>
                <p class="pc-card--date pt-2 font-size-xs">
                    <small>10/01/2020</small>
                </p>
            </div>
            <div class="col-lg-4">
                <div class="pc-card">
                    <h5 class="pc-card--cat-name color-teal m-0">
                        ECONOMÍA
                    </h5>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                    <p class="m-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis ut augue sit amet pretium.
                    </p>
                </div>
                <p class="pc-card--date pt-2 font-size-xs">
                    <small>10/01/2020</small>
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>