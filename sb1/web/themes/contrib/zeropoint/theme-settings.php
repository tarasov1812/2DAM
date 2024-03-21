<?php
/**
 * @file
 * Functions to support Zeropoint theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_FORM_ID_alter() for system_theme_settings.
 */
function zeropoint_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

// Create theme settings form widgets using Forms API

// ### Pure.CSS settings ###
  $form['puregrid'] = array(
    '#type' => 'details',
    '#title' => t('Pure.CSS settings'),
    '#open' => FALSE, // Controls the HTML5 'open' attribute. Defaults to FALSE.
  );
  $form['puregrid']['css_zone'] = array(
    '#type' => 'checkbox',
    '#title' => t('Yahoo Pure.CSS Framework CDN'),
    '#description' => t('Select this option to load Yahoo Pure.CSS Framework files from CDN. If you encounter issues or prefer to load Pure.CSS files locally, leave this option unchecked.'),
    '#default_value' => theme_get_setting('css_zone')
  );
  $form['puregrid']['wrapper'] = array(
    '#type' => 'textfield',
    '#title' => t('Web page width'),
    '#description' => t('Specify the width of the layout using <b>em</b> values if possible (e.g., 90em), px values (e.g., 1200px), or percentages. Alternatively, leave it empty or set it to 100% for a fluid layout.'),
    '#default_value' => theme_get_setting('wrapper'),
    '#size' => 10,
  );
  $form['puregrid']['first_width'] = array(
    '#type' => 'select',
    '#title' => t('Left sidebar width'),
    '#description' => t('Set the width of the first (left) sidebar.'),
    '#default_value' => theme_get_setting('first_width'),
    '#options' => array(
      3 => t('narrower'),
      4 => t('narrow'),
      5 => t('NORMAL'),
      6 => t('wide'),
      7 => t('wider'),
    ),
  );
  $form['puregrid']['second_width'] = array(
    '#type' => 'select',
    '#title' => t('Right sidebar width'),
    '#description' => t('Set the width of the second (right) sidebar.'),
    '#default_value' => theme_get_setting('second_width'),
    '#options' => array(
      3 => t('narrower'),
      4 => t('narrow'),
      5 => t('NORMAL'),
      6 => t('wide'),
      7 => t('wider'),
    ),
  );
  $form['puregrid']['mobile_blocks'] = array(
    '#type' => 'select',
    '#title' => t('Hide blocks on mobile devices'),
    '#description' => t('If you have numerous blocks, consider hiding some of them when viewed on mobile devices.'),
    '#default_value' => theme_get_setting('mobile_blocks'),
    '#options' => array(
      0 => t('Show all blocks'),
      1 => t('Hide blocks on user regions 1-4'),
      2 => t('Hide blocks on user regions 1-4 and left sidebar'),
      3 => t('Hide blocks on all user regions'),
      4 => t('Hide blocks on all user regions and left sidebar'),
      5 => t('Hide blocks on all user regions and both sidebars'),
    ),
  );

