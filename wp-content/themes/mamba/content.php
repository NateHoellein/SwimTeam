<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if (is_single()): ?>
    
    <h1><?php the_title(); ?></h1>
    
    <div class="top-meta">
        <span class="meta-time"><i class="fa fa-clock-o"></i> <?php the_time(); ?></span>
        <span class="meta-comments"><a href="#comments"><i class="fa fa-comment"></i> <?php comments_number(__('No comments', 'mba'), __('One comment', 'mba'), __('% comments', 'mba')); ?></a></span>
    </div>
    
    <?php $mba_featured_image=get_post_meta( get_the_ID(), 'mba_featured_image', true ); if( empty( $mba_featured_image ) ): ?>
    <?php the_post_thumbnail( 'large', array( 'class'=>'post-thumbnail')); ?>
    <?php endif; ?>
    
    <?php the_content() ); ?>
    
    <?php wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mba' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        ) );

    ?>
    
    <?php the_tags(); ?>
    
    <?php else: ?>
    
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'masonry-thumb', array( 'class'=>'post-thumbnail')); ?>
    </a>
    
    <h2>
        <a href="<?php the_permalink(); ?>">
            <?php if (is_sticky()): ?>
            <i class="fa fa-star"></i>
            <?php endif; ?>
            <?php the_title(); ?>
        </a>
    </h2>
    
    <?php the_excerpt(); ?>
    
    <div class="top-meta">
        <span class="meta-time"><i class="fa fa-clock-o"></i> <?php the_time(); ?></span>
        <span class="meta-comments"><i class="fa fa-comment"></i> <?php comments_number(__('No comments', 'mba'), __('One comment', 'mba'), __('% comments', 'mba')); ?></span>
    </div>
    
    <?php endif; ?>

</article>