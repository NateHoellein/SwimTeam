    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mba' ); ?></p>
        <?php get_search_form(); ?>
    </article>