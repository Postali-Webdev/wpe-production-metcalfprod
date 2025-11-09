<?php
/**
 * Single Case Result Template
 *
 * @package Postali Child
 * @author Postali LLC
 */
get_header(); ?>

<div class="inside-xl">
        <div id='single-post-breadcrumbs'>
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="inside-xl"><p id="breadcrumbs" class="black">','</p></div>');} ?> 
        </div>
        
        <section class="content">
            

            <div class="sub-inside">

                <article>

                    <div class="gold-block"><time datetime="<?php the_time('Y-m-d'); ?>" pubdate="pubdate"><?php the_time('n.j.Y'); ?></time></div>

                    <h1><?php the_title(); ?></h1>

                    <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                    <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                        <img src="<?php echo $featImg[0]; ?>" class="featured-image"  />
                    <?php } else { ?>
                        
                    <?php } ?>
                    
                    <div class="content-area">
                    <?php the_content(); ?>
                
                    <p class='italic'>The outcome of an individual case depends on a variety 
                    of factors unique to that case. Case results do not guarantee or predict a 
                    similar result in any similar or future case.</p>

                    </div>

                </article>

            </div>
            
            <div class="sidebar">

                <?php get_sidebar(); ?>

            </div>
        </div>

    </div>

    <?php get_template_part('block', 'contact');?>

<?php get_footer(); ?>