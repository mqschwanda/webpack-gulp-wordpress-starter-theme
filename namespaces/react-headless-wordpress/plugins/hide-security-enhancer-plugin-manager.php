<?php
/**
 * This file is responsible for configuring WordPress plugin: `WP Hide & Security Enhancer`.
 *
 * @since React WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category HideSecurityEnhancerPluginManager
 */

namespace ReactHeadlessWordPress;

/**
 * Manager for the WordPress Plugin: `WP Hide & Security Enhancer`.
 *
 * WP-Hide has launched the easiest way to completely hide your WordPress core files,
 * login page, theme and plugins paths from being shown on front side.
 *
 * @see https://plugins.svn.wordpress.org/wp-hide-security-enhancer/
 * @see https://wordpress.org/plugins/wp-hide-security-enhancer/
 * @since React WordPress 0.0.1
 * @package Class
 * @category HideSecurityEnhancerPluginManager
 */
class HideSecurityEnhancerPluginManager extends BaseSingleton
{
	/**
	 * Public
	 */

	public const MENU_SLUG = 'wp-hide';

	/**
	 * Module Slugs
	 */
	public const HIDE_REWRITE_URLS_MODULE_SLUG = 'wp-hide-rewrite';
	public const HIDE_GENERAL_HTML_MODULE_SLUG = 'wp-hide-general';
	public const HIDE_ADMIN_MODULE_SLUG        = 'wp-hide-admin';
	public const SETTINGS_CDN_MODULE_SLUG      = 'wp-hide-cdn';
	public const SECURITY_HEADERS_MODULE_SLUG  = 'wp-hide-security';

	/**
	 * Settings value
	 */

	public const UNSET = '';
	public const NO    = 'no';
	public const YES   = 'yes';

	/**
	 * Hide: Rewrite / URLs
	 */

	// Theme
	public const THEME_PATH_KEY       = 'new_theme_path';
	public const STYLE_CSS_PATH_KEY   = 'new_style_file_path';
	public const STYLE_FILE_CLEAN_KEY = 'style_file_clean';

	public const THEME_PATH_VALUE       = self::UNSET;
	public const STYLE_CSS_PATH_VALUE   = self::UNSET;
	public const STYLE_FILE_CLEAN_VALUE = self::NO;

	// WP Includes
	public const INCLUDE_PATH_KEY        = 'new_include_path';
	public const BLOCK_WPINCLUDE_URL_KEY = 'block_wpinclude_url';

	public const INCLUDE_PATH_VALUE        = self::UNSET;
	public const BLOCK_WPINCLUDE_URL_VALUE = self::NO;

	// WP Content
	public const CONTENT_PATH_KEY          = 'new_content_path';
	public const BLOCK_WP_CONTENT_PATH_KEY = 'block_wp_content_path';

	public const CONTENT_PATH_VALUE          = self::UNSET;
	public const BLOCK_WP_CONTENT_PATH_VALUE = self::NO;

	// Plugins
	public const PLUGIN_PATH_KEY       = 'new_plugin_path';
	public const BLOCK_PLUGINS_URL_KEY = 'block_plugins_url';

	public const PLUGIN_PATH_VALUE       = self::UNSET;
	public const BLOCK_PLUGINS_URL_VALUE = self::NO;

	// Uploads
	public const UPLOAD_PATH_KEY      = 'new_upload_path';
	public const BLOCK_UPLOAD_URL_KEY = 'block_upload_url';

	public const UPLOAD_PATH_VALUE      = self::UNSET;
	public const BLOCK_UPLOAD_URL_VALUE = self::NO;

	// Comments
	public const WP_COMMENTS_POST_KEY           = 'new_wp_comments_post';
	public const BLOCK_WP_COMMENTS_POST_URL_KEY = 'block_wp_comments_post_url';

	public const WP_COMMENTS_POST_KEY_VALUE           = self::UNSET;
	public const BLOCK_WP_COMMENTS_POST_URL_KEY_VALUE = self::NO;

