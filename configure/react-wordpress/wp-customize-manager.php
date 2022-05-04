<?php

namespace React_Wordpress;

$theme_slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '_', get_current_theme())));

$breakpoint_section = $theme_slug . '_breakpoints';
$palette_section = $theme_slug . '_palette';
$shape_section = $theme_slug . '_shape';
$typography_section = $theme_slug . '_typography';
$sections = array(
  $breakpoint_section => array(
    'title'       => 'Breakpoints',
    'description' => 'The breakpoints are used internally in various components to make the theme responsive.',
  ),
  $palette_section => array(
    'title'       => 'Palette',
    'description' => 'The palette enables you to modify the color of the components to suit your brand.',
  ),
  $shape_section => array(
    'title'       => 'Shape',
    'description' => '',
  ),
  $typography_section => array(
    'title'       => 'Typography',
    'description' => 'The theme provides a set of type sizes that work well together, and also with the layout grid.',
  )
);

$xs_option = $theme_slug . '_xs';
$sm_option = $theme_slug . '_sm';
$md_option = $theme_slug . '_md';
$lg_option = $theme_slug . '_lg';
$xl_option = $theme_slug . '_xl';
$mode_option = $theme_slug . '_mode';
$primary_color_option = $theme_slug . '_primary_color';
$secondary_color_option = $theme_slug . '_secondary_color';
$contrast_text_color_option = $theme_slug . '_contrast_text_color';
$error_color_option = $theme_slug . '_error_color';
$warning_color_option = $theme_slug . '_warning_color';
$info_color_option = $theme_slug . '_info_color';
$success_color_option = $theme_slug . '_success_color';
$background_color_option = $theme_slug . '_background_color';
$font_family_option = $theme_slug . '_font_family';
$font_size_option = $theme_slug . '_font_size';
$font_weight_light_option = $theme_slug . '_font_weight_light';
$font_weight_regular_option = $theme_slug . '_font_weight_regular';
$font_weight_medium_option = $theme_slug . '_font_weight_medium';
$font_weight_bold_option = $theme_slug . '_font_weight_bold';
$border_radius_option = $theme_slug . '_border_radius';
$options = array(
  $xs_option => array(
    'default'     => 0,
    'description' => '',
    'label'       => 'Extra Small',
    'section'     => $breakpoint_section,
    'type'        => 'number'
  ),
  $sm_option => array(
    'default'     => 600,
    'description' => '',
    'label'       => 'Small',
    'section'     => $breakpoint_section,
    'type'        => 'number'
  ),
  $md_option => array(
    'default'     => 900,
    'description' => '',
    'label'       => 'Medium',
    'section'     => $breakpoint_section,
    'type'        => 'number'
  ),
  $lg_option => array(
    'default'     => 1200,
    'description' => '',
    'label'       => 'Large',
    'section'     => $breakpoint_section,
    'type'        => 'number'
  ),
  $xl_option => array(
    'default'     => 1536,
    'description' => '',
    'label'       => 'Extra Large',
    'section'     => $breakpoint_section,
    'type'        => 'number'
  ),
  $mode_option => array(
    'default'     => 'light',
    'description' => 'Dark mode is a type of screen display that uses a dark background with lighter text. It is the opposite of Light mode, which uses a light background with dark text.',
    'label'       => 'Mode',
    'section'     => $palette_section,
    'type'        => 'radio',
    'choices'     => array(
      'light' => 'Light',
      'dark'  => 'Dark',
    )
  ),
  $primary_color_option => array(
    'default'     => '#1976d2',
    'description' => 'Used to represent primary interface elements for a user. It\'s the color displayed most frequently across your app\'s screens and components.',
    'label'       => 'Primary Color',
    'section'     => $palette_section,
    'type'        => 'color'
  ),
  $secondary_color_option => array(
    'default'     => '#9c27b0',
    'description' => 'Used to represent secondary interface elements for a user. It provides more ways to accent and distinguish your product. Having it is optional.',
    'label'       => 'Secondary Color',
    'section'     => $palette_section,
    'type'        => 'color'
  ),
  $contrast_text_color_option => array(
    'default'     => '#ffffff',
    'description' => '',
    'label'       => 'Contrast Text Color',
    'section'     => $palette_section,
    'type'        => 'color'
  ),
  $error_color_option => array(
    'default'     => '#ef5350',
    'description' => 'Used to represent interface elements that the user should be made aware of.',
    'label'       => 'Error Color',
    'section'     => $palette_section,
    'type'        => 'color'
  ),
  $warning_color_option => array(
    'default'     => '#ff9800',
    'description' => 'Used to represent potentially dangerous actions or important messages.',
    'label'       => 'Warning Color',
    'section'     => $palette_section,
    'type'        => 'color'
  ),
  $info_color_option => array(
    'default'     => '#03a9f4',
    'description' => 'Used to present information to the user that is neutral and not necessarily important.',
    'label'       => 'Info Color',
    'section'     => $palette_section,
    'type'        => 'color'
  ),
  $success_color_option => array(
    'default'     => '#4caf50',
    'description' => 'Used to indicate the successful completion of an action that user triggered.',
    'label'       => 'Success Color',
    'section'     => $palette_section,
    'type'        => 'color'
  ),
  $background_color_option => array(
    'default'     => '#fff',
    'description' => '',
    'label'       => 'Background Color',
    'section'     => $palette_section,
    'type'        => 'color'
  ),
  $border_radius_option => array(
    'default'     => 4,
    'description' => '',
    'label'       => 'Border Radius',
    'section'     => $shape_section,
    'type'        => 'number'
  ),
  $font_family_option => array(
    'default'     => '"Roboto", "Helvetica", "Arial", sans-serif',
    'description' => 'Used as the font for all typography.',
    'label'       => 'Font Family',
    'section'     => $typography_section,
    'type'        => 'text'
  ),
  $font_size_option => array(
    'default'     => 14,
    'description' => 'Used as the base size for all typography.',
    'label'       => 'Font Size',
    'section'     => $typography_section,
    'type'        => 'number'
  ),
  $font_weight_light_option => array(
    'default'     => 300,
    'description' => '',
    'label'       => 'Font Weight Light',
    'section'     => $typography_section,
    'type'        => 'number'
  ),
  $font_weight_regular_option => array(
    'default'     => 400,
    'description' => '',
    'label'       => 'Font Weight Regular',
    'section'     => $typography_section,
    'type'        => 'number'
  ),
  $font_weight_medium_option => array(
    'default'     => 500,
    'description' => '',
    'label'       => 'Font Weight Medium',
    'section'     => $typography_section,
    'type'        => 'number'
  ),
  $font_weight_bold_option => array(
    'default'     => 700,
    'description' => '',
    'label'       => 'Font Weight Bold',
    'section'     => $typography_section,
    'type'        => 'number'
  ),
);

