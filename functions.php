<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
 add_filter('widget_text', 'do_shortcode');

 register_nav_menus( array(
 'menu-top' => 'Menu superior',
 'menu-bottom' => 'Menu inferior'
 ));
add_theme_support( 'post-thumbnails' );
add_image_size($name, $width, $height, $cropBoolean);
 add_action('widgets_init','jplana_widgets_init');

 function jplana_widgets_init(){
     $args = array(
         'name'          => 'Header Widget Zone',
         'id'            => 'header-widget-zone',
         'description'   => '',
         'before_widget' => '',
         'after_widget'  => '',
         'before_title'  => '<p style="display:none">"',
         'after_title'   => '</p>' );
     register_sidebar($args);
 }

 add_action('widgets_init','footer_widgets_init');

 function footer_widgets_init(){
     $args = array(
         'name'          => 'Footer Widget Zone',
         'id'            => 'footer-widget-zone',
         'description'   => '',
         'before_widget' => '',
         'after_widget'  => '',
         'before_title'  => '<p style="display:none">"',
         'after_title'   => '</p>' );
     register_sidebar($args);
 }

 function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');
 ?>
