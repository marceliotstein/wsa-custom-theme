<?php
/**
 * Apostrophe functions and definitions
 *
 * modified by marceliotstein for WorldService.org custom child theme
 *
 * @package Apostrophe
 */

function apostrophe_child_fonts_url() {
  $fonts_url = '';

  /* Translators: If there are characters in your language that are not
  * supported by PT Serif, translate this to 'off'. Do not translate
  * into your own language.
  */
  $pt_serif = _x( 'on', 'PT Serif font: on or off', 'apostrophe' );

  /* Translators: If there are characters in your language that are not
  * supported by Open Sans, translate this to 'off'. Do not translate
  * into your own language.
  */
  $open_sans = _x( 'on', 'Open Sans font: on or off', 'apostrophe' );

  if ( 'off' !== $pt_serif || 'off' !== $open_sans ) :
          $font_families = array();

          if ( 'off' !== $pt_serif ) {
                  $font_families[] = 'PT Serif:400,400italic,700,700italic';
          }

          if ( 'off' !== $open_sans ) {
                  $font_families[] = 'Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic';
          }

          // fonts for worldservice.org
          $font_families[] = 'Montserrat:400,600';
          $font_families[] = 'Domine:200,400';
          $font_families[] = 'Nunito:400';
          $font_families[] = 'Nunito Sans:400,600';

          $query_args = array(
                  'family' => urlencode( implode( '|', $font_families ) ),
                  'subset' => urlencode( 'latin,latin-ext,cyrillic' ),
          );

          $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

  endif;
  return $fonts_url;
}

function apostrophe_enqueue_styles() {
  $parent_style = 'apostrophe-style';
  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array($parent_style),
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'apostrophe_enqueue_styles');

