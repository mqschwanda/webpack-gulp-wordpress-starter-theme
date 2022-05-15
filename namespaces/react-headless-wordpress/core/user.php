<?php
/**
 * This file is responsible for handling WordPress User.
 *
 * @since React WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category User
 */

namespace ReactHeadlessWordPress;

/**
 * Manager for the WordPress: `User`.
 *
 * @since React WordPress 0.0.1
 * @package Class
 * @category User
 */
class User extends BaseStatic
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
	public static function getCurrentUser()
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
	public static function isCurrentUserRole($user_role)
	{
		$current_user = self::getCurrentUser();

		return in_array($user_role, $current_user->roles, true);
	}

	/**
	 * Checks if the current user has an admin role.
	 *
	 * @return bool
	 */
	public static function isCurrentUserRoleAdmin()
	{
		return self::isCurrentUserRole(Role::ADMINISTRATOR);
	}
}
