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
?>


<?php get_header(); ?>

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

    <div class="welcomes-box">
      <iframe class="welcomes-frame" src="https://wsa-welcomes.surge.sh"></iframe>
    </div>

    <!-- slider -->
    <?php echo do_shortcode("[smartslider3 slider=4]"); ?>

    <!-- donate and apply -->
    <table class="front-table">
      <tr>
        <td class="front-td-left front-apply">
          <div class="front-apply-inner">
            <h1>APPLY FOR YOUR WORLD CITIZENSHIP DOCUMENT</h1>
            <center><a href="#"><img src="/wp-content/themes/apostrophe-child/images/docpass.gif"></a></center>
            <div class="tight-list">
              <a href="#">World Passport Application</a>
            </div>
            <div class="front-apply-other">
              <h2>OTHER APPLICATION FORMS</h2>
              <div class="tight-list">
                <a href="#">Birth Card, Birth Certificate and ID Card</a> &nbsp; &#8226; &nbsp; 
                <a href="#">Exit Visa and Residence Permit</a> &nbsp; &#8226; &nbsp; 
                <a href="#">World Marriage Certificate</a> &nbsp; &#8226; &nbsp; 
                <a href="#">World Political Asylum Card</a>
              </div>
            </div>
          </div>
        </td>
        <td class="front-td-right front-donate">
          <div class="front-donate-inner">
            <h1>Support Our Work</h1>
            <div class="front-donate-button">
              <img class="front-donate-img" src="/wp-content/themes/apostrophe-child/images/wsa-donate-button-grey.png" />
            </div>
            <h2>Volunteer Opportunities</h2>
            <div class="tight-list">
              <a href="#">I have 1 minute to help</a><br />
              <a href="#">I have 5 minutes to help</a><br />
              <a href="#">I have 30 minutes to help</a><br />
            </div>
            <img class="littlebutton" src="/wp-content/themes/apostrophe-child/images/i-am-a-world-citizen-circle-grey.jpg" />
          </div>
        </td>
      </tr>
    </table>

    <!-- legal -->
    <table class="front-table">
      <tr>
        <td class="front-td-single front-legal">
          <a href="#">Frequently Asked Questions</a> &nbsp; &#8226; &nbsp;
          <a href="#">Legal Authority and Usage</a> &nbsp; &#8226; &nbsp;
          <a href="#">World Commissions</a> &nbsp; &#8226; &nbsp;
          <a href="#">WSA Legal Department</a>
        </td>
      </tr>
    </table>

    <!-- catalog, social media, blog, videos -->
    <table class="front-table front-social-table">
      <tr>
        <td class="front-td-left front-callouts">
	  <div class="sidebar-secondary">
	    <?php dynamic_sidebar('sidebar-2'); ?>
            <div class="front-instagram">
              Instagram Feed Goes Here
            </div>
            <div class="front-yahoo-group">
              <a href="#"><img src="/wp-content/themes/apostrophe-child/images/yg_join.gif" /></a><br />
              Join the dialogue on human rights and world citizenship! <a href="#">Subscribe to the WorldCitizen Yahoo Group</a>
            </div>
          </div>
          <div class="front-roundup"> 
            <h2>Global Roundup</h2>
            <a href="#">Article 1</a><br />
            <a href="#">Article 2</a><br />
            <a href="#">Article 3</a>
          </div>
        </td>
        <td class="front-td-right front-callouts">
          <div class="front-videos">
            <h2>Recent Videos</h2>
            <div class="front-videos-inner">
              <?php echo do_shortcode("[youtube title='World Citizen Government Explained' video='nQ8bwQ2VXqU' autohide='2' color='green' controls='1' iv_load_policy='1' theme='dark' quality='default' button_layout='default' button_theme='default' button_subscriber_count='default' conditions='Array']"); ?>
            </div>
          </div>
          <div class="front-videos-text">
            <h3><a href="http://www.youtube.com/subscription_center?add_user=WorldServiceofficial">Subscribe to World Service videos on YouTube</a></h3>
            <a href="http://worldcitizenvideos.blogspot.com/">More videos on World Citizenship at worldcitizenvideos.blogpost.com</a>
          </div>

          <div class="front-catalog">
            <h2><a href="/world-service-authority-catalog">WSA Catalog (Publications, Buttons, etc.)</a></h2>
            <table class="front-catalog-table">
              <tr>
                <td class="front-catalog-cover">
                  <a href="#"><img class="front-cover-img" src="/wp-content/uploads/2018/10/GDtocourt.jpg" /></a>
                </td>
                <td class="front-catalog-text">
                  <div><b><i>Garry Davis Goes to Court</i></b></div>
                  <br />
                  <div>World Citizen No.1's innovative legal defense of "world law," "world citizenship," and "world government"! <a href="/world-service-authority-catalog/">Click here</a> for more info and to buy!</div>
                  <br />
                  <h3><a href="/world-service-authority-catalog/">Visit Catalog</a></h3>
                </td>
              </tr>
            </table>
          </div>

          <div class="front-blog">
            <div class="front-blog-inner"></div>
            <h2><a href="#">The Garry Davis Blog Archive</a></h2>
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
              Resources and Information
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td class="front-td-left front-links">
          <h1>Resources</h1>
          <a href="#">Definitions: What is World Citizenship and the World Citizen Government?</a><br />
          <a href="#">How to register as a World Citizen</a><br />
          <a href="#">Main References</a><br />
          <a href="#">Contact Us</a><br />
        </td>
        <td class="front-td-right front-links">
          <h1>About the WSA</h1>
          <a href="#">Programs</a><br />
          <a href="#">Recognition</a><br />
          <a href="#">World Citizen Clubs</a><br />
          <a href="#">Donate/Support</a>
        </td>
      </tr>
    </table>
    

    <div class="front-bottom-quote">
      <h2><i>"The will of the people shall be the basis of the authority of government ..."<br /> Article 21(3), Universal Declaration of Human Rights</i></h2>
    </div>

  </main><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>
