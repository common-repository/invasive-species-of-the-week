<?php
/*
 * Plugin Name: Invasive Species of the Week
 * Plugin URI: http://blog.tafoni.net/2010/05/04/invasive-species-of-the-week/
 * Description: Sidebar widget displays the iSSG Invasive Species of the Week to highlight the impacts of invasive species on native biodiversity and vulnerable ecosystems.
 * Version: 1.0
 * Author: Dawn Endico
 * Author URI: http://www.tafoni.net/
 * License:  Released under GNU Lesser General Public License (http://www.gnu.org/copyleft/lgpl.html)
*/

/**
 * Add function to widgets_init that'll load our widget.
 */
add_action( 'widgets_init', 'isotw_load_widgets' );

/**
 * Register the widget.
 */
function isotw_load_widgets() {
  register_widget( 'ISOTW_Widget' );
}

/**
 * ISOTW Widget class.
 */
class ISOTW_Widget extends WP_Widget {

  /**
   * Widget setup.
   */
  function ISOTW_Widget() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'isotw', 'description' => __('Highlights the impacts of invasive species on native biodiversity and vulnerable ecosystems') );

    /* Create the widget. */
    $this->WP_Widget( 'isotw-widget', __('Invasive Species of the Week', 'isotw'), $widget_ops, $control_ops );
  }

  /**
   * How to display the widget on the screen.
   */
  function widget( $args, $instance ) {
    extract( $args );

    /* Before widget (defined by themes). */
    echo $before_widget;

    echo $before_title .  "Invasive Species of the Week" . $after_title;
?>
<a href="http://www.issg.org/invasive_species_ofthe_week/invasive_species_ofthe_week.pdf">
 <img src="http://www.issg.org/invasive_species_ofthe_week/is_week.jpg" alt="" />
</a>
<p>
<a href="http://www.issg.org/invasive_species_ofthe_week/invasive_species_ofthe_week.pdf">
PDF</a> by <a href="http://www.issg.org/about_is.htm">Invasive Species Specialist Group</a>
</p>
<?php

    /* After widget (defined by themes). */
    echo $after_widget;
  }
}

?>
