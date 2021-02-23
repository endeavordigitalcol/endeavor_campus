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
                            <a href="#modelo" class="aus-btn">
                                CONOCER MÁS
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mt-4 mb-4">
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
            <div id="temas" class="row mt-5 d-none d-lg-block">
                <div class="col">
                    <?php
                    $aus_links = ['Temas', 'Formatos', 'Modelo', 'Cifras', 'Contacto'];

                    get_template_part('inc/partials/about-us/aus-links', null, $aus_links);
                    ?>
                </div>
            </div>
            <div class="row mt-5 justify-content-center align-content-center desktop-height">
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
    </section>
    <section>
        <div id="campus-formats">
            <div class="container">
                <div id="formatos" class="row mt-5 justify-content-center align-content-center desktop-height">
                    <div class="col-lg-8 col-md-10 pt-3">
                        <h2 class="aus-title text-center">¿Qué tipos de<br>contenidos creamos?</h2>
                        <p class="text-center mt-4">
                            <b>En Endeavor Campus podrás encontrar contenidos en diversos formatos:</b>
                        </p>
                    </div>
                    <div class="col-12 mt-5">
                        <?php
                        $aus_formats = [
                            [
                                'name' => 'Artículos y opinión',
                                'icon' => 'megaphone'
                            ],
                            [
                                'name' => 'Lives, cápsulas y series web',
                                'icon' => 'media-play'
                            ],
                            [
                                'name' => 'Especiales web y descargables',
                                'icon' => 'media-structure'
                            ],
                            [
                                'name' => 'Podcast',
                                'icon' => 'microphone'
                            ]
                        ];

                        get_template_part('inc/partials/about-us/aus-formats', null, $aus_formats);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5" id="modelo">
                <div class="col-12">
                    <h2 class="aus-title text-center">¿Cómo creamos<br>nuestros contenidos?</h2>
                </div>
                <div class="col-12 mt-5">
                    <?php
                    $aus_content_factory = [
                        [
                            'icon' => 'Statistics',
                            'text' => 'Identificamos cuáles son los mayores retos de los emprendedores.'
                        ],
                        [
                            'icon' => 'Search',
                            'text' => 'Buscamos aliados que quieran sumarse a nuestra misión de democratizar el conocimiento y apoyar a los emprendedores.'
                        ],
                        [
                            'icon' => 'Comunication',
                            'text' => 'Acudimos al conocimiento de un Emprendedor Endeavor, mentor, aliado o lider de opinión para obtener la mayor información del tema.'
                        ],
                        [
                            'icon' => 'Posting',
                            'text' => 'Transformamos dicho conocimiento en contenidos o herramientas a la medida de los desafíos de los emprendedores.'
                        ],
                        [
                            'icon' => 'Analize',
                            'text' => 'Cargamos los contenidos a Endeavor Campus, una plataforma de alcance regional.'
                        ],
                        [
                            'icon' => 'Feedback',
                            'text' => 'Los emprendedores encontrarán contenidos útiles, en varios formatos y sobre todos los temas necesarios para escalar sus negocios.'
                        ],
                    ];

                    get_template_part('inc/partials/about-us/aus-content-factory', null, $aus_content_factory);
                    ?>
                </div>
            </div>
            <div id="cifras" class="row mt-5 justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class="aus-title text-center">¡No paramos de crecer!</h2>
                </div>
                <div class="mt-5 col-12">
                    <?php
                    $aus_figures = [
                        [
                            'number' => '885k',
                            'text' => 'Visitas al sitio en 2020'
                        ],
                        [
                            'number' => '237k',
                            'text' => 'Usuarios en 2020'
                        ],
                        [
                            'number' => '250',
                            'text' => 'Contenidos'
                        ],
                    ];

                    get_template_part('inc/partials/about-us/aus-figures', null, $aus_figures);
                    ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section id="aus-form">
        <div class="container">
            <div id="contacto" class="row pt-5 pb-5">
                <div class="col-lg-4">
                    <h2 class="color-teal font-weight-bold">
                        ¡Escríbenos!
                    </h2>
                    <p class="mt-4">
                        ¿Estas interesado en apoyar la misión de Endeavor Campus de inspirar y educar a los emprendedores?
                    </p>
                </div>
                <div class="col-lg-8">
                    <?php get_template_part('inc/partials/about-us/aus-contact-form') ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>