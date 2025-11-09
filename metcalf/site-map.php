
<?php /*Template Name: Sitemap*/ ?>
<?php get_header(); ?>
​
​
​
<div class="inside-xl">
    <div id='site-map_breadcrumbs'>
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="inside-xl"><p id="breadcrumbs" class="black">','</p></div>');} ?> 
    </div>
    
    <section id='site-map_container'>
        <div class="sub-inside">
            <div class="container"> 
                <div class="container_inner">
                    <?php if (have_posts()) : 
                        while (have_posts()) : the_post(); ?>
                        <div class="column_inner">
                                
                            <!-- SITEMAP -->
                            <div class="column-50-50">
                                <div class="column1">
                                    <div class="column_inner">
                                        <h2>Pages</h2> 
                                            <ul><?php wp_list_pages("title_li=" ); ?></ul> 
                                    </div>
                                </div>
                                <div class="column2">
                                    <div class="column_inner">        
                                        <h2>Blog Posts</h2> 
                                            <ul>
                                                <?php wp_get_archives('type=postbypost'); ?>
                                            </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    <?php endwhile; ?>
                    <?php endif; ?>
                                            
                </div>
            </div>
        </div>

    </section>
</div>
<?php get_footer(); ?>