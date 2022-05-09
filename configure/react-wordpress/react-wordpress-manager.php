<?php

namespace React_Wordpress;

class React_Wordpress_Manager {
  public const THEME_NAME = 'React Wordpress';
  public const THEME_SLUG = 'react_wordpress';
  public const TEXT_DOMAINE = self::THEME_SLUG;

  public static function __($text, $domain = self::TEXT_DOMAINE) {
    return \__($text, $domain);
  }

  public static function esc_html__($text, $domain = self::TEXT_DOMAINE) {
    return \esc_html__($text, $domain);
  }

  public static function init() {

  }
}

// Initialize
add_action('init', array('\React_Wordpress\React_Wordpress_Manager', 'init'));

