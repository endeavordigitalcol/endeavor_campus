<?php

function custom_categories_fields($taxonomy)
{
    $term_id = $taxonomy->term_id;
    $cat_meta = get_term_meta($term_id);
    
    if ( $cat_meta['img'] == NULL || empty($cat_meta['img'])) {
        add_term_meta($term_id, 'img', '');
    }

    if ( $cat_meta['img_banner'] == NULL || empty($cat_meta['img_banner'])) {
        add_term_meta($term_id, 'img_banner', '');
    }

?>

<tr class="form-field">
    <th scope="row" valign="top">
        <label for="cat_image_url">
            <?php _e('URL de la imagen de la Categoría') ?>
        </label>
    </th>
    <td>
        <input type="text" name="cat_meta[img]" id="cat_meta[img]" size="40" value="<?php echo $cat_meta['img'][0] ? $cat_meta['img'][0] : ''; ?>">
        <p class="description"><?php _e('Imagen para la categoria: use la URL completa') ?></p>
    </td>
</tr>
<tr class="form-field">
    <th scope="row" valign="top">
        <label for="cat_image_banner_url">
            <?php _e('URL del banner de la Categoría') ?>
        </label>
    </th>
    <td>
        <input type="text" name="cat_meta[img_banner]" id="cat_meta[img_banner]" size="40" value="<?php echo $cat_meta['img_banner'][0] ? $cat_meta['img_banner'][0] : ''; ?>">
        <p class="description"><?php _e('Imagen para el banner de la categoria: use la URL completa') ?></p>
    </td>
</tr>

<?php } ?>
