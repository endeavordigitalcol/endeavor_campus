<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_template_part('inc/partials/google-analytics') ?>
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <section id="top-header" class="d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a href="https://endeavor.org.co">
                        <img src="https://endeavorcampus.com/wp-content/uploads/2020/11/Logo-Endeavor-Header.png" alt="">
                    </a>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <p class="m-0 text-center">Contenidos para emprendedores</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                    <?php get_search_form() ?>
                </div>
            </div>
        </div>
    </section>

    <header>
        <section class="container header-desktop d-none d-lg-block">
            <div class="row align-content-center">
                <div class="col">
                    <div class="body-header">
                        <div class="main-menu-logo">
                            <?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            }
                            ?>
                        </div>
                        <div class="main-menu">
                            <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'main',
                                'depth'             => 1
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="barra-header">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Barraheader.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid header-mobile d-lg-none">
            <div class="row">
                <div class="col-10">
                    <div class="main-menu-logo--mobile">
                        <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </header>