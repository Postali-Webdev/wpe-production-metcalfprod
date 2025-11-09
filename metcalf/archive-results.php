<?php
/**
 * Case Results Archive
 * @package Postali Child
 * @author Postali LLC
 */
$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveRight = get_field('main_right', 'options');
$featuredImage = get_field('case_results_featured', 'options');
$image = get_field('main_image', 'options');
$testFeatured = get_field('case_result_content_right', 'options');

//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array (
    'post_type' => 'results',

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
            
                <h1 class="archive-h1">Case Results</h1>

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

        <article class="emphasis" id='results_emphasis'>
            <div class="em-contain">

                <?php echo $testFeatured; ?>
                
                <a class='link_underline' href='#results_archive-content'>View All Case Results</a>
            </div>
        </article>
        

        <div class="content" id='results_archive-content'>
            <div class="sub-inside">



                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <article class="main-article">

                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <h2><?php the_title(); ?></h2> </a>
                            <?php the_content(); ?>
                            <p class='italic'>The outcome of an individual case depends on a variety 
                            of factors unique to that case. Case results do not guarantee or predict a 
                            similar result in any similar or future case.</p>
                            <a href="<?php the_permalink(); ?>">Read Case</a>

                        
                        
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>




                

            </div>

            
            <div class="sidebar thirty">
                <h4>Cases We Handle</h4>
                <div class="archive_sidebar-menu padd">
                    
                    <?php
                        $args = array(
                            'container' => false,
                            'theme_location' => 'sidebar-nav'
                        );
                        wp_nav_menu( $args );
                    ?>
                </div>
  

            </div>
            
            <?php the_posts_pagination(); ?>

        </div><!-- end of .content -->



    </section>

        
    
        
</div>


    <?php get_template_part('block', 'contact');?>

<?php get_footer(); ?>
