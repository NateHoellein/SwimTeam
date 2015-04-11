    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <h1><?php the_title(); ?></h1>

        <?php the_post_thumbnail(); ?>

        <?php the_content(); ?>
        
        <?php wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mba' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );

        ?>
        
    </article>