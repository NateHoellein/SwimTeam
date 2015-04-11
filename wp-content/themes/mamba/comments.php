<?php if ( post_password_required() ) return; ?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
    <h3>
        <?php printf( _n( 'One Comment', '%1$s Comments', get_comments_number(), 'mba' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?>
    </h3>

    <?php wp_list_comments( array( 'callback'=>'mba_comment', 'style' => 'div' ) ); ?>

    <?php if ( get_comment_pages_count()>1 && get_option( 'page_comments' ) ) : ?>
    <nav id="comment-nav-below" class="navigation" role="navigation">
        <h2 class="assistive-text section-heading">
            <?php _e( 'Comment navigation', 'mba' ); ?>
        </h2>
        <div class="nav-previous">
            <?php previous_comments_link( __( '&larr; Older Comments', 'mba' ) ); ?>
        </div>
        <div class="nav-next">
            <?php next_comments_link( __( 'Newer Comments &rarr;', 'mba' ) ); ?>
        </div>
    </nav>
    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="nocomments">
        <?php _e( 'Comments are closed.' , 'mba' ); ?>
    </p>
    <?php endif; ?>

    <?php endif; ?>

    <?php comment_form(array('comment_notes_after' => '')); ?>

</div>