/**
 * Contains methods for customizing the theme customization screen.
 * 
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since React Wordpress 0.0.1
 */
class WP_Customize_Manager {
  public static function init () {
    global $options;
  
    foreach ($options as $key => $option) {
      $theme_mod = get_theme_mod($key);
      if (!$theme_mod) {
        set_theme_mod($key, $option['default']);
      }
    }
  }

  /**
  * This hooks into 'customize_register' (available as of WP 3.4) and allows
  * you to add new sections and controls to the Theme Customize screen.
  * 
  * Note: To enable instant preview, we have to actually write a bit of custom
  * javascript. See customize_preview_init() for more.
  *  
  * @see add_action('customize_register',$func)
  * @param \WP_Customize_Manager $wp_customize
  * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
  * @since React Wordpress 0.0.1
  */
  public static function customize_register ($wp_customize) {
    global $theme_slug;
    global $sections;
    global $options;

    $capability = 'edit_theme_options';

    // 1. Define a new section (if desired) to the Theme Customizer    
    foreach ($sections as $key => $section) {
      $description = __($section['description'], $theme_slug);
      $description_hidden = $section['description_hidden'];
      $priority = 35;
      $title = __($section['title'], $theme_slug);

      $wp_customize->add_section( 
        $key,
        array(
          'capability'         => $capability,
          'description'        => $description,
          'description_hidden' => $description_hidden,
          'priority'           => $priority,
          'title'              => $title,
        ) 
      );
    } 
    
    // 2. Register new settings to the WP database...    
    foreach ($options as $key => $option) {
      $wp_customize->add_setting( 
        $key,
        array(
          'capability'   => $capability,
          'default'      => $option['default'],
          'transport'    => 'postMessage', 
          'type'         => 'theme_mod',
        ) 
      );
    }     
          
    // 3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
    foreach ($options as $key => $option) {
      $label = __($option['label'], $theme_slug);
      $description = __($option['description'], $theme_slug);
      $priority = 10;
      $section = $option['section'];

      if ($option['type'] == 'color') {
        $wp_customize->add_control( new \WP_Customize_Color_Control(
          $wp_customize,
          $key,
          array(
            'description' => $description,
            'label'       => $label,
            'priority'    => $priority,
            'section'     => $section,
            'settings'    => $key,
          ) 
        ) );
      } else {
        $wp_customize->add_control(
          $key,
          array(
            'choices'     => $option['choices'],
            'description' => $description,
            'input_attrs' => $option['input_attrs'],
            'label'       => $label,
            'priority'    => $priority,
            'section'     => $section,
            'settings'    => $key,
            'type'        => $option['type']
          ) 
        );
      }
    }
    
    // 4. We can also change built-in settings by modifying properties. For instance, let's make some stuff use live preview JS...
    // $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
  }

