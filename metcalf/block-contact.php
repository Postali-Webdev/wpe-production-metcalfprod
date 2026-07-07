<?php
/**
 * Contact Block
 * @package Postali Parent
 * @author Postali LLC
 */

$footerPhone = get_field('phone', 'options');
$footerEmail = get_field('email', 'options');
$footerContactLink = get_field('contact_page_link', 'options');
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
				<span class='contact-phone-email version2 ondark'>
					<a class='btn' id='header-phone' href="tel:<?php echo $footerPhone; ?>">
						Call Us
					</a>
					<a class='btn btn-secondary' id='contact-link' href="<?php echo $footerContactLink['url']; ?>">
						<?php echo $footerContactLink['title']; ?>
					</a>
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