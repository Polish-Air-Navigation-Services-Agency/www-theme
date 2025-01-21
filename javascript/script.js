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
	initMenuStickyCollapse();
	initMenuCollapse();
	initCounter();
	initVideoPlayer();
	initWideSwipers();
	initTileSwipers();
	initJobList();
	initiIsElementVisible();
	initHideFormConfirmation();
	initCvFileLabelText();
	initSvgAnimations();
	initParallaxes();
});

function initMenuStickyCollapse(){
	const header = document.querySelector('header');
	const COLLAPSE_THRESHOLD = 50
	const BG_THRESHOLD = 100

	let lastScrollY = 0

	window.addEventListener('scroll',()=>{
		if(document.body.classList.contains('overflow-hidden')) return
		const currentScrollY = window.scrollY;

		header.classList.toggle('header-nontransparent', currentScrollY > BG_THRESHOLD);
		header.classList.toggle('header-collapsed', currentScrollY > COLLAPSE_THRESHOLD && currentScrollY > lastScrollY);

		lastScrollY = currentScrollY;
	})
}

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
	const iframeContainer = document.querySelector('[data-js-video-iframe-container]');
	const videoElement = videoWrapper.querySelector('video');

	videoBtn.addEventListener('click', () => {
		if (videoElement) {
			videoElement.classList.remove('opacity-0');
			videoElement.play();
			videoBtn.classList.add('opacity-0', 'pointer-events-none');
		} else if(iframeContainer) {
			const iframeUrl = iframeContainer.dataset.jsVideoIframeContainer;

			iframeContainer.classList.remove('opacity-0');
			videoBtn.classList.add('opacity-0', 'pointer-events-none');

			const iframe = document.createElement('iframe');
			iframe.src = `${iframeUrl}&autoplay=1`;
			iframe.width = '560';
			iframe.height = '315';
			iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
			iframe.allowFullscreen = true;
			iframeContainer.appendChild(iframe);
		}
	});
}

function initWideSwipers() {
	const swiperContainers = document.querySelectorAll(
		'[data-js="swiper-tiles-wide"]'
	);
	swiperContainers.forEach((el) => {
		const nextBtn = el.parentElement.querySelector('.swiper-button-next') 
		const prevBtn = el.parentElement.querySelector('.swiper-button-prev') 
		new Swiper(el, {
			spaceBetween: 20,
			slidesPerView: 1,
			modules: [Navigation],
			loop: true,
			watchSlidesProgress: true,
			navigation: {
				nextEl: nextBtn,
				prevEl: prevBtn,
			},
		});
	});
}

