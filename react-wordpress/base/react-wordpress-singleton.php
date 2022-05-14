<?php
/**
 * This file is responsible for handling all singleton class configuration.
 *
 * @since React WordPress 0.0.1
 * @package React_WordPress
 * @category Base_Singleton
 */

namespace React_WordPress;

/**
 * Base class for all singleton classes used in the `React_WordPress` namespace.
 *
 * @since React WordPress 0.0.1
 * @package Class
 * @category Base_Singleton
 */
class Base_Singleton extends Base_Class
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
	 * Initialize `Base_Singleton` class
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
	 * Clone `Base_Singleton` class
	 *
	 * @since React WordPress 0.0.1
	 */
	final private function __clone()
	{
		// code and stuff...
	}
}

