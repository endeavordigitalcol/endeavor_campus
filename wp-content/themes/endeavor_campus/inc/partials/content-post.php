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
            <hr class="lc-card--overlay <?php echo $args['cat'][0]->slug ?>">
        </div>
        <div class="lc-card--body">
            <h5 class="lc-card--cat-name color-teal">
                <a href="<?php echo home_url('/') . 'categorias/' . $args['cat'][0]->slug ?>">
                    <?php
                    if ($args['cat'][0]->name == 'Cultura y RRHH') {
                        echo 'Cultura y recursos humanos';
                    } else {
                        echo $args['cat'][0]->name;
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
                    <span class="icon-clock"></span>
                    <?php
                    if (get_post_meta($post->ID, 'Tiempo de lectura', true) != '') {
                        echo ' ' . get_post_meta($post->ID, 'Tiempo de lectura', true) . ' min';
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</div> 