// ### Layout Settings ###
  $form['layout_settings'] = array(
    '#type' => 'details',
    '#title' => t('Layout settings'),
    '#open' => FALSE,
  );
  $form['layout_settings']['style'] = array(
    '#type' => 'select',
    '#title' => t('Style'),
    '#default_value' => theme_get_setting('style'),
    '#options' => array(
      0 => t('0 Point'),
      1 => t('Sky'),
      2 => t('Nature'),
      3 => t('Ivy'),
      4 => t('Ink'),
      5 => t('Orange'),
      6 => t('Sangue'),
      7 => t('Lime'),
      8 => t('Plum'),
      9 => t('Velvet'),
      10 => t('Clean'),
      15 => t('- Themer -'),
    ),
  );
  $form['layout_settings']['fntfam'] = array(
    '#type' => 'select',
    '#title' => t('Font family'),
    '#default_value' => theme_get_setting('fntfam'),
    '#options' => array(
      0 => t('Sans-serif (Pure.CSS default)'),
      1 => t('Montserrat'),
      2 => t('Merriweather'),
    )
  );
  $form['layout_settings']['fntsize'] = array(
    '#type' => 'select',
    '#title' => t('Font size'),
    '#default_value' => theme_get_setting('fntsize'),
    '#options' => array(
      0 => t('Normal'),
      1 => t('Large'),
      2 => t('Larger'),
    )
  );
  $form['layout_settings']['themedblocks'] = array(
    '#type' => 'select',
    '#title' => t('Themed blocks'),
    '#default_value' => theme_get_setting('themedblocks'),
    '#options' => array(
      0 => t('Sidebars only'),
      1 => t('Sidebars + User regions'),
      2 => t('User regions only'),
      3 => t('None'),
    )
  );
  $form['layout_settings']['blockicons'] = array(
    '#type' => 'select',
    '#title' => t('Block icons'),
    '#default_value' => theme_get_setting('blockicons'),
    '#options' => array(
      0 => t('No'),
      1 => t('Yes (32x32 pixels)'),
      2 => t('Yes (48x48 pixels)'),
    )
  );
  $form['layout_settings']['navpos'] = array(
    '#type' => 'select',
    '#title' => t('Main and secondary menus position'),
    '#default_value' => theme_get_setting('navpos'),
    '#options' => array(
      0 => t('Left'),
      1 => t('Center'),
      2 => t('Right'),
    )
  );
  $form['layout_settings']['searchimg'] = array(
    '#type' => 'select',
    '#title' => t('Search submit type'),
    '#description' => t('Search field will have a button, an image or none at all.'),
    '#default_value' => theme_get_setting('searchimg'),
    '#options' => array(
      0 => t('Button'),
      1 => t('Icon'),
      2 => t('None'),
    )
  );
  $form['layout_settings']['pageicons'] = array(
    '#type' => 'checkbox',
    '#title' => t('Page icons'),
    '#default_value' => theme_get_setting('pageicons'),
  );
  $form['layout_settings']['roundcorners'] = array(
    '#type' => 'checkbox',
    '#title' => t('Rounded corners'),
    '#description' => t('Some page elements (comments, search, blocks) and main menu will have rounded corners.'),
    '#default_value' => theme_get_setting('roundcorners'),
  );
  $form['layout_settings']['headerimg'] = array(
    '#type' => 'checkbox',
    '#title' => t('Header image rotator'),
    '#description' => t('Rotates images in the _custom/headerimg folder.'),
    '#default_value' => theme_get_setting('headerimg'),
  );
  $form['layout_settings']['devlink'] = array(
    '#type' => 'checkbox',
    '#title' => t('Developer link'),
    '#description' => t('Show/hide the link.'),
    '#default_value' => theme_get_setting('devlink'),
  );

// ### Breadcrumb ###
  $form['breadcrumb'] = array(
    '#type' => 'details',
    '#title' => t('Breadcrumbs'),
    '#open' => FALSE,
  );
  $form['breadcrumb']['breadcrumb_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display breadcrumb'),
    '#default_value' => theme_get_setting('breadcrumb_display'),
  );

// ### Author & Date Settings ###
  $form['submitted_by'] = array(
    '#type' => 'details',
    '#title' => t('What author/date information to display?'),
    '#open' => FALSE,
  );
  $form['submitted_by']['submitted_dateuser'] = array(
    '#type' => 'select',
    '#title' => t('Display Author and/or Date'),
    '#default_value' => theme_get_setting('submitted_dateuser'),
    '#description' => t('Change the author and date information on all node types, except blog post and forum topic.'),
    '#options' => array(
      0 => t('Author, Date & Picture'),
      1 => t('Author & Date'),
      2 => t('Author & Picture'),
      3 => t('Author only'),
      4 => t('Date only'),
    )
  );
  $form['submitted_by']['submitted_dateuser_blog'] = array(
    '#type' => 'select',
    '#title' => t('Display Author and/or Date on blog posts'),
    '#default_value' => theme_get_setting('submitted_dateuser_blog'),
    '#description' => t('Change the author and date information on blog posts.'),
    '#options' => array(
      0 => t('Author, Date & Picture'),
      1 => t('Author & Date'),
      2 => t('Author & Picture'),
      3 => t('Author only'),
      4 => t('Date only'),
    )
  );
  $form['submitted_by']['submitted_dateuser_forum'] = array(
    '#type' => 'select',
    '#title' => t('Display Author and/or Date on forum topics'),
    '#default_value' => theme_get_setting('submitted_dateuser_forum'),
    '#description' => t('Change the author and date information on forum topics.'),
    '#options' => array(
      0 => t('Author, Date & Picture'),
      1 => t('Author & Date'),
      2 => t('Author & Picture'),
      3 => t('Author only'),
      4 => t('Date only'),
    )
  );
  $form['submitted_by']['submitted_txt'] = array(
    '#type' => 'textfield',
    '#title' => t('Submitted by'),
    '#description' => t('Replace "Submitted by" with your text or leave it blank.'),
    '#default_value' => theme_get_setting('submitted_txt'),
  );

