<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flation
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					esc_html( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'flation' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'flation' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'flation' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'flation' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">

		
			<!-- Comment template -->
			<?php 
				function flattheme_comment($comment, $args, $depth) {
					$GLOBALS['comment'] = $comment;
			?>
					

					<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
						<div id="comment-<?php comment_ID(); ?>" class="comment-wrap">
							<div class="comment-author vcard">
								<?php echo get_avatar( $comment, $size='75' ); ?>

								<cite class="fn"><?php echo get_comment_author_link() ?></cite> <span class="says"><?php esc_html_e('say:', 'flation'); ?></span>
							</div>
							<?php if ($comment->comment_approved == '0') : ?>
								<em><?php esc_html_e('Your comment is awaiting moderation', 'flation'); ?></em>
								<br />
							<?php endif; ?>

							<div class="comment-meta commentmetadata">
								<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf( '%1$s %2$s %3$s', get_comment_date(), esc_html__('in', 'flation'), get_comment_time()) ?></a>
								<?php edit_comment_link(esc_html__('Edit', 'flation'), '  ', '') ?>
							</div>

							<?php comment_text() ?>

							<div class="reply">
								<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
							</div>
						</div>
						

			<?php 
				}
			?>


			<?php
				// wp_list_comments( array(
				// 	'style'      => 'ol',
				// 	'short_ping' => true,
				// ) );
				wp_list_comments( 'type=comment&callback=flattheme_comment' );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'flation' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'flation' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'flation' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php endif; // Check for comment navigation. ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'flation' ); ?></p>
	<?php endif; ?>

	<?php 
		comment_form(
				array(
					'fields' => array(
							'author' => sprintf('<div class="row"><div class="col-sm-4"><p class="form-group comment-form-author"><label for="author" class="control-label">%1$s</label><input id="author" name="author" class="form-control" type="text" required="required" aria-required="true"></p></div>', esc_html__('Name*', 'flation')),
							'email' => sprintf('<div class="col-sm-4"><p class="form-group comment-form-email"><label for="email" class="control-label">%1$s</label><input id="email" name="email" class="form-control" type="email" required="required" aria-required="true"></p></div>', esc_html__('E-Mail*', 'flation')),
							'url' => sprintf('<div class="col-sm-4"><p class="form-group comment-form-url"><label for="url" class="control-label">%1$s</label><input id="url" name="url" class="form-control" type="url"></p></div></div>', esc_html__('Site', 'flation'))
						),
					'comment_field' => sprintf('<div class="row"><div class="col-sm-12"><p class="form-group comment-form-comment"><textarea id="comment" name="comment" class="form-control" required="required" aria-required="true">%1$s</textarea></p></div></div>', esc_html__('Your Comment', 'flation'))
				)
		); 
	?>

</div><!-- #comments -->
