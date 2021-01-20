<?php
$categories = get_categories(['hide_empty' => false]);
$sectors    = get_terms([
    'taxonomy'      => 'custom_post_sector',
    'hide_empty'    => false
]);
$formats     = get_terms([
    'taxonomy'      => 'custom_post_format',
    'hide_empty'    => false
]);
?>

<section class="filter-block-content container">
    <div class="row">
        <div class="col">
            <form class="filter-block-form" method="$_POST">
                <div class="form-row align-items-end">
                    <div class="col-sm-10">
                        <div class="form-row">
                            <div class="col-sm-4">
                                <select name="category-content" id="category-content" class="form-control" required>
                                    <option disabled selected value=""><strong><?php _e('Categoría', 'campus') ?></strong></option>
                                    <option value="Cualquiera">Cualquiera</option>
                                    <?php foreach ($categories as $category) { ?>
                                        <option value="<?php echo $category->slug ?>"><?php echo $category->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="sector-content" id="sector-content" class="form-control">
                                    <option disabled selected><?php _e('Sector', 'campus') ?></option>
                                    <option value="Cualquiera">Cualquiera</option>
                                    <?php foreach ($sectors as $sector) { ?>
                                        <option value="<?php echo $sector->slug ?>"><?php echo $sector->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <select name="format-content" id="format-content" class="form-control">
                                    <option disabled selected><?php _e('Formato', 'campus') ?></option>
                                    <option value="Cualquiera">Cualquiera</option>
                                    <?php foreach ($formats as $format) { ?>
                                        <option value="<?php echo $format->slug ?>"><?php echo $format->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="row justify-content-center mt-3">
                            <div class="col text-center">
                                <button classs="btn" id="submit-button-filter"><?php _e('Filtrar', 'campus') ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php get_template_part('inc/partials/filtered-contents') ?>
</section>