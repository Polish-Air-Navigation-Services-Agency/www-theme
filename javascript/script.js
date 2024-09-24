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
	initWideSwipers();
	initTileSwipers();
	initShowMoreJobs();
	initiIsElementVisible();
	test();
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
	if (!videoWrapper) return;

	const videoBtn = document.querySelector('[data-js-video-btn]');
	const iframeContainer = document.querySelector(
		'[data-js-video-iframe-container]'
	);
	const iframeUrl = iframeContainer.dataset.jsVideoIframeContainer;

	videoBtn.addEventListener('click', () => {
		iframeContainer.classList.remove('opacity-0');
		videoBtn.classList.add('opacity-0', 'pointer-events-none');

		const iframe = document.createElement('iframe');
		iframe.src = `${iframeUrl}&autoplay=1`;
		iframe.width = '560';
		iframe.height = '315';
		iframe.allow =
			'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
		iframe.allowFullscreen = true;
		iframeContainer.appendChild(iframe);
	});
}

function initWideSwipers() {
	const swiperContainers = document.querySelectorAll(
		'[data-js="swiper-tiles-wide"]'
	);
	swiperContainers.forEach((el) => {
		new Swiper(el, {
			spaceBetween: 20,
			slidesPerView: 1,
			modules: [Navigation],
			watchSlidesProgress: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	});
}

function initTileSwipers() {
	const swiperContainers = document.querySelectorAll(
		'[data-js="swiper-tiles"]'
	);
	swiperContainers.forEach((el) => {
		new Swiper(el, {
			slidesPerView: 1.2,
			modules: [Navigation],
			watchSlidesProgress: true,
			navigation: {
				nextEl: '[data-js="swiper-next"]',
				prevEl: '[data-js="swiper-prev"]',
			},
			breakpoints: {
				768: {
					slidesPerView: 2,
				},
				1180: {
					slidesPerView: 3,
				},
			},
		});
	});
}

function initShowMoreJobs() {
	const moreBtn = document.querySelector('[data-js-job="loadMore"]');
	if (!moreBtn) return;

	const JOBS_INCREMENT_COUNT = 10;

	moreBtn.addEventListener('click', () =>
		expandJobsList(JOBS_INCREMENT_COUNT)
	);

	function expandJobsList(increment) {
		const hiddenJobsList = document.querySelectorAll(
			'[data-js-job-visible="false"]'
		);
		const hiddenJobsCount = hiddenJobsList.length;

		const limit = Math.min(increment, hiddenJobsCount);

		for (let i = 0; i < limit; i++) {
			hiddenJobsList[i].setAttribute('data-js-job-visible', 'true');
		}

		if (hiddenJobsCount <= increment) {
			moreBtn.classList.add('!hidden');
		}
	}
}

function initiIsElementVisible(el) {
	if (el) {
		let rect = el.getBoundingClientRect(),
			vWidth = window.innerWidth || document.documentElement.clientWidth,
			vHeight =
				window.innerHeight || document.documentElement.clientHeight,
			efp = function (x, y) {
				return document.elementFromPoint(x, y);
			};

		if (
			rect.right < 0 ||
			rect.bottom < 0 ||
			rect.left > vWidth ||
			rect.top > vHeight
		)
			return false;

		return (
			el.contains(efp(rect.left, rect.top)) ||
			el.contains(efp(rect.right, rect.top)) ||
			el.contains(efp(rect.right, rect.bottom)) ||
			el.contains(efp(rect.left, rect.bottom))
		);
	}
}

function test() {
	let tile = document.querySelector(
		'[data-js-tile-numbered="tile-numbered"]'
	);

	document.addEventListener('scroll', function () {
		if (initiIsElementVisible(tile)) {
			tile.classList.replace('bg-white', 'bg-primary');
			tile.classList.add('text-white');
			tile.classList.add('[&>h3]:text-white');
			tile.classList.add('[&>p]:text-white');
			console.log('visible');
		} else {
			console.log('not visible');
		}
	});
}
