<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$imageFeatured = get_field('featured_award_white' , 'options');
$tabTitle1 = get_field('tab_title_1');
$tabContent1 = get_field('tab_content_1');
$tabTitle2 = get_field('tab_title_2');
$tabContent2 = get_field('tab_content_2');
$tabTitle3 = get_field('tab_title_3');
$tabContent3 = get_field('tab_content_3');
$tabTitle4 = get_field('tab_title_4');
$tabContent4 = get_field('tab_content_4');
$tabTitle5 = get_field('tab_title_5');
$tabContent5 = get_field('tab_content_5');
$tabTitle6 = get_field('tab_title_6');
$tabContent6 = get_field('tab_content_6');
$getImage = get_field('why_image');

$tabFel = get_field('felonies_tab_title');
$tabFelContent = get_field('felonies_tab_content');

$tabMis = get_field('misdemeanors_tab_title');
$tabMisContent = get_field('misdemeanors_tab_content');


$tabLocalCourt = get_field('local_court_tab_title');
$tabLocalCourtContent = get_field('local_court_tab_content');

$tabCircuitCourt = get_field('circuit_court_tab_title');
$tabCircuitCourtContent = get_field('circuit_court_tab_content');

$args = array (
    'post_type' => 'post',
    'post_per_page' => '3',
    'post_status' => 'publish',
    'order' => 'DESC',
    'paged' => $paged
);
$the_query = new WP_Query($args);

get_header();?>

