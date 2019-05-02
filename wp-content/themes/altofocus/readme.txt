=== AltoFocus ===

Contributors: automattic
Tags: responsive-layout, one-column, two-columns, three-columns, custom-background, custom-colors, custom-menu, featured-images, theme-options, threaded-comments, translation-ready

Requires at least: 4.0
Tested up to: 4.7
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

AltoFocus is a theme for photographers, artists, and other creative types in search of a simple and easy way to display their work.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

AltoFocus includes support for Jetpack's Infinite Scroll as well as other features.

== Changelog ==

= 17 April 2018 =
* Removing unsplash images in favor of CC0 images, wporg submission

= 16 April 2018 =
* Version bump to sync with wporg submission
* Bug

= 10 April 2018 =
* Removing full-width-template tag, since this theme doesn’t include a specific template for it

= 6 April 2018 =
* Make sure only first gallery with type slideshow is affected when creating a featured slideshow on single post page.

= 5 April 2018 =
* Optimize images

= 13 March 2018 =
* Adds a check to make sure $featured_ids variable is an array

= 8 March 2018 =
* Version bump
* Removing depracated style.css tags, code cleanup and
* Removes a custom flexslider_gallery shortcode in favor of a post_gallery filter that provides the same functionality

= 7 March 2018 =
* Improvements to form field styles.

= 21 February 2018 =
* Removing pages from featured content support in previous commit to prevent disruption

= 20 February 2018 =
* Fix missing featured posts and pages issue
* Re-enable Jetpack Featured conttent setting to display tag in all listings.

= 5 February 2018 =
* Version bump for wporg submission
* Fixes unclickable social icons and footer links issue, also
* Make sure footer elements aren't being transformed (translate) via CSS.

= 2 February 2018 =
* Adds default setting for JetPack Featured Content show-all object so that featured content displays consistently

= 30 January 2018 =
* Replacing get_them_mod() with get_option() to fix missing argument issue and

= 15 January 2018 =
* Simplify Headstart annotations for all themes in signup.

= 10 November 2017 =
* Changing theme author to "Automattic"

= 9 November 2017 =
* Including new WP 4.9 gallery widget in widget layout styles, so that it displays at the correct width.

= 25 September 2017 =
* Add zeroes for opacity decimal values in the color annotations; this

= 31 August 2017 =
* Setting max featured posts to a high but unlikely number, since the theme does not actually restrict the number of featured posts it can have.

= 29 August 2017 =
* Multiple

= 17 August 2017 =
* Ensure Headstart images are small enough (under 350 Kb) to avoid triggering warnings and failures when run on new user sites.

= 9 August 2017 =
* Corrects element selector in previous commit so that all post types are fixed

= 8 August 2017 =
* Fixes issue where comment box would sometimes prevent Sharing, Like and PayPal buttons

= 24 July 2017 =
* Fixes iframe aspect ratio issue, resets global $content_width in the_content() only
* Addresses custom footer settings not working in customizer issue

= 20 July 2017 =
* Converting CSS formatting from nested to expanded to match a8c code standards
* Comment bubble positioning issue in Safari

= 7 July 2017 =
* Removing the Custom Header feature since it isn’t actually displayed in the theme

= 3 July 2017 =
* Fixes an issue where a site with broken image errors (403), would prevent the site from displaying

= 23 June 2017 =
* Fixes (a8c) social widget double column issue

= 15 June 2017 =
* Fixes typo in widget area name. “Sidebar” widget area is now called “Footer”

= 9 June 2017 =
* Add a forced width of 100% to make sure audio player doesn't flow outside of the widget area.

= 8 June 2017 =
* Add max-width to audio player in audio widget.
* Adds fixes for new Video, Audio, Text and Image widgets in wp 4.8

= 1 June 2017 =
* Allow single posts to account for featured image Content Option settings

= 31 May 2017 =
* Adds visual improvements to the search widget title

= 30 May 2017 =
* Prevents site branding element from touch the edge of the screen on screensizes 75em wide and up
* Updating screenshot to match the demo
* Updating screenshot to match the demo

= 26 May 2017 =
* Cleaning up gradient mixin to better support color-annotations
* Updating default color swatches
* Maximizes .site-title spacing on mobile
* Various minor bug

= 25 May 2017 =
* Code tidying
* Code tidying
* Various minor
* Reworking grid layout script to better handle slowly loading images from Photon

= 22 May 2017 =
* Removing testing step for console.logs
* Optimizing variables for cleaner jQuery chaining
* Refactoring IS + Isotope behavior to fix layout issue when new posts are loaded

= 3 May 2017 =
* Trying another fix for this IS + Isotope post positioning issue
* Fixes static front page, page title position issue, Code tidying
* Code tidying
* Refactoring Isotope + IS script to work better with Photon
* Fixes IS + Isotope postioning issue for newly added posts

