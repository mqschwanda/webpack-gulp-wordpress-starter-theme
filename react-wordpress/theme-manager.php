<?php
/**
 * This file is where the `React_WordPress` namespace is configured.
 *
 * @since React WordPress 0.0.1
 * @package React_WordPress
 * @category Theme_Manager
 */

namespace React_WordPress;

/**
 * Base
 */
require 'base/base-class.php';
require 'base/base-singleton.php';
require 'base/base-static.php';


/**
 * This class manages the configuration of the `React_WordPress` namespace.
 *
 * @since React WordPress 0.0.1
 * @package Class
 * @category Theme_Manager
 */
class Theme_Manager extends Base_Singleton
{
	/**
	 * Public
	 */

	/**
	 * The `React WordPress` theme name in human readable format.
	 *
	 * @var 'React WordPress'
	 *
	 * @since React WordPress 0.0.1
	 */
		public const THEME_NAME = 'React WordPress';

	/**
	 * The `React WordPress` theme slug that is used throughout the codebase as a unique theme id.
	 *
	 * @var 'react_wordpress'
	 *
	 * @since React WordPress 0.0.1
	 */
	public const THEME_SLUG = 'react_wordpress';

	/**
	 * The `React WordPress` theme version that is used throughout the codebase.
	 *
	 * @var '0.0.1'
	 *
	 * @since React WordPress 0.0.1
	 */
	public const THEME_VERSION = '0.0.1';

	/**
	 * The default text domain that is used for translations in the `React_WordPress` namespace.
	 *
	 * @var Theme_Manager::THEME_SLUG
	 *
	 * @since React WordPress 0.0.1
	 */
	public const TEXT_DOMAIN = self::THEME_SLUG;

	/**
	 * The root div id used for react in the `React_WordPress` namespace.
	 *
	 * @var 'react_wordpress_root'
	 *
	 * @since React WordPress 0.0.1
	 */
	public const REACT_ROOT = self::THEME_SLUG . '_root';

	/**
	 * Handle autoload of the `React_WordPress` namespace by initializing the singleton instance.
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function autoload()
	{
		self::get_instance();
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
	 * @since React WordPress 0.0.1
	 */
	public static function __($text, $domain = self::TEXT_DOMAIN)
	{
		return \__($text, $domain);
	}

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
	 * @since React WordPress 0.0.1
	 */
	public static function esc_html__($text, $domain = self::TEXT_DOMAIN)
	{
		return \esc_html__($text, $domain);
	}

	/**
	 * Fires after the theme is loaded.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/after_setup_theme/
	 * @since React WordPress 0.0.1
	 */
	public static function after_setup_theme()
	{
		self::add_theme_support();
		self::load_theme_textdomain();
	}

	/**
	 * Register all WordPress scripts.
	 *
	 * @param \WP_Scripts $scripts - WP_Scripts object.
	 *
	 * @see https://developer.wordpress.org/reference/functions/wp_default_scripts/
	 * @since React WordPress 0.0.1
	 */
	public static function wp_default_scripts(&$scripts)
	{
		self::remove_jquery($scripts);
	}

	/**
	 * Filters list of allowed mime types and file extensions.
	 *
	 * @since React WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/hooks/upload_mimes/
	 */
	public static function upload_mimes()
	{
		self::upload_mimes_svg();
	}

	/**
	 * Fires when scripts and styles are enqueued.
	 *
	 * @since React WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
	 */
	public static function wp_enqueue_scripts()
	{
		self::force_scripts_in_footer();
	}

