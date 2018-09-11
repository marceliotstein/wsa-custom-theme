<?php
	/**
 * @package Apostrophe
 *
 * The Sidebar containing the main widget areas.
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="sidebar-primary">
                  <div class="sidebar-donate">
                          <img class="sidebar-donate-img" src="/wp-content/themes/apostrophe-child/images/wsa-donate-button.png" />
                  </div>
                  <div class="sidebar-passport">
                          <div class="sidebar-apply-here">APPLY HERE&nbsp;</div>
                          <img class="sidebar-passport-img" src="/wp-content/themes/apostrophe-child/images/docpass.gif" />
                  </div>
                  <div class="sidebar-after-passport">
		    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                  </div>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="sidebar-secondary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div class="sidebar-tertiary">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
		<?php endif; ?>

	</div><!-- #secondary -->
