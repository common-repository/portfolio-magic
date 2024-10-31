=== Portfolio Magic ===
Contributors: TakiraThemes
Tags: portfolio, post ,custom post type, plugin, images, responsive, sorting, shortcode, featured, gallery 
Donate link: http://takirathemes.com
Requires at least: 3.8
Tested up to: 4.0
Stable tag: 1.1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easy And Responsive Filterable Portfolio

== Description ==
With this plugin you are able to create beautiful sorting gallery pages. 
The plugin lets you add your portfolio page or featured posts using short code, this plugin will also add a custom post type called 'Portfolio' to your site and will let you have beautiful single portfolio pages. 

Working with the plugin:
The plugin will add a portfolio custom post type to your dashboard, first save the permalinks. 
Open a new portfolio item Portfolio > add new and add your title and text, you can upload a featured image that will be used as your portfolio post, in order to include inner images in a portfolio page, add a new wordpress gallery add media > create gallery, after you add your gallery go to text mode and add size=“full”
example > [gallery ids="100" size="full]
don’t forget to add a categories to your portfolio’s posts. 

Shortcodes: 

[takira_bricks] - Makes a grid of your full portfolio posts with sorting capabilities by category.
[takira_carousel] - Adds a smaller 'featured' section to your homepage or any page you like.  
[takira_carousel title='some title' subtitle=‘your sub title’ all=‘view all’ height='200'] - You can easily add 'title' ‘subtitle’ or 'height' to change the layout on the frontend, you can also use view=‘’ to change the default view all button in the galley.

If you want to override the single-portfolio.php, you need to create a folder called pm-templates in your theme folder and create a file new file your-theme/pm-templates/single-portfolio.php .

Hope you will enjoy this plugin, visit us here(http://takirathemes.com/forums/forum/magic-portfolio/), for support on this product. 

Other Credits

This plugin uses MixItUp project, a jquery plugin, [MixItUp project](https://mixitup.kunkalabs.com/) is licensed under Creative Commons CC-BY-NC license

== Installation ==
1. Download Portfolio Magic
2. Upload the Portfolio-magic folder to the /wp-content/plugins/ directory.
3. Activate the plugin through the 'Plugins' menu in WordPress and Enjoy.
4. After you activate the plugin, please save your permalinks again in setting > permalinks on your dashboard

== Frequently Asked Questions ==

= I'm getting a 404 after pressing on portfolio item =
You first must save the permalinks in orfer for the plugin to work
= Where do I upload the main image for the portfolio =
The main image is the featured image of the portfolio page
= How do I upload more images for the portfolio single page =
You can add more images by choosing the ones you want in your portfolio page under you editor 

== Screenshots ==
1. Portfolio Page
2. Portfolio Responsive Slider
3. Shortcodes
4. Admin Portfolio Custom Post Type
5. Single Portfolio Page
6. Choose images to display in single portfolio

== Changelog ==
1.0.0
first release

1.0.1
fixed js issue in the carousel shortcode that made the hover effect not positioned well

1.0.2
Fixed single portfolio issues with responsive

1.0.3
Changed some style elements

1.0.4
fixed a bug that disrupted with single templates paths

1.0.5
fixed a bug with the carousel number of itmes bigger than 4

1.0.6 
fixed design issues with responsive now should be aligned to the center
and remove some php unwanted warnings from admin

1.0.7
fixed unexpected eof on old php versions

1.1
Added the ability to change the order of the images in single portfolio’s.
Added to option to change the “view all” button. 

1.1.1
change bricks shortcode to show unlimited posts
change the carousel shortcode to show unlimited posts

1.1.2
added caption to single portfolio template
show full page content if no gallery in single portfolio