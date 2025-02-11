<?php
/**
 * This file is responsible for configuring WordPress Admin theme.
 *
 * @since React Headless WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category WordPressAdminThemeManager
 */

namespace ReactHeadlessWordPress;

/**
 * Admin Theme Color Manager class for the `ReactHeadlessWordPress` namespace.
 *
 * @since React Headless WordPress 0.0.1
 * @package Class
 * @category WordPressAdminThemeManager
 */
class WordPressAdminThemeManager extends BaseSingleton
{
	/**
	 * Public
	 */

	/**
	 * The name for the `React Headless WordPress` theme.
	 *
	 * @var ThemeManager::THEME_NAME
	 *
	 * @since React Headless WordPress 0.0.1
	 */
		public const ADMIN_CSS_COLOR_NAME = ThemeManager::THEME_NAME;

	/**
	 * The unique key for the `React Headless WordPress` theme.
	 *
	 * @var ThemeManager::THEME_SLUG
	 * q
	 * @since React Headless WordPress 0.0.1
	 */
	public const ADMIN_CSS_COLOR_KEY = ThemeManager::THEME_SLUG;

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 * @since React Headless WordPress 0.0.1
	 */
	public static function init()
	{
		self::configureWpAdminCssColor();
	}

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * Force `React Headless WordPress` admin theme.
	 *
	 * @param string $color_scheme - Name of the admin Color Scheme.
	 *
	 * @return WordPressAdminThemeManager::ADMIN_CSS_COLOR_KEY
	 *
	 * @see https://wordpress.stackexchange.com/questions/126697/set-default-admin-colour-for-all-users
	 * @since React Headless WordPress 0.0.1
	 */
	public static function get_user_option_admin_color($color_scheme)
	{ // phpcs:enable
		$color_scheme = self::ADMIN_CSS_COLOR_KEY;

		return $color_scheme;
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `WordPressAdminThemeManager` class
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));

		add_filter('get_user_option_admin_color', array($this, 'get_user_option_admin_color'), 5);

		remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
	}

	/**
	 * Private
	 */

	/**
	 * Registers the admin color theme css file.
	 *
	 * @see https://developer.wordpress.org/reference/functions/wp_admin_css_color/
	 * @since React Headless WordPress 0.0.1
	 */
	private function configureWpAdminCssColor()
	{
		$key    = self::ADMIN_CSS_COLOR_KEY;
		$name   = __(self::ADMIN_CSS_COLOR_NAME);
		$url    = WordPressScriptsManager::getStylesDirectoryUri() . '/wp-admin-css-color.css';
		$colors = array(
			'var(--react_wordpress_primary_color)',
			'var(--react_wordpress_secondary_color)',
			'var(--react_wordpress_error_color)',
			'var(--react_wordpress_warning_color)',
			'var(--react_wordpress_info_color)',
			'var(--react_wordpress_success_color)',
			'var(--react_wordpress_background_color)',
			'var(--react_wordpress_contrast_text_color)',
		);
		$icons  = array(
			'var(--react_wordpress_primary_color)', // SVG icon base color
			'var(--react_wordpress_primary_color)', // SVG icon color on focus
			'var(--react_wordpress_primary_color)', // SVG icon color of current admin menu link
		);

		wp_admin_css_color(
			$key,
			$name,
			$url,
			$colors,
			$icons,
		);
	}
}
