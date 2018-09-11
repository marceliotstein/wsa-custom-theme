<?php
	/**
 * @package Apostrophe
 *
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
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
    <div id="page" class="hfeed site">
      <header id="masthead" class="site-header" role="banner">
        <div class="header">
          <div class="header-donate">
            <img class="header-donate-img" src="/wp-content/themes/apostrophe-child/images/wsa-donate-button.png" />
          </div>
          <div style="cursor: pointer;" onclick="window.location='/';" class="site-branding-wsa-custom">
            <?php
              if ( function_exists( 'jetpack_the_site_logo' ) ) :
                jetpack_the_site_logo();
              endif;
            ?>
	    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
   	    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	  </div>
	</div>
      </header><!-- #masthead -->
      <div id="content" class="site-content">
