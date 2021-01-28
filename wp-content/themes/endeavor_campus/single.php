<?php
get_header();

global $post;

if (have_posts()) {
    while (have_posts()) {
        the_post();

        $cat        = get_the_category();
        $next_post  = get_adjacent_post(false, '', false);
        $prev_post  = get_adjacent_post();

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
                            <img src="<?php get_theme_file_uri('assets/images/BannerGenericoPosts.png') ?>" alt="">
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
                            <img src="https://endeavorcampus.com/wp-content/uploads/2020/12/Endeavor-E-transparent-teal.png" alt="" class="author-img">
                            <p>Endeavor Colombia</p>
                        </div>
                        <div class="post-data--time">
                            <p>Tiempo estimado de lectura <br><span class="icon-clock"></span> <span class="color-gray"><?php echo get_post_meta($post->ID, 'Tiempo de lectura', true) ?> minutos</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mt-5">
                    <?php the_content() ?>
                    <div class="np-posts-container mt-4 d-none d-md-block">
                        <?php if (!empty($prev_post)) { ?>
                            <div class="np-posts--prev">
                                <span class="icon-arrow-left"></span>                                
                                <?php previous_post_link('%link', 'Artículo anterior') ?>
                            </div>
                        <?php } ?>
                        <?php if (!empty($next_post)) { ?>
                            <div class="np-posts--next">
                                <?php next_post_link('%link', 'Artículo siguiente') ?>
                                <span class="icon-arrow-right"></span>
                            </div>
                        <?php } ?>
                    </div>
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
                    <?php _e('CONTENIDOS RELACIONADOS', 'campus') ?>
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
                    $cat = get_the_category();

                    $args = array(
                        'cat' => $cat
                    );

                    get_template_part('inc/partials/content', 'post', $args);
                }
            }

            wp_reset_postdata();

            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>