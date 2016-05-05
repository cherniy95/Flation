<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flation
 */

?>
</div>
	</div>
		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'flation' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'flation' ), 'WordPress' ); ?></a>
							<br>
							<?php esc_html_e('Theme Flation by ', 'flation'); ?><a href="<?php echo esc_url( __( 'http://w-dev.ru/', 'flation' ) ); ?>"><?php printf( esc_html__( 'Chernousikov SO', 'flation' ) ); ?></a>
						</div>
					</div>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
