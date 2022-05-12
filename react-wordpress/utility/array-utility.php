<?php

namespace React_WordPress;

/**
 * Array Utility Class.
 * 
 * @since React WordPress 0.0.1
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
  public static function init()
  {
    parent::init();
  }

  /**
   * Merge multiple arrays together, remove all falsy items, and remove all duplicates
   * 
   * @param ?array ...$arrays
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
