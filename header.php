<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Pixcode
 * @subpackage ebicalho
 * @since ebicalho 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
		    <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
		    <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
		    <?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
		    <?php if ( is_page() ) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
		    <?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
		    <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
		    <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
		    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
		</title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style-base.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/site.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<?php wp_head(); ?>
  </head>
  <body  <?php body_class(); ?> class="<?php if ( is_user_logged_in() && is_admin_bar_showing() ) { echo 'logged-in'; } ?>">


    <nav class="navbar navbar-theme-white navbar-fixed-top <?php if ( is_user_logged_in() && is_admin_bar_showing() ) { echo 'logged-in'; } ?>" >
      <div class="navbar-full-search">
      <form class="" role="search">
        <div class="form-group">
          <div class="input-group search-input-group">
            <input class="form-control" placeholder="Search..." type="text">
            <span class="input-group-addon"><a href="#" title="Close" class="close">×</a></span>
          </div>
        </div>
      </form>
    </div>

    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html" title="Corporate">
          <img class="hidden-sm hidden-xs" src="<?php bloginfo('template_url'); ?>/img/logoEbicalhoNova2.jpg" alt="ebicalho"  >
          <img class="hidden-lg hidden-md" src="<?php bloginfo('template_url'); ?>/img/logoEbicalhoNova2.jpg" alt="ebicalho"  >
        </a>
      </div>

      <div class="collapse navbar-collapse" id="top-navbar-collapse" data-hover="dropdown" data-animations="fadeInUpNew fadeInRightNew fadeInDownNew fadeInLeftNew">

				<?php wp_nav_menu(
				 array(
				 'container' => false,
				 'items_wrap' => '<ul id="nav" class="nav navbar-nav nav-pipe-style ">%3$s</ul>',
				 'theme_location' => 'menu-top'
				 )); ?>			


        <ul class="nav navbar-nav social navbar-right">
          <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="http://facebook.com" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