   /**
    * This will output the custom WordPress settings to the live theme's WP head.
    * 
    * Used by hook: 'wp_head', 'admin_head'
    * 
    * @see add_action('wp_head',$func)
    * @see add_action('admin_head',$func)
    * @since React Wordpress 0.0.1
    */
  public static function head() {
    global $options;

    $class = WP_Customize_Manager::class;

    ?>
      <!-- <?php echo $class ?> CSS--> 
      <style type="text/css">
        <?php
          foreach ($options as $key => $value) {              
            self::generate_css(':root', '--' . $key, $key);
          }
        ?>
      </style> 
      <!-- <?php echo $class ?> CSS-->
    <?php
  }
   
   /**
    * This outputs the javascript needed to automate the live settings preview.
    * Also keep in mind that this function isn't necessary unless your settings 
    * are using 'transport'=>'postMessage' instead of the default 'transport'
    * => 'refresh'
    * 
    * Used by hook: 'customize_preview_init'
    * 
    * @see add_action('customize_preview_init',$func)
    * @since React Wordpress 0.0.1
    */
  public static function customize_preview_init() {
    global $theme_slug;

    $handle = $theme_slug . '-customize-preview'; // Give the script a unique ID
    $src = get_template_directory_uri() . '/assets/dist/js/customize-preview.js'; // Define the path to the JS file
    $deps = array('jquery', 'customize-preview'); // Define dependencies
    $ver = ''; // Define a version (optional) 
    $in_footer = true; // Specify whether to put in footer (leave this true)
    wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
  }

  /**
   * This will generate a line of CSS for use in header output. If the setting
   * ($mod_name) has no defined value, the CSS will not be output.
   * 
   * @uses get_theme_mod()
   * @param string $selector CSS selector
   * @param string $style The name of the CSS *property* to modify
   * @param string $mod_name The name of the 'theme_mod' option to fetch
   * @param string $prefix Optional. Anything that needs to be output before the CSS property
   * @param string $postfix Optional. Anything that needs to be output after the CSS property
   * @param bool $echo Optional. Whether to print directly to the page (default: true).
   * @return string Returns a single line of CSS with selectors and a property.
   * @since React Wordpress 0.0.1
   */
  public static function generate_css($selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true) {
    $return = '';
    $mod = get_theme_mod($mod_name);
    if (!empty($mod)) {
      $return = sprintf(
        '%s { %s:%s; }',
        $selector,
        $style,
        $prefix.$mod.$postfix
      );
      if ($echo) {
        echo $return;
      }
    }
    return $return;
  }
}

// Initialize
add_action('init', array('\React_Wordpress\WP_Customize_Manager', 'init'));

// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('\React_Wordpress\WP_Customize_Manager', 'customize_register'));

// Output custom CSS to live site
add_action('wp_head', array('\React_Wordpress\WP_Customize_Manager', 'head'));
add_action('admin_head', array('\React_Wordpress\WP_Customize_Manager', 'head'));

// Enqueue live preview javascript in Theme Customizer admin screen
add_action('customize_preview_init', array('\React_Wordpress\WP_Customize_Manager', 'customize_preview_init'));
