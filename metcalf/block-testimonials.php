<?php
/**
 * Case Results Block
 * @package Postali Parent
 * @author Postali LLC
 */
$testFeatured = get_field('testimonial_featured_review', 'options');
$topics = get_field('testimonials_topic');
$args = array (
	'post_type'              => array( 'testimonials' ),
	'post_status'            => array( 'publish' ),
	'posts_per_page'         => -1,
	'order'                  => 'DESC',
	//'orderby'                => 'rand',
	'tax_query' => array(
		array(
		  'taxonomy' => 'testimonial_topic',
		  'terms' => $topics,
		),
	  ),
);
$avg_rating = 0; 
$testi_topic = new WP_Query( $args );
?>

<section id="testi-block">
    <div class="container">
        <span class="section-title centered-text">What Our Clients Are Saying</span>
    </div>

    <div class="flex">
        <div id="testi-block_left" class="fifty fifty-fix">
            <article class="mega-padd inside-md" id='testi_blockquote'>
                <div class="em-contain">

                    <blockquote class='testimonial-block' id='testi-block_black-white'>
                        <?php echo ( is_page_template('page-about-attorney.php') ? get_field('featured_review') : $testFeatured); ?>
                    </blockquote>

                </div>
            </article>
        </div>
        <div id="testi-block_right" class="fifty fifty-fix">
            <article class="mega-padd inside-md">
                <div id="testi-block_google">

                    <?php 
                    $googleImage = get_field('google_image', 'options');
                    if( !empty( $googleImage ) ): ?>
                        <img src="<?php echo esc_url($googleImage['url']); ?>" alt="<?php echo esc_attr($googleImage['alt']); ?>" />
                    <?php endif; ?>

                </div>

                <div id="testi-block_content">
                
                    <div id="testimonial-slick" class="google-schema">
                        <?php while( $testi_topic->have_posts() ) :?>
                            
                        <?php $testi_topic->the_post(); 
                            $star_num = get_field('star_rating');
                            $avg_rating += $star_num;
                        ?>
                            <div class="google-schema_single">
                                
                                <p class="google-schema_date"><?php the_field('date_of_review'); ?></p>
                                
                                <div class="google-schema_excerpt"><?php the_excerpt(); ?></div>
                                
                                <div class="google-schema_meta always-flex">

                                    <div class="google-schema_review-rating">

                                        <?php if( get_field('star_rating') == '1' ): ?>
                                            <img src="/wp-content/uploads/2019/12/Google-Stars-trans-1.png" alt="1 Star Review" class="google-schema_stars" />
                                            <span>1</span>
                                        <?php elseif( get_field('star_rating') == '2'): ?>
                                            <img src="/wp-content/uploads/2019/12/Google-Stars-trans-2.png" alt="2 Stars Review" class="google-schema_star" />
                                            <span>2</span>
                                        <?php elseif( get_field('star_rating') == '3'): ?>
                                            <img src="/wp-content/uploads/2019/12/Google-Stars-trans-3.png" alt="3 Stars Review" class="google-schema_stars" />
                                            <span>3</span>
                                        <?php elseif( get_field('star_rating') == '4'): ?>
                                            <img src="/wp-content/uploads/2019/12/Google-Stars-trans-4.png" alt="4 Stars Review" class="google-schema_stars" />
                                            <span>4</span>
                                        <?php elseif( get_field('star_rating') == '5'): ?>
                                            <img src="/wp-content/uploads/2019/12/Google-Stars-trans-5.png" alt="5 Stars Review" class="google-schema_stars" />
                                            <span>5</span>
                                        <?php endif; ?>

                                    </div>

                                    <p class="google-schema_name"><?php the_field('name'); ?></span></p>

                                </div>
                                

                                <a href="/testimonials/" title="Read More Reviews" class="google-schema_link">Read More Reviews</a>

                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                    <div class='schema-average'>
                        <span class="google-schema_average">Average <span><?php echo $avg_rating / $testi_topic->found_posts; ?></span> out of <span>5</span> rating based on <span></span>44 Reviews</span>
                        <div>
                            <meta content="Hillsborough Defense, P.A.">
                        </div>
                    </div>
                    
                </div>
                

            </article>
        </div>
    </div>
</section>