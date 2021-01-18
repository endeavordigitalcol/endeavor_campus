<?php
get_header();
$category = get_the_category();
?>

<section class="pt-4">
    <div class="slider-home--container categories-hero">
        <img class="slider-home--img" src="https://endeavorcampus.com/wp-content/uploads/2021/01/banner_Banner-finanzas-color-V.1-min.png" alt="">
        <div class="category-name">
            <h2 class="category-name--title <?php echo $category[0]->slug ?>">
                <?php
                if ($category[0]->slug == 'cultura-y-rrhh') {
                    echo 'Cultura y recursos humanos';
                } else {
                    echo $category[0]->name;
                }
                ?>
            </h2>
        </div>
    </div>
</section>

<section class="container">
    <div class="row pt-4">
        <div class="col-md-8">
            <p>
                <?php echo $category[0]->description; ?>
            </p>
            <a class="cat-button" href="<?php echo get_site_url(); ?>/contenidos">Ver todas las categorías</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row pt-5">
            <?php

            $cat_args = array(
                'category_name' => $category[0]->name
            );

            $cat_query = new WP_Query($cat_args);

            if ($cat_query->have_posts()) {
                while ($cat_query->have_posts()) {
                    $cat_query->the_post();

                    $args = array(
                        'cat' => $category
                    );

                    get_template_part('inc/partials/content', 'post', $args);
                }
            }

            ?>
        </div>
        <div class="row pt-4">
            <div class="col text-center">
                <a class="cat-button" href="<?php echo get_site_url(); ?>/contenidos">Cargar más contenidos</a>
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
                    CATEGORÍAS DE CONTENIDO
                </h2>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col">
                <div class="swiper-container swiper-cat-home">
                    <div class="swiper-wrapper">
                        <?php get_template_part('inc/partials/slider-categories') ?>
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
            <div class="col-4">
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
            <div class="col-4">
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
            <div class="col-4">
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

<?php

get_footer();
?>