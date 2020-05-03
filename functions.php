<?php
/**
 * Setup and scripts
 */

if (!function_exists('ty_mick_setup')) {
	function ty_mick_setup() {
		// Let WordPress manage the document title
		add_theme_support( 'title-tag' );

		// Allow for wp_nav_menu() use
		register_nav_menus([
			'menu-1' => esc_html__( 'Primary', 'ty-mick' ),
		]);

		// Use custom logo
		add_theme_support('custom-logo');
	}
}
add_action( 'after_setup_theme', 'ty_mick_setup' );

// Enqueue styles
function ty_mick_scripts() {
	wp_enqueue_style( 'ty-mick-style', get_stylesheet_uri(), array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'ty_mick_scripts' );
