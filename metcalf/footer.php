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

	<div class="inside-xl">

		<header class="inside-vertical">
			<?php the_custom_logo(); ?>
		</header>

		<div class="triple">
			<div id="footer-contact-info" class="sub-inside">
				<div class="address-container">
					<div class="contact_address">
                        <div class="contact-map">
							<iframe src="<?php echo esc_url($tampa_map); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="contact-address">
                            <div id='office-location' class="gold-block"><a href="/" title="Tampa Office">Tampa Office</a></div>
                            <span class='footer-contact address'><a class='address-link' href='https://g.page/HillsboroughDefense?share'><?php echo $tampa; ?></a></span>
                        </div>
					</div>
			
				</div>
				<?php if ( is_tree(1380) ) { /* Wesley Chapel Tree */ ?>
					<span class='footer-contact'><span class='gold'>P </span><a id='footer-phone' href="tel:<?php echo $wcPhone; ?>"><?php echo $wcPhone; ?></a><br>
					<span class='gold'>E </span><a class='email-underline' id='footer-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a></span>
				<?php } ?>
				<div class='social-links'>
					<a title="facebook" target="blank" class='social-icon' href='https://www.facebook.com/MFLawyers/'><span class='icon icon-footer-facebook-icon'></span></a>
					<a title="linkedIn" target="blank" class='social-icon' href='https://www.linkedin.com/company/metcalf-falls-criminal-defense-attorneys-p-a/'><span class='icon icon-footer-linkedin-icon'></span></a> 
				</div>
			</div>

			<div class="sub-inside" id='footer_nav-menu'>
				<span class='footer-menu-label'>Navigation</span>
				<?php
					$args = array(
						'container' => false,
						'theme_location' => 'footer-nav'
					);
					wp_nav_menu( $args );
				?>
			</div>

			<div class="sub-inside">
				<?php echo $footerNotice; ?>
			</div>

		</div><!-- end of triple -->

	</div><!-- end of .inside -->

</footer>
<?php wp_footer(); ?>
<script type="text/javascript" src="//cdn.callrail.com/companies/286722638/cf7b5e5bce46313a4dca/12/swap.js"></script>
</body>
</html>


