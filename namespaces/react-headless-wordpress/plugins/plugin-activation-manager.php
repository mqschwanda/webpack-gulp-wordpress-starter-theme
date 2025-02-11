<?php
/**
 * This file is responsible for configuring composer package: `TGM-Plugin-Activation`.
 *
 * @since React Headless WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category TGM-Plugin-Activation
 */

namespace ReactHeadlessWordPress;

/**
 * TGM Plugin Activation is a PHP library that allows you to easily require or recommend plugins for your
 * WordPress themes (and plugins). It allows your users to install, update and even automatically activate
 * plugins in singular or bulk fashion using native WordPress classes, functions and interfaces. You can
 * reference bundled plugins, plugins from the WordPress Plugin Repository or even plugins hosted elsewhere
 * on the internet.
 *
 * @see http://tgmpluginactivation.com/configuration/
 * @see https://github.com/TGMPA/TGM-Plugin-Activation
 * @since React Headless WordPress 0.0.1
 * @package Class
 * @category TGM-Plugin-Activation
 */
class PluginActivationManager extends BaseSingleton
{
	/**
	 * Public
	 */

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 *
	 * @var array
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public const PLUGINS = array(

		array(
			'name'             => 'Activity Log',
			'required'         => true,
			'slug'             => 'aryo-activity-log',
			'force_activation' => true,
		),
		array(
			'name'             => 'Adminimize',
			'required'         => true,
			'slug'             => 'adminimize',
			'force_activation' => true,
		),
		array(
			'name'             => 'Advanced Custom Fields',
			'required'         => true,
			'slug'             => 'advanced-custom-fields',
			'force_activation' => true,
		),
		array(
			'name'             => 'Broken Link Checker',
			'required'         => true,
			'slug'             => 'broken-link-checker',
			'force_activation' => true,
		),
		array(
			'name'             => 'Disable REST API',
			'required'         => true,
			'slug'             => 'disable-json-api',
			'force_activation' => true,
		),
		array(
			'name'             => 'ImageMagick Engine',
			'required'         => true,
			'slug'             => 'imagemagick-engine',
			'force_activation' => true,
		),
		array(
			'name'             => 'Query Monitor',
			'required'         => true,
			'slug'             => 'query-monitor',
			'force_activation' => true,
		),
		array(
			'name'             => 'Redirection',
			'required'         => true,
			'slug'             => 'redirection',
			'force_activation' => true,
		),
		array(
			'name'             => 'User Role Editor',
			'required'         => true,
			'slug'             => 'user-role-editor',
			'force_activation' => true,
		),
		array(
			'name'             => 'User Switching',
			'required'         => true,
			'slug'             => 'user-switching',
			'force_activation' => true,
		),
		array(
			'name'             => 'WP GraphQL',
			'required'         => true,
			'slug'             => 'wp-graphql',
			'force_activation' => true,
		),
		array(
			'name'             => 'WP Hide & Security Enhancer',
			'required'         => true,
			'slug'             => 'wp-hide-security-enhancer',
			'force_activation' => true,
		),

	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 *
	 * @var array
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public const CONFIG = array(
		'id'           => 'tgmpa',                                                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                                                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins',                                 // Menu slug.
		'parent_slug'  => 'themes.php',                                            // Parent menu slug.
		'capability'   => Capability::EDIT_THEME_OPTIONS, // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                                                    // Show admin notices or not.
		'dismissable'  => false,                                                   // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                                                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                                                    // Automatically activate plugins after installation or not.
		'message'      => '',                                                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
			'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
			// translators: %s: plugin name.
			'installing'                      => __( 'Installing Plugin: %s', 'theme-slug' ),
			// translators: %s: plugin name.
			'updating'                        => __( 'Updating Plugin: %s', 'theme-slug' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'theme-slug' ),
			'notice_can_install_required'     => _n_noop(
				// translators: 1: plugin name(s).
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'theme-slug'
			),
			'notice_can_install_recommended'  => _n_noop(
				// translators: 1: plugin name(s).
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'theme-slug'
			),
			'notice_ask_to_update'            => _n_noop(
				// translators: 1: plugin name(s).
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'theme-slug'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				// translators: 1: plugin name(s).
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'theme-slug'
			),
			'notice_can_activate_required'    => _n_noop(
				// translators: 1: plugin name(s).
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'theme-slug'
			),
			'notice_can_activate_recommended' => _n_noop(
				// translators: 1: plugin name(s).
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'theme-slug'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'theme-slug'
			),
			'update_link'                       => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'theme-slug'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'theme-slug'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'theme-slug' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'theme-slug' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'theme-slug' ),
			// translators: 1: plugin name.
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'theme-slug' ),
			// translators: 1: plugin name.
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'theme-slug' ),
			// translators: 1: dashboard link.
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'theme-slug' ),
			'dismiss'                         => __( 'Dismiss this notice', 'theme-slug' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'theme-slug' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'theme-slug' ),
			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	// phpcs:disable PSR1.Methods.CamelCapsMethodName
	/**
	 * Register the required plugins for this theme.
	 *
	 * The variables passed to the `tgmpa()` function should be:
	 * - an array of plugin arrays;
	 * - optionally a configuration array.
	 * If you are not changing anything in the configuration array, you can remove the array and remove the
	 * variable from the function call: `tgmpa( $plugins );`.
	 * In that case, the TGMPA default settings will be used.
	 *
	 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public static function tgmpa_register()
	{ // phpcs:enable
		tgmpa(
			self::PLUGINS,
			self::CONFIG
		);
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `PluginActivationManager` class.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('tgmpa_register', array($this, 'tgmpa_register'));
	}
}
