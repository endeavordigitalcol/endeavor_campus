<?php get_header()  ?>

<section id="page-title">
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <h1><?php _e('Resultados para: ', 'campus');
                    the_search_query(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section id="search-results" class="container">
    <div class="row">
        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();
                $cat = get_the_category();

                $args = array(
                    'cat' => $cat
                );

                get_template_part('inc/partials/content', 'post', $args);
            }
        }

        ?>
    </div>

</section>

<?php get_footer()  ?>