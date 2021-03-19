<?php get_header() ?>

<section class="title-hero bg-navy">
    <h1 class="text-center text-white">
        <?php single_post_title() ?>
    </h1>
</section>

<section id="nps-form" class="mt-4 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form class="text-center">
                    <div class="form-group mt-5">
                        <h4>
                            <label for="email"><b>Correo electrónico*</b></label>
                        </h4>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group mt-5">
                        <h4 class="text-center">
                            ¿Con qué probabilidad recomendaría la plataforma de contenidos para emprendedores Endeavor Campus a un amigo?*
                        </h4>
                        <p class="text-center">
                            Seleccione en la escala de 1 a 10, donde 1 no es probable y 10 es muy probable.
                        </p>
                        <div id="nps-score" class="text-center"></div>
                    </div>
                    <div class="form-group mt-5">
                        <h4 class="text-center">
                            <label for="nps-reason"><b>¿Por qué?</b> Cuéntenos un poco más sobre su respuesta</label>
                        </h4>
                        <input class="form-control" type="text" name="nps-reason" id="nps-reason">
                    </div>
                    <div class="form-group mt-5">
                        <h4 class="text-center">
                            <label for="nps-reason">¿Sobre qué temas le gustaría encontrar contenidos en Endeavor Campus?</label>
                        </h4>
                        <input class="form-control" type="text" name="nps-themes" id="nps-themes">
                    </div>
                    <div class="form-group mt-5 text-center">
                        <h4>
                            En qué <b>tipo de formato</b> preferiría que presentáramos los contenidos de Endeavor Campus
                        </h4>
                        <div class="form-check form-check-inline form-check-format">
                            <input type="checkbox" class="form-check-input" id="format-article" value="format-article" name="nps-format">
                            <label for="format-article" class="form-check-label"><?php _e('Artículo', 'campus') ?></label>
                        </div>
                        <div class="form-check form-check-inline form-check-format">
                            <input type="checkbox" class="form-check-input" id="format-article" value="format-interview" name="nps-format">
                            <label for="format-interview" class="form-check-label"><?php _e('Entrevista', 'campus') ?></label>
                        </div>
                        <div class="form-check form-check-inline form-check-format">
                            <input type="checkbox" class="form-check-input" id="format-article" value="format-video" name="nps-format">
                            <label for="format-video" class="form-check-label"><?php _e('Video', 'campus') ?></label>
                        </div>
                        <div class="form-check form-check-inline form-check-format">
                            <input type="checkbox" class="form-check-input" id="format-article" value="format-guide" name="nps-format">
                            <label for="format-guide" class="form-check-label"><?php _e('Guía o herramienta descargable', 'campus') ?></label>
                        </div>
                    </div>
                    <button class="btn btn-primary" id="nps-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>