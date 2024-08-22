/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import Swiper from 'swiper';
import { Autoplay, Navigation } from 'swiper/modules';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { CountUp } from 'countup.js';

AOS.init();
AOS.init({
	disable: false,
	startEvent: 'DOMContentLoaded',
	initClassName: 'aos-init',
	animatedClassName: 'aos-animate',
	useClassNames: false,
	disableMutationObserver: false,
	debounceDelay: 50,
	throttleDelay: 99,

	offset: 200,
	delay: 0,
	duration: 400,
	easing: 'ease',
	once: true,
	mirror: false,
	anchorPlacement: 'top-bottom',
});

document.addEventListener('DOMContentLoaded', () => {
	initMenuCollapse();
	initCounter();
	initVideoPlayer();
});

function initMenuCollapse() {
	const toggleBtn = document.querySelector('[data-js="nav-toggle"]');
	const menuContainer = document.querySelector('[data-js="nav-container"]');

	let menuExpanded =
		toggleBtn.getAttribute('aria-expanded') === 'true' || false;

	toggleBtn.addEventListener('click', function () {
		// toggleDropdown(!menuExpanded, toggleBtn, menuContainer);

		menuExpanded = !menuExpanded;
		if (menuExpanded) {
			toggleBtn.setAttribute('aria-expanded', true);
			menuContainer.style.height = `calc(100dvh - ${menuContainer.offsetTop}px)`;
			document.body.classList.add('overflow-hidden');
		} else {
			toggleBtn.setAttribute('aria-expanded', false);
			menuContainer.style.height = 0;
			document.body.classList.remove('overflow-hidden');
		}
	});

	window.addEventListener('resize', () => {
		if (window.innerWidth >= 1180) {
			toggleBtn.setAttribute('aria-expanded', false);
			menuContainer.style.removeProperty('height');
			document.body.classList.remove('overflow-hidden');
		}
	});
}

function initCounter() {
	let countersQty = document.querySelectorAll('[data-counter-qty]').length;

	for (let i = 1; i <= countersQty; i++) {
		new CountUp(
			`target${i}`,
			+document.querySelector(`[data-counter-target${i}]`).innerHTML,
			{
				separator: '',
				duration: 2,
				enableScrollSpy: true,
				scrollSpyOnce: true,
				decimal: ',',
			}
		).start();
	}
}

function initVideoPlayer() {
	const videoWrapper = document.querySelector('[data-videoWrapper]');
	const videoBtn = document.querySelector('.js-videoBtn');
	const descWrapper = document.querySelector('[data-descWrapper]');

	videoBtn.addEventListener('click', () => {
		videoWrapper.classList.add('after:opacity-0');
		videoWrapper.classList.add('before:opacity-0');
		videoBtn.classList.add('opacity-0');
		setTimeout(() => {
			videoWrapper.classList.replace('after:z-[1]', 'after:z-[-1]');
			videoWrapper.classList.replace('before:z-[2]', 'before:z-[-1]');
			videoBtn.classList.replace('z-[2]', 'z-[-1]');
		}, 300);

		descWrapper.classList.add('z-[0]', 'translate-y-[-110px]');
	});
}