function initTileSwipers() {
	const swiperContainers = document.querySelectorAll(
		'[data-js="swiper-tiles"]'
	);
	swiperContainers.forEach((el) => {
		const nextBtn = el.parentElement.querySelector('[data-js="swiper-next"]') 
		const prevBtn = el.parentElement.querySelector('[data-js="swiper-prev"]') 
		new Swiper(el, {
			slidesPerView: 1.2,
			modules: [Navigation],
			watchSlidesProgress: true,
			navigation: {
				nextEl: nextBtn,
				prevEl: prevBtn,
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

let currentPage = 1;
let totalPages = 1;
const jobsPerPage = 10

async function initJobList() {
	const jobListRawContainer = document.querySelector('[data-js="job-list-raw"]');
	if (!jobListRawContainer) return;

	const jobListEmptyElement = document.querySelector('[data-js="job-list-empty"]');
	const jobListContainer = document.querySelector('[data-js="job-list"]');
	const isPreview = jobListContainer.dataset.jobsPreview === 'true';
	
	try {
		const jobListHtml = await fetchJobList();
		jobListRawContainer.innerHTML = jobListHtml;

		const jobsData = extractJobListData(jobListRawContainer);
		if (isPreview) jobsData.list = jobsData.list.slice(0, 5);
		
		renderJobList(jobsData.list, jobListContainer);
		totalPages = jobsData.totalPages;
		
		const loadMoreBtn = document.querySelector('[data-js="load-more-jobs"]');
	
		if (!isPreview) {
			if (currentPage == totalPages) loadMoreBtn.classList.add('hidden');
			loadMoreBtn.addEventListener('click', () => loadMoreJobs(loadMoreBtn, jobListRawContainer, jobListContainer));
		}

	} catch (error) {
		console.error('Failed to fetch job list:', error);
		jobListEmptyElement.classList.remove('hidden');
	}
}

async function loadMoreJobs(loadMoreBtn, jobListRawContainer, jobListContainer) {
	loadMoreBtn.setAttribute('disabled',true)

	try {
		currentPage++;
		const jobListHtml = await fetchJobList(currentPage);
		jobListRawContainer.innerHTML = jobListHtml;
		const jobsData = extractJobListData(jobListRawContainer);

		renderJobList(jobsData.list, jobListContainer);
		
		if (currentPage >= totalPages) {
			loadMoreBtn.classList.add('hidden');
		}
	} catch (error) {
		console.error('Failed to load more jobs:', error);
	} finally {
		loadMoreBtn.setAttribute('disabled',false)
	}
}

async function fetchJobList(page = 1) {

	const jobListRawContainer = document.querySelector('[data-js="job-list-raw"]');
	const endpointBase = jobListRawContainer.dataset.jobsEndpoint;

	const url = `${endpointBase}&filters=all&grid=all&pn=${page}&ps=${jobsPerPage}`;
	try {
		const response = await fetch(url);
		if (!response.ok) {
			throw new Error(`HTTP error! Status: ${response.status}`);
		}
		const text = await response.text();
		const json = JSON.parse(text.replace(/^\(\{/, '{').replace(/\}\)$/, '}'));
		return json.htm;
	} catch (error) {
		console.error('Error fetching job list:', error);
		throw error;
	}
}

function renderJobList(jobs, container) {
	jobs.forEach((job, index) => {
	  const jobHtml = createJobHtml(job, index + 1);
	  container.insertAdjacentHTML('beforeend', jobHtml);
	});
}

function extractJobListData(rawListContainer) {
	const jobs = Array.from(rawListContainer.querySelectorAll('[skkresult="offer"]')).map(jobEl => {
		const oid = jobEl.getAttribute('offerid');
		const ejoId = jobEl.getAttribute('externaljobofferid');
		const ejorId = jobEl.getAttribute('externaljobofferregionid');
		const comId = jobEl.getAttribute('comid');
		const jobUrl = `https://skk.erecruiter.pl/Offer.aspx?oid=${oid}&cfg=58e9fc2b67ba49dfa17c0ac0bcfe8d56&fromSkk=${new Date().getTime()}&ejoId=${ejoId}&ejorId=${ejorId}&comId=${comId}`;
		
		const jobData = jobEl.querySelectorAll('td');

		return {
			title: jobData[0].innerText,
			date: jobData[1].innerText,
			location: jobData[2].innerText,
			url: jobUrl,
		};
	});

	return {
		list: jobs,
		totalPages: parseInt(rawListContainer.querySelector('tbody tr:last-child').getAttribute('tp'))
	};
}

function createJobHtml(jobData, index) {
	const number = (currentPage - 1) * jobsPerPage + index
	const formattedNumber = number < 10 ? '0' + number : number;
	return `
		<a href="${jobData.url}" target="_blank" class="animate-appear group py-8 md:py-10 flex flex-col lg:flex-row justify-between border-b-[1px] border-b-[#BEBFBF]" style="animation-delay: ${index * 100}ms;">
			<div class="flex gap-[26px]">
				<span class="text-[30px] w-9 font-medium text-secondary">${formattedNumber}</span>
				<div class="mb-5 lg:mb-0">
					<h3 class="mb-[10px] text-[30px] font-medium text-primary group-hover:text-secondary transition duration-200">${jobData.title}</h3>
					<div class="flex gap-[14px]">
						<div class="flex gap-[4px]">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<path d="M3.33325 6.6665H16.6666M3.33325 6.6665V13.9998C3.33325 14.9332 3.33325 15.3998 3.51492 15.7565C3.67471 16.0701 3.92966 16.3251 4.24325 16.4848C4.59909 16.6665 5.06575 16.6665 5.99742 16.6665H14.0024C14.9341 16.6665 15.3999 16.6665 15.7558 16.4848C16.0699 16.3248 16.3249 16.0698 16.4849 15.7565C16.6666 15.3998 16.6666 14.9348 16.6666 14.0032V6.6665M3.33325 6.6665V5.99984C3.33325 5.0665 3.33325 4.59984 3.51492 4.24317C3.67492 3.929 3.92909 3.67484 4.24325 3.51484C4.59992 3.33317 5.06659 3.33317 5.99992 3.33317H6.66659M16.6666 6.6665V5.99734C16.6666 5.06567 16.6666 4.599 16.4849 4.24317C16.3249 3.92949 16.0696 3.67453 15.7558 3.51484C15.3999 3.33317 14.9333 3.33317 13.9999 3.33317H13.3333M6.66659 3.33317H13.3333M6.66659 3.33317V1.6665M13.3333 3.33317V1.6665" stroke="#60B8D1" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<p class="text-base">${jobData.date}</p>
						</div>
						<div class="flex gap-[4px]">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9.99993 17.6571L10.6009 16.9799C11.2828 16.199 11.8961 15.458 12.4418 14.7532L12.8923 14.159C14.7733 11.6247 15.7142 9.61324 15.7142 8.12657C15.7142 4.95324 13.1561 2.38086 9.99993 2.38086C6.84374 2.38086 4.28564 4.95324 4.28564 8.12657C4.28564 9.61324 5.2266 11.6247 7.10755 14.159L7.55803 14.7532C8.33654 15.7508 9.15104 16.7187 9.99993 17.6571Z" stroke="#60B8D1" stroke-linecap="round" stroke-linejoin="round" />
								<path d="M10.0001 10.4763C11.3151 10.4763 12.381 9.41027 12.381 8.09531C12.381 6.78034 11.3151 5.71436 10.0001 5.71436C8.68513 5.71436 7.61914 6.78034 7.61914 8.09531C7.61914 9.41027 8.68513 10.4763 10.0001 10.4763Z" stroke="#60B8D1" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
							<p class="text-base">${jobData.location}</p>
						</div>
					</div>
				</div>
			</div>
			<div class="self-start lg:self-center">
				<button class="w-[160px] h-[50px] pl-[30px] pr-[70px] ml-[60px] lg:ml-10 flex items-center justify-center rounded-full text-[18px] font-medium bg-primary group-hover:bg-secondary text-white transition-all duration-200 relative">
					Apply
					<svg class="absolute right-[26px] top-[16px] pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
						<path d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</button>
			</div>
		</a>
	`;
}

function initiIsElementVisible() {
	const tiles = document.querySelectorAll('[data-js-tile-numbered="tile-numbered"]');

	if (!tiles.length) return

	const observerOptions = {
	  root: null, 
	  rootMargin: '0px 0px -50px 0px',
	  threshold: 1
	};
  
	const observerCallback = (entries) => {
	  entries.forEach(entry => {
		if (entry.isIntersecting) {
		  entry.target.classList.add('tile-visible');
		} else {
		  entry.target.classList.remove('tile-visible');
		}
	  });
	};
  
	const observer = new IntersectionObserver(observerCallback, observerOptions);
  
	tiles.forEach(tile => observer.observe(tile));
}

function initHideFormConfirmation(){
	const closeBtns = document.querySelectorAll('[data-js-form-reset]')
	closeBtns.forEach(btn=>{
		const form = document.querySelector(`.${btn.dataset.jsFormReset} form`)
		if (form && wpcf7) {
			btn.addEventListener('click',()=>{
				wpcf7.reset(form)
			})
		}
	})
}

function initCvFileLabelText() {
	const labelEl = document.querySelector('[data-js="cv-file"]');
	const inputEl = document.querySelector('input#your-file');
	if (!labelEl || !inputEl) return;

	const textEl = labelEl.querySelector('[data-js="cv-file-name"]');
	const labelBtn = document.querySelector('[data-js="cv-file-icon"]');
	inputEl.addEventListener('change', (e) => {
		const file = e.target.files[0];
		if (file) {
			textEl.innerText = file.name;
			labelBtn.classList.add('hidden');
		} else {
			textEl.innerText = translations['Attach CV file'] ?? 'Attach CV file';
			labelBtn.classList.remove('hidden');
		}
	});
}

function initSvgAnimations() {
	const decors = document.querySelectorAll('.svg-draw-animation')

	const observerOptions = {
		root: null, 
		rootMargin: '0px 0px -50px 0px',
		threshold: 0
	};

	const observerCallback = (entries) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) entry.target.classList.add('decor-visible');
		});
	  };
	
	const observer = new IntersectionObserver(observerCallback, observerOptions);
  
	decors.forEach(decor=>{
		decor.querySelectorAll('path').forEach(path=>{
			path.setAttribute('pathLength',100);
		})
		observer.observe(decor)
	})
}

function initParallaxes(){
	const PARALLAX_OFFSET_DESKTOP = 120;
	const PARALLAX_OFFSET_MOBILE = 50;
	const PARALLAX_SAFE_VH = 600;

	const parallaxElements = document.querySelectorAll('[data-js-parallax]');
	
	parallaxElements.forEach(element => {
		applyParallax(element);
		window.addEventListener('scroll', () => applyParallax(element));
	});

	function applyParallax(element) {
		const isContainer = element.dataset.jsParallax === 'container';
		const customOffset = element.dataset.jsParallaxOffset ? parseFloat(element.dataset.jsParallaxOffset) : null;
		const parallaxOffset = customOffset !== null 
			? customOffset 
			: (isMobile() ? PARALLAX_OFFSET_MOBILE : PARALLAX_OFFSET_DESKTOP);

		const target = isContainer ? element.querySelector('[data-js-parallax="img"]') : element;
		if (!target) return;

		const { top, height } = element.getBoundingClientRect();
		const viewportHeight = window.innerHeight;
		const safeHeight = Math.max(viewportHeight - height, PARALLAX_SAFE_VH);
		const offsetRatio = -top / safeHeight;
		const offset = parallaxOffset * offsetRatio;

		target.style.transform = `translateY(${offset}px)`;
	}
}

function isMobile(){
	return window.innerHeight < 1180
}