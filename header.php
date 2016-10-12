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
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/manifest.json">
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicons/favicon.ico">
<meta name="apple-mobile-web-app-title" content="Parque de los Suenos">
<meta name="application-name" content="Parque de los Suenos">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="<?php echo get_bloginfo('template_directory'); ?>/favicons/mstile-144x144.png">
<meta name="msapplication-config" content="<?php echo get_bloginfo('template_directory'); ?>/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
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
			<a class="buy-tix-btn" href="https://parque.webconnex.com/tickets"></a>
		</div>
	</header><!-- #masthead -->
	<div id="stickyhead">
		<button class="menu-toggle menu-toggle-sticky">
			<div></div>
			<div></div>
			<div></div>
		</button>
		<div class="main-navigation main-navigation-sticky">
			<a class="buy-tix-btn" href="https://parque.webconnex.com/tickets"></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu-sticky', 'container_class' => 'menu-all-pages-container menu-all-pages-container--'.get_locale() ) ); ?>
		</div>
	</div><!-- #stickyhead -->

	<a class="header-special-btn" href="https://parque.webconnex.com/NewYearsEve?utm_source=parquedelossuenos&utm_medium=Website&utm_campaign=ParqueButtonClicks"></a>

	<div id="content" class="site-content">
