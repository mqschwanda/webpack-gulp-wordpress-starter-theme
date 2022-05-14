<?php
/**
 * This file is responsible for configuring WordPress admin functionality.
 *
 * @since React WordPress 0.0.1
 * @package React_WordPress
 * @category WordPress_Admin_Manager
 */

namespace React_WordPress;

/**
 * Manage admin functionality in the `React_WordPress` namespace.
 *
 * @since React WordPress 0.0.1
 * @package Class
 * @category WordPress_Admin_Manager
 */
class WordPress_Admin_Manager extends Base_Singleton
{
	/**
	 * Public
	 */

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
	 * Filters the legacy contextual help list.
	 *
	 * @since React WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/hooks/contextual_help_list/
	 */
	public function contextual_help_list()
	{
		global $current_screen;

		$current_screen->remove_help_tabs();
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `WordPress_Admin_Manager` class
	 *
	 * @since React WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));

		add_action('contextual_help_list', array($this, 'contextual_help_list'));
	}
}