	// Author
	public const AUTHOR_KEY               = 'author';
	public const AUTHOR_BLOCK_DEFAULT_KEY = 'author_block_default';

	public const AUTHOR_VALUE               = self::UNSET;
	public const AUTHOR_BLOCK_DEFAULT_VALUE = self::NO;

	// Search
	public const SEARCH_KEY               = 'search';
	public const SEARCH_BLOCK_DEFAULT_KEY = 'search_block_default';

	public const SEARCH_VALUE               = self::UNSET;
	public const SEARCH_BLOCK_DEFAULT_VALUE = self::NO;

	// XML-RPC
	public const XML_RPC_PATH_KEY         = 'new_xml_rpc_path';
	public const BLOCK_XML_RPC_KEY        = 'block_xml_rpc';
	public const DISABLE_XML_RPC_AUTH_KEY = 'disable_xml_rpc_auth';
	public const REMOVE_XML_RPC_TAG_KEY   = 'remove_xml_rpc_tag';

	public const XML_RPC_PATH_VALUE         = self::UNSET;
	public const BLOCK_XML_RPC_VALUE        = self::NO;
	public const DISABLE_XML_RPC_AUTH_VALUE = self::NO;
	public const REMOVE_XML_RPC_TAG_VALUE   = self::NO;

	// JSON Rest
	public const CLEAN_JSON_BASE_ROUTE_KEY               = 'clean_json_base_route';
	public const DISABLE_JSON_REST_V1_KEY                = 'disable_json_rest_v1';
	public const DISABLE_JSON_REST_V2_KEY                = 'disable_json_rest_v2';
	public const BLOCK_JSON_REST_KEY                     = 'block_json_rest';
	public const DISABLE_JSON_REST_WPHEAD_LINK_KEY       = 'disable_json_rest_wphead_link';
	public const DISABLE_JSON_REST_XMLRPC_RSD_KEY        = 'disable_json_rest_xmlrpc_rsd';
	public const DISABLE_JSON_REST_TEMPLATE_REDIRECT_KEY = 'disable_json_rest_template_redirect';

	public const CLEAN_JSON_BASE_ROUTE_VALUE               = self::NO;
	public const DISABLE_JSON_REST_V1_VALUE                = self::NO;
	public const DISABLE_JSON_REST_V2_VALUE                = self::NO;
	public const BLOCK_JSON_REST_VALUE                     = self::NO;
	public const DISABLE_JSON_REST_WPHEAD_LINK_VALUE       = self::NO;
	public const DISABLE_JSON_REST_XMLRPC_RSD_VALUE        = self::NO;
	public const DISABLE_JSON_REST_TEMPLATE_REDIRECT_VALUE = self::NO;

	// Root Files
	public const BLOCK_LICENSE_TXT_KEY             = 'block_license_txt';
	public const BLOCK_README_HTML_KEY             = 'block_readme_html';
	public const BLOCK_WP_ACTIVATE_PHP_KEY         = 'block_wp_activate_php';
	public const BLOCK_WP_CRON_PHP_KEY             = 'block_wp_cron_php';
	public const BLOCK_DEFAULT_WP_SIGNUP_PHP_KEY   = 'block_default_wp_signup_php';
	public const BLOCK_DEFAULT_WP_REGISTER_PHP_KEY = 'block_default_wp_register_php';
	public const BLOCK_OTHER_WP_FILES_KEY          = 'block_other_wp_files';

	public const BLOCK_LICENSE_TXT_VALUE             = self::NO;
	public const BLOCK_README_HTML_VALUE             = self::NO;
	public const BLOCK_WP_ACTIVATE_PHP_VALUE         = self::NO;
	public const BLOCK_WP_CRON_PHP_VALUE             = self::NO;
	public const BLOCK_DEFAULT_WP_SIGNUP_PHP_VALUE   = self::NO;
	public const BLOCK_DEFAULT_WP_REGISTER_PHP_VALUE = self::NO;
	public const BLOCK_OTHER_WP_FILES_VALUE          = self::NO;

