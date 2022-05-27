<?php
function theme_styles()
{
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'theme_styles');
function university_features() {
  register_nav_menu('header_navbar_location','Header Navbar Location');
  register_nav_menu('footer_navbar_one_location','Footer Navbar One Location');
  register_nav_menu('footer_navbar_two_location','Footer Navbar Two Location');
  add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'university_features');