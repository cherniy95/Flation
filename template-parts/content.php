<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-wrap">
		<header class="post-header">
			<?php the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
				<?php flation_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( get_post_thumbnail_id() ) : ?>
			<a class="post-img" href="<?php the_permalink(); ?>">
				<img src="<?php get_thumbnail_image_uri( get_the_ID() ); ?>" class="post-image" alt="">
			</a>
		<?php endif; ?>

		<div class="post-content">
			<?php
				the_content('');
			?>

			<?php if ( !( is_single() || is_page() ) ) : ?>
				<p><a href="<?php the_permalink(); ?>" class="btn read-more"><?php esc_html_e('Read More', 'flation'); ?></a></p>
			<?php endif; ?>

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