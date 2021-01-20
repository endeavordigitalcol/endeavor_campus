<section class="bg-lgray most-visited">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h3 class="most-visited--title">
                    <?php _e('CONTENIDOS POPULARES', 'campus') ?>
                </h3>
            </div>
        </div>
        <div class="row pt-3 pb-5">
            <?php

            $pp_args = array(
                'posts_per_page'    => 3,
                'meta_key'          => 'post_views',
                'orderby'           => 'meta_value_num',
                'order'             => 'DESC'
            );

            $p_posts_query = new WP_Query($pp_args);

            if ($p_posts_query->have_posts()) {
                while ($p_posts_query->have_posts()) {
                    $p_posts_query->the_post();

                    $cat = get_the_category();
            ?>

                    <div class="col-lg-4">
                        <div class="pc-card">
                            <h5 class="pc-card--cat-name color-teal m-0">
                                <a class="text-decoration-none" href="<?php echo home_url('/') . 'categorias/' . $cat[0]->slug ?>">
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
                            <p class="m-0">
                                <a class="text-decoration-none" href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            </p>
                        </div>
                        <p class="pc-card--date pt-2 font-size-xs">
                            <small><?php the_date('d/m/Y') ?></small>
                        </p>
                    </div>

            <?php
                }
            }
            ?>
        </div>
    </div>
</section>