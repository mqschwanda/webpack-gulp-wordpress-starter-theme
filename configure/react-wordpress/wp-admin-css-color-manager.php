<?php

namespace React_Wordpress;

class WP_Admin_CSS_Color_Manager {
  public static $admin_css_color_key = 'react_wordpress';

  public static function init() {
    wp_admin_css_color( 
      WP_Admin_CSS_Color_Manager::$admin_css_color_key, 
      __('React Wordpress'), 
      get_template_directory_uri() . '/assets/dist/css/wp-admin-css-color.css', 
      array(
        'var(--react_wordpress_primary_color)',
        'var(--react_wordpress_secondary_color)',
        'var(--react_wordpress_contrast_text_color)',
        'var(--react_wordpress_error_color)',
        'var(--react_wordpress_warning_color)',
        'var(--react_wordpress_info_color)',
        'var(--react_wordpress_success_color)',
        'var(--react_wordpress_background_color)'
      ),
      array(
        'var(--react_wordpress_primary_color)', // SVG icon base color
        'var(--react_wordpress_primary_color)', // SVG icon color on focus
        'var(--react_wordpress_primary_color)' // SVG icon color of current admin menu link
      ) 
    );
  }

  // https://wordpress.stackexchange.com/questions/126697/set-default-admin-colour-for-all-users
  public static function get_user_option_admin_color($color_scheme) {
    $color_scheme = WP_Admin_CSS_Color_Manager::$admin_css_color_key;

    return $color_scheme;
  }
}

// Initialize
add_action('init', array('\React_Wordpress\WP_Admin_CSS_Color_Manager', 'init'));

add_filter('get_user_option_admin_color', array('\React_Wordpress\WP_Admin_CSS_Color_Manager', 'get_user_option_admin_color'), 5);

remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
