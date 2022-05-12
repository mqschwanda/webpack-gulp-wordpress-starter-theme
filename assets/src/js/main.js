import React from 'react';
import { render } from '@wordpress/element';
import App from './App';

function renderApp() {
	const root = document.getElementById('react_wordpress_root');
	render(<App/>, root);
}

document.addEventListener('DOMContentLoaded', () => {
	renderApp();
});
