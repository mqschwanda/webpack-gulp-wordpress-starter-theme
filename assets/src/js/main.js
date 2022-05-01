import React from 'react';
import { render } from '@wordpress/element';
import Footer from './Footer';
import Header from './Header';
import Main from './Main/index';

function renderHeader() {
	const [header] = document.getElementsByTagName('header');
	render(<Header/>, header);
}

function renderMain() {
	const [main] = document.getElementsByTagName('main');
	render(<Main/>, main);
}

function renderFooter() {
	const [footer] = document.getElementsByTagName('footer');
	render(<Footer/>, footer);
}

document.addEventListener('DOMContentLoaded', () => {
	renderHeader();
	renderMain();
	renderFooter();
});
