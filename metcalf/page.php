<?php
/**
 * Law Category Interior Page
 * Template Name: Interior
 * @package Postali Child
 * @author Postali LLC
 */
$phone = get_field('phone');
$email = get_field('email');

$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveRight = get_field('main_right', 'options');
$image = get_field('main_image', 'options');


$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
get_header(); ?>





<div id="blog-holder">
	
    <section id="blog-banner" class='default-top-banner'>

    	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="inside-xl"><p id="breadcrumbs" class="black">','</p></div>');} ?> 

    	<div class="flex">

	    	<div id="page-banner" class="fifty" style="background-image: url('<?php echo $backgroundImg[0]; ?>');"></div>

	    	<div class="padd fifty">

	    		

	    		<?php
					$lc = get_field('law_practice_category');
					echo '<div class="gold-block">' . $lc . '</div>';
				?>
				

	    		<h1 class="archive-h1"><?php the_title(); ?></h1>

	            <div class="top-contact-info">
	                <div>
	                    <?php if( !empty( $image ) ): ?>
	                    <div class="round-small"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
	                    <?php endif; ?>
	                </div>
	                <span class='contact-phone-email'><span class='gold'>P</span> <a class='black' id='header-phone' href="tel:<?php echo $footerPhone; ?>"><?php echo $footerPhone; ?></a><br><span class='gold'>E</span> <a class='black email-underline header-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a></span>
	            </div>


	    	</div>

		</div>
		
    </section><!-- end of #blog-banner -->

    <section class="inside-xl blog-posts">
    	
    
    	<div class="content">
            <div class="sub-inside">



                
                    <article class="main-article">

                         <?php the_content(); ?>

                    </article>
                



                

            </div>

            
            <div class="sidebar thirty">
                <?php dynamic_sidebar('main-sidebar'); ?>
            </div>
            

            

        </div><!-- end of .content -->

    </section>


</div><!-- end of blog-holder -->


<section class="inside-xl">
	<?php get_template_part('block', 'awards');?>
</section>
	

	<?php get_template_part('block', 'contact');?>

<?php get_footer(); ?>