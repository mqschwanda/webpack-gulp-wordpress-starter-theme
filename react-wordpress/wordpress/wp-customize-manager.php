<?php
/**
 * This file is responsible for configuring WordPress theme customization.
 *
 * @since React WordPress 0.0.1
 * @package React_WordPress
 * @category WP_Customize_Manager
 */

namespace React_WordPress;

/**
 * This class manages the configuration of the theme's customization screen.
 *
 * @see http://codex.wordpress.org/Theme_Customization_API
 * @since React WordPress 0.0.1
 * @package Class
 * @category React_WordPress_Manager
 */
class WP_Customize_Manager extends React_WordPress_Singleton
{
	/**
	 * Public
	 */

	public const BREAKPOINT_SECTION = 'breakpoints';
	public const PALETTE_SECTION    = 'palette';
	public const SHAPE_SECTION      = 'shape';
	public const TYPOGRAPHY_SECTION = 'typography';

	public const SECTIONS = array(
		self::BREAKPOINT_SECTION => array(
			'title'       => 'Breakpoints',
			'description' => 'The breakpoints are used internally in various components to make the theme responsive.',
		),
		self::PALETTE_SECTION    => array(
			'title'       => 'Palette',
			'description' => 'The palette enables you to modify the color of the components to suit your brand.',
		),
		self::SHAPE_SECTION      => array(
			'title'       => 'Shape',
			'description' => '',
		),
		self::TYPOGRAPHY_SECTION => array(
			'title'       => 'Typography',
			'description' => 'The theme provides a set of type sizes that work well together, and also with the layout grid.',
		),
	);

	public const XS_OPTION                  = React_WordPress_Manager::THEME_SLUG . '_xs';
	public const SM_OPTION                  = React_WordPress_Manager::THEME_SLUG . '_sm';
	public const MD_OPTION                  = React_WordPress_Manager::THEME_SLUG . '_md';
	public const LG_OPTION                  = React_WordPress_Manager::THEME_SLUG . '_lg';
	public const XL_OPTION                  = React_WordPress_Manager::THEME_SLUG . '_xl';
	public const MODE_OPTION                = React_WordPress_Manager::THEME_SLUG . '_mode';
	public const PRIMARY_COLOR_OPTION       = React_WordPress_Manager::THEME_SLUG . '_primary_color';
	public const SECONDARY_COLOR_OPTION     = React_WordPress_Manager::THEME_SLUG . '_secondary_color';
	public const CONTRAST_TEXT_COLOR_OPTION = React_WordPress_Manager::THEME_SLUG . '_contrast_text_color';
	public const ERROR_COLOR_OPTION         = React_WordPress_Manager::THEME_SLUG . '_error_color';
	public const WARNING_COLOR_OPTION       = React_WordPress_Manager::THEME_SLUG . '_warning_color';
	public const INFO_COLOR_OPTION          = React_WordPress_Manager::THEME_SLUG . '_info_color';
	public const SUCCESS_COLOR_OPTION       = React_WordPress_Manager::THEME_SLUG . '_success_color';
	public const BACKGROUND_COLOR_OPTION    = React_WordPress_Manager::THEME_SLUG . '_background_color';
	public const FONT_FAMILY_OPTION         = React_WordPress_Manager::THEME_SLUG . '_font_family';
	public const FONT_SIZE_OPTION           = React_WordPress_Manager::THEME_SLUG . '_font_size';
	public const FONT_WEIGHT_LIGHT_OPTION   = React_WordPress_Manager::THEME_SLUG . '_font_weight_light';
	public const FONT_WEIGHT_REGULAR_OPTION = React_WordPress_Manager::THEME_SLUG . '_font_weight_regular';
	public const FONT_WEIGHT_MEDIUM_OPTION  = React_WordPress_Manager::THEME_SLUG . '_font_weight_medium';
	public const FONT_WEIGHT_BOLD_OPTION    = React_WordPress_Manager::THEME_SLUG . '_font_weight_bold';
	public const BORDER_RADIUS_OPTION       = React_WordPress_Manager::THEME_SLUG . '_border_radius';

