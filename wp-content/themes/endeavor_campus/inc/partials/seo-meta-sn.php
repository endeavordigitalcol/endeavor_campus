<?php global $post; ?>

<meta name="title" content="<?php echo $post->post_title ?>">
<meta name="description" content="<?php echo $post->post_excerpt ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo home_url() ?>">
<meta property="og:title" content="<?php echo $post->post_title ?>">
<meta property="og:description" content="<?php echo $post->post_excerpt ?>">
<meta property="og:image" content="<?php the_post_thumbnail_url($post->ID) ?>">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo home_url() ?>">
<meta property="twitter:title" content="<?php echo $post->post_title ?>">
<meta property="twitter:description" content="<?php echo $post->post_excerpt ?>">
<meta property="twitter:image" content="<?php the_post_thumbnail_url($post->ID) ?>">