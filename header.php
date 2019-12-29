<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ISAP_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php 
		//Get the root file directory for the theme
		$theme_current_directory = get_template_directory_uri();
	?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_current_directory; ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $theme_current_directory; ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_current_directory; ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $theme_current_directory; ?>/favicons/site.webmanifest">
	<link rel="mask-icon" href="<?php echo $theme_current_directory; ?>/favicons/safari-pinned-tab.svg" color="#004022">
	<link rel="shortcut icon" href="<?php echo $theme_current_directory; ?>/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#ffffff">

	<?php wp_head(); ?>
</head>

<body>
<div>
	<header>
	<nav>
		<div class="nav-wrapper">
			<?php the_custom_logo(); ?>

			<div class="nav-logo-text">Information Systems and Analytics Professionals</div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'menu',
					'container' => ''
				) );
				?>
		</div>

	</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
