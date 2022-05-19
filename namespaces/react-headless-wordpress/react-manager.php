<?php
/**
 * This file is where react is configured for the `ReactHeadlessWordPress` namespace.
 *
 * @since React Headless WordPress 0.0.1
 * @package ReactHeadlessWordPress
 * @category ReactManager
 */

namespace ReactHeadlessWordPress;

/**
 * This class manages the react configuration of the `ReactHeadlessWordPress` namespace.
 *
 * @since React Headless WordPress 0.0.1
 * @package Class
 * @category ReactManager
 */
class ReactManager extends BaseStatic
{
	/**
	 * Public
	 */

	/**
	 * The root div id used for react in the `ReactHeadlessWordPress` namespace.
	 *
	 * @var 'react_wordpress_root'
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public const REACT_ROOT = ThemeManager::THEME_SLUG . '_root';

	/**
	 * Render the website content as html.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public static function render()
	{
		self::renderReactRoot();
	}

	/**
	 * Protected
	 */

	/**
	 * Initialize `ReactManager` class
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	protected function __construct()
	{
		parent::__construct();

		add_action('init', array($this, 'init'));
	}

	/**
	 * Private
	 */

	/**
	 * Render react root.
	 *
	 * @since React Headless WordPress 0.0.1
	 */
	public static function renderReactRoot()
	{
	?>
		<div id="<?php echo esc_html(self::REACT_ROOT); ?>"></div>
	<?php
	}
}
