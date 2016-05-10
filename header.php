<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flation
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </button>
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
			</div>
			
				<?php
					wp_nav_menu( array(
						'menu' => 'primary',
						'theme_location' => 'primary',
						'container' => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'navbar',
						'depth' => 3,
						'menu_class' => 'nav navbar-nav',
						'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
						'walker' => new wp_bootstrap_navwalker()
					) );
				?>

		</div>
	</nav>

	<div id="content" class="main-wrapper">
		<div class="container">
			<div class="row">
