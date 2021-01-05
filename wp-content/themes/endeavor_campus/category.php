<?php
get_header();
$category = get_the_category();
?>

<section class="pt-4">
    <div class="slider-home--container categories-hero">
        <img class="slider-home--img" src="https://via.placeholder.com/1920x500" alt="">
        <div class="category-name">
            <h2 class="category-name--title">
                <?php echo $category[0]->name; ?>
            </h2>
        </div>
    </div>
</section>

<section class="container">
    <div class="row pt-4">
        <div class="col-md-8">
            <p>
                <?php echo $category[0]->description; ?>
            </p>
            <a class="cat-button" href="<?php echo get_site_url(); ?>/contenidos">Ver todas las categorías</a>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay finance">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Finanzas
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay economy">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Economía
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay digital">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Digital
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay finance">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Finanzas
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay economy">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Economía
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay digital">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Digital
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay finance">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Finanzas
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay economy">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Economía
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-3">
                <div class="lc-card">
                    <div class="lc-card--header">
                        <img class="w-100" src="https://via.placeholder.com/300x169" alt="">
                        <hr class="lc-card--overlay digital">
                        </hr>
                    </div>
                    <div class="lc-card--body">
                        <h5 class="lc-card--cat-name color-teal">
                            Digital
                        </h5>
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ex quam, fermentum eget orci sed, tempor finibus turpis.
                        </p>
                    </div>
                    <div class="lc-card--footer">
                        <p class="lc-card--date">10/01/2020</p>
                        <div class="lc-card--time">
                            <p class="color-gray">8 min</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col text-center">
                <a class="cat-button" href="<?php echo get_site_url(); ?>/contenidos">Cargar más contenidos</a>
                <hr class="div-bar mt-4">
            </div>
        </div>
    </div>
</section>

<section class="bg-lgray pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-weight-bold">
                    CATEGORÍAS DE CONTENIDO
                </h2>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col">
                <div class="swiper-container swiper-cat-home">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/400x225" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/400x225" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/400x225" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="nl-susc">
    <div class="container">
        <div class="row pt-5 pb-5 align-items-center">
            <div class="col-6">
                <h3 class="text-white font-weight-bold">
                    ¡SUSCRIBETE A NUESTRO<br><span class="color-dark-navy">NEWSLETTER DE CONTENIDOS</span><br>PARA EMPRENDEDORES!
                </h3>
                <p class="text-white m-0 pt-3">
                    Recibirás consejos, invitaciones a talleres y herramientas creadas con la experiencia de la Red Endeavor.
                </p>
            </div>
            <div class="col-6">
                <form class="nl-form" action="">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="" placeholder="Correo electrónico">
                        <button type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="bg-lgray most-visited">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <h3 class="most-visited--title">
                    CONTENIDOS POPULARES
                </h3>
            </div>
        </div>
        <div class="row pt-3 pb-5">
            <div class="col-4">
                <div class="pc-card">
                    <h5 class="pc-card--cat-name color-teal m-0">
                        FINANZAS
                    </h5>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                    <p class="m-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis ut augue sit amet pretium.
                    </p>
                </div>
                <p class="pc-card--date pt-2 font-size-xs">
                    <small>10/01/2020</small>
                </p>
            </div>
            <div class="col-4">
                <div class="pc-card">
                    <h5 class="pc-card--cat-name color-teal m-0">
                        DIGITAL
                    </h5>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                    <p class="m-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis ut augue sit amet pretium.
                    </p>
                </div>
                <p class="pc-card--date pt-2 font-size-xs">
                    <small>10/01/2020</small>
                </p>
            </div>
            <div class="col-4">
                <div class="pc-card">
                    <h5 class="pc-card--cat-name color-teal m-0">
                        ECONOMÍA
                    </h5>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/lc-card.png" alt="">
                    <p class="m-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam venenatis ut augue sit amet pretium.
                    </p>
                </div>
                <p class="pc-card--date pt-2 font-size-xs">
                    <small>10/01/2020</small>
                </p>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();
?>