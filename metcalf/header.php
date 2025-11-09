<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js webp" <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5L5VK93');</script>
<!-- End Google Tag Manager -->

<?php 
// Location Schema & Global
if ( is_tree(1380) ) { /* Wesley Chapel Pages */
	$wc_schema = get_field('wc_schema', 'option');
	echo '<script type="application/ld+json">' . $wc_schema . '</script>';
} else {
	// General JSON Schema Data
	$tampa_schema = get_field('tampa_schema', 'option');
	echo '<script type="application/ld+json">' . $tampa_schema . '</script>';
} 
// Single Page Schema
$single_schema = get_field('single_schema');
if ( !empty($single_schema) ) :
	echo '<script type="application/ld+json">' . $single_schema . '</script>';
endif; 
?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5L5VK93"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

    <a class="skip-link" href='#main-content'>Skip to Main Content</a>

	<header>
		<div id="header-top">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>
			
			<div id="header-top_right">
				<div id="header-top_menu">
					<nav id="global">
						<?php
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav'
							);
							wp_nav_menu( $args );
						?>
					</nav>		
					<nav id="desktop">
						<?php
							if ( is_tree(1380) ) {
								$args = array(
									'container' => false,
									'theme_location' => 'wesley-chapel-nav'
								);
								wp_nav_menu( $args );
							} else {
								$args = array(
									'container' => false,
									'theme_location' => 'header-nav'
								);
								wp_nav_menu( $args );
							}
						?>
					</nav>		
					<div id="header-top_mobile">
						<div id="menu-icon" class="toggle-nav">
					     	<span class="line line-1"></span>
						    <span class="line line-2"></span>
						    <span class="line line-3"></span>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="main-buffer"></div>

    <span id="main-content"></span>