	// URL Slash
	public const ADD_SLASH_KEY = 'add_slash';

	public const ADD_SLASH_VALUE = self::NO;

	// WP Login
	public const WP_LOGIN_PHP_KEY               = 'new_wp_login_php';
	public const BLOCK_DEFAULT_WP_LOGIN_PHP_KEY = 'block_default_wp_login_php';

	public const WP_LOGIN_PHP_KEY_VALUE               = self::UNSET;
	public const BLOCK_DEFAULT_WP_LOGIN_PHP_KEY_VALUE = self::NO;

	/**
	 * Hide: General / HTML
	 */

	// Meta
	public const REMOVE_GENERATOR_META_KEY       = 'remove_generator_meta';
	public const REMOVE_OTHER_GENERATOR_META_KEY = 'remove_other_generator_meta';
	public const REMOVE_SHORTLINK_META_KEY       = 'remove_shortlink_meta';
	public const REMOVE_DNS_PREFETCH_KEY         = 'remove_dns_prefetch';
	public const REMOVE_RESOURCE_HINTS_KEY       = 'remove_resource_hints';
	public const REMOVE_WLWMANIFEST_KEY          = 'remove_wlwmanifest';
	public const REMOVE_RSD_LINK_KEY             = 'remove_rsd_link';
	public const REMOVE_ADJACENT_POSTS_REL_KEY   = 'remove_adjacent_posts_rel';
	public const REMOVE_PROFILE_KEY              = 'remove_profile';
	public const REMOVE_CANONICAL_KEY            = 'remove_canonical';

	public const REMOVE_GENERATOR_META_VALUE       = self::NO;
	public const REMOVE_OTHER_GENERATOR_META_VALUE = self::NO;
	public const REMOVE_SHORTLINK_META_VALUE       = self::NO;
	public const REMOVE_DNS_PREFETCH_VALUE         = self::NO;
	public const REMOVE_RESOURCE_HINTS_VALUE       = self::NO;
	public const REMOVE_WLWMANIFEST_VALUE          = self::NO;
	public const REMOVE_RSD_LINK_VALUE             = self::NO;
	public const REMOVE_ADJACENT_POSTS_REL_VALUE   = self::NO;
	public const REMOVE_PROFILE_VALUE              = self::NO;
	public const REMOVE_CANONICAL_VALUE            = self::NO;

	// Emulate CMS
	public const EMULATE_CMS_KEY = 'emulate_cms';

	public const EMULATE_CMS_VALUE = self::NO;

	// Admin Bar
	// NOTE: `REMOVE_ADMIN_BAR_KEY` is dynamicaly generated from getRemoveAdminBarSettings.

	public const REMOVE_ADMIN_BAR_VALUE = self::NO;

	// Robots
	public const DISABLE_ROBOTS_TXT_KEY = 'disable_robots_txt';

	public const DISABLE_ROBOTS_TXT_VALUE = self::NO;

	// Emoji
	public const DISABLE_WPEMOJIA_KEY         = 'disable_wpemojia';
	public const DISABLE_TINYMCE_WPEMOJIA_KEY = 'disable_tinymce_wpemojia';

	public const DISABLE_WPEMOJIA_VALUE         = self::NO;
	public const DISABLE_TINYMCE_WPEMOJIA_VALUE = self::NO;

	// Styles
	public const STYLES_REMOVE_VERSION_KEY      = 'styles_remove_version';
	public const STYLES_REMOVE_ID_ATTRIBUTE_KEY = 'styles_remove_id_attribute';

	public const STYLES_REMOVE_VERSION_VALUE      = self::NO;
	public const STYLES_REMOVE_ID_ATTRIBUTE_VALUE = self::NO;

	// Scripts
	public const SCRIPTS_REMOVE_VERSION_KEY = 'scripts_remove_version';

	public const SCRIPTS_REMOVE_VERSION_VALUE = self::NO;

	// Feed
	public const REMOVE_FEED_LINKS_KEY = 'remove_feed_links';

