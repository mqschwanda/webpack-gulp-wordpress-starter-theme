<?php
/**
 * This file is the entry point for the `React_WordPress` namespace.
 *
 * @package React_WordPress
 * @category Theme_Manager
 * @since React WordPress 0.0.1
 */

namespace React_WordPress;

require 'react-wordpress-manager.php';

/**
 * Initialize theme.
 */
Theme_Manager::autoload();
