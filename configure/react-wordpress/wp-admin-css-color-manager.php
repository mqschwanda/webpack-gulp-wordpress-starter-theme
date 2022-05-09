<?php

namespace React_Wordpress;

class WP_Admin_CSS_Color_Manager extends React_Wordpress_Class {
  public const ADMIN_CSS_COLOR_NAME = React_Wordpress_Manager::THEME_NAME;
  public const ADMIN_CSS_COLOR_KEY = React_Wordpress_Manager::THEME_SLUG;

  public function __construct() {
    parent::__construct();

    add_action('init', array($this, 'init'));

    add_filter('get_user_option_admin_color', array($this, 'get_user_option_admin_color'), 5);

    remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
  }

  public static function init() {
    wp_admin_css_color( 
      self::ADMIN_CSS_COLOR_KEY, 
      __(self::ADMIN_CSS_COLOR_NAME), 
      get_template_directory_uri() . '/assets/dist/css/wp-admin-css-color.css', 
      array(
        'var(--react_wordpress_primary_color)',
        'var(--react_wordpress_secondary_color)',
        'var(--react_wordpress_contrast_text_color)',
        'var(--react_wordpress_error_color)',
        'var(--react_wordpress_warning_color)',
        'var(--react_wordpress_info_color)',
        'var(--react_wordpress_success_color)',
        'var(--react_wordpress_background_color)',
      ),
      array(
        'var(--react_wordpress_primary_color)', // SVG icon base color
        'var(--react_wordpress_primary_color)', // SVG icon color on focus
        'var(--react_wordpress_primary_color)', // SVG icon color of current admin menu link
      ) 
    );
  }

  // https://wordpress.stackexchange.com/questions/126697/set-default-admin-colour-for-all-users
  public static function get_user_option_admin_color($color_scheme) {
    $color_scheme = self::ADMIN_CSS_COLOR_KEY;

    return $color_scheme;
  }
}
