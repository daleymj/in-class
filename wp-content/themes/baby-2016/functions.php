<?php
//child them functions ADD on to the parent's functions.php
//technically, the child functions fun first

add_action('wp_enqueue_scripts', 'baby_scripts');
function baby_scripts() {
  wp_enqueue_style('parent-css', get_template_directory_uri() . '/style.css');
}

//add an additional footer widget area
add_action('widgets_init', 'baby_widget_area');
function baby_widget_area() {
  register_sidebar(array(
    'name' => 'Footer Area',
    'id'   => 'footer-area',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before+title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}

//example pluggable function usage
function twentysixteen_fonts_url() {
  return 'https://fonts.googleapis.com/css?family=Bree+Serif%7CLobster';
}

//no close PHP
