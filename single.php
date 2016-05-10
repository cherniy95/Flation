<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Flation
 */

get_header(); ?>

	<div class="col-xs-12 col-sm-12 col-md-12">

		<div id="primary" class="content-wrapper">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<?php 
					the_post_navigation( array(
						'prev_text' => '<i class="glyphicon glyphicon-chevron-left" aria-hidden="true"></i> %title',
						'next_text' => '%title <i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>'
					) ); 
				?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div>

<?php get_footer(); ?>
