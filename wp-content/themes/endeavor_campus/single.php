<?php
get_header();

global $post;

if (have_posts()) {
    while (have_posts()) {
        the_post();

        $cat = get_the_category();
        var_dump(get_the_terms( $post->ID, 'category' ));
?>

        <section class="container mb-4">
            <div class="row pt-4">
                <div class="col">
                    <div class="cat-post <?php echo $cat[0]->slug ?>">
                        <h3 class="text-upercase pl-4">
                            <a class="text-white text-decoration-none" href="<?php echo home_url('/') . 'categorias/' . $cat[0]->slug ?>">
                                <?php echo $cat[0]->name ?>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <picture class="img-post">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else {
                        ?>
                            <img src="https://via.placeholder.com/1140x641" alt="">
                        <?php } ?>
                    </picture>
                </div>
                <div class="col-12 mt-5">
                    <h1 class="post-title font-weight-bold"><?php the_title() ?></h1>
                    <h5 class="post-excerpt"><?php the_excerpt() ?></h5>
                    <p class="post-date color-gray"><?php the_date('d/m/Y') ?></p>
                    <hr class="div-bar mt-4">
                </div>
            </div>
            <div class="row post-content">
                <div class="col-lg-9">
                    <div class="post-data">
                        <div class="post-data--author">
                            <img src="http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Endeavor-E-transparent-teal.png" alt="" class="author-img">
                            <p>Endeavor Colombia</p>
                        </div>
                        <div class="post-data--time">
                            <p>Tiempo estimado de lectura <br><span class="color-gray"><?php echo get_post_meta($post->ID, 'Tiempo de lectura', true) ?> minutos</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-5">
                    <?php the_content() ?>
                </div>
            </div>
        </section>

<?php
    }
}
?>

<?php get_template_part('inc/partials/nl-suscription') ?>

<section>
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h4 class="section-title">
                    CONTENIDOS RELACIONADOS
                </h4>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay finance">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Finanzas
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay economy">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Economía
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay digital">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Digital
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>