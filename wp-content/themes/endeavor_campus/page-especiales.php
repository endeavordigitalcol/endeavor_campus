<?php

get_header();
$banner_args = array(
    'desktop-banner' => 'https://endeavorcampus.com/wp-content/uploads/2021/02/Banner_Especiales.png',
    'mobile-banner'  => 'https://endeavorcampus.com/wp-content/uploads/2021/02/Banner_Especiales_Movil.png'
);
get_template_part('inc/partials/main-banners', null, $banner_args);

?>

<section id="podcast">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1><?php _e('PODCAST', 'campus') ?></h1>
            </div>
            <div class="col-lg-10">
                <p class="mt-4">
                    Conéctate desde cualquier lugar con las historias de los Emprendedores Endeavor que están transformando miles de vidas en todo el mundo. Descubre cómo han logrado impactar la economía de los países donde operan sus compañías y escucha sus reflexiones y consejos sobre el arte de crear emprendimientos de alto impacto.
                </p>
            </div>
        </div>
        <div class="row" id="think-big">
            <div class="col-12">
                <h2>
                    <?php _e('Think Big', 'campus') ?>
                </h2>
            </div>
            <?php
            $args = array(
                'posts_per_page'    => 3,
                'tag'               => 'Think-big',
                'tax_query'         => array(
                    array(
                        'taxonomy'  => 'custom_post_format',
                        'field'     => 'slug',
                        'terms'     => 'podcast'
                    )
                )
            );

            get_template_part('process/special-contents-query', null, $args);
            ?>
        </div>
        <div class="row" id="tour-endeavor">
            <div class="col-12">
                <h2>
                    <?php _e('Tour Endeavor', 'campus') ?>
                </h2>
            </div>
            <?php
            $args = array(
                'posts_per_page'    => 3,
                'tag'               => 'tour-endeavor',
                'tax_query'         => array(
                    array(
                        'taxonomy'  => 'custom_post_format',
                        'field'     => 'slug',
                        'terms'     => 'podcast'
                    )
                )
            );

            get_template_part('process/special-contents-query', null, $args);
            ?>
        </div>
    </div>
</section>

<section id="escala">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1><?php _e('ESCALA', 'campus') ?></h1>
            </div>
            <div class="col-lg-10">
                <p class="mt-4">
                    Una iniciativa regional de Dell Technologies y Endeavor que busca acercar a los emprendedores y dueños de pymes de toda la región a las historias de éxito y los conocimientos de emprendedores de alto impacto para que logren escalar sus empresas.
                </p>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'posts_per_page'    => 6,
                'tag'               => 'Escala'
            );

            get_template_part('process/special-contents-query', null, $args);
            ?>
        </div>
    </div>
</section>

<section id="momento">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1><?php _e('MOMENTO', 'campus') ?></h1>
            </div>
            <div class="col-lg-10">
                <p class="mt-4">
                    MOMENTO es una iniciativa de Endeavor Campus que busca brindar herramientas y contenidos de alto impacto a todos los emprendedores que hoy se enfrentan a nuevos y grandes retos. En este especial reuniremos el conocimiento y la experiencia de expertos de nuestra Red y los mejores consejos, para que los emprendedores del país puedan, hoy más que nunca, transformar y dinamizar nuestra economía y beneficiar a la sociedad.
                </p>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'posts_per_page'    => 3,
                'tag'               => 'momento,momento-endeavor',
            );

            get_template_part('process/special-contents-query', null, $args);
            ?>
        </div>
    </div>
</section>

<section id="talleres">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1><?php _e('TALLERES', 'campus') ?></h1>
            </div>
            <div class="col-lg-10">
                <p class="mt-4">
                    MOMENTO es una iniciativa de Endeavor Campus que busca brindar herramientas y contenidos de alto impacto a todos los emprendedores que hoy se enfrentan a nuevos y grandes retos. En este especial reuniremos el conocimiento y la experiencia de expertos de nuestra Red y los mejores consejos, para que los emprendedores del país puedan, hoy más que nunca, transformar y dinamizar nuestra economía y beneficiar a la sociedad.
                </p>
            </div>
        </div>
        <div class="row">
            <?php
            $args = array(
                'posts_per_page'    => 3,
                'tag'               => 'taller',
            );

            get_template_part('process/special-contents-query', null, $args);
            ?>
        </div>
    </div>
</section>

<?php
    get_template_part('inc/partials/nl-suscription');
    get_footer() 
?>