<div id="blog-holder">

    <section id="fp-banner">

        <div id='fp_page-thumb' class="page-thumb" style="background-image: url('<?php echo $backgroundImg[0] . checkWebpCompatibility(); ?>');">

            <div id="fp-banner_container">

                <div id="fp-banner_left">
                    <h1 class="home-sm-upper gold"><?php the_title(); ?></h1>
                    <?php the_field('banner_left'); ?>
                    <?php get_template_part('block', 'stars');?>

                </div>

                <div id="fp-banner_right">

                    <div class="banner-right"><?php the_field('banner_right'); ?></div>

                    <div class="global-award always-flex">
                        <div class="global-award_left thirty flex-vertical">
                            <img src="<?php echo esc_url($imageFeatured['url']); ?>" alt="<?php echo esc_attr($imageFeatured['alt']); ?>" />
                        </div>
                        <div class="global-award_right forty-five">
                            <p class="forma"><?php the_field('featured_award_description' , 'options'); ?></p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    
    <section id="fp-under-banner">
        <div class="inside-xl flex justify">
            <div id="fp-under-banner_left" class="forty-five">
                <?php the_field('under_banner_left'); ?>
            </div>
            <div id="fp-under-banner_right" class="forty-five">
                <article class="main-article"><?php the_field('under_banner_quote'); ?></article>
            </div>
        </div>
    </section>



    <section id="fp-help">
        <!-- Tabbed content - https://codepen.io/tylermeansbusiness/pen/YMdqVx
        Since it appears that the front page is the only template using the tabs feature, I'd suggest adding any front page specific functionality to the home.js file in /assets/js/src/
        This file then can be enqueued only on the frontpage template, saving js loading on other pages -->
        <div class="container">
            <span class="section-title centered-text">How Can We Help You?</span>
        </div>

        <div class="flex">

            <div id="fp-help_left" class="fifty">
                <ul class="tab-selectors padd inside-md">

                    <?php if($tabTitle1): ?>
                    <li class='fp_tab-li'><a href="#tab-1"><h3 class='fp_tab-block'><?php echo $tabTitle1; ?> <span class="icon icon-arrow-icon"></span></h3></a></li>
                    <?php endif; ?>
                    <?php if($tabTitle2): ?>
                    <li class='fp_tab-li'><a href="#tab-2"><h3 class='fp_tab-block'><?php echo $tabTitle2; ?> <span class="icon icon-arrow-icon"></span></h3></a></li>
                    <?php endif; ?>
                    <?php if($tabTitle3): ?>
                    <li class='fp_tab-li'><a href="#tab-3"><h3 class='fp_tab-block'><?php echo $tabTitle3; ?> <span class="icon icon-arrow-icon"></span></h3></a></li>
                    <?php endif; ?>
                    <?php if($tabTitle4): ?>
                    <li class='fp_tab-li'><a href="#tab-4"><h3 class='fp_tab-block'><?php echo $tabTitle4; ?> <span class="icon icon-arrow-icon"></span></h3></a></li>
                    <?php endif; ?>
                    <?php if($tabTitle5): ?>
                    <li class='fp_tab-li'><a href="#tab-5"><h3 class='fp_tab-block'><?php echo $tabTitle5; ?> <span class="icon icon-arrow-icon"></span></h3></a></li>
                    <?php endif; ?>
                    <?php if($tabTitle6): ?>
                    <li class='fp_tab-li'><a href="#tab-6"><h3 class='fp_tab-block'><?php echo $tabTitle6; ?> <span class="icon icon-arrow-icon"></span></h3></a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <div id="fp-help_right" class="fifty">
                <div class="tab-content-container padd inside-md">

                    <?php if($tabContent1): ?>
                    <div class="tab-content" id="tab-1">
                        <?php echo $tabContent1; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($tabContent2): ?>
                    <div class="tab-content" id="tab-2">
                        <?php echo $tabContent2; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($tabContent3): ?>
                    <div class="tab-content" id="tab-3">
                        <?php echo $tabContent3; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($tabContent4): ?>
                    <div class="tab-content" id="tab-4">
                        <?php echo $tabContent4; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($tabContent5): ?>
                    <div class="tab-content" id="tab-5">
                        <?php echo $tabContent5; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($tabContent6): ?>
                    <div class="tab-content" id="tab-6">
                        <?php echo $tabContent6; ?>
                    </div>
                    <?php endif; ?>
                    
                </div>
            </div>

        </div>


    </section>

    <section id="fp-why">

        <div id='accordions-container' class="inside-xl flex justify">

            
                <!-- Set image from wp-uploads as background attribute -->

            <?php if ( $getImage ): ?>
                <div id="fp-why_left" class="forty">
                    <img src="<?php echo esc_url($getImage['url']); ?>" alt="<?php echo esc_attr($getImage['alt']); ?>" />
                </div>
            <?php endif; ?>


            <div id="fp-why_right" class="accordions fifty">

                <!-- Simple Accordions Code https://codepen.io/tylermeansbusiness/pen/MRBQdQ -->

                <h2><?php the_field('why_title'); ?></h2>

                <?php if( have_rows('why_accordions') ): ?>

                    <ul id="big-menu" class="menu">

                    <?php while( have_rows('why_accordions') ): the_row(); 

                        // vars
                        $title = get_sub_field('accordion_title');
                        $content = get_sub_field('accordion_content');
                        ?>

                        <li class="menu-item-has-children">
                                <a class='accordion-toggle' href="">
                                    <h3><?php echo $title; ?></h3>
                                    <span id='expand-plus' class='icon icon-plus-icon'></span>
                                </a>
                                <ul class="sub-menu gold-li">
                                <?php echo $content; ?>
                                </ul>
                        </li>

                        

                    <?php endwhile; ?>

                    </ul>

                <?php endif; ?>


                
                <?php 
                $link = get_field('learn_more_button');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a id="why_button" class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>

            </div>

        </div>
    </section>

    <section class="inside-xl">
        <?php get_template_part('block', 'awards');?>
    </section>
    
    <?php get_template_part('block', 'testimonials');?>
    
    <section id="fp-practice-areas">
        <!-- Working Example - https://www.cimmaintenance.com/ -->

        <div class="inside-xl">

            


            <?php if( have_rows('practice_areas') ): ?>

            <div id="fp-practice-header" class="padd">
                <span class='section-title'>Practice Areas</span>
                <p>Metcalf Falls, Criminal Defense Attorneys, P.A. know what it takes to defend against:</p>
            </div>

            <div id="fp-slick" class='flex'>



                <?php while( have_rows('practice_areas') ): the_row(); 

                    // vars
                    $practiceArea = get_sub_field('title');
                    $image = get_sub_field('image');
                    $content = get_sub_field('content');
                    $link = get_sub_field('link');

                    ?>

                    <div>
                        <div class="slick-height mega-padd inside-md" style="background-image: url(<?php echo $image['url']; ?>)">
                            <div class="fp_slick-content slick-content-adjust">
                            <?php echo $content; ?>

                            <?php if( $link ): ?>
                                <a href="<?php echo $link; ?>">Visit <?php echo $practiceArea ?> Page</a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            </div>

            <?php endif; ?>

        </div>

    </section>


    <section id="fp-defense">
        <!-- Tabbed content - https://codepen.io/tylermeansbusiness/pen/YMdqVx -->
        <div class="container">
            <h2 class="section-title centered-text fp-defense-block">Criminal Defense Law</h2>
            <p class="centered-text">Criminal law covers violations of public law. In Florida, offenses are divided into two categories: <strong>misdemeanors</strong> and <strong>felonies.</strong></p>
        </div>

        <ul class="tab-selectors-big flex">

            <?php if($tabFel): ?>
            <li class="fifty"><a href="#tab-1-big" class="padd centered-text"><h3><?php echo $tabFel; ?> <span class="icon icon-plus-icon"></span></h3></a></li>
            <?php endif; ?>

            <?php if($tabMis): ?>
            <li class="fifty"><a href="#tab-2-big" class="padd centered-text"><h3><?php echo $tabMis; ?> <span class="icon icon-plus-icon"></span></h3></a></li>
            <?php endif; ?>
    
        </ul>

        <div class="tab-content-container-big inside-md">

            <?php if($tabFelContent): ?>
            <div class="tab-content-big" id="tab-1-big">
                <?php echo $tabFelContent; ?>
            </div>
            <?php endif; ?>
            <?php if($tabMisContent): ?>
            <div class="tab-content-big" id="tab-2-big">
                <?php echo $tabMisContent; ?>
            </div>
            <?php endif; ?>
            
        </div>

    </section>

    <!-- -->
    <section id="fp-justice">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <h2><?php the_field('justice_upper_headline'); ?></h2>
                    <?php the_field('justice_upper_copy'); ?>
                    <?php if( have_rows('justice_ready_to_help') ): ?>
                    <?php $n=1; ?>
                    <div class="help-boxes">
                    <?php while ( have_rows('justice_ready_to_help') ) : the_row(); ?>   

                        <div class="help-box">
                            <div class="headline"><span><?php echo $n; ?></span> <?php the_sub_field('title'); ?></div>
                            <p><?php the_sub_field('content'); ?></p>
                        </div>
                        
                    <?php $n++; ?>
                    <?php endwhile; ?>
                    </div>
                    <?php endif; ?>

                    <h2><?php the_field('justice_lower_headline'); ?></h2>
                    <?php the_field('justice_lower_copy'); ?>
                </div>
            </div>
            <div class="columns bottom">
            <?php if( have_rows('justice_court_blocks') ): ?>
            <?php while ( have_rows('justice_court_blocks') ) : the_row(); ?>   

            <div class="column-full courts-box">
                <div class="courts-container">
                    <div class="courts-bottom">
                        <div class="image-block">
                            <div class="image-box">
                            <?php 
                            $image = get_sub_field('location_image');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            </div>
                        </div>
                        <div class="details-block">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <div class="subtitle"><?php the_sub_field('subtitle'); ?></div>
                            <?php the_sub_field('location_content'); ?>
                            <div class="courts-cta">
                                <p><?php the_sub_field('location_cta'); ?></p>
                                <a href="tel:<?php the_sub_field('location_phone'); ?>" class="btn"><?php the_sub_field('location_phone'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- -->


    <?php if(get_field('additional_content')) { ?>
    <section id="fp-additional-content">
        <div class="container">
            <?php the_field('additional_content_top'); ?><br>
            <div class="spacer-break"></div>
            <div class="left"><?php the_field('additional_content_left'); ?></div>
            <div class="right"><?php the_field('additional_content_right'); ?></div>
        </div>
    </section>
    <?php } ?>


    <section class='results-block' id='fp_results-block'>

        <?php get_template_part('block', 'results');?>
    
    </section>

    <section class="inside-xl blog-posts" id='fp-blog'>

        <div class="container">
            <span class="section-title centered-text">Read Our Legal Blog</span>
            
        </div>
    

        <div class="blog-2020">
        <?php
			$custom_query = new WP_Query( 
				array(
					'post_type' => 'post', 
					'order' => 'DESC', 
					'posts_per_page' => 3,
	                'order' => 'DESC'
					) 
				);
				if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                    <article>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            
                            <?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                            <div class="featured-wrap" style="background: url('<?php echo esc_attr( $background_img[0] . checkWebpCompatibility() ); ?>' ); background-size: cover; background-repeat: no-repeat; background-position: center top;"></div>
                            <div class="article-content">
                                <div class="gold-block"><time datetime="<?php the_time('Y-m-d'); ?>" pubdate="pubdate"><?php the_time('n.j.Y'); ?></time></div>
                                <span class='blog-title'><?php the_title(); ?></span>
                                <span class="read-post button">Read Blog</p>
                            </div>
                        </a>
                        <a class='post-author_link' href="/about/" ><p class="post-author">Author: Brett Metcalf</p></a>    
                    </article>
		<?php endwhile; endif; wp_reset_query();?>

            
        </div>
        
        <div class="centered-text padd-top"><a class="btn" href="<?php $url = home_url(); echo $url; ?>/blog/">Visit Blog Page</a></div>



    </section>

</div><!-- end of blog holder -->
<?php get_template_part('block', 'contact');?>

<?php get_footer();?>