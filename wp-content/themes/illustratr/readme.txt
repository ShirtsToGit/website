=== Illustratr ===

Contributors: automattic
Requires at least: 4.2
Tested up to: 4.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A minimalist portfolio theme.

== Description ==

Illustratr is a minimalist portfolio theme that helps you create a strong — yet beautiful — online presence. Primarily crafted for designers and photographers, it is a simple, powerful, and flexible theme.

* Responsive layout.
* Portfolio Page Template.
* Custom Header.
* Jetpack.me compatibility for Infinite Scroll, Portfolio Custom Post Type, Responsive Videos, Site Logo.
* The GPL v2.0 or later license. :) Use it to make something cool.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= I don't see the Portfolio menu in my admin, where can I find it? =

To make the Portfolio menu appear in your admin, you need to install the [Jetpack plugin](http://jetpack.me) because it has the required code needed to make [custom post types](http://codex.wordpress.org/Post_Types#Custom_Post_Types) work for the Illustratr theme.

Once Jetpack is active, the Portfolio menu will appear in your admin, in addition to standard blog posts. No special Jetpack module is needed and a WordPress.com connection is not required for the Portfolio feature to function. Portfolio will work on a localhost installation of WordPress if you add this line to `wp-config.php`:

`define( 'JETPACK_DEV_DEBUG', TRUE );`

The Portfolio admin: https://cloudup.com/cOznO6emIyD

= How to setup the front page like the demo site? =

The demo site URL: http://illustratrdemo.wordpress.com/?demo

When you first activate Illustratr, you’ll see your posts in a traditional blog format. If you’d like to use the portfolio page template as the front page of your site, as the demo site does, it’s simple to configure:

1. Create or edit a page, and assign it to the Portfolio Page Template from the Page Attributes module. https://cloudup.com/iz8PUZy0j0L
2. Go to Settings > Reading and set “Front page displays” to “A static page”.
3. Select the page you just assigned the Portfolio Page Template to as “Front page” and set another page as the “Posts page” to display your blog posts.

By default, page title and content will appear. You can hide them if you prefer by going to Appearance → Customize → Theme Options and check “Hide title and content on Portfolio Page Template” option.

= Where is the page that lists all projects? =

Along with the Portfolio Page Template, your projects will be displayed on portfolio archive pages.

Let's say you have a WordPress.com site at: http://mygroovydomain.com

The URL of the portfolio archive page will be: http://mygroovydomain.com/portfolio/

If your blog’s URL is http://mygroovydomain.com/, you’ll find your portfolio archive page at http://mygroovydomain.com/portfolio/.

You'll need pretty permalinks (any structure) for this URL to work though. If you're stuck with default permalinks - your links have a query string at the end, like ?p=123 - then your portfolio archive can be accessed by adding this immediately after your URL:

`/?post_type=jetpack-portfolio`

The portfolio archive page: https://illustratrdemo.wordpress.com/portfolio/

= How to add large images in projects? =

People love full-size images of your work, so make sure the images you include are at least 1100px wide. Illustratr displays these images at full width on larger screens.

= How to use Portfolio Shortcodes? =

Once you create a project, you can use the portfolio shortcode to display it anywhere on your site. Adding the [portfolio] shortcode to any post or page will insert your project. [Learn more about working with the portfolio shortcode](http://en.support.wordpress.com/portfolios/portfolio-shortcode/).

= How to add the social links in the footer? =

Illustratr allows you display links to your social media profiles, like Twitter and Facebook, as icons using a custom menu.

1. Create a new Custom Menu, and assign it to the Social Links Menu location.
2. Add links to each of your social services using the Links panel.
3. Icons for your social links will automatically appear if it’s available.

Available icons:

* Codepen
* Digg
* Dribbble
* Dropbox
* Facebook
* Flickr
* GitHub
* Google+
* Instagram
* LinkedIn
* Email (mailto: links)
* Pinterest
* Pocket
* PollDaddy
* Reddit
* RSS Feed (urls with /feed/)
* StumbleUpon
* Tumblr
* Twitter
* Vimeo
* WordPress
* YouTube

== Quick Illustratr Specs (all measurements in pixels) ==

1. The main column width is 840.
2. A widget in the widget area is 340.
3. Featured Images for posts and pages are 1100 wide by 500 high.
4. Featured Images for projects are 800 wide by unlimited high.

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, licensed under [MIT](http://opensource.org/licenses/MIT)
* Genericons: font by Automattic (http://automattic.com/), licensed under [GPL2](https://www.gnu.org/licenses/gpl-2.0.html)
* Images: images by Unsplash (https://unsplash.com), licensed under [CC0](http://creativecommons.org/choose/zero/)

== Changelog ==

= 8 June 2017 =
* Update widget styles to make sure too-long text doesn't overflow the space. Bump version number.

= 7 June 2017 =
* Update JavaScript that toggles hidden widget area, to make sure new video and audio widgets are displaying correctly when opened.

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 6 February 2017 =
* Replace get_the_tag_list() with the_tags() for a more straightforward approach that prevents potential fatal errors.

= 2 February 2017 =
* remove from CSS in wp-content/themes/pub

= 16 January 2017 =
* Make sure Issuu embeds fit within content area.

= 2 January 2017 =
* Add `grid-layout` tag to style.css.

= 7 July 2016 =
* Let WordPress manage the document title by adding theme support

= 29 June 2016 =
* Update Headstart featured image URLs.

= 22 June 2016 =
* Fix Home position in annotation.

= 21 June 2016 =
* Correct annotation's page template setting.

= 17 June 2016 =
* Add a class of .widgets-hidden to the body tag when the sidebar is active; allows the widgets to be targeted by Direct Manipulation.

= 9 June 2016 =
* Update Portfolio Featured Image function so it has the same style as Portfolio Title and Portfolio Content functions
* Update Portfolio CPT with new theme option

= 7 June 2016 =
* Move Theme Option into Portfolio tab in the customizer
* Add support for the new Portfolio CPT features

= 12 May 2016 =
* Add new classic-menu tag.

= 10 May 2016 =
* Adjusting width of portfolio projects to prevent stacking on some smaller screen sizes.

= 5 May 2016 =
* Move annotations into the `inc` directory.

= 4 May 2016 =
* Move existing annotations into their respective theme directories.

= 13 April 2016 =
* Ensure we escape $content on output.
* Refactor how to strip first gallery from the content.

= 8 April 2016 =
* Update screenshot and add credits to readme

= 6 April 2016 =
* Add padding left/right to portfolio shortcode 3 columns.

= 22 March 2016 =
* Tweak Portfolio shortcode responsive styles to make sure it works with the new shortcode's default style

= 4 February 2016 =
* Update screenshot

= 18 January 2016 =
* Remove iframe max-width from editor style -- was constantly increasing audio iframe height.
* Update oEmbed wrap to match responsive videos' latest update. Fix typo in function that was breaking content.
* Revert previous commit -- was breaking content
* Update oEmbed wrap to match responsive videos' latest update.

= 22 December 2015 =
* Adding more specific styles for images in portfolio shortcode to prevent them from overflowing; Fixes #3590;

= 6 November 2015 =
* Add support for missing Genericons and update to 3.4.1.

= 7 October 2015 =
* Remove borders around Jetpack Rectangular Gallery to avoid thumbnails being cut-off.

= 7 September 2015 =
* Continue to make sure overhaging image works with Photon in a self-hosted install.
* Make sure overhaging image works with Photon in a self-hosted install.

= 20 August 2015 =
* Add text domain and/or remove domain path. (E-I)

= 31 July 2015 =
* Remove `.screen-reader-text:hover` and `.screen-reader-text:active` style rules.

= 30 July 2015 =
* Correct `isOriginLeft` argument passed to Masonry.
* Migrate to Masonry V3.

= 16 July 2015 =
* Always use https when loading Google Fonts. See #3221;

= 9 July 2015 =
* Remove spinner div from header
* Remove JS loader.

= 23 June 2015 =
* Stop the theme requiring the header text being displayed to show a site logo.
* More specific selector to fix inactive links inside portfolio projects using portfolio shortcode.

= 9 June 2015 =
* Adding overriding rules for .portfolio-entry to fix inactive links inside portfolio projects using [portfolio] shortcode. Fixes #3098;
* Fix for logo image not being centered on mobile devices; Fixes #3129;

= 1 June 2015 =
* Fix menu-wrapper:before width on small devices.

= 8 May 2015 =
* Add support for Jetpack Site Logo.

= 6 May 2015 =
* Fully remove example.html from Genericons folders.
* Remove index.html file from Genericions.

= 3 March 2015 =
* Check for the presence of an iFrame in the .entry-content selector before removing that selector; this was preventing iFrames, like Google Calendar, from appearing on their own in the content area.

= 24 February 2015 =
* Fix gallery float issue when 4 columns

= 5 February 2015 =
* Add a max-width to gallery images/links to make sure it doesn't overflow

= 30 January 2015 =
* Make sure videos with a defined width are not overwritten by the script.

= 27 January 2015 =
* exclude Jotform when resizing iframe.

= 27 November 2014 =
* Update sidebar name and description to make it less confusing for users.

= 12 September 2014 =
* Make sure to strip the first gallery shortcode of a gallery post format only when it's a post (and not a project for example).

= 8 September 2014 =
* Add credits to readme.txt

= 26 August 2014 =
* Use if statement for custom content width function

= 12 August 2014 =
* Make theme screenshot GPL-compatible

= 6 August 2014 =
* Add a check so that the portfolio query only on the portfolio page template runs when the CPT is available.

= 1 August 2014 =
* Remove wrong wporg tags from readme
* Fix sharedaddy share count wrong classname
* Fix sharedaddy share count line-height
* Multiple changes:
* Update readme

= 24 July 2014 =
* change theme/author URIs and footer links to `wordpress.com/themes`.
* change theme/author URIs and footer links to `wordpress.com/themes`.

= 8 July 2014 =
* Add overflow hidden to slideshow to avoid slideshow to overlap content
* Multiple Jetpack changes:

= 2 July 2014 =
* Remove unnecessary use_default_gallery_style filter call.

= 30 June 2014 =
* Add space after comma
* Ignore "remove content if empty" if post is a portfolio project.
* Remove .wp-caption margin-left/right to avoid confilt with .aligncenter.

= 24 June 2014 =
* Fix hidden .site-branding issue on mobile devices. Reported on GitHub: https://github.com/Automattic/illustratr-wordpress-theme/issues/2

= 1 June 2014 =
* add/update pot files.

= 20 May 2014 =
* Ensure that galleries are not displayed for password protected posts using the gallery format.

= 7 May 2014 =
* Add new comment pagination style.

= 6 May 2014 =
* "fuctions" just sounds dirty. Let's rename it to "load_functions".

= 22 April 2014 =
* Add a depth argument to social wp_nav_menu to avoid children

= 17 April 2014 =
* Remove body borders only if user is using a background-image so if he picks a different background-color, borders are still displayed

= 12 April 2014 =
* Give more specificity to the ad to be center.
* Make sure the ad to be center.
* Make sure the pagination works when the template is set to the front page.

= 11 April 2014 =
* Clean stylesheets with tabs instead of spaces and make them more readable. Compass out!
* Clean stylesheet from extra mixin and move wpcom stylesheet
* Remove SASS/Compass

= 10 April 2014 =
* Update po file
* Fix RTL responsive menu bad alignment
* Enable RTL for masonry
* Continue adding more RTL support with jetpack, wpcom and JS
* Update readme

= 9 April 2014 =
* Update Portfolio Page Template to use portfolio reading setting
* Add RTL stylesheet - missing jetpack and wpcom
* Remove illustratr_portfolio_nav() since illustratr_post_nav() is doing the same thing.
* Update readme.txt
* Add license.txt and readme.txt and bump version to "-wpcom"
* Move Genericons folder
* Introduce max-width for entry-thumbnail to avoid huge images
* Fix portfolio get the id

= 8 April 2014 =
* Improve sidebar JS function to fade in/out widgets
* New social icons menu style
* Rename pagination label to be not date dependant (e.g. portfolio order)
* Update stylesheet with new tags
* Add CSS spinner to page while it's loading content

= 7 April 2014 =
* Check if there is an image before removing empty content
* New screenshot to match demo site
* Add order and orderby to Portfolio Page Template so it follows the order
* Add style for hr
* Fix condent_width issue on image post format and update JS check for remove content if empty on html() instead of text() to avoid removing content if it's only an image
* Totally remove bloody sharedaddy with JS if it's empty
* Add missing class selector
* Hide entry-sharedaddy if empty on post formats
* Hide sharedaddy if empty
* Rename Portfolio Page Template

= 5 April 2014 =
* Add jetpack-portfolio post_type check to avoid php issue if post_type isn't jetpack-portfolio

= 4 April 2014 =
* Add style for wp.com widgets
* Simplify archive.php for Portfolio CPT + clean Portfolio Page Template

= 3 April 2014 =
* Add/Fix style to wp.com widgets:
* Multiple changes:
* Reduce #page padding on mobile devices and adjust padding for full-width-area elements
* Fix wrong margin on toggled menu-item
* Introduce a new mobile menu

= 2 April 2014 =
* New margin right/left for media to have it centered
* Remove whitespace
* Multiple changes:
* Reduce padding comment on mobile devices + Add missing needed classes
* Move sharedaddy under projects on Portfolio Page Template
* Add pagination to Portfolio Archive and Page Template + Ignore IS on Archive.
* Add style for wpcom widgets:
* Add style for wpcom widgets:

= 1 April 2014 =
* New button/sumbit input style in widget-area
* Fix undefined variable issue in post_class filter
* Remove whitespace and update theme uri and description in stylesheet
* Add style for akismet widget
* Add style for about.me widget
* Multiple changes:
* Fix wpcom.php issue with De-queueing Google fonts
* Add style for wpcom widgets
* Wrap sharedaddy in a div and move it after entry-header for aside, quote and status post format

= 31 March 2014 =
* Add Ratings style
* Add Sharedaddy style
* Multiple changes:
* Adds a class of hide-portfolio-page-content to blogs if Theme Option hide portfolio page content is ticked AND page is using the Portfolio Template
* Multiple changes:
* Multiple changes:
* Multiple changes:

= 28 March 2014 =
* Enable Infinite Scroll on archive pages (to deploy the bug)
* Fix video wrapper resizing issue on video post format
* Multiple changes:
* Hide infinite-footer and fix sharedaddy positioning issue
* Remove Jetpack IS on archive and search pages until I fix the bug, Update JS so the image resizer can work on WP.com
* Fix wpcom function name issue - was calling the wrong function.
* Initial commit of the theme
