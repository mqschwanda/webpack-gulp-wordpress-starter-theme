<?php

namespace React_Wordpress;

include('react-wordpress-class.php');

class React_Wordpress_Manager extends React_Wordpress_Class {
  public const THEME_NAME = 'React Wordpress';
  public const THEME_SLUG = 'react_wordpress';
  public const TEXT_DOMAINE = self::THEME_SLUG;

  private function __construct() {
    parent::__construct();

    add_action('init', array($this, 'init'));

    include('mw-adminimize-manager.php');
    include('tgm-plugin-activation-manager.php');
    include('user-role-editor-manager.php');
    include('wp-admin-css-color-manager.php');
    include('wp-customize-manager.php');

    $this->MW_Adminimize_Manager = new MW_Adminimize_Manager();
    $this->TGM_Plugin_Activation_Manager = new TGM_Plugin_Activation_Manager();
    $this->User_Role_Editor_Manager = new User_Role_Editor_Manager();
    $this->WP_Admin_CSS_Color_Manager = new WP_Admin_CSS_Color_Manager();
    $this->WP_Customize_Manager = new WP_Customize_Manager();
  }

  /**
   * The unique instance of the class.
   *
   * @var React_Wordpress_Manager
   */
  private static $instance;

  /**
   * Gets an instance of our class.
   *
   * @return React_Wordpress_Manager
   */
  public static function get_instance()
  {
      if (null === self::$instance) {
          self::$instance = new self();
      }

      return self::$instance;
  }

  public static function autoload()
  {
    self::get_instance();
  }

  public static function __($text, $domain = self::TEXT_DOMAINE) {
    return \__($text, $domain);
  }

  public static function esc_html__($text, $domain = self::TEXT_DOMAINE) {
    return \esc_html__($text, $domain);
  }

  /**
   * Define functions in the `React_Wordpress` namespace. 
   */
  public static function define_react_wordpress_functions() {
    function __(...$args) {
      React_Wordpress_Manager::__(...$args);
    }
    
    function esc_html__(...$args) {
      React_Wordpress_Manager::esc_html__(...$args);
    }
  }

  public static function init() {
    self::define_react_wordpress_functions();
  }
}
