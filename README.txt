=== Plugin Name ===
Contributors: endico
Donate link: http://blog.tafoni.net/donate/
Tags: widget, sidebar, image, images, photo, photos, nature, biology, ecology, botany, wildlife, education
Requires at least: 2.9.2
Tested up to: 2.9.2
Stable tag: 1.0

Sidebar widget displays the iSSG Invasive Species of the Week. 

== Description ==

The [Invasive Species Specialist Group](http://www.issg.org/about_is.htm) has launched the Invasive Species of the Week to highlight the impacts of invasive species on native biodiversity and vulnerable ecosystems. A different species will be featured each week.

== Installation ==

1. Install the plugin through the 'Plugins' menu in WordPress. If installing from a zip file, place the invasive-species-of-the-week folder in your wp-content/plugins/ folder.
1. Activate the plugin on your Manage Plugins page.
1. In the Appearance section, choose Widgets and drag 'Invasive Species' to your sidebar.

So far the plugin has only been tested with WordPress 2.9.2.


If your theme doesn't support widgets, you can still use the widget by adding this code to your sidebar, as explained in [this post](http://wordpress.org/support/topic/281349?replies=7).

    <?php { ; ?>
       <?php $instance = array("title" => "My Widget", "number" => 9); ?>
       <?php $args = array("title" => "My Widget", "before_title" => "<h2>", "after_title" => "</h2>"); ?>
       <?php $sb = new Bug_of_the_Day_Widget(); ?>
       <?php $sb->number = $instance['number']; ?>
       <?php $sb->widget($args,$instance); ?>
    <?php } ?>

== Screenshots ==

1. Example widget

== Changelog ==

= 1.0 =

* Initial release

== Credits ==

This plugin uses phpFlickr which is a class written by Dan Coulter in PHP to act as a wrapper for the Flickr API.

