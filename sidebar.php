<?php
	/**
 * @package Apostrophe
 *
 * The Sidebar containing the main widget areas.
 */
?>
<div id="secondary" class="widget-area" role="complementary">
  <div class="sidebar-primary sidebar-gray">
    <div class="sidebar-passport">
      <img class="sidebar-passport-img" src="/wp-content/themes/apostrophe-child/images/docpass.gif" />
      <div class="sidebar-apply-here">APPLY&nbsp;HERE&nbsp;</div>
    </div>
    <div class="sidebar-after-passport sidebar-gray">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>

      <div class="sidebar-yellow">
        <?php dynamic_sidebar( 'sidebar-3' ); ?>
      </div>
    </div>
  </div>
</div><!-- #secondary -->
