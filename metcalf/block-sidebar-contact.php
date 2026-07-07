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

<div id="sidebar-contact">
	<div class="flex">
		<div>
            <?php if( !empty( $image ) ): ?>
                <div class="round-small"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
            <?php endif; ?>	
            <div><?php echo $aboveLeft; ?></div>
			<div class="contact-info">
				<span class='contact-phone-email version2'>
					<a class='btn' id='header-phone' href="tel:<?php echo $footerPhone; ?>">
						Call Us
					</a>
					<a class='btn btn-secondary' id='contact-link' href="<?php echo $footerContactLink['url']; ?>">
						<?php echo $footerContactLink['title']; ?>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>