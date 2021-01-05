<?php

class Catagory_home
{
    public $name;
    public $image;
    public $link;

    function __construct($name, $image, $link)
    {
        $this->name     = $name;
        $this->image    = $image;
        $this->link     = $link;
    }
}

function categories_imgs($categories)
{

    $categories_home = array(
        'gob' => new Catagory_home(
            'Gobierno corporativo',
            'http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Gobierno-corporativo.png',
            home_url('/categorias') . '/gobierno-corporativo'
        ),
        'cul' => new Catagory_home(
            'Cultura y recursos humanos',
            'http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Cultura-y-recursos-humanos.png',
            home_url('/categorias') . '/cultura-y-rrhh'
        ),
        'tra' => new Catagory_home(
            'Transformación digital',
            'http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Transformacion-digital.png',
            home_url('/categorias') . '/transformacion-digital'
        ),
        'ope' => new Catagory_home(
            'Operaciones',
            'http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Operaciones.png',
            home_url('/categorias') . '/operaciones'
        ),
        'inv' => new Catagory_home(
            'Inversión y financiación',
            'http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Inversion-y-financiacion.png',
            home_url('/categorias') . '/inversion-y-financiacion'
        ),
        'mer' => new Catagory_home(
            'Mercadeo y ventas',
            'http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Mercadeo-y-ventas.png',
            home_url('/categorias') . '/mercadeo-y-ventas'
        ),
        'com' => new Catagory_home(
            'Comunicación',
            'http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Comunicacion.png',
            home_url('/categorias') . '/comunicacion'
        ),
        'fin' => new Catagory_home(
            'Finanzas y contabilidad',
            'http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Finanzas-y-contabilidad-4-3.png',
            home_url('/categorias') . '/finanzas-y-contabilidad'
        ),
        'est' => new Catagory_home(
            'Estrategia e innovación',
            'http://localhost:82/endeavor_campus/wp-content/uploads/2020/12/Estrategia-e-innovacion.png',
            home_url('/categorias') . '/estrategia-e-innovacion'
        ),
    );

    foreach ($categories_home as $cat) {
        echo '<div class="swiper-slide"><a href="'.$cat->link.'">';
        echo '<img src="'.$cat->image.'" alt="'.$cat->name.'">';
        echo '</a></div>';
    }
}
