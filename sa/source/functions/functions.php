<?php

add_action( 'wp_enqueue_scripts', 'sa_enqueue_scripts' );

if ( ! function_exists( 'sa_enqueue_scripts' ) ) :

/**
* Add theme styles and scripts here
*/
function sa_enqueue_scripts() {

	if ( ! is_admin() ) {
		wp_enqueue_style(
			'sa-style',
			get_bloginfo( 'stylesheet_url' )
		);
	}

}

endif; // sa_enqueue_scripts

add_action( 'after_setup_theme', 'sa_setup' );

if ( ! function_exists( 'sa_setup' ) ) :

/**
* Set up your theme here
*/
function sa_setup() {
	add_theme_support( 'post-thumbnails' );
}

endif; // sa_setup
