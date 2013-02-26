<?php

if (!function_exists('sa_enqueue_scripts'))
{

	function sa_enqueue_scripts()
	{
		if (!is_admin())
		{
			wp_enqueue_style('sa-style', get_bloginfo('stylesheet_url'));
			wp_enqueue_style('sa-fonts', 'http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic', array('sa-style'));
			wp_enqueue_script('sa-modernizr', get_stylesheet_directory_uri().'/includes/javascripts/modernizr-2.6.2.min.js', array(), '2.6.2');
			wp_enqueue_script('sa-jquery', get_stylesheet_directory_uri().'/includes/javascripts/jquery-1.9.0.min.js', array('sa-modernizr'), '1.9.0', true);
			wp_enqueue_script('sa-theme', get_stylesheet_directory_uri().'/javascripts/theme.js', array('sa-jquery'), false, true);
		}
	}

}; // sa_enqueue_scripts
add_action( 'wp_enqueue_scripts', 'sa_enqueue_scripts' );

if (!function_exists('sa_setup'))
{

	function sa_setup()
	{
		add_theme_support('post-thumbnails');
		add_theme_support('menus');
	}

	function sa_register_nav_menus()
	{
		register_nav_menus(
			array(
				'top-menu' => __('Top Menu'),
				//'footer-menu' => __('Footer Menu')
			)
		);
	}
	add_action('init', 'sa_register_nav_menus');

	register_sidebar(array(
		'name' => 'Blog sidebar',
		'id' => 'blog',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
	));

	register_sidebar(array(
		'name' => 'Portfolio sidebar',
		'id' => 'portfolio',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
	));

	if (function_exists('add_image_size'))
	{
		add_image_size('portfolio-main', 540, 340, true);
		add_image_size('portfolio-thumb', 135, 85, true);
	}

	require( get_template_directory() . '/includes/short-codes.php' );

} // sa_setup
add_action( 'after_setup_theme', 'sa_setup' );

require( get_template_directory() . '/includes/sa_functions.php' );