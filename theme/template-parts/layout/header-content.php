<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _pansa
 */

?>

<header id="masthead" class="absolute z-20 <?php if (current_user_can('administrator')) {
																							echo 'top-20';
																						} else {
																							echo 'top-0';
																						} ?> w-full bg-transparent transition-all duration-300">
	<div class="container lg:py-10 lg:mb-10 md:mb-0 flex justify-between lg:justify-normal items-center">
		<div class="logo mr-16">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="block max-w-[140px] md:max-w-[190px] 2xl:max-w-[220px]">
				<svg xmlns="http://www.w3.org/2000/svg" width="120" height="20" viewBox="0 0 120 20" fill="none">
					<path d="M120 18.8289C119.745 14.5678 118.98 10.5981 117.706 7.46568C115.957 3.16774 113.444 0.76399 110.604 0.76399C107.763 0.76399 105.249 3.16774 103.501 7.46568C102.263 10.5981 101.462 14.5678 101.207 18.8289H104.958C105.468 10.0149 108.352 4.47897 110.604 4.47897C112.855 4.47897 115.739 10.0149 116.285 18.8289H120ZM85.4535 5.70752C85.4535 4.50256 87.1078 4.1306 91.1145 4.16698C93.9916 4.20336 96.7078 4.60289 99.039 4.96713V1.44596C95.5787 1.00918 92.8136 0.754072 90.4828 0.754072C86.003 0.754072 81.7383 1.91956 81.7383 5.4888C81.7383 10.0416 85.9258 10.4292 90.1607 11.5266C93.3857 12.362 95.9432 12.6273 95.9432 14.1574C95.9432 15.429 94.2313 15.7231 90.3342 15.7231C88.2943 15.7231 85.9271 15.5048 82.0664 14.9217V18.5365C85.7459 19.0723 88.5855 19.3294 90.7712 19.3294C97.0723 19.3294 99.6579 17.5809 99.6579 14.5578C99.6579 10.0416 95.2489 9.33629 91.3476 8.37761C87.4494 7.41916 85.4535 7.23726 85.4535 5.70752ZM79.0574 10.1607C79.0574 7.86608 78.8021 4.95235 78.2923 1.12801H74.5408C75.0871 5.09787 75.4384 7.5746 75.4384 9.68686C75.4384 13.8025 75.2692 15.7692 74.1401 15.7692C72.5742 15.7692 71.6636 12.71 70.6803 9.46858C69.4054 5.35276 67.6938 0.80015 63.432 0.80015C59.7902 0.80015 58.8068 4.91575 58.8068 9.57794C58.8068 12.0178 59.0617 15.0771 59.5353 18.8285H63.2867C62.9224 16.2428 62.5218 13.1108 62.5218 10.1241C62.4852 5.71701 62.9224 4.40599 63.6873 4.40599C65.2534 4.40599 66.1638 7.50184 67.1474 10.7066C68.422 14.8222 70.1339 19.375 74.4316 19.375C77.4547 19.375 79.0574 16.7528 79.0574 10.1607ZM52.6403 18.8289H56.355C56.1004 14.5678 55.3353 10.5981 54.0604 7.46568C52.312 3.16774 49.7989 0.76399 46.9583 0.76399C44.1171 0.76399 41.604 3.16774 39.8562 7.46568C38.6178 10.5981 37.8163 14.5678 37.5612 18.8289H41.313C41.8228 10.0149 44.7072 4.47897 46.9583 4.47897C49.2097 4.47897 52.0937 10.0149 52.6403 18.8289ZM37.6501 6.91777C37.6501 2.65665 31.9322 0.0705608 24.138 0.726067C20.0224 1.05415 18.7921 3.56704 18.7921 9.3945C18.7921 10.0405 18.811 10.7501 18.847 11.5041C12.9792 11.1648 7.04807 9.43661 1.91118 6.6576L0 9.71663C5.41537 12.7439 11.4613 14.6527 19.0957 14.9234C19.2183 16.2084 19.3739 17.5313 19.5572 18.8289H23.3365C23.1356 17.6085 22.9685 16.236 22.8398 14.9122C31.0729 14.5082 37.6501 11.3974 37.6501 6.91777ZM34.106 6.77225C34.106 8.88186 29.7346 11.2212 22.5853 11.5317C22.5525 10.8845 22.5355 10.3263 22.5355 9.90426C22.5355 6.44439 22.7961 4.50587 24.2674 4.27369C28.4465 3.61378 34.106 4.64852 34.106 6.77225Z" fill="white" />
				</svg>
			</a>
		</div>

		<button class="menu-btn w-fit lg:hidden" aria-controls="primary-menu" aria-expanded="false" aria-label="Primary Menu" data-js="nav-toggle">
			<svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="70" onclick="this.classList.toggle('active')">
				<path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
				<path class="line middle" d="m 30,50 h 40" />
				<path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
			</svg>
		</button>


		<div id="site-navigation" class="w-full bg-[#055bc0] lg:bg-transparent <?php if (is_front_page()) : echo 'text-white';
																																						else : echo 'text-primary';
																																						endif; ?> absolute lg:static inset-x-0 top-full h-0 lg:h-auto overflow-auto lg:overflow-visible shadow-none transition-all duration-500" data-js="nav-container">
			<nav class="container w-full pt-5 lg:pt-0 lg:!px-0 pb-5 lg:pb-0 lg:!max-w-full flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 font-medium" aria-label="<?php esc_attr_e('Main Navigation', '_pansa'); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
				<button class="group <?php if (is_front_page()) : echo 'bg-white hover:bg-primary text-[#0F304D] hover:text-white';
															else : echo 'bg-primary hover:bg-white text-white hover:text-[#0F304D]';
															endif; ?> !rounded-full !px-6 !py-[11px]  transition ease duration-200">
					<a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="flex items-center justify-center gap-[10px]">
						<?php esc_html_e('Skontaktuj się', '_pansa'); ?>
						<svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
							<path class="group-hover:stroke-white" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
				</button>

			</nav><!-- #site-navigation -->

		</div>
	</div>

</header><!-- #masthead -->