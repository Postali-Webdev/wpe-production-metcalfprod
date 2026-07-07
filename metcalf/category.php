<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$footerContactLink = get_field('contact_page_link', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveRight = get_field('main_right', 'options');
$image = get_field('main_image', 'options');

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
        	
	        	<h1>Legal Blog | <?php $categories = get_the_category(); echo $categories[0]->name; ?></h1>
			    <div class="top-contact-info">
					<span class='contact-phone-email version2 ondark'>
						<a class='btn' id='header-phone' href="tel:<?php echo $footerPhone; ?>">
							Call Us
						</a>
						<a class='btn btn-secondary' id='contact-link' href="<?php echo $footerContactLink['url']; ?>">
							<?php echo $footerContactLink['title']; ?>
						</a>
					</span>
				</div>

			</div>

        </section>

    <?php } ?>

    

		

          

	</div><!-- end of blog-banner -->




	<section class="inside-xl blog-posts">
		<div class="blog-2020">
            <?php while( have_posts() ) : the_post(); ?>
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
