<?php
/**
 * Banner Styles
 * @package Postali Parent
 * @author Postali LLC
 */
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
?>
<section class="banner" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
    <div class="container">
        <div class="site-name"><?php echo get_bloginfo( 'name' ); ?></div>
        <h1><?php the_field('h1'); ?></h1>
    </div>
</section>