	public const THEME_MODS = array(
		self::XS_OPTION                  => array(
			'default'     => 0,
			'description' => '',
			'label'       => 'Extra Small',
			'section'     => self::BREAKPOINT_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::SM_OPTION                  => array(
			'default'     => 600,
			'description' => '',
			'label'       => 'Small',
			'section'     => self::BREAKPOINT_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::MD_OPTION                  => array(
			'default'     => 900,
			'description' => '',
			'label'       => 'Medium',
			'section'     => self::BREAKPOINT_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::LG_OPTION                  => array(
			'default'     => 1200,
			'description' => '',
			'label'       => 'Large',
			'section'     => self::BREAKPOINT_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::XL_OPTION                  => array(
			'default'     => 1536,
			'description' => '',
			'label'       => 'Extra Large',
			'section'     => self::BREAKPOINT_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::MODE_OPTION                => array(
			'default'     => 'light',
			'description' => 'Dark mode is a type of screen display that uses a dark background with lighter text. It is the opposite of Light mode, which uses a light background with dark text.',
			'label'       => 'Mode',
			'section'     => self::PALETTE_SECTION,
			'type'        => 'radio',
			'choices'     => array(
				'light' => 'Light',
				'dark'  => 'Dark',
			),
			'css_var'     => true,
		),
		self::PRIMARY_COLOR_OPTION       => array(
			'default'     => '#1976D2',
			'description' => 'Used to represent primary interface elements for a user. It\'s the color displayed most frequently across your app\'s screens and components.',
			'label'       => 'Primary Color',
			'section'     => self::PALETTE_SECTION,
			'type'        => 'color',
			'css_var'     => true,
		),
		self::SECONDARY_COLOR_OPTION     => array(
			'default'     => '#9C27B0',
			'description' => 'Used to represent secondary interface elements for a user. It provides more ways to accent and distinguish your product. Having it is optional.',
			'label'       => 'Secondary Color',
			'section'     => self::PALETTE_SECTION,
			'type'        => 'color',
			'css_var'     => true,
		),
		self::CONTRAST_TEXT_COLOR_OPTION => array(
			'default'     => '#FFF',
			'description' => '',
			'label'       => 'Contrast Text Color',
			'section'     => self::PALETTE_SECTION,
			'type'        => 'color',
			'css_var'     => true,
		),
		self::ERROR_COLOR_OPTION         => array(
			'default'     => '#EF5350',
			'description' => 'Used to represent interface elements that the user should be made aware of.',
			'label'       => 'Error Color',
			'section'     => self::PALETTE_SECTION,
			'type'        => 'color',
			'css_var'     => true,
		),
		self::WARNING_COLOR_OPTION       => array(
			'default'     => '#FF9800',
			'description' => 'Used to represent potentially dangerous actions or important messages.',
			'label'       => 'Warning Color',
			'section'     => self::PALETTE_SECTION,
			'type'        => 'color',
			'css_var'     => true,
		),
		self::INFO_COLOR_OPTION          => array(
			'default'     => '#03A9F4',
			'description' => 'Used to present information to the user that is neutral and not necessarily important.',
			'label'       => 'Info Color',
			'section'     => self::PALETTE_SECTION,
			'type'        => 'color',
			'css_var'     => true,
		),
		self::SUCCESS_COLOR_OPTION       => array(
			'default'     => '#4CAF50',
			'description' => 'Used to indicate the successful completion of an action that user triggered.',
			'label'       => 'Success Color',
			'section'     => self::PALETTE_SECTION,
			'type'        => 'color',
			'css_var'     => true,
		),
		self::BACKGROUND_COLOR_OPTION    => array(
			'default'     => '#FFF',
			'description' => '',
			'label'       => 'Background Color',
			'section'     => self::PALETTE_SECTION,
			'type'        => 'color',
			'css_var'     => true,
		),
		self::BORDER_RADIUS_OPTION       => array(
			'default'     => 4,
			'description' => '',
			'label'       => 'Border Radius',
			'section'     => self::SHAPE_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::FONT_FAMILY_OPTION         => array(
			'default'     => '"Roboto", "Helvetica", "Arial", sans-serif',
			'description' => 'Used as the font for all typography.',
			'label'       => 'Font Family',
			'section'     => self::TYPOGRAPHY_SECTION,
			'type'        => 'text',
			'css_var'     => true,
		),
		self::FONT_SIZE_OPTION           => array(
			'default'     => 14,
			'description' => 'Used as the base size for all typography.',
			'label'       => 'Font Size',
			'section'     => self::TYPOGRAPHY_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::FONT_WEIGHT_LIGHT_OPTION   => array(
			'default'     => 300,
			'description' => '',
			'label'       => 'Font Weight Light',
			'section'     => self::TYPOGRAPHY_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::FONT_WEIGHT_REGULAR_OPTION => array(
			'default'     => 400,
			'description' => '',
			'label'       => 'Font Weight Regular',
			'section'     => self::TYPOGRAPHY_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::FONT_WEIGHT_MEDIUM_OPTION  => array(
			'default'     => 500,
			'description' => '',
			'label'       => 'Font Weight Medium',
			'section'     => self::TYPOGRAPHY_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
		self::FONT_WEIGHT_BOLD_OPTION    => array(
			'default'     => 700,
			'description' => '',
			'label'       => 'Font Weight Bold',
			'section'     => self::TYPOGRAPHY_SECTION,
			'type'        => 'number',
			'css_var'     => true,
		),
	);

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 * @since React WordPress 0.0.1
	 */
	public static function init () {
		self::configure_theme_mods();
	}

	/**
	 * This hooks into 'customize_register' (available as of WP 3.4) and allows
	 * you to add new sections and controls to the Theme Customize screen.
	 *
	 * Note: To enable instant preview, we have to actually write a bit of custom
	 * javascript. See customize_preview_init() for more.
	 *
	 * @param \WP_Customize_Manager $wp_customize - WP_Customize_Manager instance.
	 *
	 * @see http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
	 * @since React WordPress 0.0.1
	 */
	public static function customize_register ($wp_customize) {
		// 1. Define a new section (if desired) to the Theme Customizer
		foreach (self::SECTIONS as $section_name => $config) {
			$description        = __($config['description']);
			$description_hidden = $config['description_hidden'];
			$priority           = 35;
			$title              = __($config['title']);

			$wp_customize->add_section(
				$section_name,
				array(
					'capability'         => Capability::EDIT_THEME_OPTIONS,
					'description'        => $description,
					'description_hidden' => $description_hidden,
					'priority'           => $priority,
					'title'              => $title,
				)
			);
		}

		// 2. Register new settings to the WP database...
		foreach (self::THEME_MODS as $theme_mod_name => $config) {
			$wp_customize->add_setting(
				$theme_mod_name,
				array(
					'capability' => Capability::EDIT_THEME_OPTIONS,
					'default'    => $config['default'],
					'transport'  => 'postMessage',
					'type'       => 'theme_mod',
				)
			);
		}

		// 3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
		foreach (self::THEME_MODS as $theme_mod_name => $config) {
			$description = __($config['description']);
			$label       = __($config['label']);
			$priority    = 10;
			$section     = $config['section'];

			if ('color' === $config['type']) {
				$wp_customize->add_control(new \WP_Customize_Color_Control(
					$wp_customize,
					$theme_mod_name,
					array(
						'description' => $description,
						'label'       => $label,
						'priority'    => $priority,
						'section'     => $section,
						'settings'    => $theme_mod_name,
					),
				));
			} else {
				$wp_customize->add_control(
					$theme_mod_name,
					array(
						'choices'     => $config['choices'],
						'description' => $description,
						'input_attrs' => $config['input_attrs'],
						'label'       => $label,
						'priority'    => $priority,
						'section'     => $section,
						'settings'    => $theme_mod_name,
						'type'        => $config['type'],
					),
				);
			}
		}

		// 4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
		// $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	}

	/**
	 * This will output the custom WordPress settings to the live theme's WP head.
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function head()
	{
		?>
			<!-- <?php echo esc_html(self::class); ?> CSS--> 
			<style type="text/css">
				<?php
					foreach (self::THEME_MODS as $theme_mod_name => $config)
					{
						if ($config['css_var'])
						{
							$selector = ':root';
							$style    = '--' . $theme_mod_name;

							self::generate_css(
								$selector,
								$style,
								$theme_mod_name,
							);
						}
					}
				?>
			</style> 
			<!-- <?php echo esc_html(self::class); ?> CSS-->
		<?php
	}

	/**
	 * This outputs the javascript needed to automate the live settings preview.
	 * Also keep in mind that this function isn't necessary unless your settings
	 * are using 'transport'=>'postMessage' instead of the default 'transport'
	 * => 'refresh'
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function customize_preview_init()
	{
		$handle    = 'theme-customize-preview'; // Give the script a unique ID
		$src       = get_template_directory_uri() . '/assets/dist/js/customize-preview.js'; // Define the path to the JS file
		$deps      = array('jquery', 'customize-preview'); // Define dependencies
		$ver       = React_WordPress_Manager::THEME_VERSION; // Define a version (optional)
		$in_footer = true; // Specify whether to put in footer (leave this true)

		wp_enqueue_script(
			$handle,
			$src,
			$deps,
			$ver,
			$in_footer,
		);
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `WP_Customize_Manager` class
	 *
	 * @since React WordPress 0.0.1
	 */
	protected function __construct() {
		parent::__construct();

		add_action('init', array($this, 'init'));

		// Setup the Theme Customizer settings and controls...
		add_action('customize_register', array($this, 'customize_register'));

		// Output custom CSS to live site
		add_action('wp_head', array($this, 'head'));
		add_action('admin_head', array($this, 'head'));

		// Enqueue live preview javascript in Theme Customizer admin screen
		add_action('customize_preview_init', array($this, 'customize_preview_init'));
	}

	/**
	 * Private
	 */

	/**
	 * Configure any theme mods that are missing.
	 *
	 * @since React WordPress 0.0.1
	 */
	private function configure_theme_mods ()
	{
		$theme_mods = self::THEME_MODS;
		foreach ($theme_mods as $name => $config)
		{
			$value = get_theme_mod($name);
			if (empty($value))
			{
				$value = $config['default'];
				set_theme_mod($name, $value);
			}
		}
	}

	/**
	 * This will generate a line of CSS for use in header output. If the setting
	 * ($theme_mod_name) has no defined value, the CSS will not be output.
	 *
	 * @param string $selector - CSS selector.
	 * @param string $style - The name of the CSS *property* to modify.
	 * @param string $theme_mod_name - The name of the 'theme_mod' option to fetch.
	 * @param string $prefix - Optional. Anything that needs to be output before the CSS property.
	 * @param string $postfix - Optional. Anything that needs to be output after the CSS property.
	 * @param bool   $echo - Optional. Whether to print directly to the page (default: true).
	 *
	 * @return string Returns a single line of CSS with selectors and a property.
	 *
	 * @since React WordPress 0.0.1
	 */
	private function generate_css(
		$selector,
		$style,
		$theme_mod_name,
		$prefix = '',
		$postfix = '',
		$echo = true
	)
	{
		$css       = '';
		$theme_mod = get_theme_mod($theme_mod_name);
		if (!empty($theme_mod))
		{
			$format = '%s { %s:%s; }';
			$css    = sprintf(
				$format,
				$selector,
				$style,
				$prefix . $theme_mod . $postfix,
			);

			if ($echo)
			{
				echo esc_html($css);
			}
		}

		return $css;
	}
}
