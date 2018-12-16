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

    <!-- slider -->
    <?php echo do_shortcode("[smartslider3 slider=4]"); ?>

    <!-- donate and apply -->
    <table class="front-table">
      <tr>
        <td class="front-td-left front-donate">
          <div class="front-donate-inner">
            <h1>Support Our Work</h1>
            <h2>Donate</h2>
            <a href="#">I have 1 minute to help</a><br />
            <a href="#">I have 5 minutes to help</a><br />
            <a href="#">I have 30 minutes to help</a><br />
            <h2>Appeal</h2>
            <a href="#">Volunteer Opportunity</a><br />
            <img class="littlebutton" src="/wp-content/themes/apostrophe-child/images/worldcitizenbutton.png" />
          </div>
        </td>
        <td class="front-td-right front-apply">
          <div class="front-apply-inner">
            <h1>Apply For Your World Citizenship Document</h1>
            <center><a href="#"><img src="/wp-content/themes/apostrophe-child/images/docpass.gif"></a></center>
            World Passport Application
            <br />
            <h2>Other Application Forms</h2>
            <a href="#">Passport, Birth Certificate and ID Card</a><br />
            <a href="#">Exit Visa and Residence Permit</a><br />
            <a href="#">World Marriage Certificate</a><br />
            <a href="#">World Political Asylum Card</a><br />
          </div>
        </td>
      </tr>
    </table>

    <!-- legal -->
    <table class="front-table">
      <tr>
        <td class="front-td-single front-legal">
          <a href="#">Legal Authority and Usage</a> &nbsp; &#8226; &nbsp;
          <a href="#">WSA Legal Department</a> &nbsp; &#8226; &nbsp;
          <a href="#">World Commissions</a> &nbsp; &#8226; &nbsp;
          <a href="#">Frequently Asked Questions</a>
        </td>
      </tr>
    </table>

    <!-- catalog, social media, blog, videos -->
    <table class="front-table">
      <tr>
        <td class="front-td-left front-callouts">
          <h1>Catalog & Publications</h1>
          <h2>Books, Videos, etc.</h2>
          <a href="#">Ellsworth Declaration</a><br />
          <a href="#">Memorandum on World Government</a><br />
          <a href="#">Position Paper</a><br />
          <h2><a href="#">More WSA Info</a></h2>

          <div class="trunk-box front-blog">
            <div class="front-blog-inner">
              <h2><a href="#">The David Gallup Blog</a></h2>
            </div>
            <h2><a href="#">The Garry Davis Blog Archive (1997 to 2003)</a></h2>
          </div>
        </td>
        <td class="front-td-right front-callouts">
          <h1>WSA on Facebook</h1>
	  <div class="sidebar-secondary">
	    <?php dynamic_sidebar('sidebar-2'); ?>
          </div>
          <div class="trunk-box front-twitter">
          </div>
          <div class="trunk-box front-instagram">
          </div>

          <div class="trunk-box front-videos">
            <h1>Recent Videos</h1>
            <?php echo do_shortcode("[youtube title='World Citizen Government Explained' video='nQ8bwQ2VXqU' autohide='2' color='green' controls='1' iv_load_policy='1' theme='dark' quality='default' button_layout='default' button_theme='default' button_subscriber_count='default' conditions='Array']"); ?>
          </div>
        </td>
      </tr>
    </table>

    <!-- contact and stuff -->
    <table class="front-table">
      <tr>
        <td class="front-td-left front-links">
          <h1>Contact WSA</
          <a mailto="#">Email</a><br />
          <a href="#">Contact Form</a><br />
          <a href="#">What Is World Citizenship?</a><br />
          <a href="#">What Is The World Citizen Government?</a><br />
          <a href="#">Historical Statements</a><br />
          <a href="#">Historical Media (Audio and Video)</a><br />
          <a href="#">Quotes on World Citizenship</a><br />
          <a href="#">Universal Declaration of Human Rights</a><br />
          <a href="#">What Is World Citizenship?</a><br />
          <h2><i>"We are all born free and equal in dignity and rights."</i></h2>
          <a href="#">Visas</a><br />
          <a href="#">Official Letters</a><br />
          <a href="#">Letters of Support</a><br />
          <a href="#">Why We Are World Citizens (Video)</a><br />
          <a href="#">Global Roundup</a>
          <br />

          <a href="#">Mundialization</a><br />
          <a href="#">World Syntegrity Project</a><br />
          <a href="#">World Referendum</a><br />
          <br />

          <a href="#">World Guards</a><br />
          <a href="#">Definitions</a><br />
          <a href="#">Main References</a><br />
          <br />
          <a href="#">World Government Programs</a><br />
        </td>
      </tr>
    </table>

  </main><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>
