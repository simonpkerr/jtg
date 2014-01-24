<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="google-site-verification" content="wTTu-gX3WQ7CGJk1u0b_GK8mfeVmHmeYcZoUUvdJ5cY" />
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
        <script type="text/javascript">
            Modernizr.load([
                {
                    test: Modernizr.mq('only screen and (min-width: 600px)'),
                    nope: ['<?php echo get_template_directory_uri(); ?>/js/respond.min.js']
                }                
            ]);
        </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed container">
		<header id="masthead" class="site-header row" role="banner">
                        <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
                        <nav id="site-navigation" class="navbar navbar-default navbar-fixed-top" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#jtg-navbar-collapse">
                                    <span class="sr-only">Toggle nav</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand h1" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                    <?php bloginfo( 'name' ); ?>
                                    <span>(<?php bloginfo( 'description' ); ?>)</span>
                                </a>
                            </div>			
                            <div id="jtg-navbar-collapse" class="collapse navbar-collapse navbar-right">
                                <?php wp_nav_menu( array(
                                    'menu'              => 'jtg-primary',
                                    'theme_location'    => 'primary',
                                    'container'         => '',
                                    'menu_class'        => 'nav navbar-nav'
                                 )); ?>
                                <?php get_search_form(); ?>
                            </div>
                        </nav><!-- #site-navigation -->
                                
		</header><!-- #masthead -->

		<div id="main" class="site-main row">
