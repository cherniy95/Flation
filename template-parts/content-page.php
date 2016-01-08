<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-wrap">
		<header class="post-header">
			<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<?php if ( get_post_thumbnail_id() ) : ?>
			<img src="<?php get_thumbnail_image_uri( get_the_ID() ); ?>" class="post-image" alt="">
		<?php endif; ?>

		<div class="post-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'flation' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'flation' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
