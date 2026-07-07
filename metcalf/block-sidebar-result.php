<?php
/**
 * Case Resultss Block
 * @package Postali Parent
 * @author Postali LLC
 */


$featured_case_result = get_field('featured_case_result');


if( $featured_case_result ) { ?>
	<section class="sidebar-results">
		<div class="results-block flex">
			<div id="results-block_left">
				<article>
					<div>	
						<div>
							<span class="results-number gold"><?php the_field('settlement_amount', $featured_case_result->ID); ?></span>
							<span class='results-desc'><?php the_field('settlement_description', $featured_case_result->ID); ?></span>
						</div>		
					
					</div>
				<a class="button" href="/case-results/">All Case Results</a>
				</article>
			</div>
		</div>
	</section>

<?php
} else {
	// Start WP_Query for only the ID's from above
	$first_query = new WP_Query(
		array(
			'post_type' => 'results',
			'posts_per_page' => 1,
			'order' => 'ASC',
			'orderby' => 'rand'
		)
	);

	?>

	<section class="sidebar-results">
		<div class="results-block flex">
			<div id="results-block_left">
				<article>
				<?php if ($first_query) : ?>
					<div>	
					<?php while($first_query->have_posts()) : $first_query->the_post(); ?>				  
						<div>
							<span class="results-number gold"><?php the_field('settlement_amount'); ?></span>
							<span class='results-desc'><?php the_field('settlement_description'); ?></span>
						</div>		
					<?php endwhile; ?><?php wp_reset_postdata(); ?>
					</div>
				<?php endif; ?>
				<a class="button" href="/case-results/">All Case Results</a>
				</article>
			</div>
		</div>
	</section>
<?php
}

