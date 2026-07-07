<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
$tampa = get_field('tampa_address', 'options');
$tampa_map = get_field('tampa_map', 'options');
$wesley = get_field('wc_address', 'options');
$wesley_map = get_field('wc_map', 'options');
$footerPhone = get_field('phone', 'options');
$wcPhone = get_field('wc_phone', 'options');
$footerEmail = get_field('email', 'options');
$footerNotice = get_field('legal_notice', 'options');
?>
<footer id="site-footer">

	<div>

		<div class="inside-vertical">
			<?php the_custom_logo(); ?>
		</div>

		<div class="columns">

			<div class="column-33 block">

				<div id="footer-contact-info" class="sub-inside">
					<div class="address-container">
						<div class="contact_address">

							<div class="contact-address">
								<div class="gold-block"><a href="tel:<?php echo $footerPhone; ?>">Phone</a></div>
								<a class='bold black' id='contact-phone' href="tel:<?php echo $footerPhone; ?>"><?php echo $footerPhone; ?></a>	
							</div>
							
							<div class="contact-address">
								<div class="gold-block"><a href="mailto:<?php echo $footerEmail; ?>" title="Tampa Office">EMAIL</a></div>
								<a class='bold black email-underline header-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a></span>
							</div>
							
							<div class="contact-address">
								<div id='office-location' class="gold-block"><a href="/" title="Tampa Office">Tampa Office</a></div>
								<span class='footer-contact address'><a class='address-link' href='https://g.page/HillsboroughDefense?share'><?php echo $tampa; ?></a></span>
							</div>

							<div class="contact-map">
								<iframe src="<?php echo esc_url($tampa_map); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
							</div>

						</div>
				
					</div>
					<?php if ( is_tree(1380) ) { /* Wesley Chapel Tree */ ?>
						<span class='footer-contact'><span class='gold'>P </span><a id='footer-phone' href="tel:<?php echo $wcPhone; ?>"><?php echo $wcPhone; ?></a><br>
						<span class='gold'>E </span><a class='email-underline' id='footer-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a></span>
					<?php } ?>
				</div>

			</div>
			
			<div class="column-66">

				<div class="sub-inside">
					<span class='footer-menu-label'>Criminal Defense</span>
					<?php
						$args = array(
							'container' => false,
							'theme_location' => 'footer-nav'
						);
						wp_nav_menu( $args );
					?>
				</div>

				<div class="sub-inside">
					<span class='footer-menu-label'>Areas Served</span>
					<?php
						$args = array(
							'container' => false,
							'theme_location' => 'footer-nav-center'
						);
						wp_nav_menu( $args );
					?>
				</div>

				<div class="sub-inside">
					<span class='footer-menu-label'>Global</span>
					<?php
						$args = array(
							'container' => false,
							'theme_location' => 'footer-nav-right'
						);
						wp_nav_menu( $args );
					?>
				</div>
				
			</div>
			


			

			

		</div><!-- end of triple -->

		<div class="sub-inside legal-notice">
			<?php echo $footerNotice; ?>

			<div class='social-links'>
				<a title="facebook" target="blank" class='social-icon' href='https://www.facebook.com/MFLawyers/'><span class='icon icon-footer-facebook-icon'></span></a>
				<a title="linkedIn" target="blank" class='social-icon' href='https://www.linkedin.com/company/metcalf-falls-criminal-defense-attorneys-p-a/'><span class='icon icon-footer-linkedin-icon'></span></a> 
			</div>

		</div>



	</div><!-- end of .inside -->
</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.callrail.com/companies/286722638/cf7b5e5bce46313a4dca/12/swap.js"></script>
</body>
</html>


