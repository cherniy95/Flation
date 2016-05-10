<?php
/**
 * Template part for displaying results in search pages.
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

		<?php if ( has_post_thumbnail() ) : ?>
			<a class="post-img" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php endif; ?>

		<div class="post-content">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php flation_entry_footer(); ?>
		</footer><!-- .entry-footer -->

	</div>

</article><!-- #post-## -->
