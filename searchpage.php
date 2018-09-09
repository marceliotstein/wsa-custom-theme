<?php
/*
Template Name: Search Page
 *
 * @package Apostrophe
 *
 * searchpage.php - custom variation of page.php
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a class="menu-toggle"><?php esc_html_e( 'Menu', 'apostrophe' ); ?></a>
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'apostrophe' ); ?></a>

			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_class'     => 'apostrophe-navigation',
			) ); ?>

			<?php wp_nav_menu( array(
				'theme_location' => 'social',
				'menu_class'     => 'apostrophe-social',
				'link_before'    => '<span>',
				'link_after'     => '</span>',
				'fallback_cb'    => '',
				'depth'          => 1,
			) ); ?>

		</nav><!-- #site-navigation -->
		<main id="main" class="site-main" role="main">

                  <?php get_search_form(); ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
