<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flation
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

	<div class="col-xs-12 col-sm-12 col-md-4">

	<div id="secondary" class="widget-area" role="complementary">
		<div class="sidebar">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div><!-- #secondary -->

	</div>
