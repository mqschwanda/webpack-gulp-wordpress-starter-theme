<?php

// Autoloader

include( 'vendor/autoload.php' );

// React Wordress WP Admin CSS Color Manager

include( 'configure/react-wordpress-wp-admin-css-color-manager.php' );

// React Wordress TGM Plugin Activation Manager

include( 'configure/react-wordpress-tgm-plugin-activation-manager.php' );

// React Wordress WP Customize Manager

include( 'configure/react-wordpress-wp-customize-manager.php' );

// CPT TAXONOMY

include( 'configure/cpt-taxonomy.php' );

// Utilities

include( 'configure/utilities.php' );

// CONFIG

include( 'configure/configure.php' );

// JAVASCRIPT & CSS

include( 'configure/js-css.php' );

// SHORTCODES

include( 'configure/shortcodes.php' );

// ACF

include( 'configure/acf.php' );

// HOOKS ADMIN

if(is_admin()) {
	include( 'configure/admin.php' );
}
