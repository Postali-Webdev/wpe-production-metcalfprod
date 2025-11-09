<?php
/**
 * Post archive template.
 *
 * @package Postali Parent
 * @author Postali LLC
 */

if ( is_day() ) {
	$post_title = sprintf( __( 'Daily Archives: %s', 'postali' ), get_the_date() );
} elseif ( is_month() ) {
	$post_title = sprintf( __( 'Monthly Archives: %s', 'postali' ), get_the_date( 'F Y' ) );
} elseif ( is_year() ) {
	$post_title = sprintf( __( 'Yearly Archives: %s', 'postali' ), get_the_date( 'Y' ) );
} else {
	$post_title = __( 'Blog Archives', 'postali' );
}

get_header(); ?>

<div class="container">

	<h1 class="post-title"><?php echo esc_html( $post_title ); ?></h1>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'archive' ); ?>

	<?php endwhile; ?>

	<?php the_posts_pagination(); ?>

	<?php get_sidebar( 'archive' ); ?>

</div><!-- #content -->

<?php get_footer();
