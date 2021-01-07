<?php get_header() ?>

<section class="pt-4">
    <div class="slider-home--container">
        <img class="slider-home--img" src="https://via.placeholder.com/1920x500" alt="">
    </div>
</section>

<section class="page-description">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h2 class="text-center">
                    ¿Qué area de contenido quieres impulsar hoy?
                </h2>
                <p class="text-center pt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                    Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                </p>
            </div>
        </div>
    </div>
</section>

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

<?php get_footer() ?>