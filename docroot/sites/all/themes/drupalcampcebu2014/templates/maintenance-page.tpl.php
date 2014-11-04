<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */

global $base_path;
$images_dir = '/public/images/';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>">

<div class="main-container">

<div class="above-the-fold">
  <div class="container">
    <div class="camp-logo">
      <div class="row">
        <div class="col-md-4 col-sm-5">
          <div class="logo-container">
            <img class="logo-whale" src="<?php print $base_path . drupal_get_path('theme', 'drupalcampcebu2014') .
              $images_dir . 'campcebu-whale-alone.png'; ?>">
            <img class="logo-sun" src="<?php print $base_path . drupal_get_path('theme', 'drupalcampcebu2014') .
              $images_dir . 'campcebu-sun-alone.png'; ?>">
          </div>
        </div>
        <div class="col-md-5 col-sm-6">
          <div class="drupalcamp-title">
            <span style="color: white;">DRUPAL</span><span style="color: #f0c419">CAMP</span> <span style="color: #3b97d3" class="cebu">CEBU</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-4">
          <div class="venue-container">
            <span style="color: white;" class="date">15/16 NOVEMBER 2014</span> <span style="color: #3b97d3;" class="uni">UNIVERSITY OF</span> <span style="color: #3b97d3;" class="uni-name">SAN CARLOS</span> <span style="color: white;" class="cebucity">CEBU CITY</span>
          </div>
        </div>

        <div class="header-intro-text">
          <div class="row">
            <div class="col-md-12">
              <p>Drupalcamp Cebu is a 1.5 day conference organized by  the Drupal Cebu User Group. This is the first Drupalcamp in the Philippines, outside of Manila. We wish to bring together a variety of people interested in learning and growing skills in open-source, web development, business, DevOps, web design and more with great speakers and sessions.<br>
                Join us to learn, attend great sessions for various levels of experience, social events and Cebu&#39;s specialities &#59;)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="camp-speakers-wave"></div>


<div class="camp-speakers">
  <div class="container">
    <div class="row">
      <div class="col-md-12 drupalcamp-speakers">
        <?php if (!empty($title)): ?>
          <h1 class="page-header">More info soon ...</h1>
        <?php endif; ?>
<!--        <h3>Speakers</h3>-->
        <?php print $messages; ?>
                            <p class="speaker-announcement">
                        We are still working on this site but you can already find more about the group and 
                        Drupal events in Cebu on <a href="http://meetup.com/drupal-ph/">meetup.com</a>, our <a href="https://www.facebook.com/groups/drupalcebu/">facebook group</a> and <a href="http://drupalcebu.org">website drupalcebu.org</a>.<br>
                        We tweet <a href="https://twitter.com/DrupalCampCebu">@drupalcampcebu</a> or with <a href="https://twitter.com/hashtag/DrupalcampCebu">#drupalcampcebu</a>
                    </p>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
    #mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; }
    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//prometsource.us8.list-manage.com/subscribe/post?u=d7c17f85aa93351e7a79703df&amp;id=1be4349981" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <h2>Join Drupal Cebu Newsletter</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
    <label for="mce-FNAME">First Name </label>
    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
    <label for="mce-LNAME">Last Name </label>
    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_d7c17f85aa93351e7a79703df_1be4349981" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

        <?php if (!empty($page['yellow-region'])): ?>
          <?php print render($page['yellow-region']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>


<div class="camp-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h3>ABOUT</h3>
        <p class="footer-description">This camp is brought to you by the Drupal Cebu User Group.
          All the sources of this website based on Drupal are Open Source, under GNU GENERAL PUBLIC LICENSE on <a href="#">github.com</a></p>
      </div>
      <div class="col-md-5">
        <h3>CONNECT</h3>
        <p class="footer-description">We tweet
          <a href="https://twitter.com/DrupalCampCebu">@DrupalcampCebu</a><br>
          <a href="https://www.facebook.com/groups/drupalcebu/">Drupal Cebu on Facebook</a><br>
          More about the <a href="http://drupalcebu.org">Drupal Cebu user group</a>
        </p>
      </div>
    </div> <!-- row -->
    <div class="row">
      <div class="col-md-12">
                    <p class="copyright">&copy; Copyright 2014 Drupalcamp Cebu. All rights reserved. Drupal is a <a href="http://drupal.com/trademark">registered trademark</a> of <a href="http://buytaert.net/">Dries Buytaert</a>.<br>
                    Logo by <a href="http://ph.linkedin.com/in/lordgeltzdale">Lord Geltzdale de Vera</a>. Design by <a href="https://www.linkedin.com/pub/reina-figuracion/50/446/522">Rein Figuracion</a>. Web development by these <a href="https://github.com/Luukyb/DrupalcampCebu2014/graphs/contributors">amazing guys!</a></p>
      </div>
    </div> <!-- row -->
  </div> <!-- container -->
</div> <!-- camp-footer -->


</body>
</html>

<script type="text/javascript">
  // Function to fix the menu when scrolling.
  jQuery("document").ready(function($){
    var nav = $('.nav-container');
    $(window).scroll(function () {
      if ($(this).scrollTop() > 670) {
        nav.addClass("f-nav");
        nav.addClass("logo-title-menu");
        $( ".logo-title-menu-hidden" ).removeClass("hide");
      } else {
        nav.removeClass("f-nav");
        nav.removeClass("logo-title-menu");
        $( ".logo-title-menu-hidden" ).addClass("hide");
      }
    });
  });
</script>
