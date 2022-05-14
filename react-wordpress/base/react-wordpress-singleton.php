<?php
/**
 * This file is responsible for handling all singleton class configuration.
 *
 * @package React_WordPress.
 * @since React WordPress 0.0.1
 */

namespace React_WordPress;

/**
 * Base class for all singleton classes used in the `React_WordPress` namespace.
 *
 * @since React WordPress 0.0.1
 */
class React_WordPress_Singleton extends React_WordPress_Class
{
	/**
	 * Public
	 */
	public static function get_instance()
	{
			$class = get_called_class();

			if (!isset(self::$instances[ $class ]))
			{
					self::$instances[ $class ] = new $class();
			}

			return self::$instances[ $class ];
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `React_WordPress_Singleton` class
	 *
	 * @since React WordPress 0.0.1
	 */
	protected function __construct()
	{
		// code and stuff...
	}

	/**
	 * The unique instance of each singleton class.
	 *
	 * @var $instances - Instances hash.
	 *
	 * @since React WordPress 0.0.1
	 */
	protected static $instances;

	/**
	 * Private
	 */

	/**
	 * Clone `React_WordPress_Singleton` class
	 *
	 * @since React WordPress 0.0.1
	 */
	final private function __clone()
	{
		// code and stuff...
	}
}

