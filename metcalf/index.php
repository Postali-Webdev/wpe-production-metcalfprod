<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveRight = get_field('main_right', 'options');
$image = get_field('main_image', 'options');

//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array (
	'post_type' => 'post',
	'post_per_page' => '6',
	'post_status' => 'publish',
	'order' => 'DESC',
	'paged' => $paged
);
$the_query = new WP_Query($args);
get_header(); ?>

<div id="blog-holder">

	<div id="blog-banner">

	<?php 
    // Get the ID of the page set to Display Posts in Settings > Reading
    $page_for_posts = get_option( 'page_for_posts' ); 

    // If that page ID exists, and that page has a Featured Image....
    if ($page_for_posts && has_post_thumbnail($page_for_posts)) {

        // Get the ID of that page's Featured Image
        $thumb_id = get_post_thumbnail_id( $page_for_posts);

        // Display that image
        //echo wp_get_attachment_image($thumb_id, 'full');

        $url = wp_get_attachment_url($thumb_id);

        ?>


        <section class="page-thumb" style="background-image:url('<?php echo $url ?>');">

        	<div class="inside-xl index-blog_top-banner">

        		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        	
	        	<?php 
			    // Display the page title if set; else use 'News'              
			    if ($page_for_posts) {
			      echo '<h1 class="archive-h1">' . get_the_title($page_for_posts) . '</h1>';
			    } else {
			      echo '<h1 class="archive-h1">Blog</h1>';
			    }
			    ?>

			    <div class="top-contact-info">
					<div>
						<?php if( !empty( $image ) ): ?>
						<div class="round-small"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
						<?php endif; ?>
					</div>
					<span class='contact-phone-email' id='index_header'><span class='gold'>P</span> <a id='header-phone' href="tel:<?php echo $footerPhone; ?>"><?php echo $footerPhone; ?></a><br><span class='gold'>E</span> <a class='email-underline header-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a></span>
				</div>

			</div>

        </section>

    <?php } ?>

    

		

          

	</div><!-- end of blog-banner -->




	<section class="inside-xl blog-posts">
	

		<div class="blog-2020">



				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<article class='index_blog-posts'>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							
							<?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
							<div class="featured-wrap" style="background-image: url('<?php echo esc_attr( $background_img[0] ); ?>' ); background-size: cover; background-repeat: no-repeat; background-position: center top;"></div>
							<div class="article-content">
								<div class="gold-block blog-date-author-container"><time datetime="<?php the_time('Y-m-d'); ?>" pubdate="pubdate"><?php the_time('n.j.Y'); ?></time><p class="blog-author-title">By: Brett Metcalf</p></div>
								<span class='blog-title'><?php the_title(); ?></span>
								<span class="read-post button">Read Blog</span>
							</div>
						</a>	
					</article>
				<?php endwhile; wp_reset_postdata(); ?>
			
		</div>
		
		<?php the_posts_pagination(); ?>



	</section>

    <?php get_template_part('block', 'contact');?>

<?php get_footer(); ?>