// ### SEO settings ###
  $form['seo'] = array(
    '#type' => 'details',
    '#title' => t('Search engine optimization (SEO) settings'),
    '#open' => FALSE,
  );
  $form['seo']['page_seo'] = array(
    '#type' => 'select',
    '#default_value' => theme_get_setting('page_seo'),
    '#description' => t('Change "site name" heading.'),
    '#options' => array(
      0 => t('H1 for site name on frontpage only (SEO optimized)'),
      1 => t('H1 for site name on all pages (Drupal default)'),
    )
  );
  $form['seo']['block_seo'] = array(
    '#type' => 'select',
    '#default_value' => theme_get_setting('block_seo'),
    '#description' => t('Change "block title" heading.'),
    '#options' => array(
      0 => t('No heading for block title (SEO optimized)'),
      1 => t('H3 for block title (Drupal default)'),
    )
  );

// ### Slideshow ###
  $form['slideshow'] = array(
    '#type' => 'details',
    '#title' => t('Slideshow'),
    '#open' => FALSE,
  );
  $form['slideshow']['slideshow_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show slideshow'),
    '#default_value' => theme_get_setting('slideshow_display'),
    '#description'   => t('Check this option to show Slideshow on the front page.'),
  );
  $form['slideshow']['slideshow_all'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show slideshow on all pages'),
    '#default_value' => theme_get_setting('slideshow_all'),
    '#description'   => t('Check this option to show Slideshow on all pages.'),
  );
    $form['slideshow']['slideimage'] = array(
    '#markup' => t('<sup>To update the slide images, you can select from preloaded images in the "_custom/sliderimg" folder of the theme or from any other folder or server. The <b>Image URL</b> must be formatted as "/themes/contrib/zeropoint/_custom/sliderimg/IMAGE" or "//otherserver.com/IMAGE". The slides are language-aware, and the <b>Slide URL</b> can point to Home (if left blank) or internal pages ("/node/NODE_NUMBER").</sup>'),
  );
  $form['slideshow']['slidety'] = array(
    '#type' => 'select',
    '#title' => t('Slideshow type'),
    '#default_value' => theme_get_setting('slidety'),
    '#options' => array(
      0 => t('Half page image'),
      1 => t('Full page image'),
    )
  );
  $form['slideshow']['slideh'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide height'),
    '#description' => t('Adjust the height of the slide image as needed, using <b>em</b> values (e.g., 25em) or px values (e.g., 400px). You can also leave it empty for full height.'),
    '#default_value' => theme_get_setting('slideh'),
    '#size' => 10,
  );
  $form['slideshow']['slide1'] = array(
    '#type' => 'details',
    '#title' => t('Slide 1'),
    '#open' => FALSE,
  );
  $form['slideshow']['slide1']['show_slide1'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Slide 1'),
    '#default_value' => theme_get_setting('show_slide1'),
  );
  $form['slideshow']['slide1']['slide1_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide1_head'),
  );
  $form['slideshow']['slide1']['slide1_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide1_desc'),
  );
  $form['slideshow']['slide1']['slide1_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide1_url'),
  );
  $form['slideshow']['slide1']['slide1_image_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Image URL'),
    '#default_value' => theme_get_setting('slide1_image_url'),
  );
  $form['slideshow']['slide1']['slide1_alt'] = array(
    '#type' => 'textfield',
    '#title' => t('Image Alt Text'),
    '#default_value' => theme_get_setting('slide1_alt'),
  );
  $form['slideshow']['slide2'] = array(
    '#type' => 'details',
    '#title' => t('Slide 2'),
    '#open' => FALSE,
  );
  $form['slideshow']['slide2']['show_slide2'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Slide 2'),
    '#default_value' => theme_get_setting('show_slide2'),
  );
  $form['slideshow']['slide2']['slide2_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide2_head'),
  );
  $form['slideshow']['slide2']['slide2_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide2_desc'),
  );
  $form['slideshow']['slide2']['slide2_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide2_url'),
  );
  $form['slideshow']['slide2']['slide2_image_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Image URL'),
    '#default_value' => theme_get_setting('slide2_image_url'),
  );
  $form['slideshow']['slide2']['slide2_alt'] = array(
    '#type' => 'textfield',
    '#title' => t('Image Alt Text'),
    '#default_value' => theme_get_setting('slide2_alt'),
  );
  $form['slideshow']['slide3'] = array(
    '#type' => 'details',
    '#title' => t('Slide 3'),
    '#open' => FALSE,
  );
  $form['slideshow']['slide3']['show_slide3'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Slide 3'),
    '#default_value' => theme_get_setting('show_slide3'),
  );
  $form['slideshow']['slide3']['slide3_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide3_head'),
  );
  $form['slideshow']['slide3']['slide3_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide3_desc'),
  );
  $form['slideshow']['slide3']['slide3_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide3_url'),
  );
  $form['slideshow']['slide3']['slide3_image_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Image URL'),
    '#default_value' => theme_get_setting('slide3_image_url'),
  );
  $form['slideshow']['slide3']['slide3_alt'] = array(
    '#type' => 'textfield',
    '#title' => t('Image Alt Text'),
    '#default_value' => theme_get_setting('slide3_alt'),
  );
  $form['slideshow']['slide4'] = array(
    '#type' => 'details',
    '#title' => t('Slide 4'),
    '#open' => FALSE,
  );
  $form['slideshow']['slide4']['show_slide4'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Slide 4'),
    '#default_value' => theme_get_setting('show_slide4'),
  );
  $form['slideshow']['slide4']['slide4_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide4_head'),
  );
  $form['slideshow']['slide4']['slide4_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide4_desc'),
  );
  $form['slideshow']['slide4']['slide4_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide4_url'),
  );
  $form['slideshow']['slide4']['slide4_image_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Image URL'),
    '#default_value' => theme_get_setting('slide4_image_url'),
  );
  $form['slideshow']['slide4']['slide4_alt'] = array(
    '#type' => 'textfield',
    '#title' => t('Image Alt Text'),
    '#default_value' => theme_get_setting('slide4_alt'),
  );
  $form['slideshow']['slide5'] = array(
    '#type' => 'details',
    '#title' => t('Slide 5'),
    '#open' => FALSE,
  );
  $form['slideshow']['slide5']['show_slide5'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Slide 5'),
    '#default_value' => theme_get_setting('show_slide5'),
  );
  $form['slideshow']['slide5']['slide5_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide5_head'),
  );
  $form['slideshow']['slide5']['slide5_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide5_desc'),
  );
  $form['slideshow']['slide5']['slide5_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide5_url'),
  );
  $form['slideshow']['slide5']['slide5_image_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Image URL'),
    '#default_value' => theme_get_setting('slide5_image_url'),
  );
  $form['slideshow']['slide5']['slide5_alt'] = array(
    '#type' => 'textfield',
    '#title' => t('Image Alt Text'),
    '#default_value' => theme_get_setting('slide5_alt'),
  );
  $form['slideshow']['slide6'] = array(
    '#type' => 'details',
    '#title' => t('Slide 6'),
    '#open' => FALSE,
  );
  $form['slideshow']['slide6']['show_slide6'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Slide 6'),
    '#default_value' => theme_get_setting('show_slide6'),
  );
  $form['slideshow']['slide6']['slide6_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide6_head'),
  );
  $form['slideshow']['slide6']['slide6_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide6_desc'),
  );
  $form['slideshow']['slide6']['slide6_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide6_url'),
  );
  $form['slideshow']['slide6']['slide6_image_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Image URL'),
    '#default_value' => theme_get_setting('slide6_image_url'),
  );
  $form['slideshow']['slide6']['slide6_alt'] = array(
    '#type' => 'textfield',
    '#title' => t('Image Alt Text'),
    '#default_value' => theme_get_setting('slide6_alt'),
  );
  $form['slideshow']['slide7'] = array(
    '#type' => 'details',
    '#title' => t('Slide 7'),
    '#open' => FALSE,
  );
  $form['slideshow']['slide7']['show_slide7'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Slide 7'),
    '#default_value' => theme_get_setting('show_slide7'),
  );
  $form['slideshow']['slide7']['slide7_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide7_head'),
  );
  $form['slideshow']['slide7']['slide7_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide7_desc'),
  );
  $form['slideshow']['slide7']['slide7_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide7_url'),
  );
  $form['slideshow']['slide7']['slide7_image_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Image URL'),
    '#default_value' => theme_get_setting('slide7_image_url'),
  );
  $form['slideshow']['slide7']['slide7_alt'] = array(
    '#type' => 'textfield',
    '#title' => t('Image Alt Text'),
    '#default_value' => theme_get_setting('slide7_alt'),
  );

