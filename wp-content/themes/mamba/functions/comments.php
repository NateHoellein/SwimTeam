<?php 

if ( ! function_exists( 'mba_comment' ) ) :
function mba_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<div class="commentbox large-12 columns">
		<p><?php _e( 'Pingback:', 'mba' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'mba' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :

		global $post;
	?>
	<div id="comment-<?php comment_ID(); ?>" class="commentbox large-12 columns <?php if ($comment->user_id === $post->post_author) echo bypostauthor; ?>">
			<header class="comment-meta comment-author vcard small-1 columns textcenter">
				<?php
					echo get_avatar( $comment, 120 );
				?>
			</header>

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'mba' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment small-11 columns">
			<p class="date">
				<?php 	printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						sprintf( __( '%1$s at %2$s', 'mba' ), get_comment_date(), get_comment_time() )
					); ?>
			</p>
			<p>
				<?php 	printf( '<strong>%1$s %2$s</strong> said:',
						get_comment_author_link(),
						( $comment->user_id === $post->post_author ) ? '' : ''
					);
				?>
			</p>
				<?php comment_text(); ?>
				<p><?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Comment', 'mba' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></p>
			</section>

	<?php break; endswitch; }

	endif;

?>