	public const REMOVE_FEED_LINKS_VALUE = self::NO;

	// Oembed
	public const REMOVE_OEMBED_KEY = 'remove_oembed';

	public const REMOVE_OEMBED_VALUE = self::NO;

	// Headers
	public const REMOVE_HEADER_LINK_KEY  = 'remove_header_link';
	public const REMOVE_X_POWERED_BY_KEY = 'remove_x_powered_by';
	public const REMOVE_X_PINGBACK_KEY   = 'remove_x_pingback';

	public const REMOVE_HEADER_LINK_VALUE  = self::NO;
	public const REMOVE_X_POWERED_BY_VALUE = self::NO;
	public const REMOVE_X_PINGBACK_VALUE   = self::NO;

	// HTML
	public const REMOVE_HTML_COMMENTS_KEY      = 'remove_html_comments';
	public const REMOVE_HTML_NEW_LINES_KEY     = 'remove_html_new_lines';
	public const DISABLE_MOUSE_RIGHT_CLICK_KEY = 'disable_mouse_right_click';
	public const CLEAN_BODY_CLASSES_KEY        = 'clean_body_classes';
	public const CLEAN_MENU_ITEMS_ID_KEY       = 'clean_menu_items_id';
	public const CLEAN_MENU_ITEMS_CLASSES_KEY  = 'clean_menu_items_classes';
	public const CLEAN_POST_CLASSES_KEY        = 'clean_post_classes';
	public const CLEAN_IMAGE_CLASSES_KEY       = 'clean_image_classes';

	public const REMOVE_HTML_COMMENTS_VALUE      = self::NO;
	public const REMOVE_HTML_NEW_LINES_VALUE     = self::NO;
	public const DISABLE_MOUSE_RIGHT_CLICK_VALUE = self::NO;
	public const CLEAN_BODY_CLASSES_VALUE        = self::NO;
	public const CLEAN_MENU_ITEMS_ID_VALUE       = self::NO;
	public const CLEAN_MENU_ITEMS_CLASSES_VALUE  = self::NO;
	public const CLEAN_POST_CLASSES_VALUE        = self::NO;
	public const CLEAN_IMAGE_CLASSES_VALUE       = self::NO;

	/**
	 * Hide: Admin
	 */

	// Admin URL
	public const ADMIN_URL_KEY               = 'admin_url';
	public const BLOCK_DEFAULT_ADMIN_URL_KEY = 'block_default_admin_url';

	public const ADMIN_URL_VALUE               = self::UNSET;
	public const BLOCK_DEFAULT_ADMIN_URL_VALUE = self::NO;

	/**
	 * Settings: CDN
	 */
	public const CDN_URL_KEY = 'cdn_url';

	public const CDN_URL_VALUE = self::UNSET;

	/**
	 * Security: Headers
	 */
	// TODO: do when needed...

