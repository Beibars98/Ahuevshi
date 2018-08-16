<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

function wp_kama_theme_setup(){
	// Поддержка миниатюр
	add_theme_support( 'post-thumbnails' );
}

function register_my_widgets(){
		register_sidebar( array(
			'name'         => "Карта",
			'id'           => 'map',
			'description'  => 'Эти виджеты будут показаны с сайдбаре сайта',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title' => '<span class="hidden">',
			'after_title'  => '</spn>'
		) );
}

add_action( 'widgets_init', 'register_my_widgets', 'after_setup_theme', 'wp_kama_theme_setup' );

add_theme_support( 'post-thumbnails' );

// Load up our awesome theme options
require_once ( get_stylesheet_directory() . '/theme-options.php' );

function search_filter ($query) {
if ($query->is_search)
$query->set('cat', '-1 , -2 , -3 ,-7 , -4 , -5 , -6');
return $query;
}
add_filter('pre_get_posts', 'search_filter');

function my_style_load() {
 $theme_uri = get_template_directory_uri();
 wp_register_style('my_theme_style', $theme_uri.'/css/styler.css', false, '0.1');
 wp_enqueue_style('my_theme_style');
}
add_action('wp_enqueue_scripts', 'my_style_load');

function css_for_prob() {
 $theme_uri = get_template_directory_uri();
 wp_register_style('my_theme_style', $theme_uri.'/css/styler.css', false, '0.1');
 wp_enqueue_style('my_theme_style');
}
add_action('wp_enqueue_scripts', 'css_for_prob');
