<?php
	/**
 * @package Apostrophe
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' !== get_comments_number() ) :
				comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

                <hr />
                <?php get_sidebar(); ?>
                <hr />
	</main><!-- #main -->
  </section><!-- #primary -->
<?php get_footer(); ?>
