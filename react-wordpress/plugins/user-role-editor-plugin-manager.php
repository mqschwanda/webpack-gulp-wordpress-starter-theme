<?php
/**
 * This file is responsible for configuring WordPress plugin: `User Role Editor`.
 *
 * @since React WordPress 0.0.1
 * @package React_WordPress
 * @category User_Role_Editor_Plugin_Manager
 */

namespace React_WordPress;

/**
 * Manager for the WordPress Plugin: `User Role Editor`.
 *
 * User Role Editor allows you to change user roles and capabilities easy.
 *
 * @see https://www.role-editor.com/
 * @see https://wordpress.org/plugins/user-role-editor/
 * @since React WordPress 0.0.1
 * @package Class
 * @category User_Role_Editor_Plugin_Manager
 */
class User_Role_Editor_Plugin_Manager extends Base_Singleton
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
	public static function init()
	{
		// ...
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `User_Role_Editor_Plugin_Manager` class
	 *
	 * @since React WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));
	}
}
