<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package crraftunderboot
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/crraft.png" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'crraftunderboot' ); ?></a>

        <nav id="site-navigation" class="navbar navbar-default" role="navigation">
  			  <div class="container">
  			    <!-- Brand and toggle get grouped for better mobile display -->
  			    <div class="navbar-header">
  			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  			        <span class="sr-only">Toggle navigation</span>
  			        <i class="ci ci-bars" area-hidden="true"></i>
  			      </button>
  			      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
  			    </div>
            <div class="navbar-form navbar-right"><?php get_search_form(); ?></div>
  					<?php
  							wp_nav_menu( array(
  									'menu'              => 'primary',
  									'theme_location'    => 'primary',
  									'depth'             => 2,
  									'container'         => 'div',
  									'container_class'   => 'collapse navbar-collapse',
  						'container_id'      => 'bs-example-navbar-collapse-1',
  									'menu_class'        => 'nav navbar-nav',
  									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
  									'walker'            => new wp_bootstrap_navwalker())
  							);
  					?>
  			  </div><!-- /.container -->
  			</nav>

    </div><!-- .wrapper-navbar end -->

    <?php
    if (  is_front_page() && is_home() && is_active_sidebar('carousel') ) {}
    if (  is_front_page() && is_home() && is_active_sidebar('jumbotron') ) {}
    else { ?>
      <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
  <?php  } ?>
