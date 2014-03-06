<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div

<div id="page" class="hfeed site">
		<span style="position: absolute;top: -90px;left: 30px;color: #8a837b;">
			<img src="/wp-content/themes/twentytwelve/images/logo.png"/><br/>&nbsp;Адвокат Владислава Дойчинова
		</span>
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">
		<div class="header_images">
			<div id="cimy_div_id_0">Loading images...</div>
		</div>
<div class="cimy_div_id_0_caption"></div>
		<style type="text/css">
			#cimy_div_id_0 {
			position: absolute;
			top: -4px;
			left: 10px;
				float: left;
				margin: 1em auto;
				border: 0px solid #000000;
				width: 960px;
				height: 300px;
			}
			div.cimy_div_id_0_caption {
				position: absolute;
				margin-top: 175px;
				margin-left: -75px;
				width: 150px;
				text-align: center;
				left: 50%;
				padding: 5px 10px;
				background: black;
				color: white;
				font-family: sans-serif;
				border-radius: 10px;
				display: none;
				z-index: 2;
			}
		</style>
<noscript>
	<div id="cimy_div_id_0_nojs">
		<img id="cimy_img_id" src="http://vladi/wp-content/Cimy_Header_Images/0/MG_3723.jpg" alt="" />
	</div>
</noscript>