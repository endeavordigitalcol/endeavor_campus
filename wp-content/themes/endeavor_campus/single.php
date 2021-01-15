<?php
get_header();

global $post;

if (have_posts()) {
    while (have_posts()) {
        the_post();

        $cat = get_the_category();
?>

        <section class="container mb-4">
            <div class="row pt-4">
                <div class="col">
                    <div class="cat-post <?php echo $cat[0]->slug ?>">
                        <h3 class="text-upercase pl-4">
                            <a class="text-white text-decoration-none" href="<?php echo home_url('/') . 'categorias/' . $cat[0]->slug ?>">
                                <?php
                                if ($cat[0]->slug == 'cultura-y-rrhh') {
                                    echo 'Cultura y recursos humanos';
                                } else {
                                    echo $cat[0]->name;
                                }
                                ?>
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
            <?php

            $post_term = get_the_terms($post->ID, 'custom_post_sector');

            $cr_args = array(
                'posts_per_page'    => 3,
                'tax_query'         => array(
                    array(
                        'taxonomy'  => 'custom_post_sector',
                        'field'     => 'name',
                        'terms'     => $post_term[0]->name
                    )
                ),
                'post__not_in'      => array($post->ID)
            );

            $cr_query = new WP_Query($cr_args);

            if ($cr_query->have_posts()) {
                while ($cr_query->have_posts()) {
                    $cr_query->the_post();
                    $cat = get_the_category(); ?>


                    <div class="col-md-4 p-3">
                        <div class="lc-card">
                            <div class="lc-card--header">
                                <a href="<?php the_permalink() ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail', ['class' => 'w-100']);
                                }
                                ?>
                                </a>
                                <hr class="lc-card--overlay <?php echo $cat[0]->slug ?>" />
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
                                <p><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
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

            wp_reset_postdata();

            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>