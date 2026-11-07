/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
document.addEventListener('DOMContentLoaded', function () {
	const siteNavigation = document.getElementById('site-navigation');
	if (!siteNavigation) {
		return;
	}

	const button = siteNavigation.querySelector('.menu-toggle');
	if (!button) {
		return;
	}

	const menu = siteNavigation.querySelector('.nav-menu');
	if (!menu) {
		button.style.display = 'none';
		return;
	}

	button.addEventListener('click', function () {
		const expanded = button.getAttribute('aria-expanded') === 'true' || false;
		button.setAttribute('aria-expanded', !expanded);
		menu.classList.toggle('is-active');
	});
});
