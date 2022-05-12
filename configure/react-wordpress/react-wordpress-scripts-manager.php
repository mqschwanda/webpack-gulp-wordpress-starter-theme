<?php

namespace React_WordPress;

/**
 * Manage all scripts used in the `React_WordPress` namespace. 
 * 
 * @since React WordPress 0.0.1
 */
class React_WordPress_Scripts_Manager extends React_WordPress_Singleton
{
  /**
   * Public
   */
  
  /**
   * Get the directory of all assets
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_assets_directory_uri()
  {
    return get_template_directory_uri() . '/assets';
  }

  /**
   * Get the directory of all bundled js
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_javascripts_directory_uri()
  {
    return self::get_assets_directory_uri() . '/dist/js';
  }

  /**
   * Get the directory of all bundled css
   * 
   * @return string
   * 
   * @since React WordPress 0.0.1
   */
  public static function get_styles_directory_uri()
  {
    return self::get_assets_directory_uri() . '/dist/css';
  }

  /**
   * Fires after WordPress has finished loading but before any headers are sent.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/hooks/init/
   */
  public static function init()
  {
    // code and stuff...
  }

  /**
   * Enqueue a script.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/functions/wp_enqueue_script/
   */
  public function enqueue_scripts_javascript()
  {
    $handle = 'main';
    $src = self::get_javascripts_directory_uri() . '/main.js';
    $deps = array();
    $ver = React_WordPress_Manager::THEME_VERSION;
    $in_footer = true;

    wp_enqueue_script(
      $handle,
      $src, 
      $deps, 
      $ver, 
      $in_footer,
    );
  }

  /**
   * Enqueue a CSS stylesheet.
   * 
   * @since React WordPress 0.0.1
   * @see https://developer.wordpress.org/reference/functions/wp_enqueue_style/
   */
  public function enqueue_scripts_stylesheet()
  {
    $handle = 'main';
    $src = self::get_styles_directory_uri() . '/main.css';
    $deps = array();
    $ver = React_WordPress_Manager::THEME_VERSION;
    $media = 'all';

    wp_enqueue_style(
      $handle,
      $src,
      $deps, 
      $ver, 
      $media,
    );
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

    add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts_javascript'), 100);
    add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts_stylesheet'));
  }
}
