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
                        <?php echo do_shortcode("[smartslider3 slider=2]"); ?>
                        <div class="front-section front-videos">
                          <h1>Recent Videos</h1>
                          <?php echo do_shortcode("[youtube title='World Citizen Government Explained' video='nQ8bwQ2VXqU' autohide='2' color='green' controls='1' iv_load_policy='1' theme='dark' quality='default' button_layout='default' button_theme='default' button_subscriber_count='default' conditions='Array']"); ?>
                        </div>

	      	        <div class="front-section sidebar-secondary">
                          <h1>WSA on Facebook</h1>
		  	  <?php dynamic_sidebar('sidebar-2'); ?>
		        </div>

                        <div class="front-insta">
                        <div>
                        <!-- this template can get posts, but leave this disabled for now -->
			<?php //while ( have_posts() ) : the_post(); ?>
			<?php //endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
