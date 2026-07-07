<?php
/**
 * Case Results Block
 * @package Postali Parent
 * @author Postali LLC
 */
$testFeatured = get_field('testimonial_featured_review', 'options');
?>

<section id="testi-block" class="sidebar-quote">
    <div class="flex">
        <div id="testi-block_left" class="fifty fifty-fix">
            <article id='testi_blockquote'>
                <div class="em-contain">

                    <blockquote class='testimonial-block' id='testi-block_black-white'>
                        <?php echo ( is_page_template('page-about-attorney.php') ? get_field('featured_review') : $testFeatured); ?>
                    </blockquote>

                </div>
            </article>
        </div>
    </div>
</section>