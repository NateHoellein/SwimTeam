<?php get_header(); ?>

    <div class="row">
        
        <div class="medium-9 columns" id="content" role="main">

            <?php

                while ( have_posts() ) : the_post();

                    get_template_part( 'content', 'page' );

                    if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                endwhile;
            ?>

        </div>
    
        <?php get_sidebar( 'content' ); ?>

    </div>  

<?php get_footer(); ?>