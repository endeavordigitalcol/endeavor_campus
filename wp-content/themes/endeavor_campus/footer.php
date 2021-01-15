    <?php get_template_part( 'inc/partials/social-icons-bar' ) ?>

    <footer class="bg-dark-teal">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <h5 class="text-white font-weight-bold">
                                Endeavor Campus
                            </h5>
                            <ul class="footer-list">
                                <li>
                                    <a href="<?php echo home_url('/contenidos') ?>" class="text-white">
                                        Contenidos
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/especiales') ?>" class="text-white">
                                        Especiales
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/recursos') ?>" class="text-white">
                                        Recursos
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('/sobre-campus') ?>" class="text-white">
                                        Sobre Campus
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="text-white font-weight-bold">
                                Quíenes somos
                            </h5>
                            <ul class="footer-list">
                                <li>
                                    <a href="https://endeavor.org.co" class="text-white">
                                        Endeavor Colombia
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php home_url() ?>" class="text-white">
                                        Endeavor Campus
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="text-white font-weight-bold">
                                Otros
                            </h5>
                            <ul class="footer-list">
                                <li>
                                    <a href="#" class="text-white">
                                        Términos y condiciones
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/LogoEndeavorCampusBlanco.png" alt="" class="footer-logo">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr class="footer-bar">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <p class="text-white">
                        <b>Endeavor Campus</b><br>
                        &#169; 2020. Todos los derechos reservados.
                    </p>
                </div>
                <div class="col-lg-4 text-right">
                    <p class="text-white d-inline-block">
                        Sigue a Endeavor
                    </p>
                    <?php get_template_part('inc/partials/social-icons-footer') ?>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
    </body>