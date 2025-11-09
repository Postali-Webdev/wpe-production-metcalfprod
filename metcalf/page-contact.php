<?php
/**
 * ContactTemplate
 * Template Name: Contact
 *
 * @package Postali Child
 * @author Postali LLC
 */

$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveRight = get_field('main_right', 'options');

$image = get_field('main_image', 'options');

$tampa = get_field('tampa_address', 'options');
$wesley = get_field('wc_address', 'options');

$contactLeft = get_field('contact_block_left', 'options');
$contactRight = get_field('contact_block_right', 'options');

get_header(); ?>


	<section id="page-contact"> 

		<div class="inside-xl contact-top-banner">
		
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 

			<div class="flex justify">
				<div class="fifty">

	                <h1 class="archive-h1"><?php the_title(); ?></h1>

					<div class="top-contact-info" id='contact_info-block'>
	                    <div>
	                        <?php if( !empty( $image ) ): ?>
	                        <div class="round-small"><img src="/wp-content/uploads/2020/01/interior-page-header-attorney-thumbnail.jpg" alt='Attorney Brett Metcalf head shot'/></div>
	                        <?php endif; ?>
	                    </div>
						<span class='contact-phone-email'><span class='gold'>P</span> <a class='black' id='header-phone' href="tel:<?php echo $footerPhone; ?>"><?php echo $footerPhone; ?></a><br><span class='gold'>E</span> <a class='black email-underline header-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a></span>
	                </div>

					<div class="address-container">
							<div class="contact_address padd-top">
								<div id='office-location' class="gold-block"><a href="/" title="Tampa Office">Tampa Office</a></div>
								<span class="office-address dark"><?php echo $tampa; ?></span>
								<p><a id='driving-directions' href='https://g.page/HillsboroughDefense?share' target='_blank'>Driving Directions</a></p>
							</div>
					</div>

				</div>
				<div class="sidebar forty padd">

					<?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
					
				</div>
			</div>
		</div>
	
	</section>

	<section id="contact-bottom">
		<div class="flex">
		    <div id="contact-bottom_left" class="fifty fifty-fix">
		    	<article class="mega-padd inside-md">
				<h2><?php echo $contactLeft; ?></h2>
		    	</article>
		    </div>
		    <div id="contact-bottom_right" class="fifty fifty-fix">
		    	<article class="inside-md">
		        <?php echo $contactRight; ?>
		    	</article>
		    </div>
		</div>
		
	</section>

	<div id="page-contact_map">
		<!-- Google Map Embed -->
	</div>

	<?php if ( is_page(11) ) { ?> <!-- Global Version -->
		<script>
		function initMap() {
			var myLatLng = {lat: 27.9434595, lng: -82.480733};

			var map = new google.maps.Map(document.getElementById('page-contact_map'), {
			zoom: 15,
			center: myLatLng
			});

			var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'Brett Metcalf'
			});
			marker.addListener('click', function() {
				infowindow.open(map, marker);
			});
			
			var contentString = '<div id="mapContent">'+
			'<h1 id="firstHeading" class="firstHeading">Brett Metcalf Criminal Defense Attorney</h1>'+
			'<div id="siteNotice">'+
			'<p>Want Directions? <a target="_blank" href="https://www.google.com/maps/dir//2011+W+Cleveland+St+Ste+A-1,+Tampa,+FL+33606/@27.9417588,-82.4839342,16.3z/data=!4m8!4m7!1m0!1m5!1m1!1s0x88c2c37ca0075cbd:0x20c79fc640ed396f!2m2!1d-82.480733!2d27.9434595">Find Us...</a></p>'
			'</div>'+
			'</div>';
			
			var infowindow = new google.maps.InfoWindow({
				content: contentString,
				maxWidth: 500
			});
		}
    </script>
    
	<?php } else if ( is_page(1382) ) { ?> <!-- Wesley Chapel Version -->
		<script>
		function initMap() {
			var myLatLng = {lat: 28.18908345013878, lng: -82.36179121593239};

			var map = new google.maps.Map(document.getElementById('page-contact_map'), {
			zoom: 15,
			center: myLatLng
			});

			var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'Brett Metcalf'
			});
			marker.addListener('click', function() {
				infowindow.open(map, marker);
			});
			
			var contentString = '<div id="mapContent">'+
			'<h1 id="firstHeading" class="firstHeading">Brett Metcalf Criminal Defense Attorney</h1>'+
			'<div id="siteNotice">'+
			'<p>Want Directions? <a target="_blank" href="https://www.google.com/maps/place/Brett+Metcalf,+Criminal+Defense+Attorney,+P.A./@28.1947004,-82.3649455,17z/data=!4m5!3m4!1s0x0:0x12fb4bdc8b6acc5d!8m2!3d28.1888707!4d-82.3618234">Find Us...</a></p>'
			'</div>'+
			'</div>';
			
			var infowindow = new google.maps.InfoWindow({
				content: contentString,
				maxWidth: 500
			});
		}
    	</script>
    
	<?php } ?>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKY1ZNOZhu8LWXFTG8UGUgwdu7emYofcE&callback=initMap"></script>   


<?php get_footer(); ?>