// ### Social links ###
  $form['social_links'] = array(
    '#type' => 'details',
    '#title' => t('Social Media Links'),
    '#open' => FALSE,
  );
  $form['social_links']['social_links_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display social links at the bottom of the page'),
    '#default_value' => theme_get_setting('social_links_display'),
    '#description' => t('Check this option to show Social Icon. Uncheck to hide.'),
  );
  $form['social_links']['facebook_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook Page'),
    '#default_value' => theme_get_setting('facebook_url'),
  );
  $form['social_links']['google_plus_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Plus Page'),
    '#default_value' => theme_get_setting('google_plus_url'),
  );
  $form['social_links']['twitter_url'] = array(
    '#type' => 'textfield',
    '#title' => t('X (Twitter) Profile'),
    '#default_value' => theme_get_setting('twitter_url'),
  );
  $form['social_links']['instagram_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Instagram Profile'),
    '#default_value' => theme_get_setting('instagram_url'),
  );
  $form['social_links']['telegram_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Telegram Profile'),
    '#default_value' => theme_get_setting('telegram_url'),
  );
  $form['social_links']['pinterest_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Pinterest Profile'),
    '#default_value' => theme_get_setting('pinterest_url'),
  );
  $form['social_links']['linkedin_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Linkedin Profile'),
    '#default_value' => theme_get_setting('linkedin_url'),
  );
  $form['social_links']['youtube_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Youtube Profile'),
    '#default_value' => theme_get_setting('youtube_url'),
  );
  $form['social_links']['vimeo_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Vimeo Profile'),
    '#default_value' => theme_get_setting('vimeo_url'),
  );
  $form['social_links']['flickr_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Flickr Profile'),
    '#default_value' => theme_get_setting('flickr_url'),
  );
  $form['social_links']['tumblr_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Tumblr Profile'),
    '#default_value' => theme_get_setting('tumblr_url'),
  );
  $form['social_links']['skype_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Skype Profile'),
    '#description' => t('Enter the contact link to your Skype account (<b>skype:username?call</b>).'),
    '#default_value' => theme_get_setting('skype_url'),
  );
  $form['social_links']['drupal_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Drupal Profile'),
    '#default_value' => theme_get_setting('drupal_url'),
  );
  $form['social_links']['rss_url'] = array(
    '#type' => 'textfield',
    '#title' => t('RSS Link'),
    '#default_value' => theme_get_setting('rss_url'),
  );
  $form['social_links']['myother_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Link to other social network page (custom)'),
    '#description' => t('Enter the link to other social network page.'),
    '#default_value' => theme_get_setting('myother_url'),
  );