= 25 April 2017 =
* Makes button styles softer for better harmony between elements

= 21 April 2017 =
* Removes tabbed browsing features in favor of menu drop-down
* More code tidying
* Code tidying
* Adding some additional tags to stylesheet (and theme showcase)

= 20 April 2017 =
* Changing link chover colors globally to use opacity over a secondary gray color
* Adds a hover state to the menu item links using opacity for clearer usability
* Adding translation files (glotpress)
* Moving back to standard sub-menu top-borders inseatd of 'non-borders'
* Fixes conflict with 404 / no search results and archive's layout spacing

= 19 April 2017 =
* Adds better accessibility when using TAB to interact with the menu
* Removes gallery override theme option. Instead theme will override [gallery type='slideshow'] so users can define galleries on a post by post basis
* Cleaning up color annotations

= 18 April 2017 =
* Fixes issue with missing $extra color
* Fixes SVG icon color annotations issues, also

= 17 April 2017 =
* Adding screenshot and updating readme.txt
* Adjust footer height

= 13 April 2017 =
* Bringing back sub-menu link indicators
* Using half of $global_width to determine the threshold for images that are considered too small for grid layout
* Adds a close svg icon to dropdown UI in sub menus

= 12 April 2017 =
* Tweaking icon colors for simpler UI behavior
* Removing FontAwesome asset files and fonts
* Replacing fontawesome icons in mobile menu with custom SVGs
* Adding tweaks to svg styles, removing fontawesome support
* Removing fontawesome icons for svg icons in flexslider, cleaning up dropshadows in other svgs

= 11 April 2017 =
* Replacing icon fonts with SVG in post-navigation, some code cleanup
* Replacing comment icons using :before and :after with an SVG icon
* Removing check for images loaded status
* Adding concole check for image load status
* Refactoring isotope jQuery to fix issue where some posts would not layout correctly when using infinite scroll

= 10 April 2017 =
* More specific constrains applied to images with aspect ratios that approach a square
* Separating conditionals for grid-item classes
* Further tweaks to grid-item spacing for more strict sizing
* Adds spacing tweaks for featured grid items that have the .grid-item-small class
* Adding stronger constraints for grid-items with smaller images and a longer title

= 7 April 2017 =
* Using a little math to detect image aspect ratios in post grid
* Cleaning up color annotations options
* Fixing color annotations typo
* Testing color-annotations adjustments
* Cleaning up wording in Theme Options
* Adding space between gallery-item images
* Adds styles to gallery captions

= 6 April 2017 =
* Edit links on pings are floated to the left for better legibility
* Adds more balanced margins for heading tags
* Fixes post navigation border width issue so that borders are aligned throughout the post content, navigation and comments
* Refactoring grid posts
* Code tidying
* Code tidying, fices commented code description
* Code cleanup
* Using a filter to add grid item classes to posts
* Using altofocus_has_post_thumbnail() instead of get_the_thumbnail conditional on single posts
* Changing 'Load more' back to 'Older posts' in infinite scroll
* Adds svg support to social-menus
* Suppresses JS issue in customizer which was breaking other scripts

= 5 April 2017 =
* Cleaning up a couple bugs in the site title/description settings in customizer
* Adds better support for logos of various size
* Removing .no-header-image body_class conditional
* Removing unnecessary 'inherit' font family annotations
* Adds a pingback link to singular entries, conditionally
* Removing calls to register stylesheets that are already enqueued
* Adding $content_width value
* Add $themecolors and theme support for print styles
* Re-imagining featured posts so that they stand out more

= 4 April 2017 =
* Removing post format support. this isnt a tumblr-ish blog
* Changing the footer theme link to point to wpcom, removing irrelevant template files
* Removing empty color rules in color-annotations
* Removing unnecessary page templates, they are no longer being used for anything
* Adding wpcom to version number, adds tags to stylesheet and
* Un-minifying imagesLoaded JS, since WP.com handles minification

= 3 April 2017 =
* Adding RTL support and some extra padding below flexslider to make it more clickable

= 31 March 2017 =
* Another fix for images that dont work
* Fixing an image problem with annotations
* Adding back a second featured content post since 2 need to exist for only 1 to show up
* Featured content is not showing in main loop for no apparent reason, hoping this
* More tweaks to content
* Rearranging content to try and fix missing content bug
* Testing featured contenet in HS
* Fixing content ID issues and adding new images
* Adding more content to headstart annotations
* Adding headstart annotations
* Fixing custom colors issue in sub-navigation links where text color and background was the same
* Adds support for .button class to make links match the altofocus button style
* Cleaning up static front page layout, removing sidebars from some template views, sets max width to site-description to improve line length legibility

