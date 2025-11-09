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

get_header(); ?>

<div id="blog-holder">

    <section id="blog-banner" class='about_top-banner'>

    	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="inside-xl"><p id="breadcrumbs" class="black">','</p></div>');} ?> 

    	<div class="flex inside-xl">

    		<?php if ( has_post_thumbnail() ): ?>
    			<div id="page-banner-real" class="fifty">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php endif; ?>


	    	<div class="padd fifty">

	    		<h1 class="archive-h1"><?php the_title(); ?></h1>

	            <div class="always-flex" id='about_header-contact'>
					<span class='contact-phone-email'><span class='gold'>P</span> <a class='bold black' id='contact-phone' href="tel:<?php echo $footerPhone; ?>"><?php echo $footerPhone; ?></a><br><span class='gold'>E</span> <a class='bold black email-underline header-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a></span>
	            </div>

	


	    	</div>

	    </div>

    </section><!-- end of #blog-banner -->

    <section>
    	<div class="flex inside-xl">
    		<div class="fifty padd">	

    			<h2><?php the_field('description'); ?></h2>
    			<div><?php the_field('top_section'); ?></div> 				

    		</div>

    		<div class="fifty padd" id="about_quote">	

    			<article>
    				<?php if( !empty( $image ) ): ?>
                    	<div class="round-small"><img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" /></div>
                    <?php endif; ?>
    				<blockquote>
    					<?php the_field('quote'); ?>
    					<a class='link_underline' href="#our-approach">Learn about Our Approach</a>
    				</blockquote>

    			</article>

    		</div>

		</div>
    </section>
	
    <?php get_template_part('block', 'testimonials');?>
	
	<section id="about-brett">
		<div class="accordions inside-lg">

			<?php if( have_rows('accordions') ): ?>

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

			<?php endif; ?>
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

</div><!-- end of #blog-holder -->

	
<footer id="above-footer">
	<div class="inside-xl flex">

		<div class="sub-inside sixty">
			<div><?php echo $aboveLeft; ?></div>
			<div class="contact-info">
				<?php if( !empty( $image ) ): ?>
				<div class="round-small"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
				<?php endif; ?>
				<span class='contact-phone-email'>
					<span class='gold'>P</span> <a id='contact-phone' href="tel:<?php echo $footerPhone; ?>"><?php echo $footerPhone; ?></a>
					<br>
					<span class='gold'>E</span> <a class='email-underline' id='contact-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a>
				</span>
				
			</div>
		</div>

		<div class="sub-inside forty" id='above-footer_text'>
			<p><?php echo get_the_title(); ?> provides quality, compassionate, and effective legal solutions for those facing criminal charges in Tampa, Florida and throughout Hillsborough County.</p>
		</div>

	</div>
</footer>

<?php get_footer(); ?>