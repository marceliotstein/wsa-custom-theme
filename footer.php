<?php
	/**
 * @package Apostrophe
 *
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
               <div class="social-icons">
                  <a href="#" alt="Follow us on Facebook" class="fa fa-facebook"></a>
                  <a href="#" alt="Follow us on Instagram" class="fa fa-instagram"></a>
                  <a href="#" alt="Follow us on Twitter" class="fa fa-twitter"></a>
                  <a href="#" alt="Follow us on YouTube" class="fa fa-youtube"></a>
                  <a href="#" alt="Connect with us on LinkedIn" class="fa fa-linkedin"></a>
                  <a href="#" alt="Subscribe via Yahoo" class="fa fa-yahoo"></a>
               </div>

		<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
		<div class="widget-area">
			<div id="footer-sidebar">
				<?php dynamic_sidebar( 'footer-sidebar' ); ?>
			</div>
		</div>
		<?php endif; ?>

                <div class="footer-main">
                  The World Service Authority, and the human-embracing-the-globe logo are service marks or registered service marks of the World Service Authority throughout the world.
                </div>
		<div class="site-info">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