= 30 March 2017 =
* Code tidying
* Cleaning up mobile responsive styles for plost-flair, coments forms, and single pages
* Cleaning up wpcom widgets fonts, adjusts comment avatar position
* Decrease caption font size
* Cleaning up gallery UI

= 29 March 2017 =
* Adds a smoother animation style to caption hover states
* Removing obsolete JS files
* Removing obsolete SASS files
* Major code clean up
* Code tidying only
* Code tidying
* Code tidying, and responsive improvements to prevent comment links from getting cut off
* Cleaning up responsive mobile styles for better legibility and spacing

= 28 March 2017 =
* Adding better responsive support for iPad, adds captions to gallery overrides
* Code cleanup and re-adding images loaded for testing

= 27 March 2017 =
* Widen post titles in grid for more flexibility in awkwardly sized images
* Cleaning up posts navigation when IS is turned off
* update colors annotation to latest
* Adds a stronger and more descript technique for stripping out over-ridden content
* add fonts annotation to the theme
* Not sure why this file keeps coming back, but im deleting it again because it already exists in /inc
* Cleaning up recent comment and recent entries widgets for wpcom
* Removing unecessary wpcom CSS file
* Cleaning up wpcom specific tag cloud layout

= 24 March 2017 =
* Various improvemenets for mobile UI

= 23 March 2017 =
* Restructuring the header on mobile for better spacing and non 'belly button' menu-button UI.
* Code tidying
* Fixing the title and table floating in Calendar widgets
* Fixes typo in media override logic where 'wpvideo' was not included
* Renaming 'gallery_override' to 'media_override'
* Improving gallery override to include video
* Removing excerpt vs full content option since posts are only shown in full on single-posts

= 22 March 2017 =
* Forgot to add the fallback parameter in the last commit.
* Testing out Featured Image fallback support! ;-)
* Adjusting line height for italic headings fonts
* add Custom Colors annotations directly to the theme
* Fixe spacing issue in site-description on desktop
* Centering mobile UI
* Reducing margins in grid views for better spacing and larger images, code cleanup in style-wpcom
* Fixes Load More button positioning, and moves loading spinner to bottom of UI so it appears right under Load More button
* Removes borders and padding from grid items on non-mobile views
* Cleaning up navigation arrow responsive positions
* Restructuring archives and isotope-grid SASS

= 21 March 2017 =
* Code tidying

= 20 March 2017 =
* Consolidating isotope layout and design styles
* Code tidying.
* Adds wpcom specific style sto /inc directory, Cleaning up 404 templates
* Improving grid layout to support archives and searche, Adds 404 empty search result styles, Code cleanup

= 10 March 2017 =
* Cleaning up unnecessary JS functions related to sticky page headers
* ADding some additional animation styles
* Swapping post navigation vs felxslider arrow design for better design heirarchy
* Code tidying
* Tidying JS variable names and organization
* Adding a fade in step for Istope so that the grid never appears unstyled
* Fixes Isotope + Infinite Scroll issue where newly loaded posts were not repositioned
* Correct left margin issue

= 9 March 2017 =
* Remove post settings section, and move settings to Theme Options panel
* Grid items should float naturallywhen isotope fails or is still loading
* Adding theme option for overriding the default gallery display
* Final improvements for grid hover animations, also cleans up navigation button hover animations

= 8 March 2017 =
* Fixes flexslider image size issue, and code tidying
* Force IS to use 'click' only, cleaning up grid animation
* Simplifiying grid display for less CSS, and cleaning up JS calls
* Simplifiying image display size on single posts
* Reverting back to older imagesloaded JS, newer version triggers an error on wpcom
* Various bug

= 7 March 2017 =
* Fixes 'params is not defined' javascript issue
* Fixes 'e is not identified' JS issue
* Rewriting top navigation JS for better clarity, also
* More improvements and

= 6 March 2017 =
* Cleaning up animation positioning and hover issues in grid page layout
* Removing unnecessary sub-sub-menu padding
* Continued refactoring of top navigation and some code cleanup

= 3 March 2017 =
* Removing Jetpack Portfolio Support in favor of using Posts
* Adding more improvements to menu UI
* Refactor menu UI for better accessibility

= 2 March 2017 =
* Refactoring primary menu for better usability
* Adding 'has-isotope' to simplify grid selectors and styles
* Major refactor for how infinite scroll and isotope work for portfolios vs blog posts

= 13 February 2017 =
* Refactoring portfolio displays so that only projects use the grid layout

= 2 February 2017 =
* Various minor
* Various small improvements

= 1 February 2017 =
* Refactor Portfolios on front page and singe portfolios

= 31 January 2017 =
* Fixes site brandng position in Safari.

