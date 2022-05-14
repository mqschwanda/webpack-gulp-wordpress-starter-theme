<?php
/**
 * This file is responsible for handling WordPress User.
 *
 * @since React WordPress 0.0.1
 * @package React_WordPress
 * @category User
 */

namespace React_WordPress;

/**
 * Manager for the WordPress: `User`.
 *
 * @since React WordPress 0.0.1
 * @package Class
 * @category User
 */
class User extends React_WordPress_Static
{
	/**
	 * Public
	 */

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 * @since React WordPress 0.0.1
	 */
	// @codingStandardsIgnoreLine
	public static function init()
	{
		parent::init();

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
	 * @param mixed $user_role - User role name.
	 *
	 * @return bool
	 */
	public static function is_current_user_role($user_role)
	{
		$current_user = self::get_current_user();

		return in_array($user_role, $current_user->roles, true);
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
