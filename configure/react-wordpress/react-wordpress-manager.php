<?php

namespace React_WordPress;

include('react-wordpress-class.php');

/**
 * Manage all classes used in the `React_WordPress` namespace. 
 * 
 * @since React WordPress 0.0.1
 */
class React_WordPress_Manager extends React_WordPress_Class
{
  /**
   * Public
   */

  /**
   * The `React WordPress` theme name in human readable format.
   *
   * @var 'React WordPress'
   *
   * @since React WordPress 0.0.1
   */
   public const THEME_NAME = 'React WordPress';

  /**
   * The `React WordPress` theme slug that is used throughout the codebase as a unique theme id.
   *
   * @var 'react_wordpress'
   * 
   * @since React WordPress 0.0.1
   */
  public const THEME_SLUG = 'react_wordpress';

  /**
   * The `React WordPress` theme version that is used throughout the codebase.
   *
   * @var '0.0.1'
   * 
   * @since React WordPress 0.0.1
   */
  public const THEME_VERSION = '0.0.1';

  /**
   * The text domain that is used as the default for translations done in the `React_WordPress` namespace.
   *
   * @var React_WordPress_Manager::THEME_SLUG
   * 
   * @since React WordPress 0.0.1
   */
  public const TEXT_DOMAIN = self::THEME_SLUG;

  /**
   * Gets a singleton instance of the `React_WordPress_Manager` class.
   *
   * @return React_WordPress_Manager
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_instance()
  {
      if (null === self::$instance)
      {
          self::$instance = new self();
      }

      return self::$instance;
  }
  
  /**
   * Handle autoload of the `React_WordPress` namespace by initializing the singleton instance. 
   * 
   * @since React WordPress 0.0.1
   */
  public static function autoload()
  {
    self::get_instance();
  }
  
  /**
   * Retrieve the translation of $text. If there is no translation, or the text domain isn't loaded, the original text is returned.
   * 
   * @param string $text — Text to translate.
   * @param string $domain — Optional. Text domain. Unique identifier for retrieving translated strings. Default 'self::TEXT_DOMAINE'.
   * 
   * @return string — Translated text.
   * 
   * @see https://developer.wordpress.org/reference/functions/__/
   * @since React WordPress 0.0.1
   */
  public static function __($text, $domain = self::TEXT_DOMAIN)
  {
    return \__($text, $domain);
  }
  
  /**
   * Retrieve the translation of $text and escapes it for safe use in HTML output. If there is no translation, or the text domain isn't loaded, the original text is escaped and returned.
   * 
   * @param string $text — Text to translate.
   * @param string $domain — Optional. Text domain. Unique identifier for retrieving translated strings. Default 'default'.
   * 
   * @return string — Translated text.
   * 
   * @see https://developer.wordpress.org/reference/functions/esc_html__/
   * @since React WordPress 0.0.1
   */
  public static function esc_html__($text, $domain = self::TEXT_DOMAIN)
  {
    return \esc_html__($text, $domain);
  }

  /**
   * Define functions in the `React_WordPress` namespace. 
   * 
   * @since React WordPress 0.0.1
   */
  public static function define_react_wordpress_functions()
  {
    function __(...$args)
    {
      React_WordPress_Manager::__(...$args);
    }
    
    function esc_html__(...$args)
    {
      React_WordPress_Manager::esc_html__(...$args);
    }
  }
  
  /**
   * Fires after WordPress has finished loading but before any headers are sent.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/hooks/init/
   */
  public static function init()
  {
    self::define_react_wordpress_functions();
  }

  /**
   * Private 
   */

  /**
   * The unique instance of the `React_WordPress_Manager` class.
   *
   * @var React_WordPress_Manager
   * 
   * @since React WordPress 0.0.1
   */
  private static $instance;

  /**
   * Initialize `React_WordPress_Manager` class
   * 
   * @return React_WordPress_Manager
   * 
   * @since React WordPress 0.0.1
   */
  private function __construct() 
  {
    parent::__construct();

    add_action('init', array($this, 'init'));

    self::construct_react_wordpress_classes();

    return $this;
  }

  /**
   * Initialize all classes used by `React_WordPress` namespace.
   * 
   * @since React WordPress 0.0.1
   */
  private function construct_react_wordpress_classes()
  {
    include('adminimize-plugin-manager.php');
    include('plugin-activation-manager.php');
    include('user-role-editor-plugin-manager.php');
    include('wp-admin-css-color-manager.php');
    include('wp-customize-manager.php');

    $this->adminimize_plugin_manager = new Adminimize_Plugin_Manager();
    $this->plugin_activation_manager = new Plugin_Activation_Manager();
    $this->user_role_editor_plugin_manager = new User_Role_Editor_Plugin_Manager();
    $this->wp_admin_css_color_manager = new WP_Admin_CSS_Color_Manager();
    $this->wp_customize_manager = new WP_Customize_Manager();
  }
}
