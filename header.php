<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package parque
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>
	/* Test for flexbox supprt. If found, add class to DOM */
	if( document.documentElement.style && 
		document.documentElement.style.flex != undefined ||
		document.documentElement.style.webkitFlex != undefined ||
		document.documentElement.style.mozFlex != undefined ||
		document.documentElement.style.msFlex != undefined ||
		document.documentElement.style.oFlex != undefined ||
		document.documentElement.style.boxDirection != undefined ){
		document.documentElement.className += "supportsFlexbox";
	}
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'parque' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-banner">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-label="<?php bloginfo( 'name' ); ?>">
					<div class="site-logo"></div>
				</a>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!-- Hamburger -->
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="menu">
					<div></div>
					<div></div>
					<div></div>
				</button>
				<!-- Main Menu -->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'menu-all-pages-container menu-all-pages-container--'.get_locale() ) ); ?>
			</nav><!-- #site-navigation -->
			<a class="buy-tix-btn" href="https://parque.webconnex.com/tickets?mode=test"></a>
		</div>
	</header><!-- #masthead -->
	<div id="stickyhead">
		<button class="menu-toggle menu-toggle-sticky">
			<div></div>
			<div></div>
			<div></div>
		</button>
		<div class="main-navigation main-navigation-sticky">
			<a class="buy-tix-btn" href="#"></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu-sticky', 'container_class' => 'menu-all-pages-container menu-all-pages-container--'.get_locale() ) ); ?>
		</div>
	</div><!-- #stickyhead -->

	<div id="content" class="site-content">
