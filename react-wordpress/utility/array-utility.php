<?php
/**
 * This file is responsible for configuring array utilities.
 *
 * @since React WordPress 0.0.1
 * @package React_WordPress
 * @category Array_Utility
 */

namespace React_WordPress;

/**
 * Array Utility Class.
 *
 * @since React WordPress 0.0.1
 * @package Class
 * @category Array_Utility
 */
class Array_Utility extends React_WordPress_Static
{
	/**
	 * Public
	 */

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 * @since React WordPress 0.0.1
	 */
	// @codingStandardsIgnoreLine
	public static function init()
	{
		parent::init();

		// code and stuff...
	}

	/**
	 * Merge multiple arrays together, remove all falsy items, and remove all duplicates.
	 *
	 * @param ?array ...$arrays - Arrays to be manipulated.
	 *
	 * @return array
	 *
	 * @since React WordPress 0.0.1
	 */
	public static function array_filter_unique_merge(...$arrays)
	{
		return array_filter(array_unique(array_merge(...$arrays)));
	}
}
