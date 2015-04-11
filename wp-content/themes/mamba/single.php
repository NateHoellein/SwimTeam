<?php get_header(); ?>

    <div class="row">
        
        <div class="medium-9 columns" id="content" role="main">
            
            <?php

                if ( have_posts() ) :

                    while ( have_posts() ) : the_post(); ?>
                    
                    <div class="row">
                        <div class="medium-2 columns author-details">
                            <?php echo get_avatar( get_the_author_meta('email') , 150 ); ?>
                            <h4><?php the_author_link(); ?></h4>
                            <ul>
                                <li><a href="#comments"><i class="fa fa-comment"></i> <?php comments_number(__('No comments', 'mba'), __('One comment', 'mba'), __('% comments', 'mba')); ?></a></li>
                                <li><?php echo get_the_date(); ?></li>
                            </ul>
                        </div>
                    
                        <div class="medium-10 columns">

                        <?php

                            get_template_part( 'content', get_post_format() );

                        endwhile;

                            mba_paging_nav();

                        else :

                            get_template_part( 'content', 'none' );

                        endif;

                        ?>

                        <?php comments_template('', true); ?>

                        </div>
    
                    </div> 
            
        </div>
        
        <?php get_sidebar('content'); ?>

    </div>  

<?php get_footer(); ?>