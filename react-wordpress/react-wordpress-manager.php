<?php

namespace React_WordPress;
/**
 * React WordPress: Base 
 */
include('base/react-wordpress-class.php');
include('base/react-wordpress-singleton.php');
include('base/react-wordpress-static.php');


/**
 * Manage all classes used in the `React_WordPress` namespace. 
 * 
 * @since React WordPress 0.0.1
 */
class React_WordPress_Manager extends React_WordPress_Singleton
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
   * Fires after the theme is loaded.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/hooks/after_setup_theme/
   */
  public static function after_setup_theme()
  {
    self::add_theme_support();
    self::load_theme_textdomain();
  }

  /**
   * Register all WordPress scripts.
   * 
   * @param WP_Scripts $scripts
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/functions/wp_default_scripts/
   */
  public static function wp_default_scripts(&$scripts)
  {
    self::remove_jquery($scripts);
  }

  /**
   * Filters list of allowed mime types and file extensions.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/hooks/upload_mimes/
   */
  public static function upload_mimes()
  {
    self::upload_mimes_svg();
  }

  /**
   * Fires when scripts and styles are enqueued.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
   */
  public static function wp_enqueue_scripts()
  {
    self::force_scripts_in_footer();
  }

  /**
   * Fire the wp_footer action.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/functions/wp_footer/
   * @see 
   */
  public static function wp_footer()
  {
    self::deregister_scripts();
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
   * Protected 
   */

  /**
   * Initialize `React_WordPress_Manager` class
   * 
   * @since React WordPress 0.0.1
   */
  protected function __construct() 
  {
    parent::__construct();

    add_action('init', array($this, 'init'));
    
    add_action('after_setup_theme', array($this, 'after_setup_theme'));
    add_action('upload_mimes', array($this, 'upload_mimes'), 1, 1);
    add_action('wp_default_scripts', array($this, 'wp_default_scripts'));
    add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));
    add_action('wp_footer', array($this, 'wp_footer'));

    add_filter('admin_footer_text', '__return_empty_string', 11);
    add_filter('update_footer', '__return_empty_string', 11); 

    self::remove_wp_emoji();
    self::initialize_statics();
    self::initialize_singletons();
  }

  /**
   * Private 
   */

  /**
   * Initialize all classes used by `React_WordPress` namespace.
   * 
   * @since React WordPress 0.0.1
   */
  private function initialize_singletons()
  {    
    /**
     * React WordPress: WordPress 
     */
    include('wordpress/react-wordpress-admin-manager.php');
    include('wordpress/react-wordpress-scripts-manager.php');
    include('wordpress/wp-admin-css-color-manager.php');
    include('wordpress/wp-customize-manager.php');
    $this->react_wordpress_admin_manager = React_WordPress_Admin_Manager::get_instance();
    $this->react_wordpress_scripts_manager = React_WordPress_Scripts_Manager::get_instance();
    $this->wp_admin_css_color_manager = WP_Admin_CSS_Color_Manager::get_instance();
    $this->wp_customize_manager = WP_Customize_Manager::get_instance();
    
    /**
     * React WordPress: Plugin Activation Manager 
     */
    include('plugins/plugin-activation-manager.php');
    $this->plugin_activation_manager = Plugin_Activation_Manager::get_instance();
    
    /**
     * React WordPress: Plugins
     */
    include('plugins/adminimize-plugin-manager.php');
    include('plugins/user-role-editor-plugin-manager.php');
    $this->adminimize_plugin_manager = Adminimize_Plugin_Manager::get_instance();
    $this->user_role_editor_plugin_manager = User_Role_Editor_Plugin_Manager::get_instance();
  }

  /**
   * Initialize all classes used by `React_WordPress` namespace.
   * 
   * @since React WordPress 0.0.1
   */
  private function initialize_statics()
  {    
    /**
     * React WordPress: Core 
     */
    include('core/capability.php');
    include('core/role.php');
    include('core/user.php');
    Capability::init();
    Role::init();
    User::init();
  }

  /**
   * Remove WP Emoji
   * 
   * @since React WordPress 0.0.1
   */
  private function remove_wp_emoji()
  {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
  }

  /**
   * Force all scripts to load in footer
   * 
   * @since React WordPress 0.0.1
   */
  private static function force_scripts_in_footer()
  {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
  }

  /**
   * Add SVG to allowed file uploads
   * 
   * @since React WordPress 0.0.1
   */
  private static function upload_mimes_svg()
  {
    $mime_types['svg'] = 'image/svg+xml';

    return $mime_types;
  }

  /**
   * Delete jquery migrate
   * 
   * @since React WordPress 0.0.1
   */
  private static function remove_jquery(&$scripts)
  {
    if (!User::is_current_user_role_admin())
    {
      $scripts->remove('jquery');
    }
  }

  /**
   * Registers theme support all features.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/functions/add_theme_support/
   */
  private static function add_theme_support()
  {
    // IMAGES
    add_theme_support('post-thumbnails');
    // TITLE TAGS
    add_theme_support('title-tag');
    // HTML 5 - Example : deletes type="*" in scripts and style tags
    add_theme_support('html5', ['script', 'style']);
  }

  /**
   * Remove a registered script.
   * 
   * @since React WordPress 0.0.1
   */
  private static function deregister_scripts()
  {
    // delete wp-embed.js from footer
    wp_deregister_script('wp-embed');
  }

  /**
   * Load the theme’s translated strings.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/functions/load_theme_textdomain/
   */
  private static function load_theme_textdomain()
  {
    $domain = self::TEXT_DOMAIN;
    $path = get_template_directory() . '/languages';

    load_theme_textdomain($domain, $path);
  }

  /**
   * Define functions in the `React_WordPress` namespace. 
   * 
   * @since React WordPress 0.0.1
   */
  private static function define_react_wordpress_functions()
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
}