	/**
	 * Fire the wp_footer action.
	 *
	 * @since React WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/functions/wp_footer/
	 */
	public static function wp_footer()
	{
		self::deregister_scripts();
	}

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 *
	 * @since React WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 */
	public static function init()
	{
		self::define_react_wordpress_functions();
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `Theme_Manager` class
	 *
	 * @since React WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));

		add_action('after_setup_theme', array($this, 'after_setup_theme'));
		add_action('upload_mimes', array($this, 'upload_mimes'), 1, 1);
		add_action('wp_default_scripts', array($this, 'wp_default_scripts'));
		add_action('wp_enqueue_scripts', array($this, 'wp_enqueue_scripts'));
		add_action('wp_footer', array($this, 'wp_footer'));

		add_filter('admin_footer_text', '__return_empty_string', 11);
		add_filter('update_footer', '__return_empty_string', 11);

		self::remove_wp_emoji();
		self::initialize_statics();
		self::initialize_singletons();
	}

	/**
	 * Private
	 */

	/**
	 * Initialize all singleton classes used by `React_WordPress` namespace.
	 *
	 * @since React WordPress 0.0.1
	 */
	private function initialize_singletons()
	{
		/**
		 * WordPress
		 */
		include 'wordpress/wordpress-admin-manager.php';
		include 'wordpress/wordpress-admin-theme-manager.php';
		include 'wordpress/wordpress-customization-manager.php';
		include 'wordpress/wordpress-scripts-manager.php';
		$this->wordpress_admin_manager         = WordPress_Admin_Manager::get_instance();
		$this->wordpress_admin_theme_manager   = WordPress_Admin_Theme_Manager::get_instance();
		$this->wordpress_customization_manager = WordPress_Customization_Manager::get_instance();
		$this->wordpress_scripts_manager       = WordPress_Scripts_Manager::get_instance();

		/**
		 * Plugin Activation Manager
		 */
		include 'plugins/plugin-activation-manager.php';
		$this->plugin_activation_manager = Plugin_Activation_Manager::get_instance();

		/**
		 * Plugins
		 */
		include 'plugins/adminimize-plugin-manager.php';
		include 'plugins/user-role-editor-plugin-manager.php';
		$this->adminimize_plugin_manager       = Adminimize_Plugin_Manager::get_instance();
		$this->user_role_editor_plugin_manager = User_Role_Editor_Plugin_Manager::get_instance();
	}

	/**
	 * Initialize all static classes used by `React_WordPress` namespace.
	 *
	 * @since React WordPress 0.0.1
	 */
	private function initialize_statics()
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
		Array_Utility::init();
	}

	/**
	 * Remove WordPress Emoji support.
	 *
	 * @since React WordPress 0.0.1
	 */
	private function remove_wp_emoji()
	{
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('wp_print_styles', 'print_emoji_styles');
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('admin_print_styles', 'print_emoji_styles');
	}

	/**
	 * Force all scripts to load in footer.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function force_scripts_in_footer()
	{
		remove_action('wp_head', 'wp_print_scripts');
		remove_action('wp_head', 'wp_print_head_scripts', 9);
		remove_action('wp_head', 'wp_enqueue_scripts', 1);
	}

	/**
	 * Add SVG to allowed file uploads.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function upload_mimes_svg()
	{
		$mime_types['svg'] = 'image/svg+xml';

		return $mime_types;
	}

	/**
	 * Stop jQuery script from running when it is not needed.
	 *
	 * @param \WP_Scripts $scripts - WP_Scripts object.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function remove_jquery(&$scripts)
	{
		if (!User::is_current_user_role_admin())
		{
			$scripts->remove('jquery');
		}
	}

	/**
	 * Registers theme support for all needed WordPress features.
	 *
	 * @since React WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/functions/add_theme_support/
	 */
	private static function add_theme_support()
	{
		// IMAGES
		add_theme_support('post-thumbnails');
		// TITLE TAGS
		add_theme_support('title-tag');
		// HTML 5 - Example : deletes type="*" in scripts and style tags
		add_theme_support('html5', array('script', 'style'));
	}

	/**
	 * Prevent registered scripts from loading.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function deregister_scripts()
	{
		// delete wp-embed.js from footer
		wp_deregister_script('wp-embed');
	}

	/**
	 * Load the theme translation strings.
	 *
	 * @since React WordPress 0.0.1
	 * @see https://developer.wordpress.org/reference/functions/load_theme_textdomain/
	 */
	private static function load_theme_textdomain()
	{
		$domain = self::TEXT_DOMAIN;
		$path   = get_template_directory() . '/languages';

		load_theme_textdomain($domain, $path);
	}

	/**
	 * Define functions in the `React_WordPress` namespace.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function define_react_wordpress_functions()
	{
		// @codingStandardsIgnoreLine
		function __(...$args)
		{
			// @codingStandardsIgnoreLine
			Theme_Manager::__(...$args);
		}

		// @codingStandardsIgnoreLine
		function esc_html__(...$args)
		{
			// @codingStandardsIgnoreLine
			Theme_Manager::esc_html__(...$args);
		}
	}
}
