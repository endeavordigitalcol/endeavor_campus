<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="search-form-cont">
        <input type="search" name="s" id="<?php echo $unique_id ?>"
            value="<?php the_search_query() ?>">
        <label class="m-0" for="search-form-<?php echo $unique_id ?>-submit">
            <span class="icon-Search color-teal form-button"></span>
        </label>
        <input class="p-0" id="search-form-<?php echo $unique_id ?>-submit" type="submit" value="">
    </div>
</form>