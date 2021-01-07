<?php
$cats = get_categories(['hide_empty' => false]);

foreach ($cats as $cat) {
    $cat_img = get_term_meta( $cat->term_id );
?>

    <div class="swiper-slide">
        <a href="<?php echo home_url('categorias/') . $cat->slug ?>">
            <img src="<?php echo $cat_img['img'][0] ?>" alt="<?php echo $cat->name?>">
        </a>
    </div>

<?php
}
?>