	// Default Settings
	public const DEFAULT_SETTINGS_WITHOUT_ADMIN_BAR = array(
		self::THEME_PATH_KEY                          => self::THEME_PATH_VALUE,
		self::STYLE_CSS_PATH_KEY                      => self::STYLE_CSS_PATH_VALUE,
		self::STYLE_FILE_CLEAN_KEY                    => self::STYLE_FILE_CLEAN_VALUE,

		self::INCLUDE_PATH_KEY                        => self::INCLUDE_PATH_VALUE,
		self::BLOCK_WPINCLUDE_URL_KEY                 => self::BLOCK_WPINCLUDE_URL_VALUE,

		self::CONTENT_PATH_KEY                        => self::CONTENT_PATH_VALUE,
		self::BLOCK_WP_CONTENT_PATH_KEY               => self::BLOCK_WP_CONTENT_PATH_VALUE,

		self::PLUGIN_PATH_KEY                         => self::PLUGIN_PATH_VALUE,
		self::BLOCK_PLUGINS_URL_KEY                   => self::BLOCK_PLUGINS_URL_VALUE,

		self::UPLOAD_PATH_KEY                         => self::UPLOAD_PATH_VALUE,
		self::BLOCK_UPLOAD_URL_KEY                    => self::BLOCK_UPLOAD_URL_VALUE,

		self::WP_COMMENTS_POST_KEY                    => self::WP_COMMENTS_POST_KEY_VALUE,
		self::BLOCK_WP_COMMENTS_POST_URL_KEY          => self::BLOCK_WP_COMMENTS_POST_URL_KEY_VALUE,

		self::AUTHOR_KEY                              => self::AUTHOR_VALUE,
		self::AUTHOR_BLOCK_DEFAULT_KEY                => self::AUTHOR_BLOCK_DEFAULT_VALUE,

		self::SEARCH_KEY                              => self::SEARCH_VALUE,
		self::SEARCH_BLOCK_DEFAULT_KEY                => self::SEARCH_BLOCK_DEFAULT_VALUE,

		self::XML_RPC_PATH_KEY                        => self::XML_RPC_PATH_VALUE,
		self::BLOCK_XML_RPC_KEY                       => self::BLOCK_XML_RPC_VALUE,
		self::DISABLE_XML_RPC_AUTH_KEY                => self::DISABLE_XML_RPC_AUTH_VALUE,
		self::REMOVE_XML_RPC_TAG_KEY                  => self::REMOVE_XML_RPC_TAG_VALUE,

		self::CLEAN_JSON_BASE_ROUTE_KEY               => self::CLEAN_JSON_BASE_ROUTE_VALUE,
		self::DISABLE_JSON_REST_V1_KEY                => self::DISABLE_JSON_REST_V1_VALUE,
		self::DISABLE_JSON_REST_V2_KEY                => self::DISABLE_JSON_REST_V2_VALUE,
		self::BLOCK_JSON_REST_KEY                     => self::BLOCK_JSON_REST_VALUE,
		self::DISABLE_JSON_REST_WPHEAD_LINK_KEY       => self::DISABLE_JSON_REST_WPHEAD_LINK_VALUE,
		self::DISABLE_JSON_REST_XMLRPC_RSD_KEY        => self::DISABLE_JSON_REST_XMLRPC_RSD_VALUE,
		self::DISABLE_JSON_REST_TEMPLATE_REDIRECT_KEY => self::DISABLE_JSON_REST_TEMPLATE_REDIRECT_VALUE,

		self::BLOCK_LICENSE_TXT_KEY                   => self::BLOCK_LICENSE_TXT_VALUE,
		self::BLOCK_README_HTML_KEY                   => self::BLOCK_README_HTML_VALUE,
		self::BLOCK_WP_ACTIVATE_PHP_KEY               => self::BLOCK_WP_ACTIVATE_PHP_VALUE,
		self::BLOCK_WP_CRON_PHP_KEY                   => self::BLOCK_WP_CRON_PHP_VALUE,
		self::BLOCK_DEFAULT_WP_SIGNUP_PHP_KEY         => self::BLOCK_DEFAULT_WP_SIGNUP_PHP_VALUE,
		self::BLOCK_DEFAULT_WP_REGISTER_PHP_KEY       => self::BLOCK_DEFAULT_WP_REGISTER_PHP_VALUE,
		self::BLOCK_OTHER_WP_FILES_KEY                => self::BLOCK_OTHER_WP_FILES_VALUE,

		self::ADD_SLASH_KEY                           => self::ADD_SLASH_VALUE,

		self::WP_LOGIN_PHP_KEY                        => self::WP_LOGIN_PHP_KEY_VALUE,
		self::BLOCK_DEFAULT_WP_LOGIN_PHP_KEY          => self::BLOCK_DEFAULT_WP_LOGIN_PHP_KEY_VALUE,

		self::REMOVE_GENERATOR_META_KEY               => self::REMOVE_GENERATOR_META_VALUE,
		self::REMOVE_OTHER_GENERATOR_META_KEY         => self::REMOVE_OTHER_GENERATOR_META_VALUE,
		self::REMOVE_SHORTLINK_META_KEY               => self::REMOVE_SHORTLINK_META_VALUE,
		self::REMOVE_DNS_PREFETCH_KEY                 => self::REMOVE_DNS_PREFETCH_VALUE,
		self::REMOVE_RESOURCE_HINTS_KEY               => self::REMOVE_RESOURCE_HINTS_VALUE,
		self::REMOVE_WLWMANIFEST_KEY                  => self::REMOVE_WLWMANIFEST_VALUE,
		self::REMOVE_RSD_LINK_KEY                     => self::REMOVE_RSD_LINK_VALUE,
		self::REMOVE_ADJACENT_POSTS_REL_KEY           => self::REMOVE_ADJACENT_POSTS_REL_VALUE,
		self::REMOVE_PROFILE_KEY                      => self::REMOVE_PROFILE_VALUE,
		self::REMOVE_CANONICAL_KEY                    => self::REMOVE_CANONICAL_VALUE,

		self::EMULATE_CMS_KEY                         => self::EMULATE_CMS_VALUE,

		self::DISABLE_ROBOTS_TXT_KEY                  => self::DISABLE_ROBOTS_TXT_VALUE,

		self::DISABLE_WPEMOJIA_KEY                    => self::DISABLE_WPEMOJIA_VALUE,
		self::DISABLE_TINYMCE_WPEMOJIA_KEY            => self::DISABLE_TINYMCE_WPEMOJIA_VALUE,

		self::STYLES_REMOVE_VERSION_KEY               => self::STYLES_REMOVE_VERSION_VALUE,
		self::STYLES_REMOVE_ID_ATTRIBUTE_KEY          => self::STYLES_REMOVE_ID_ATTRIBUTE_VALUE,

		self::SCRIPTS_REMOVE_VERSION_KEY              => self::SCRIPTS_REMOVE_VERSION_VALUE,

		self::REMOVE_FEED_LINKS_KEY                   => self::REMOVE_FEED_LINKS_VALUE,

		self::REMOVE_OEMBED_KEY                       => self::REMOVE_OEMBED_VALUE,

		self::REMOVE_HEADER_LINK_KEY                  => self::REMOVE_HEADER_LINK_VALUE,
		self::REMOVE_X_POWERED_BY_KEY                 => self::REMOVE_X_POWERED_BY_VALUE,
		self::REMOVE_X_PINGBACK_KEY                   => self::REMOVE_X_PINGBACK_VALUE,

		self::REMOVE_HTML_COMMENTS_KEY                => self::REMOVE_HTML_COMMENTS_VALUE,
		self::REMOVE_HTML_NEW_LINES_KEY               => self::REMOVE_HTML_NEW_LINES_VALUE,
		self::DISABLE_MOUSE_RIGHT_CLICK_KEY           => self::DISABLE_MOUSE_RIGHT_CLICK_VALUE,
		self::CLEAN_BODY_CLASSES_KEY                  => self::CLEAN_BODY_CLASSES_VALUE,
		self::CLEAN_MENU_ITEMS_ID_KEY                 => self::CLEAN_MENU_ITEMS_ID_VALUE,
		self::CLEAN_MENU_ITEMS_CLASSES_KEY            => self::CLEAN_MENU_ITEMS_CLASSES_VALUE,
		self::CLEAN_POST_CLASSES_KEY                  => self::CLEAN_POST_CLASSES_VALUE,
		self::CLEAN_IMAGE_CLASSES_KEY                 => self::CLEAN_IMAGE_CLASSES_VALUE,

		self::ADMIN_URL_KEY                           => self::ADMIN_URL_VALUE,
		self::BLOCK_DEFAULT_ADMIN_URL_KEY             => self::BLOCK_DEFAULT_ADMIN_URL_VALUE,

		self::CDN_URL_KEY                             => self::CDN_URL_VALUE,
	);

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
	 * Save the settings.
	 *
	 * @param mixed $settings - settings object.
	 * @param bool  $should_clear_cache - should trigger cache update.
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function setSettings($settings, $should_clear_cache = false)
	{
		global $wph;

		$wph->functions->update_settings($settings);

		// phpcs:disable WordPress.NamingConventions.ValidHookName
		// trigger the settings changed action
		do_action('wph/settings_changed', 'wp-hide', false);
		// phpcs:enable

		if ($should_clear_cache)
		{
			self::cacheClear();
		}
	}

