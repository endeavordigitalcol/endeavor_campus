<div class="content-factory">
    <?php
    foreach ($args as $index => $item) {
        if ($index % 2 == 0) {
    ?>

            <div class="content-factory--item">
                <div class="content-factory--item-image">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/about-us/<?php echo $item['icon'] ?>.svg" alt="">
                </div>
                <div class="content-factory--item-connector">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/about-us/Connector.svg" alt="">
                </div>
                <div class="content-factory--item-text">
                    <p>
                        <?php echo $item['text'] ?>
                    </p>
                </div>
            </div>

        <?php } else { ?>

            <div class="content-factory--item fl-right">
                <div class="content-factory--item-text">
                    <p>
                        <?php echo $item['text'] ?>
                    </p>
                </div>
                <div class="content-factory--item-connector">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/about-us/Connector.svg" alt="">
                </div>
                <div class="content-factory--item-image">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/about-us/<?php echo $item['icon'] ?>.svg" alt="">
                </div>
            </div>

    <?php }
    } ?>
</div>