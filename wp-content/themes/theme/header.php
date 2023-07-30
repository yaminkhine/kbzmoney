<?php
/**
 * The Header template for our theme
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
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" rel="stylesheet">

	
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="desktop-header">
<div class="top-header">
	<div class="container">
		
		<div class="phone">
			<span><img src="/wp-content/uploads/2023/07/3917156-1.png">+959 7980 65880</span>
			
		</div>
		<div class="update-news">
			<span>UPDATES – Click Here for KBZ Money News Alerts – UPDATES</span>
		</div>
		<div class="email">
			<span>admin@kbzmoney.com<img src="/wp-content/uploads/2023/07/Vector.png"></span>
		</div>
	
	</div>
	
</div>

<div class="header">
	<div class="container">
			<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">	<?php the_custom_logo();?> </a>
			</div>
			<div class="main_menu ">
				  <div class="menu">
				  	<?php /* Primary navigation */
						wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'menu_class'        => 'nav navbar-nav',
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
					?>
				  </div>

			</div>
		
		 <div class="search-form-top">
			 <div class="search-input-top" style="display: none;">
				 <?php get_search_form(); ?>
			 </div>
			 <img src="/wp-content/uploads/2023/07/Vector-search.png">
		</div>

	</div><!-- end of container -->
</div><!-- end of header -->
</div>	
	
<div class="mobile-header" style="display:none;">
<div class="header">
<div class="container">
		<div class="logo">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">	<?php the_custom_logo();?> </a>
		</div>
	<div id="menu-icon">
		<img src="/wp-content/uploads/2023/07/1636053.png">
	</div>
	
	<div class="menu-popup" style="display:none;">
	<div class="container">
		
	
		<span class="close"><img src="/wp-content/uploads/2023/07/close-428.png"></span>
		<div class="menu">
				  	<?php /* Primary navigation */
						wp_nav_menu( array(
					                'menu'              => 'primary',
					                'theme_location'    => 'primary',
					                'depth'             => 2,
					                'menu_class'        => 'nav navbar-nav',
					                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					                'walker'            => new wp_bootstrap_navwalker())
					            );
					?>
				  </div>
		<div class="top-header">
		
		<div class="phone">
			<span><img src="/wp-content/uploads/2023/07/3917156-1.png">+959 7980 65880</span>
			
		</div>
		<div class="update-news">
			<span>UPDATES – Click Here for KBZ Money News Alerts – UPDATES</span>
		</div>
		<div class="email">
			<span>admin@kbzmoney.com<img src="/wp-content/uploads/2023/07/Vector.png"></span>
		</div>
	
      </div>
		 <div class="search-form-top">
			 <div class="search-input-top" style="display: none;">
				 <?php get_search_form(); ?>
			 </div>
			 <img src="/wp-content/uploads/2023/07/Vector-search.png">
		</div>
			</div>
	</div>
	
</div>
</div>
</div>
	
<?php if ( is_single() ) { ?>
<div class="bread-crumb text-center single-post-bread-crumb">
<div>
<div class="bread-crumb-link">
<h2>
	<?php the_title(); ?>
	</h2>

<a href="/">Home </a>
<img src="/wp-content/uploads/2023/07/Vector-6.png">
<span> Blog </span>
		
	</div>
</div>
</div>
<?php }  ?> 

<div class="main">
	<div class="container">
		<div class="row">