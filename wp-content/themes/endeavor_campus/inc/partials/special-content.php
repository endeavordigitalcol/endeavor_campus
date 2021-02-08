<section class="special-content">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <div class="sc-card">
                    <div class="sc-card--header">
                        <?php echo $args['thumbnail'] ?>
                    </div>
                    <div class="sc-card--body">
                        <h2>
                            <?php _e('CONTENIDO ESPECIAL', 'campus') ?>
                        </h2>
                        <h4 class="font-weight-bold">
                            <?php echo $args['title'] ?>
                        </h4>
                        <p>
                            <?php echo $args['excerpt'] ?>
                        </p>
                        <div>
                            <a class="cat-button" 
                                href="<?php echo $args['link'] ?>">
                                    Ver contenido 
                                    <span class="icon-Right-arrow btn-icon">
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>