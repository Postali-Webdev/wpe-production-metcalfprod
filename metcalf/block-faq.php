<?php
/**
 * FAQ Block
 * @package Postali Parent
 * @author Postali LLC
 */
?>
<?php if( have_rows('faq_accordion') ): ?>
    <section id="faq-accordion">
		<h3>Frequently Asked Questions</h3>
		<div class="accordions inside-lg">
			<ul id="big-menu" class="menu">
				<?php while( have_rows('faq_accordion') ): the_row(); 
					// vars
					$question = get_sub_field('question');
					$answer = get_sub_field('answer');
					?>
					<li class="menu-item-has-children">
						<a class='accordion-toggle' id='about_accordion' href=""><?php echo $question; ?>
							<span id='expand-plus' class='icon icon-plus-icon'></span>
						</a>
						<ul class="sub-menu gold-li">
					    <?php echo $answer; ?>
						</ul>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>