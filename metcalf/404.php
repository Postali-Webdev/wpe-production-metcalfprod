<?php
/**
 * 404 Page Not Found.
 *
 * @package Postali Child
 * @author Postali LLC
**/
get_header(); ?>

<section><div class="container">

	<h1 class="post-title"><?php esc_html_e( 'Page Not Found', 'postali-child' ) ?></h1>
	<p><?php esc_html_e( 'We apologize but the page you\'re looking for could not be found.', 'postali' ); ?></p>
	<a class="link-404" href="/">Let's Get You Back on Track!</a>
	<!-- TODO: Do we need this? Leaving it commented out for now -->
	<?php // get_search_form(); ?>

</div></section><!-- #content -->

<?php get_footer();
