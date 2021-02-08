<?php get_header(); ?>

<section class="title-hero bg-navy">
    <h1 class="text-center text-white">
        <?php echo single_tag_title(); ?>
    </h1>
</section>

<section class="container">
    <div class="row">
        <div class="col-lg-9">
            <p><?php echo tag_description(); ?></p>
        </div>
    </div>
    <div class="row mt-4">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();

                $args = array(
                    'cat' => get_the_category()
                );

                get_template_part('inc/partials/content', 'post', $args);
            }
        }
        ?>
    </div>
</section>


<?php get_footer() ?>