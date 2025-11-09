<?php
/**
 * Testimonials Archive
 * @package Postali Child
 * @author Postali LLC
 */
$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveRight = get_field('main_right', 'options');
$featuredImage = get_field('testimonials_featured', 'options');
$image = get_field('main_image', 'options');
$testFeatured = get_field('testimonial_featured_review', 'options');

//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array (
    'post_type' => 'testimonials',

    'post_status' => 'publish',
    'order' => 'DESC',
    'paged' => $paged
);
$the_query = new WP_Query($args);
get_header(); ?>

<div id="blog-holder">

    <div id="blog-banner">

        <section class="page-thumb" style="background-image:url('<?php echo esc_url($featuredImage['url']); ?>');">

            <div class="inside-xl">

                <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
            
                <h1 class="archive-h1">Reviews</h1>

                <div class="top-contact-info">
                    <div>
                        <?php if( !empty( $image ) ): ?>
                        <div class="round-small"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                        <?php endif; ?>
                    </div>
	                <span class='contact-phone-email'><span class='gold'>P</span> <a id='header-phone' href="tel:<?php echo $footerPhone; ?>"><?php echo $footerPhone; ?></a><br><span class='gold'>E</span> <a class='email-underline header-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a></span>
                </div>

            </div>

        </section>


    </div><!-- end of blog-banner -->

    



    <section class="inside-xl blog-posts">

        <article class="emphasis" id='testimonials_emphasis'>
            <div class="em-contain">

                <div id='feat-review_label' class="gold-block">Featured Review</div>
                <blockquote id='archive-testi_header'>
                    <?php echo $testFeatured; ?>
                </blockquote>

            </div>
        </article>
        

        <div id='archive-testi_list' class="content">
            <div class="sub-inside">



                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article class="main-article">

                        <blockquote>
                            <span class='testi_list-title'><?php the_title(); ?></span>
                            <?php the_content(); ?>
                        </blockquote>
                        
                        
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>




                

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

                            <h3><?php the_title(); ?></h3>

                            <p class="button">Read Blog</p>
                        </a>
                    </article>  
  
                <?php endwhile; ?><!-- end of the loop --><?php wp_reset_postdata(); ?>

               <a class='btn' href='/blog/'>Visit Legal Blog</a>
            </div>
            <?php endif; ?>
            
            <?php the_posts_pagination(); ?>

        </div><!-- end of .content -->



    </section>

        
    
        
</div>


    <?php get_template_part('block', 'contact');?>

<?php get_footer(); ?>
