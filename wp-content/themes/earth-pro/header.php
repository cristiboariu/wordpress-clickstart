<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package earthpro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<header id="masthead" class="site-header" role="banner">
		<?php earthpro_branding();?>
	</header><!-- #masthead -->

	<div id="top-bar">
		<nav id="site-navigation" class="main-navigation" role="navigation">
		<div id="topbar-search"><?php get_template_part( 'search', 'topbar' ); ?></div>
			<h1 class="menu-toggle"><i class="dashicons dashicons-menu"></i></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'earthpro' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="clear"></div>
	</div>
	


<?php 
if (!is_front_page()) {
	if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<div id="breadcrumbs-wrap"><div id="breadcrumbs-container"><p id="breadcrumbs">','</p></div></div>');
	}
}
?>

	<div id="content" class="site-content">
