<?php get_header(); ?>

    <div class="row">
        
        <div class="large-12 columns" id="content" role="main">

            <div class="row">
                
                <?php if (!is_front_page()): ?>
                
                <div class="large-12 archive-title">
                
                    <h1><?php single_cat_title(''); ?></h1>
                    <p><?php echo category_description(); ?></p>
                    
                </div>
                
                <?php endif; ?>
                
                <div id="masonry-loop">
                
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="medium-4 columns masonry-entry">
                                <?php get_template_part( 'content', get_post_format() ); ?>
                            </div>

                            <?php endwhile;

                        else :

                            get_template_part( 'content', 'none' );

                        endif;

                    ?>
                    
                </div>
                        
                    <?php mba_paging_nav(); ?>
            
            </div>

	   </div>
            
    </div>

<?php get_footer(); ?>