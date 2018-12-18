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
            <h1>SUPPORT OUR WORK</h1>
            <h2>Donate</h2>
            <div class="tight-list">
              <a href="#">I have 1 minute to help</a><br />
              <a href="#">I have 5 minutes to help</a><br />
              <a href="#">I have 30 minutes to help</a><br />
            </div>
            <h2>APPEAL</h2>
            <div class="tight-list">
              <a href="#">Volunteer Opportunity</a><br />
            </div>
            <img class="littlebutton" src="/wp-content/themes/apostrophe-child/images/worldcitizenbutton.png" />
          </div>
        </td>
        <td class="front-td-right front-apply">
          <div class="front-apply-inner">
            <h1>Apply For Your World Citizenship Document</h1>
            <center><a href="#"><img src="/wp-content/themes/apostrophe-child/images/docpass.gif"></a></center>
            <div class="tight-list">
              <a href="#">World Passport Application</a>
            </div>
            <div class="front-apply-other">
              <h2>Other Application Forms</h2>
              <div class="tight-list">
                <a href="#">Passport, Birth Certificate and ID Card</a> &nbsp; &#8226; &nbsp; 
                <a href="#">Exit Visa and Residence Permit</a> &nbsp; &#8226; &nbsp; 
                <a href="#">World Marriage Certificate</a> &nbsp; &#8226; &nbsp; 
                <a href="#">World Political Asylum Card</a>
              </div>
            </div>
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
    <table class="front-table front-social-table">
      <tr>
        <td class="front-td-left front-callouts">
          <div class="front-videos">
            <h2>Recent Videos</h2>
            <div class="front-videos-inner">
              <?php echo do_shortcode("[youtube title='World Citizen Government Explained' video='nQ8bwQ2VXqU' autohide='2' color='green' controls='1' iv_load_policy='1' theme='dark' quality='default' button_layout='default' button_theme='default' button_subscriber_count='default' conditions='Array']"); ?>
            </div>
          </div>

          <div class="front-catalog">
            <h2>Books, Videos, etc.</h2>
            <table class="front-catalog-table">
              <tr>
                <td class="front-catalog-cover">
                  <a href="#"><img class="front-cover-img" src="/wp-content/uploads/2018/10/GDtocourt.jpg" /></a>
                </td>
                <td class="front-catalog-text">
                  <div><b><i>Garry Davis Goes to Court</i></b></div>
                  <br />
                  <div>World Citizen No.1's innovative legal defense of "world law," "world citizenship," and "world government"! Click here for more info and to buy!</div>
                </td>
              </tr>
            </table>
          </div>

          <div class="front-blog">
            <div class="front-blog-inner">
              <h2><a href="#">The David Gallup Blog</a></h2>
            </div>
            <h2><a href="#">The Garry Davis Blog Archive (1997 to 2003)</a></h2>
          </div>
        </td>
        <td class="front-td-right front-callouts">
	  <div class="sidebar-secondary">
            <div class="front-social-title">
              Follow World Service Authority on Facebook
            </div>
	    <?php dynamic_sidebar('sidebar-2'); ?>
            <div class="front-instagram">
              Instagram Feed Goes Here
            </div>
            <div class="front-yahoo-group">
              <a href="#"><img src="/wp-content/themes/apostrophe-child/images/yg_join.gif" /></a><br />
              <a href="#">Join our World Government discussion group on Yahoo</a>
            </div>
          </div>
        </td>
      </tr>
    </table>

    <!-- contact and stuff -->
    <table class="front-table front-legal-table">
      <tr>
        <td colspan="2" class="front-legal">
          <div class="front-legal-title-box">
            <div class="front-legal-title">
              Legal Resources and Further Information
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="front-td-left front-links">
          <h1>Legal Resource Cener</h1>
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
          <br />
                  <a href="#">Ellsworth Declaration</a><br />
                  <a href="#">Memorandum on World Government</a><br />
                  <a href="#">Position Paper</a><br />
                  <h2><a href="#">More WSA Info</a></h2>
        </td>
        <td class="front-td-right front-links">
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
