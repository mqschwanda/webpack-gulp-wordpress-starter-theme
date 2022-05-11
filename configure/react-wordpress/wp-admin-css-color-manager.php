<?php

namespace React_WordPress;

/**
 * Admin Theme Color Manager class for the `React_WordPress` namespace. 
 * 
 * @since React WordPress 0.0.1
 */
class WP_Admin_CSS_Color_Manager extends React_WordPress_Class
{
  /**
   * Public
   */
  
  /**
   * The name for the `React WordPress` theme.
   *
   * @var React_WordPress_Manager::THEME_NAME
   *q
   * @since React WordPress 0.0.1
   */
   public const ADMIN_CSS_COLOR_NAME = React_WordPress_Manager::THEME_NAME;
  
  /**
   * The unique key for the `React WordPress` theme.
   *
   * @var React_WordPress_Manager::THEME_SLUG
   *q
   * @since React WordPress 0.0.1
   */
  public const ADMIN_CSS_COLOR_KEY = React_WordPress_Manager::THEME_SLUG;

  /**
   * Fires after WordPress has finished loading but before any headers are sent.
   * 
   * @see https://developer.wordpress.org/reference/hooks/init/
   * @since React WordPress 0.0.1
   */
  public static function init()
  {
    self::configure_wp_admin_css_color();
  }

  /**
   * Force `React WordPress` admin theme.
   * 
   * @return WP_Admin_CSS_Color_Manager::ADMIN_CSS_COLOR_KEY
   * 
   * @see https://wordpress.stackexchange.com/questions/126697/set-default-admin-colour-for-all-users
   * @since React WordPress 0.0.1
   */
  public static function get_user_option_admin_color($color_scheme)
  {
    $color_scheme = self::ADMIN_CSS_COLOR_KEY;

    return $color_scheme;
  }

  /**
   * Private
   */

  /**
   * Initialize `WP_Admin_CSS_Color_Manager` class
   * 
   * @since React WordPress 0.0.1
   */
  public function __construct()
  {
    parent::__construct();

    add_action('init', array($this, 'init'));

    add_filter('get_user_option_admin_color', array($this, 'get_user_option_admin_color'), 5);

    remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
  }

  /**
   * Registers the admin color theme css file.
   * 
   * @see https://developer.wordpress.org/reference/functions/wp_admin_css_color/
   * @since React WordPress 0.0.1
   */
  private function configure_wp_admin_css_color()
  {
    $key = self::ADMIN_CSS_COLOR_KEY; 
    $name = __(self::ADMIN_CSS_COLOR_NAME);
    $url = get_template_directory_uri() . '/assets/dist/css/wp-admin-css-color.css';
    $colors = array(
      'var(--react_wordpress_primary_color)',
      'var(--react_wordpress_secondary_color)',
      'var(--react_wordpress_error_color)',
      'var(--react_wordpress_warning_color)',
      'var(--react_wordpress_info_color)',
      'var(--react_wordpress_success_color)',
      'var(--react_wordpress_background_color)',
      'var(--react_wordpress_contrast_text_color)',
    );
    $icons = array(
      'var(--react_wordpress_primary_color)', // SVG icon base color
      'var(--react_wordpress_primary_color)', // SVG icon color on focus
      'var(--react_wordpress_primary_color)', // SVG icon color of current admin menu link
    );

    wp_admin_css_color( 
      $key, 
      $name, 
      $url, 
      $colors,
      $icons,
    );
  }
}