	/**
	 * Get the settings.
	 *
	 * @return mixed settings object.
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function getSettings()
	{
		global $wph;

		$settings = $wph->functions->get_settings();

		return $settings;
	}

	/**
 	 * Return a Module Item value setting
	 *
	 * @param mixed $item_id - setting key.
	 *
	 * @return mixed setting value.
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function getModuleItemSetting($item_id)
	{
		global $wph;

		$setting = $wph->functions->get_module_item_setting($item_id);

		return $setting;
	}

	/**
 	 * Set a Module Item value.
	 *
	 * @param mixed $item_key - settings object.
	 * @param mixed $item_value - value for the item.
	 * @param bool  $should_clear_cache - should trigger cache update.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 * @since React WordPress 0.0.1
	 */
	public static function setModuleItemSetting($item_key, $item_value, $should_clear_cache = false)
	{
		$settings = self::getSettings();

		$settings['module_settings'][ $item_key ] = $item_value;

		self::setSettings($settings, $should_clear_cache);
	}

	/**
 	 * Return a Module Item value setting
	 *
	 * @param array $items - array of key value pairs for each item.
	 * @param bool  $should_clear_cache - should trigger cache update.
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function setModuleItemSettings($items, $should_clear_cache = false)
	{
		$settings = self::getSettings();

		foreach ($items as $item_key => $item_value)
		{
			$settings['module_settings'][ $item_key ] = $item_value;
		}

		self::setSettings($settings, $should_clear_cache);
	}

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * Fires on the first WP load after a theme switch if the old theme still exists.
	 *
	 * Callback functions attached to this hook are only triggered in the theme (and/or child theme)
	 * being activated. To do things when your theme is deactivated, use switch_theme.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/after_switch_theme/
	 * @since React WordPress 0.0.1
	 */
	public static function after_switch_theme ()
	{ // phpcs:enable
		self::configureDefaultModuleItemSettings();
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `HideSecurityEnhancerPluginManager` class
	 *
	 * @since React WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));

		add_action('after_switch_theme', array($this, 'after_switch_theme'));

		self::registerMenuPage();
	}

	/**
	 * Private
	 */

	/**
	 * Set the default settings
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function configureDefaultModuleItemSettings()
	{
		$default_settings = self::getDefaultModuleItemSettings();

		self::setModuleItemSettings($default_settings, true);
	}

	/**
	 * Get the default settings
	 *
	 * @return array $default_settings.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function getDefaultModuleItemSettings()
	{
		$remove_admin_bar_settings = self::getRemoveAdminBarSettings();

		return array_merge(self::DEFAULT_SETTINGS_WITHOUT_ADMIN_BAR, $remove_admin_bar_settings);
	}

	/**
	 * Get the admin bar settings for each role.
	 *
	 * @return array $remove_admin_bar_settings
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function getRemoveAdminBarSettings()
	{
		$remove_admin_bar_settings = array();

		foreach (Role::ROLES as $role) {
			$remove_admin_bar_key = 'remove_admin_bar_' . $role;
			$value                = self::REMOVE_ADMIN_BAR_VALUE;
			$remove_admin_bar_settings[ $remove_admin_bar_key ] = $value;
		}

		return $remove_admin_bar_settings;
	}

	/**
	 * Clear the cache content.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function cacheClear()
	{
		global $wph;

		$wph->functions->cache_clear();
	}

	/**
	 * Register Menu Page so it is only shown to admins.
	 *
	 * @since React WordPress 0.0.1
	 */
	private static function registerMenuPage()
	{
		if (!User::isCurrentUserRoleAdmin())
		{
			remove_menu_page(self::MENU_SLUG);
		}
	}
}
