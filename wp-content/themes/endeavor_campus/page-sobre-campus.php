<?php get_header(); ?>

<main id="aus-page">
    <section>
        <div class="container">
            <div class="row mt-5 align-items-center justify-content-center">
                <div class="col-md-5">
                    <div class="aus-description-block">
                        <h4 class="aus-subtitle"><?php _e('SOMOS', 'campus') ?></h4>
                        <h1 class="aus-title">ENDEAVOR<br>CAMPUS</h1>
                        <p>Bienvenidos al lugar donde el conocimiento se multiplica y los aprendizajes de los Emprendedores Endeavor, mentores y aliados de Endeavor se encuentran con más y más emprendedores de toda Latinoamérica.</p>
                        <div class="aus-description-btn text-center mt-4">
                            <a href="#" class="aus-btn">
                                CONOCER MÁS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="aus-description-img">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/about-us/Ilustracion_1.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <p class="text-center">
                        Endeavor Campus es una plataforma para movilizar la mentalidad y la cultura del emprendimiento, así como para desarrollar capacidades y habilidades de los emprendedores en todas las etapas de sus negocios.
                    </p>
                </div>
            </div>
            <div class="row mt-5 d-none d-lg-block">
                <div class="col">
                    <ul class="aus-links">
                        <li>
                            <a href="#">Temas</a>
                        </li>
                        <li>
                            <a href="#">Formatos</a>
                        </li>
                        <li>
                            <a href="#">Modelo</a>
                        </li>
                        <li>
                            <a href="#">Cifras</a>
                        </li>
                        <li>
                            <a href="#">contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class="aus-title text-center">¿De qué hablamos<br>en Endeavor Campus?</h2>
                    <p class="mt-5 text-center">
                        Aquí hablamos de todos los tema que representan un desafío para los emprendedores en el camino a escalar sus empresas. ¡Queremos inspirarlos y educarlos !
                    </p>
                </div>
                <div class="col-12 mt-5">
                    <div class="swiper-container">
                        <?php get_template_part('inc/partials/slider-categories') ?>
                    </div>
                </div>
            </div>
            <div id="campus-formats" class="row mt-5 justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class="aus-title text-center">¿Qué tipos de<br>contenidos creamos?</h2>
                    <p class="text-center mt-4">
                        <b>En Endeavor Campus podrás encontrar contenidos en diversos formatos:</b>
                    </p>
                </div>
                <div class="col-12 mt-5">
                    <ul class="aus-formats-list text-center">
                        <li>
                            <div class="aus-formats--card">
                                <div class="aus-formats--card-icon">
                                    <span class="icon-Search"></span>
                                </div>
                                <div class="aus-formats--card-text">
                                    <p>
                                        Artículos y opinión
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="aus-formats--card">
                                <div class="aus-formats--card-icon">
                                    <span class="icon-Search"></span>
                                </div>
                                <div class="aus-formats--card-text">
                                    <p>
                                        Lives, cápsulas y series web
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="aus-formats--card">
                                <div class="aus-formats--card-icon">
                                    <span class="icon-Search"></span>
                                </div>
                                <div class="aus-formats--card-text">
                                    <p>
                                        Especiales web y descargables
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="aus-formats--card">
                                <div class="aus-formats--card-icon">
                                    <span class="icon-Search"></span>
                                </div>
                                <div class="aus-formats--card-text">
                                    <p>
                                        Podcast
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>