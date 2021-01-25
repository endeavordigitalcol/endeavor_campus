<?php

get_header();
$category = get_the_category();
$banner = get_term_meta($category[0]->term_id, 'img_banner', true);

?>

<section class="pt-4">
    <div class="categories-hero">
        <img class="slider-img" src="<?php echo $banner?>" alt="">
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
            <a class="cat-button" href="<?php echo get_site_url(); ?>/contenidos">
                <?php _e('Ver todas las categorías', 'campus') ?>
                <span class="icon-Right-arrow btn-icon">
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row pt-5">
            <?php

            $cat_args = array(
                'category_name'     => $category[0]->name,
                'posts_per_page'    => 12
            );

            $cat_query = new WP_Query($cat_args);

            if ($cat_query->have_posts()) {
                while ($cat_query->have_posts()) {
                    $cat_query->the_post();

                    $args = array(
                        'cat'               => $category,
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
                    data-category="<?php echo $category[0]->slug ?>"
                    data-id="<?php echo $category[0]->term_id ?>"
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