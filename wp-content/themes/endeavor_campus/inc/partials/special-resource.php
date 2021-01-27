<section class="special-resource">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col">
                <div class="sc-card sp-resource">
                    <div class="sc-card--body">
                        <h2 class="font-weight-bold text-white">
                            <?php _e('RECURSO ESPECIAL', 'campus') ?>
                        </h2>
                        <h6 class="text-white text-uppercase">
                            <?php echo $args['title'] ?>
                        </h6>
                        <p class="text-white">
                            <?php echo $args['excerpt'] ?>
                        </p>
                        <a class="sp-button" href="<?php echo $args['link'] ?>">Ver contenido <span class="icon-Right-arrow btn-icon"></span></a>
                    </div>
                    <div class="sc-card--header">
                        <?php echo $args['thumbnail'] ?>
                        <div class="sp-resource--overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>