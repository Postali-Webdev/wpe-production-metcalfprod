<?php
/**
 * Single Post Template
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

                    <a class='post-author_single' href="/about/" ><p class="post-author">Author: Brett Metcalf</p></a>

                    <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                    <?php 
                        $thumb_id = get_post_thumbnail_id( get_the_ID() );
                        $image_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
                        $alt_text = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
                    ?>
                    
                        <?php if ( $image_url ) { 
                                echo '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $alt_text ) . '">';
                        } else { ?>
                            <img src="/wp-content/uploads/2021/10/pixel.png">
                        <?php } ?>
                    <?php } ?>
                    
                    <div class="content-area">
                    <?php the_content(); ?>
                    
                    </div>

                </article>

            </div>

            <?php
            // Start WP_Query for only the ID's from above
            $first_query = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                )
            );
            ?>
            <?php if ( $first_query->have_posts() ) : ?>
            <div class="sidebar thirty super-padd">
                <h4>Recent Blog Posts</h4>
                <?php while($first_query->have_posts()) : $first_query->the_post(); ?>                
                    
                    <article>
                        <a href="<?php the_permalink(); ?>">

                            <div class="gold-block"><time datetime="<?php the_time('Y-m-d'); ?>" pubdate="pubdate"><?php the_time('n.j.Y'); ?></time></div>

                            <span class='blog-title'><?php the_title(); ?></span>

                            <span class="read-post button">Read Blog</span>
                        </a>
                    </article>  
  
                <?php endwhile; ?><!-- end of the loop --><?php wp_reset_postdata(); ?>

            </div>
            <?php endif; ?>
        </section>

    </div>

    <?php get_template_part('block', 'contact');?>

<?php get_footer(); ?>