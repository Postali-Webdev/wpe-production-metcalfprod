<?php
/**
 * Contact Block
 * @package Postali Parent
 * @author Postali LLC
 */

$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$aboveLeft = get_field('main_left', 'options');
$aboveLeftWesley = get_field('main_left_wesley', 'options');
$aboveRight = get_field('main_right', 'options');
$aboveRightWesley = get_field('main_right_wesley', 'options');
$image = get_field('main_image', 'options');

?>

<footer id="above-footer">
	<div class="inside-xl flex">

		<div class="sub-inside sixty">
            <?php if(is_page(1419)) { ?>
			<div><?php echo $aboveLeftWesley; ?></div>
            <?php } else { ?>
            <div><?php echo $aboveLeft; ?></div>
            <?php } ?>
			<div class="contact-info">
				<?php if( !empty( $image ) ): ?>
				<div class="round-small"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
				<?php endif; ?>
				<span class='contact-phone-email'>
					<span class='gold'>P</span> <a id='contact-phone' href="tel:<?php echo $footerPhone; ?>"><?php echo $footerPhone; ?></a>
					<br>
					<span class='gold'>E</span> <a class='email-underline' id='contact-email' href="mailto:<?php echo $footerEmail; ?>"><?php echo $footerEmail; ?></a>
				</span>
				
			</div>
		</div>

		<div class="sub-inside forty" id='above-footer_text'>
            <?php if(is_page(1419)) { ?>
            <p><?php echo $aboveRightWesley; ?></p>
            <?php } else { ?>
            <p><?php echo $aboveRight; ?></p>
            <?php } ?>
		</div>

	</div>
</footer>