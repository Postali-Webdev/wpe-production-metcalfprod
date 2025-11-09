<?php
/**
 * Above Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/

$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveRight = get_field('main_right', 'options');
$image = get_field('main_image', 'options');

?>

<footer id="above-footer">
	<div class="inside-xl flex">

		<div class="sub-inside sixty">
			<div><?php echo $aboveLeft; ?></div>
			<div class="contact-info">
				<div>
					<?php if( !empty( $image ) ): ?>
					<div class="round-small"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
					<?php endif; ?>
				</div>
				<span class='contact-phone-email'><span class='gold'>P</span> <a class='black' id='header-phone' href="tel:<?php echo $footerPhone; ?>"><?php echo $footerPhone; ?></a><br><span class='gold'>E</span> <a class='black email-underline header-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a></span>
			</div>
		</div>

		<div class="sub-inside forty">
			<p><?php echo $aboveRight; ?></p>
		</div>

	</div>
</footer>