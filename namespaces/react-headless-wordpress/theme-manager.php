<?php
/**
 * This file is where the `ReactHeadlessWordPress` namespace is configured.
 *
 * @since React Headless WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category ThemeManager
 */

namespace ReactHeadlessWordPress;

/**
 * Base
 */
require 'base/base-class.php';
require 'base/base-singleton.php';
require 'base/base-static.php';


/**
 * This class manages the configuration of the `ReactHeadlessWordPress` namespace.
 *
 * @since React Headless WordPress 0.0.1
 * @package Class
 * @category ThemeManager
 */
class ThemeManager extends BaseSingleton
{
	/**
	 * Public
	 */

	/**
	 * The `React Headless WordPress` theme name in human readable format.
	 *
	 * @var 'React Headless WordPress'
	 *
	 * @since React Headless WordPress 0.0.1
	 */
		public const THEME_NAME = 'React Headless WordPress';

	/**
	 * The `React Headless WordPress` theme slug that is used throughout the codebase as a unique theme id.
	 *
	 * @var 'react_wordpress'
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public const THEME_SLUG = 'react_wordpress';

	/**
	 * The `React Headless WordPress` theme version that is used throughout the codebase.
	 *
	 * @var '0.0.1'
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public const THEME_VERSION = '0.0.1';

	/**
	 * The default text domain that is used for translations in the `ReactHeadlessWordPress` namespace.
	 *
	 * @var ThemeManager::THEME_SLUG
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public const TEXT_DOMAIN = self::THEME_SLUG;

	/**
	 * The root div id used for react in the `ReactHeadlessWordPress` namespace.
	 *
	 * @var 'react_wordpress_root'
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public const REACT_ROOT = self::THEME_SLUG . '_root';

	/**
	 * Handle autoload of the `ReactHeadlessWordPress` namespace by initializing the singleton instance.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public static function autoload()
	{
		self::getInstance();
	}

	/**
	 * Render the website content as html.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public static function render()
	{
		get_header();
		self::renderReactRoot();
		get_footer();
	}

	/**
	 * TODO: fix issue with `WordPress.WP.I18n`
	 *
	 * Retrieve the translation of $text. If there is no translation, or the text domain isn't loaded, the original text is returned.
	 *
	 * @param string $text — Text to translate.
	 * @param string $domain — Optional. Text domain. Unique identifier for retrieving translated strings. Default 'self::TEXT_DOMAINE'.
	 *
	 * @return string — Translated text.
	 *
	 * @see https://developer.wordpress.org/reference/functions/__/
	 * @since React Headless WordPress 0.0.1
	 */
	public static function __($text, $domain = self::TEXT_DOMAIN)
	{
		return \__($text, $domain);
	}

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * TODO: fix issue with `WordPress.WP.I18n`
	 *
	 * Retrieve the translation of $text and escapes it for safe use in HTML output. If there is no translation, or the text domain isn't loaded, the original text is escaped and returned.
	 *
	 * @param string $text — Text to translate.
	 * @param string $domain — Optional. Text domain. Unique identifier for retrieving translated strings. Default 'default'.
	 *
	 * @return string — Translated text.
	 *
	 * @see https://developer.wordpress.org/reference/functions/esc_html__/
	 * @since React Headless WordPress 0.0.1
	 */
	public static function esc_html__($text, $domain = self::TEXT_DOMAIN)
	{ // phpcs:enable
		return \esc_html__($text, $domain);
	}

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * Fires after the theme is loaded.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/after_setup_theme/
	 * @since React Headless WordPress 0.0.1
	 */
	public static function after_setup_theme()
	{ // phpcs:enable
		self::addThemeSupport();
		self::loadThemeTextdomain();
	}

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * Filters list of allowed mime types and file extensions.
	 *
	 * @since React Headless WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/hooks/upload_mimes/
	 */
	public static function upload_mimes()
	{ // phpcs:enable
		self::uploadMimesSvg();
	}

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 *
	 * @since React Headless WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 */
	public static function init()
	{
		self::defineReactWordpressFunctions();
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `ThemeManager` class
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));

		add_action('after_setup_theme', array($this, 'after_setup_theme'));
		add_action('upload_mimes', array($this, 'upload_mimes'), 1, 1);

		add_filter('admin_footer_text', '__return_empty_string', 11);
		add_filter('update_footer', '__return_empty_string', 11);

		self::initializeStatics();
		self::initializeSingletons();
	}

	/**
	 * Private
	 */

	/**
	 * Initialize all singleton classes used by `ReactHeadlessWordPress` namespace.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	private function initializeSingletons()
	{
		/**
		 * WordPress
		 */
		include 'wordpress/wordpress-admin-manager.php';
		include 'wordpress/wordpress-admin-theme-manager.php';
		include 'wordpress/wordpress-customization-manager.php';
		include 'wordpress/wordpress-scripts-manager.php';
		$this->wordpress_admin_manager         = WordPressAdminManager::getInstance();
		$this->wordpress_admin_theme_manager   = WordPressAdminThemeManager::getInstance();
		$this->wordpress_customization_manager = WordPressCustomizationManager::getInstance();
		$this->wordpress_scripts_manager       = WordPressScriptsManager::getInstance();

		/**
		 * Plugin Activation Manager
		 */
		include 'plugins/plugin-activation-manager.php';
		$this->plugin_activation_manager = PluginActivationManager::getInstance();

		/**
		 * Plugins
		 */
		include 'plugins/adminimize-plugin-manager.php';
		include 'plugins/hide-security-enhancer-plugin-manager.php';
		include 'plugins/user-role-editor-plugin-manager.php';
		$this->adminimize_plugin_manager             = AdminimizePluginManager::getInstance();
		$this->hide_security_enhancer_plugin_manager = HideSecurityEnhancerPluginManager::getInstance();
		$this->user_role_editor_plugin_manager       = UserRoleEditorPluginManager::getInstance();
	}

	/**
	 * Initialize all static classes used by `ReactHeadlessWordPress` namespace.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	private function initializeStatics()
	{
		/**
		 * Core
		 */
		include 'core/capability.php';
		include 'core/role.php';
		include 'core/user.php';
		Capability::init();
		Role::init();
		User::init();

		/**
		 * Utility
		 */
		include 'utility/array-utility.php';
		ArrayUtility::init();
	}

	/**
	 * Add SVG to allowed file uploads.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	private static function uploadMimesSvg()
	{
		$mime_types['svg'] = 'image/svg+xml';

		return $mime_types;
	}

	/**
	 * Registers theme support for all needed WordPress features.
	 *
	 * @since React Headless WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/functions/add_theme_support/
	 */
	private static function addThemeSupport()
	{
		// IMAGES
		add_theme_support('post-thumbnails');
		// TITLE TAGS
		add_theme_support('title-tag');
		// HTML 5 - Example : deletes type="*" in scripts and style tags
		add_theme_support('html5', array('script', 'style'));
	}

	/**
	 * Load the theme translation strings.
	 *
	 * @since React Headless WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/functions/load_theme_textdomain/
	 */
	private static function loadThemeTextdomain()
	{
		$domain = self::TEXT_DOMAIN;
		$path   = get_template_directory() . '/languages';

		load_theme_textdomain($domain, $path);
	}

	/**
	 * Render react root.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public static function renderReactRoot()
	{
	?>
		<div id="<?php echo esc_html(self::REACT_ROOT); ?>"></div>
	<?php
	}

	/**
	 * Define functions in the `ReactHeadlessWordPress` namespace.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	private static function defineReactWordpressFunctions()
	{
		// @codingStandardsIgnoreLine
		function __(...$args)
		{
			// @codingStandardsIgnoreLine
			ThemeManager::__(...$args);
		}

		// @codingStandardsIgnoreLine
		function esc_html__(...$args)
		{
			// @codingStandardsIgnoreLine
			ThemeManager::esc_html__(...$args);
		}
	}
}
