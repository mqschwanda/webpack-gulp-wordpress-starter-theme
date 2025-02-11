<?php
/**
 * This file is responsible for configuring WordPress admin functionality.
 *
 * @since React Headless WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category WordPressAdminManager
 */

namespace ReactHeadlessWordPress;

/**
 * Manage admin functionality in the `ReactHeadlessWordPress` namespace.
 *
 * @since React Headless WordPress 0.0.1
 * @package Class
 * @category WordPressAdminManager
 */
class WordPressAdminManager extends BaseSingleton
{
	/**
	 * Public
	 */

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 *
	 * @since React Headless WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 */
	public static function init()
	{
		// code and stuff...
	}

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * Filters the legacy contextual help list.
	 *
	 * @since React Headless WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/hooks/contextual_help_list/
	 */
	public function contextual_help_list()
	{ // phpcs:enable
		global $current_screen;

		$current_screen->remove_help_tabs();
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `WordPressAdminManager` class
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));

		add_action('contextual_help_list', array($this, 'contextual_help_list'));
	}
}
