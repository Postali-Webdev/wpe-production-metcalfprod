<?php
/**
 * Law Category Category Page
 * Template Name: Category
 * @package Postali Child
 * @author Postali LLC
 */
$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$footerContactLink = get_field('contact_page_link', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveRight = get_field('main_right', 'options');

$image = get_field('main_image', 'options');

$testFeatured = get_field('case_result_content_right', 'options');
$caseResult = get_field('case_result');
$lc = get_field('law_practice_category');
$intro = get_field('intro');
$topSection = get_field('top_section');
$bottomSection = get_field('bottom_section');

$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
get_header(); ?>


<div id="blog-holder">

    <div id="blog-banner" class='category-top-banner'>

        <section class="page-thumb" id='category_page-thumb' style="background-image: url('<?php echo $backgroundImg[0]; ?>');">

            <div class="inside-xl">

            	<div class="half">
	                <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
	            
	                <h1 class="archive-h1"><?php the_title(); ?></h1>

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

            	</div><!-- end of half -->
            </div>

        </section>


    </div><!-- end of blog-banner -->

    



    <section class="inside-xl blog-posts">

        <?php if( $caseResult ) : ?>
            <article class="emphasis">
                <div class="em-contain">

                    <?php echo '<div class="gold-block">' . $lc . '</div>'; ?>               
                    <?php echo $caseResult; ?>

                </div>
            </article>
        <?php endif; ?>


        <div class="content">
            <div class="sub-inside">
                <article class="main-article">
            
                    <?php if($intro): ?>
                        <?php echo $intro; ?>
                    <?php endif; ?>

                    <?php if($topSection): ?>
                            <?php echo $topSection; ?>
                    <?php endif; ?>
                </article>
            </div>

            <div class="sidebar thirty" id='category_sidebar'>
                <?php dynamic_sidebar('main-sidebar'); ?>

                <?php get_template_part('block', 'sidebar-contact'); ?>

                <?php get_template_part('block', 'sidebar-quote'); ?>
            </div>
        
        </div><!-- end of .content -->



    </section> 
</div><!-- end of blog-holder -->

    <div class="awards-wrapper">
        <?php get_template_part('block', 'awards');?>
    </div>

<div class="blog-holder">
    <section class="inside-xl blog-posts">

        <div class="content">

            <div class="sub-inside">

            <?php if($bottomSection): ?>
                <article class="main-article">
                    <?php echo $bottomSection; ?>
                </article>
            <?php endif; ?>

            </div>

        
        </div><!-- end of .content -->

        <?php get_template_part('block', 'faq');?>
        
    </section>
</div>

    <?php get_template_part('block', 'contact');?>

<?php get_footer(); ?>
