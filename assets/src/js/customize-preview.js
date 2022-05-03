/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */
(function themeCustomizer() {
	[
    'react_wordpress_xs',
    'react_wordpress_sm',
    'react_wordpress_md',
    'react_wordpress_lg',
    'react_wordpress_xl',
  ].forEach((themeMod) => {
		// eslint-disable-next-line no-undef
		wp.customize(themeMod, (value) => {
			value.bind((newval) => {
				// eslint-disable-next-line no-console
				console.log({ themeMod, newval });
			});
		});
	});
}(jQuery));
