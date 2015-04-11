<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

    <div class="row">
        
        <div class="large-12 columns" id="content" role="main">

            <?php

                while ( have_posts() ) : the_post();

                    get_template_part( 'content', 'page' );

                    if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                endwhile;
            ?>

        </div>

    </div>  

<?php get_footer(); ?>