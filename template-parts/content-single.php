<?php
/**
 * Template part for displaying single posts.
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

			<div class="post-details">
				<?php flation_posted_on(); ?>
			</div><!-- .entry-meta -->
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
			<?php flation_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
