<?php

namespace React_WordPress;

/**
 * Manager for the WordPress: `User`.
 * 
 * @since React WordPress 0.0.1
 */
class User extends React_WordPress_Class
{
  /**
   * Public
   */

  /**
   * Initialize `User_User_Editor_Plugin_Manager` class
   * 
   * @return User
   * 
   * @since React WordPress 0.0.1
   */
  public function __construct()
  {
    parent::__construct();

    add_action('init', array($this, 'init'));

    return $this;
  }

  /**
   * Fires after WordPress has finished loading but before any headers are sent.
   * 
   * @see https://developer.wordpress.org/reference/hooks/init/
   * @since React WordPress 0.0.1
   */
  public static function init()
  {
    // code and stuff...
  }

  /**
   * Retrieve the current user object.
   * 
   * @return WP_User Current WP_User instance.
   * 
   * @see https://developer.wordpress.org/reference/functions/wp_get_current_user/ 
   */
  public static function get_current_user()
  {
    return wp_get_current_user();
  }
  
  /**
   * Checks if the current user has a given role.
   * 
   * @param $user_role
   * 
   * @return bool
   */
  public static function is_current_user_role($user_role)
  {
    $current_user = self::get_current_user();
    
    return in_array($user_role, $current_user->roles);
  }

  /**
   * Checks if the current user has an admin role.
   * 
   * @return bool
   */
  public static function is_current_user_role_admin()
  { 
    return self::is_current_user_role(Role::ADMINISTRATOR);
  }
}