// ### Other settings ###
  $form['themedev'] = array(
    '#type' => 'details',
    '#title' => t('Other settings'),
    '#open' => FALSE,
  );
  $form['themedev']['httpheaders'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove HTTP Headers'),
    '#description' => t('Remove Drupal META tag & Drupal X-Generator from header.'),
    '#default_value' => theme_get_setting('httpheaders'),
  );
  $form['themedev']['blockscache'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable cache for all blocks'),
    '#description' => t('If your blocks require content to be updated with every page load, you can deactivate caching for all blocks.'),
    '#default_value' => theme_get_setting('blockscache'),
  );
  $form['themedev']['toolbarfix'] = array(
    '#type' => 'checkbox',
    '#title' => t('Toolbar fix'),
    '#description' => t('Adds additional space under the toolbar.'),
    '#default_value' => theme_get_setting('toolbarfix'),
  );
  $form['themedev']['siteid'] = array(
    '#type' => 'textfield',
    '#title' => t('Site ID: '),
    '#description' => t('To achieve distinct theme styles in a multisite/multi-theme environment, it can be beneficial to assign a unique "ID" and customize the appearance of each site/theme in the custom-style.css file.'),
    '#default_value' => theme_get_setting('siteid'),
    '#size' => 10,
  );
  $form['themedev']['intl_logo'] = array(
    '#type' => 'details',
    '#title' => t('Logo per language'),
    '#open' => FALSE,
  );
  $form['themedev']['intl_logo']['show_intl_logo'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Logo per language'),
    '#description' => t('Logo images must be named as <b>pathprefix_logo.png</b> (E.g. en_logo.png, en-uk_logo.png, de_logo.png, etc.) and located in the folder specified below:'),
    '#default_value' => theme_get_setting('show_intl_logo'),
  );
  $form['themedev']['intl_logo']['intl_logo_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Logo images folder'),
    '#description' => t('The folder where the logo images are kept must be specified here, such as "/themes/contrib/zeropoint/_custom/logos" or "//otherserver.com/FOLDER"'),
    '#default_value' => theme_get_setting('intl_logo_path'),
  );

// Info
  $form['info'] = array(
    '#type' => 'fieldgroup',
    '#description' => t('<div class="messages messages--warning">Some of the theme settings may be <b>multilingual variables</b>.</div>'),
  );

}
