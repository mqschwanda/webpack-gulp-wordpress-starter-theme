<?php
/**
 * This file is responsible for configuring WordPress scripts.
 *
 * @since React WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category WordPressScriptsManager
 */

namespace ReactHeadlessWordPress;

/**
 * Manage all scripts used in the `ReactHeadlessWordPress` namespace.
 *
 * @since React WordPress 0.0.1
 * @package Class
 * @category WordPressScriptsManager
 */
class WordPressScriptsManager extends BaseSingleton
{
	/**
	 * Public
	 */

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * Register all WordPress scripts.
	 *
	 * @param \WP_Scripts $scripts - WP_Scripts object.
	 *
	 * @see https://developer.wordpress.org/reference/functions/wp_default_scripts/
	 * @since React WordPress 0.0.1
	 */
	public static function wp_default_scripts(&$scripts)
	{ // phpcs:enable
		self::removeJquery($scripts);
	}

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * Fires when scripts and styles are enqueued.
	 *
	 * @since React WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
	 */
	public static function wp_enqueue_scripts()
	{ // phpcs:enable
		self::forceScriptsInFooter();
		self::enqueueScriptsJavascript();
		self::enqueueScriptsStylesheet();
	}

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * Fire the wp_footer action.
	 *
	 * @since React WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/functions/wp_footer/
	 */
	public static function wp_footer()
	{ // phpcs:enable
		self::deregisterScripts();
	}

	/**
	 * Get the directory of all assets.
	 *
	 * @return string
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function getAssetsDirectoryUri()
	{
		return get_template_directory_uri() . '/assets';
	}

	/**
	 * Get the directory of all bundled js.
	 *
	 * @return string
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function getJavascriptsDirectoryUri()
	{
		return self::getAssetsDirectoryUri() . '/dist/js';
	}

	/**
	 * Get the directory of all bundled css.
	 *
	 * @return string
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function getStylesDirectoryUri()
	{
		return self::getAssetsDirectoryUri() . '/dist/css';
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
	 * Protected
	 */

	/**
	 * Initialize `WordPressScriptsManager` class
	 *
	 * @since React WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));

		add_action('wp_footer', array($this, 'wp_footer'));

		add_action('wp_default_scripts', array($this, 'wp_default_scripts'));

		add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));

		self::removeWpEmoji();
	}

	/**
	 * Private
	 */

	/**
	 * Stop jQuery script from running when it is not needed.
	 *
	 * @param \WP_Scripts $scripts - WP_Scripts object.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function removeJquery(&$scripts)
	{
		if (!User::isCurrentUserRoleAdmin())
		{
			$scripts->remove('jquery');
		}
	}

	/**
	 * Force all scripts to load in footer.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function forceScriptsInFooter()
	{
		remove_action('wp_head', 'wp_print_scripts');
		remove_action('wp_head', 'wp_print_head_scripts', 9);
		remove_action('wp_head', 'wp_enqueue_scripts', 1);
	}

	/**
	 * Prevent registered scripts from loading.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function deregisterScripts()
	{
		// delete wp-embed.js from footer
		wp_deregister_script('wp-embed');
	}

	/**
	 * Remove WordPress Emoji support.
	 *
	 * @since React WordPress 0.0.1
	 */
	private function removeWpEmoji()
	{
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('wp_print_styles', 'print_emoji_styles');
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('admin_print_styles', 'print_emoji_styles');
	}

	/**
	 * Enqueue main javascript script.
	 *
	 * @see https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	 * @since React WordPress 0.0.1
	 */
	private function enqueueScriptsJavascript()
	{
		$handle    = 'main';
		$src       = self::getJavascriptsDirectoryUri() . '/main.js';
		$deps      = array();
		$ver       = ThemeManager::THEME_VERSION;
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
	 * Enqueue main CSS stylesheet script.
	 *
	 * @see https://developer.wordpress.org/reference/functions/wp_enqueue_style/
	 * @since React WordPress 0.0.1
	 */
	private function enqueueScriptsStylesheet()
	{
		$handle = 'main';
		$src    = self::getStylesDirectoryUri() . '/main.css';
		$deps   = array();
		$ver    = ThemeManager::THEME_VERSION;
		$media  = 'all';

		wp_enqueue_style(
			$handle,
			$src,
			$deps,
			$ver,
			$media,
		);
	}
}
