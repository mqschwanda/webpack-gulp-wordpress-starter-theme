<?php
/**
 * This file is responsible for configuring WordPress plugin: `User Role Editor`.
 *
 * @since React Headless WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category UserRoleEditorPluginManager
 */

namespace ReactHeadlessWordPress;

/**
 * Manager for the WordPress Plugin: `User Role Editor`.
 *
 * User Role Editor allows you to change user roles and capabilities easy.
 *
 * @see https://www.role-editor.com/
 * @see https://wordpress.org/plugins/user-role-editor/
 * @since React Headless WordPress 0.0.1
 * @package Class
 * @category UserRoleEditorPluginManager
 */
class UserRoleEditorPluginManager extends BaseSingleton
{
	/**
	 * Public
	 */

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 * @since React Headless WordPress 0.0.1
	 */
	public static function init()
	{
		// code and stuff...
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `UserRoleEditorPluginManager` class
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));
	}
}
