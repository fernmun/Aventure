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
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

  <div id="page-wrapper"><div id="page">

    <?php if ($page['language_dropdown']): ?>
      <div id="language_dropdown">
        <?php print render($page['language_dropdown']); ?>
      </div>
    <?php endif; ?>

    <?php if ($page['secondary_menu']): ?>
      <div id="secondary-menu">
        <?php print render($page['secondary_menu']); ?>
      </div>
    <?php endif; ?>
    <div id="header">
      <div id="header-wrapper">
        <?php print render($page['header']); ?>

        <?php if ($site_name || $site_slogan): ?>
          <div id="name-logo">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
              <!-- end logo -->
            <?php endif; ?>
            <?php if ($site_name): ?>
              <?php if ($title): ?>
                <div id="site-name"><strong>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </strong></div>
              <?php else: /* Use h1 when the content title is empty */ ?>
                <h1 id="site-name">
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
                </h1>
              <?php endif; ?>
            <?php endif; ?>

            <?php if ($site_slogan): ?>
              <div id="site-slogan"><?php print $site_slogan; ?></div>
            <?php endif; ?>
          </div> <!-- /#name-and-slogan -->
        <?php endif; ?>
        <nav id="main-menu">
          <?php if ($page['menu_bar']): ?>
            <?php print render($page['menu_bar']); ?>
          <?php endif; ?>
        </nav>
        <!-- end main-menu -->
      </div>
      <!-- end header-wrapper -->
    </div>
    <!-- end header -->

    <section id="messages-wrapper">
      <?php print $messages; ?>
    </section>
    <!-- end messages-wrapper -->

    <div id="main-wrapper"><div id="main" class="clearfix">

      <div id="content" class="column"><div class="section">

        <?php if ($page['slider_destacado']): ?>
          <div id="slider-destacado">
            <?php print render($page['slider_destacado']); ?>
          </div>
        <?php endif; ?>

        <?php if ($page['type_of_travel']): ?>
          <div class="type-travel">

              <div id="type-of-travel">
                <?php print render($page['type_of_travel']); ?>
              </div>

          </div>
        <?php endif; ?>

        <div class="row">
          <div class="large-6 columns">
            <div class="row">
              <?php if ($page['block_map_region']): ?>
                <?php print render($page['block_map_region']); ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="large-6 columns">
            <div class="row">
              <?php if ($page['medium']): ?>
                <div id="type-of-travel">
                  <?php print render($page['medium']); ?>
                </div>
              <?php endif; ?>
            </div>
            <div class="row">
              <?php if ($page['traveled_with_us_agency']): ?>
                <?php print render($page['traveled_with_us_agency']); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>

        <?php if ($page['question_about_trip_home']): ?>
        <div class="separator-home"></div>
          <div class="row">
            <div class="large-12 columns">
              <div id="question-about-trip-home" class="class-question-about-trip-home">
                <?php print render($page['question_about_trip_home']); ?>
              </div>
            </div>
          </div>
        <div class="separator-home"></div>
        <?php endif; ?>

        <?php if ($page['meet_our_agency']): ?>
          <div class="row">
            <div class="large-12 columns">
              <div id="meet-our-agency">
                <?php print render($page['meet_our_agency']); ?>
              </div>
            </div>
          </div>
        <?php endif; ?>

        <?php if ($page['mail']): ?>
          <div class="row">
            <div class="large-12 columns">
              <div id="mails">
                <?php print render($page['mail']); ?>
              </div>
            </div>
          </div
        <?php endif; ?>

    <?php if (!drupal_is_front_page()): ?>
        <a id="main-content"></a>
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
    <?php endif; ?>


      </div>

      </div> <!-- /.section, /#content -->
    </div></div> <!-- /#main, /#main-wrapper -->

    <footer>
     <div class="redes_footer">
      <div id="find-us">
        <span> <?php print t('How to contact us'); ?> ...</span>
        <div class="bot_redes">
          <div class="twitter-footer"><?php print l(t('twitter'), 'http://www.google.com', array('attributes' => array('target'=>'_blank'))) ?></div>
          <div class="fb-footer"><?php print l(t('facebook'), 'http://www.google.com', array('attributes' => array('target'=>'_blank'))) ?></div>
          <div class="pinterest-footer"><?php print l(t('pinterest'), 'http://www.google.com', array('attributes' => array('target'=>'_blank'))) ?></div>
          <div class="google-footer"><?php print l(t('google'), 'http://www.google.com', array('attributes' => array('target'=>'_blank'))) ?></div>
        </div>
        <div><?php print render(module_invoke('aventure_pre_up', 'block_view', 'up_button_block')); ?> ...</div>
      </div>
     </div>
      <div id="footer-wrapper">
        <div class="row">
          <div id="contact-info" class="large-3 columns">
            <?php if ($page['foot_contact_info']): ?>
              <?php print render($page['foot_contact_info']); ?>
            <?php endif; ?>
          </div>
          <!-- end contact-info -->
          <div id="contact-form" class="large-3 columns">
            <?php if ($page['foot_contact_form']): ?>
              <?php print render($page['foot_contact_form']); ?>
            <?php endif; ?>
          </div>
          <!-- end contact-form -->
          <div id="contact-links-package" class="large-3 columns">
            <?php if ($page['foot_links_package']): ?>
              <?php print render($page['foot_links_package']); ?>
            <?php endif; ?>
          </div>
          <!-- end contact-form -->
          <div id="contact-links-place" class="large-3 columns">
            <?php if ($page['foot_links_place']): ?>
              <?php print render($page['foot_links_place']); ?>
            <?php endif; ?>
          </div>
          <div id="contact-post" class="large-12 columns">
            <?php if ($page['foot_post_foot']): ?>
              <?php print render($page['foot_post_foot']); ?>
            <?php endif; ?>
          </div>
          <!-- end contact-links -->
        </div>
        <!-- end footer-wrapper -->
      </div>
      <div class="row">
        <div id="contact-copyright" class="large-12 columns copyright">
          <?php if ($page['foot_copyright']): ?>
            <?php print render($page['foot_copyright']); ?>
          <?php endif; ?>
        </div>
      </div>
      <!-- end row -->
    </footer>
    <!-- /footer -->

  </div></div> <!-- /#page, /#page-wrapper -->
