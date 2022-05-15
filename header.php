<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till the `body` tag.
 *
 * @since React WordPress 0.0.1
 * @package ReactHeadlessWordPress
 */

?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