= 30 January 2017 =
* Cleaning up responsive layout for site-branding
* Improving animation pre

= 27 January 2017 =
* Various animation improvements to buttons and animations in menu, fixed nav, and flexslider nav
* Adds hover state color to sub-menu links
* More improvements to menu hover behaviors
* Improving menu behavior
* Adding new animation and drop shadows to menu UI for better usability

= 25 January 2017 =
* More improvements to header navigation sub-menu UI
* Refactoring menu drop down UI and overflow scrolling in header

= 20 January 2017 =
* Fixes a few typographic quirks, and darkenning secondary text colors for better legibility
* Fixes page-header responsive sizing, code clean up in calendar widget

= 18 January 2017 =
* Adding support for gallery shortcode override, adds better scaling animation to active/clicked buttons
* Refactoring site logo implementation and header markup/layout

= 17 January 2017 =
* Refactoring site logo implementation and header markup/layout
* New and improved hfeed image display and cleaner hfeed header

= 11 January 2017 =
* Re-factoring site-branding for better positioning

= 10 January 2017 =
* Cleaning up post positioning in hfeed.
* Add word breaks to entry content paragraphs
* Remove dropdown buttons from page menu widget
* Various positioning and responsive
* Fixing related posts title positioning
* Fix post flair spacing issue when loading, add fixed next/previous links to portfolio projects and creates a new componenet for navigation-fixed
* Adding fixed next and previous links, some code clean up
* Adding style to more wpcom widgets

= 6 January 2017 =
* Remove widget area from front-page template, mobile styling improvements for the portfolio items
* Adds fallback for portfolio projects that don’t have image attachments
* Improving post-flair typography
* Make postflair styles apply to Jetpack sharing styles
* Cleaning up cite typography and widget styles
* Fixing highlander comment form title display margins
* More improvements to post flair display

= 5 January 2017 =
* Cleanibg up post flair styles
* Cleaning up post flair layout and styles
* Improving post flair styles
* Fixing sass typo
* Adding wpcom post-flair styling
* adding higlander comments sass to svn, adjusting responsive breakpoint site width
* Fixing borders and code cleanup
* Adding wpcom highlander comments support
* Adding/improving support for wpcom widgets
* Code clean up, various minor tweaks and improvements

= 29 December 2016 =
* clean up retired a8c widget Time Machine styles.

= 2 December 2016 =
* Removing columnist from social media icons widget

= 1 December 2016 =
* Make menu 1 column instead of 2
* Add better spacing in menu

= 30 November 2016 =
* Adds RSS widget support
* Fix mobile menu position
* Cleaning up hfeed, and improving mobile menu icons
* Cleaning up hfeed
* Cleaning up Blog feed typography and spacing, ads responsive font size to header and blog feed

= 29 November 2016 =
* Adding time machine widget support, cleaning up comment link spacing
* Cleaning up comment and post styles, cleans up menu layout when default page menu is used
* Initial commit

== Credits ==

* Based on https://github.com/Automattic/_s/, (C) 2015-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* isotope.pkgd.js http://isotope.metafizzy.co, (C) 2016 Metafizzy, [GPLv3 or later](https://www.gnu.org/licenses/gpl-3.0.html)
* imagesloaded.pkgd.js https://metafizzy.co/, (C) 2016 Metafizzy, [MIT](http://opensource.org/licenses/MIT)
* jquery.flexslider.js http://flexslider.woothemes.com/, (C) 2015-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* Bundled theme screenshot, Copyright Brodie Vissers License: CC0 1.0 Universal (CC0 1.0), Source: https://burst.shopify.com/photos/basketball-hoop
* Bundled theme screenshot, Copyright Brodie Vissers License: CC0 1.0 Universal (CC0 1.0), Source: https://burst.shopify.com/photos/walking-in-love
* Bundled theme screenshot, Copyright Matthew Henry License: CC0 1.0 Universal (CC0 1.0), Source: https://burst.shopify.com/photos/woman-drinking-red-wine
* Bundled theme screenshot, Copyright Sarah Pflug License: CC0 1.0 Universal (CC0 1.0), Source: https://burst.shopify.com/photos/wonton-appetizer
* Bundled theme screenshot, Copyright Scott Murdoch License: CC0 1.0 Universal (CC0 1.0), Source: https://burst.shopify.com/photos/busy-thai-intersection-above
* Bundled theme screenshot, Copyright Scott Murdoch License: CC0 1.0 Universal (CC0 1.0), Source: https://burst.shopify.com/photos/blue-skies-and-rolling-hills
* Bundled theme screenshot, Copyright Shopify Partners License: CC0 1.0 Universal (CC0 1.0), Source: https://burst.shopify.com/photos/reading
