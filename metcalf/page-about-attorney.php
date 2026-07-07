<?php
/**
 * Law Category Interior Page
 * Template Name: About Attorney 
 * @package Postali Child
 * @author Postali LLC
 */
$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveRight = get_field('main_right', 'options');
$newTitle = get_field('h1'); 
$image = get_field('attorney_headshot');
$imageFeatured = get_field('featured_award_black' , 'options');
$position = get_field('position');

get_header(); ?>

<div id="blog-holder">

    <section id="blog-banner" class='about_top-banner'>
    	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="inside-xl"><p id="breadcrumbs" class="black">','</p></div>');} ?> 
    	<div class="flex inside-xl">
    		<?php if ( $image ): ?>
    			<div id="page-banner-real" class="fifty">
					<?php echo wp_get_attachment_image($image['ID'], 'full'); ?>
				</div>
			<?php endif; ?>
	    	<div class="padd fifty">
				<div class="copy">
					<h1 class="archive-h1"><?php the_title(); ?></h1>
					<p class="employee-position"><?php echo $position; ?></p>
					<div class="always-flex" id='about_header-contact'>
						<span class='contact-phone-email version2'>
							<a class='btn' id='header-phone' href="tel:<?php echo $footerPhone; ?>">
								Call Us
							</a>
							<a class='btn btn-secondary' id='contact-link' href="mailto:<?php echo $footerEmail; ?>">
								Email Us
							</a>
						</span>
					</div>
				</div>
				<article class="quote">
    				<blockquote>
    					<?php the_field('quote'); ?>
    				</blockquote>
    			</article>
	    	</div>
	    </div>
    </section><!-- end of #blog-banner -->

    <section id="attorney-intro">
		<div class="container">
			<div class="columns">
				<?php if( have_rows('accordions') ): ?>
				<div class="column-50 block">
				<?php else : ?>
				<div class="inside-lg">
				<?php endif; ?>
					<h2><?php the_field('description'); ?></h2>
    				<div><?php the_field('top_section'); ?></div>
				</div>
				<?php if( have_rows('accordions') ): ?>
				<div class="column-50 block">
					<div class="accordions inside-lg">
						
							<ul id="big-menu" class="menu">
								<?php while( have_rows('accordions') ): the_row(); 
									// vars
									$title = get_sub_field('title');
									$content = get_sub_field('content');
									?>
									<li class="menu-item-has-children">
										<a class='accordion-toggle' id='about_accordion' href=""><?php echo $title; ?>
											<span id='expand-plus' class='icon icon-plus-icon'></span>
										</a>
										<ul class="sub-menu gold-li">
										<?php echo $content; ?>
										</ul>
									</li>
								<?php endwhile; ?>
							</ul>
						
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div>
    </section>

	<?php get_template_part('block', 'results');?>
	
	<section id="our-approach">	
		<?php if( have_rows('our_approach') ) : $counter = 1; ?>
			<div class="inside-lg">
				<h3 class="centered-text section-title">Our Approach Gets Results</h3>
				<?php while( have_rows('our_approach') ): the_row(); 
				// vars
				$title = get_sub_field('title');
				$content = get_sub_field('content');
				?>
				<article class="flex">
					<div id="our-approach_left" class="thirty sub-inside">
						<div class="gold-block">Step <?php echo $counter; ?></div>
						<h4 class='our-approach_subtitle'><?php echo $title; ?></h4>
					</div>

					<div id="our-approach_right" class="seventy sub-inside">
						<p><?php echo $content; ?></p>
					</div>
				</article>
				<?php $counter++; endwhile; ?>
			</div>
		<?php endif; ?>
	</section>

	<?php get_template_part('block', 'testimonials');?>

</div><!-- end of #blog-holder -->

<?php get_footer(); ?>