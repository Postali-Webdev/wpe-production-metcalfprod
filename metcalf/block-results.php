<?php
/**
 * Case Resultss Block
 * @package Postali Parent
 * @author Postali LLC
 */

// Start WP_Query for only the ID's from above
$first_query = new WP_Query(
	array(
		'post_type' => 'results',
		'posts_per_page' => 4,
		'order' => 'ASC',
		'orderby' => 'rand'
	)
);

?>

<section id="results-block">
	<div class="container">
        <span class="section-title centered-text">Our Results</span>
    </div>

    <div class="results-block flex">
	    <div id="results-block_left" class="fifty fifty-fix">
	    	<article class="mega-padd inside-md">
	        <!-- WP_Query for case results post type here that uses slick -->

	        <?php if ($first_query) : ?>
		        <div class="results-slick">	
				<?php while($first_query->have_posts()) : $first_query->the_post(); ?>				  
				
					<div>
		        		<span class="results-number gold"><?php the_field('settlement_amount'); ?></span>
		        		<span class='results-desc'><?php the_field('settlement_description'); ?></span>
		        	</div>		
													
				<?php endwhile; ?><?php wp_reset_postdata(); ?>
				</div>
			<?php endif; ?>

	        
	        	
	        

	    	</article>
	    </div>
	    <div id="results-block_right" class="fifty fifty-fix">
	    	<article class="mega-padd inside-md">
	        <?php the_field('case_result_content_block' , 'options'); ?>
	    	</article>
	    </div>
	</div>
</section>