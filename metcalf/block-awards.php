<?php
/**
 * Awards Block
 * @package Postali Parent
 * @author Postali LLC
 */
?>
<?php if( have_rows('awards', 'options') ): ?>
    
    <div id="awards-repeater" class="awards-container">

        <?php while ( have_rows('awards', 'options') ) : the_row(); ?>   

            <?php 
            $image = get_sub_field('image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
    
        <?php endwhile; ?>

    </div>

<?php endif; ?>