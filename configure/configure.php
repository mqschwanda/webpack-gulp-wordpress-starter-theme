<?php

// MENUS
function _custom_theme_register_menu() {
    register_nav_menus(
        array(
            'menu-main' => __( 'Menu principal' ),
            //'menu-footer' => __( 'Menu footer' ),
        )
    );
}
add_action( 'init', '_custom_theme_register_menu' );

function custom_setup() {
	// IMAGES
	add_theme_support( 'post-thumbnails' );

	// TITLE TAGS
	add_theme_support('title-tag');

	// LANGUAGES
	load_theme_textdomain('textdomaintomodify', get_template_directory() . '/languages');

	// HTML 5 - Example : deletes type="*" in scripts and style tags
	add_theme_support( 'html5', [ 'script', 'style' ] );
}
add_action('after_setup_theme', 'custom_setup');

// Giving credits
function remove_footer_admin () {
	echo '<span id="footer">footer</span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Move Yoast to bottom
function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

// Remove WP Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// delete wp-embed.js from footer
function my_deregister_scripts() {
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

// delete jquery migrate
function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true );
	}
}
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

// force all scripts to load in footer
function clean_header() {
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
}
add_action('wp_enqueue_scripts', 'clean_header');

// add SVG to allowed file uploads
function add_file_types_to_uploads($mime_types) {
	$mime_types['svg'] = 'image/svg+xml';

	return $mime_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads', 1, 1);
