<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Flation
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-8">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'flation' ); ?></h1>
							</header><!-- .page-header -->
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'flation' ); ?></p>
								<?php get_search_form(); ?>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">

							<div id="secondary" class="widget-area" role="complementary">
								<div class="sidebar">

									<?php 
										the_widget( 'WP_Widget_Recent_Posts', array('dropdown' => '0'), array(
											'before_widget' => '<aside class="widget %s">',
											'after_widget'  => '</aside>',
											'before_title'  => '<h3 class="widget-title">',
											'after_title'   => '</h3>'
										) ); 
									?>

									<?php if ( flat_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
									<aside class="widget widget_categories">
										<h3 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'flation' ); ?></h3>
										<ul>
										<?php
											wp_list_categories( array(
												'orderby'    => 'count',
												'order'      => 'DESC',
												'show_count' => 1,
												'title_li'   => '',
												'number'     => 10,
												'hierarchical' => 0
											) );
										?>
										</ul>
									</aside><!-- .widget -->
									<?php endif; ?>

									<?php
										/* translators: %1$s: smiley */
										$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'flation' ), convert_smilies( ':)' ) ) . '</p>';
										the_widget( 'WP_Widget_Archives', 'dropdown=1', array(
											'before_widget' => '<aside class="widget %s">',
											'after_widget'  => '</aside>',
											'before_title'  => '<h3 class="widget-title">',
											'after_title'   => '</h3>' . $archive_content
										) );
									?>

									<?php 
										the_widget( 'WP_Widget_Tag_Cloud', '', array(
											'before_widget' => '<aside class="widget %s">',
											'after_widget'  => '</aside>',
											'before_title'  => '<h3 class="widget-title">',
											'after_title'   => '</h3>'
										) ); 
									?>

								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
