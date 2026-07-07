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
$footerContactLink = get_field('contact_page_link', 'options');
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
				
				<?php if( !empty( $image ) ): ?>
	                    <div class="round-small"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
				<?php endif; ?>	

	    		<h1 class="archive-h1"><?php the_title(); ?></h1>

	            <div class="top-contact-info">
	                <span class='contact-phone-email version2'>
						<a class='btn' id='header-phone' href="tel:<?php echo $footerPhone; ?>">
							Call Us
						</a>
						<a class='btn btn-secondary' id='contact-link' href="<?php echo $footerContactLink['url']; ?>">
							<?php echo $footerContactLink['title']; ?>
						</a>
					</span>
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

				<?php get_template_part('block', 'sidebar-result'); ?>

				<?php get_template_part('block', 'sidebar-contact'); ?>

                <?php get_template_part('block', 'sidebar-quote'); ?>
            </div>
            

            

        </div><!-- end of .content -->

    </section>


</div><!-- end of blog-holder -->


<section class="inside-xl">
	<?php get_template_part('block', 'awards');?>
</section>
	

	<?php get_template_part('block', 'contact');?>

<?php get_footer(); ?>