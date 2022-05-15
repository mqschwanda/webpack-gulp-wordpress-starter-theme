<?php
/**
 * This file is responsible for handling all singleton class configuration.
 *
 * @since React WordPress 0.0.1
 * @package React_WordPress
 * @category BaseSingleton
 */

namespace React_WordPress;

/**
 * Base class for all singleton classes used in the `React_WordPress` namespace.
 *
 * @since React WordPress 0.0.1
 * @package Class
 * @category BaseSingleton
 */
class BaseSingleton extends BaseClass
{
	/**
	 * Public
	 */
	public static function getInstance()
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
	 * Initialize `BaseSingleton` class
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
	 * Clone `BaseSingleton` class
	 *
	 * @since React WordPress 0.0.1
	 */
	final private function __clone()
	{
		// code and stuff...
	}
}

