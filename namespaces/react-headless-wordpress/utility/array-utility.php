<?php
/**
 * This file is responsible for configuring array utilities.
 *
 * @since React Headless WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category ArrayUtility
 */

namespace ReactHeadlessWordPress;

/**
 * Array Utility Class.
 *
 * @since React Headless WordPress 0.0.1
 * @package Class
 * @category ArrayUtility
 */
class ArrayUtility extends BaseStatic
{
	/**
	 * Public
	 */

	/**
	 * Fires after WordPress has finished loading but before any headers are sent.
	 *
	 * @see https://developer.wordpress.org/reference/hooks/init/
	 * @since React Headless WordPress 0.0.1
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
	 * @since React Headless WordPress 0.0.1
	 */
	public static function arrayFilterUniqueMerge(...$arrays)
	{
		return array_filter(array_unique(array_merge(...$arrays)));
	}
}
