<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _pansa
 */

?>
<?php 
$company_details = get_field('company_details', 'option');
$social_links = get_field('social_links', 'option');
?>

<header id="masthead" class="fixed inset-x-0 top-0 w-full bg-transparent transition-all duration-300 z-50">
	<div class="container lg:py-8 flex justify-between lg:justify-normal items-center">
		<div class="logo mr-16">
			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" aria-label="Home" class="block max-w-[140px] md:max-w-[190px] 2xl:max-w-[220px] py-2">
				<svg xmlns="http://www.w3.org/2000/svg" width="120" height="20" viewBox="0 0 120 20" fill="none">
					<path class="transition duration-300" d="M120 18.8289C119.745 14.5678 118.98 10.5981 117.706 7.46568C115.957 3.16774 113.444 0.76399 110.604 0.76399C107.763 0.76399 105.249 3.16774 103.501 7.46568C102.263 10.5981 101.462 14.5678 101.207 18.8289H104.958C105.468 10.0149 108.352 4.47897 110.604 4.47897C112.855 4.47897 115.739 10.0149 116.285 18.8289H120ZM85.4535 5.70752C85.4535 4.50256 87.1078 4.1306 91.1145 4.16698C93.9916 4.20336 96.7078 4.60289 99.039 4.96713V1.44596C95.5787 1.00918 92.8136 0.754072 90.4828 0.754072C86.003 0.754072 81.7383 1.91956 81.7383 5.4888C81.7383 10.0416 85.9258 10.4292 90.1607 11.5266C93.3857 12.362 95.9432 12.6273 95.9432 14.1574C95.9432 15.429 94.2313 15.7231 90.3342 15.7231C88.2943 15.7231 85.9271 15.5048 82.0664 14.9217V18.5365C85.7459 19.0723 88.5855 19.3294 90.7712 19.3294C97.0723 19.3294 99.6579 17.5809 99.6579 14.5578C99.6579 10.0416 95.2489 9.33629 91.3476 8.37761C87.4494 7.41916 85.4535 7.23726 85.4535 5.70752ZM79.0574 10.1607C79.0574 7.86608 78.8021 4.95235 78.2923 1.12801H74.5408C75.0871 5.09787 75.4384 7.5746 75.4384 9.68686C75.4384 13.8025 75.2692 15.7692 74.1401 15.7692C72.5742 15.7692 71.6636 12.71 70.6803 9.46858C69.4054 5.35276 67.6938 0.80015 63.432 0.80015C59.7902 0.80015 58.8068 4.91575 58.8068 9.57794C58.8068 12.0178 59.0617 15.0771 59.5353 18.8285H63.2867C62.9224 16.2428 62.5218 13.1108 62.5218 10.1241C62.4852 5.71701 62.9224 4.40599 63.6873 4.40599C65.2534 4.40599 66.1638 7.50184 67.1474 10.7066C68.422 14.8222 70.1339 19.375 74.4316 19.375C77.4547 19.375 79.0574 16.7528 79.0574 10.1607ZM52.6403 18.8289H56.355C56.1004 14.5678 55.3353 10.5981 54.0604 7.46568C52.312 3.16774 49.7989 0.76399 46.9583 0.76399C44.1171 0.76399 41.604 3.16774 39.8562 7.46568C38.6178 10.5981 37.8163 14.5678 37.5612 18.8289H41.313C41.8228 10.0149 44.7072 4.47897 46.9583 4.47897C49.2097 4.47897 52.0937 10.0149 52.6403 18.8289ZM37.6501 6.91777C37.6501 2.65665 31.9322 0.0705608 24.138 0.726067C20.0224 1.05415 18.7921 3.56704 18.7921 9.3945C18.7921 10.0405 18.811 10.7501 18.847 11.5041C12.9792 11.1648 7.04807 9.43661 1.91118 6.6576L0 9.71663C5.41537 12.7439 11.4613 14.6527 19.0957 14.9234C19.2183 16.2084 19.3739 17.5313 19.5572 18.8289H23.3365C23.1356 17.6085 22.9685 16.236 22.8398 14.9122C31.0729 14.5082 37.6501 11.3974 37.6501 6.91777ZM34.106 6.77225C34.106 8.88186 29.7346 11.2212 22.5853 11.5317C22.5525 10.8845 22.5355 10.3263 22.5355 9.90426C22.5355 6.44439 22.7961 4.50587 24.2674 4.27369C28.4465 3.61378 34.106 4.64852 34.106 6.77225Z" fill="<?= is_front_page() ? '#FFFFFF' : '#0F304D'; ?>" />
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


		<div id="site-navigation" class="w-full bg-white lg:bg-transparent text-primary <?php if (is_front_page()) : ?>lg:text-white <?php endif; ?> absolute lg:static inset-x-0 top-full h-0 lg:h-auto overflow-auto lg:overflow-visible shadow-none transition-all duration-500" data-js="nav-container">
			<div class="container w-full pt-5 lg:pt-0 lg:!px-0 pb-5 lg:pb-0 lg:!max-w-full flex flex-col justify-between lg:block min-h-[calc(-70px_+_100dvh)] lg:min-h-0">
				<nav class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 font-medium <?php echo (is_front_page()) ? 'lg:[&_li_a]:after:!bg-white' : ''; ?>" aria-label="<?php esc_attr_e('Main Navigation', '_pansa'); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
						)
					);
					?>
	
					<a href="<?php echo esc_url(home_url('/kontakt')); ?>"
						class="nav-btn-main group">
						<?php esc_html_e('Contact Us', '_pansa'); ?>
						<svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
							<path class="stroke-primary group-hover:stroke-white <?php if (!is_front_page()) : ?>lg:stroke-white lg:group-hover:stroke-primary <?php endif; ?>transition duration-200" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
	
				</nav><!-- #site-navigation -->


				<div class="lg:hidden">
					<div class=" mb-10 mt-auto text-left">
						<?php echo $company_details; ?>
					</div>
					<div class="socials">
						<h3 class="mb-[10px] text-[20px] font-semibold text-left "><?php echo esc_html_e('Obserwuj nas', '_pansa'); ?></h3>
						<?php
						$socials_count = count(array_filter(array_values($social_links)));
						if ($socials_count > 0) :
						?>
							<ul class="flex gap-3 justify-start ">
								<?php if ($social_links['facebook']) : ?>
									<li class="shrink-0 group">
										<a class="block transition duration-200" <?php if ($social_links['facebook'] != ' ') : ?> href="<?php echo esc_attr($social_links['facebook']) ?>" target="_blank" aria-label="Facebook" <?php endif; ?>>
											<span class="hidden">Facebook</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
												<rect class="group-hover:!fill-[#488ca0] transition duration-200" width="34" height="34" rx="17" fill="#60B8D1" />
												<path d="M22.8174 18.5625L23.5117 14.0381H19.1704V11.1021C19.1704 9.86426 19.7769 8.65771 21.7212 8.65771H23.6948V4.80566C23.6948 4.80566 21.9038 4.5 20.1914 4.5C16.6162 4.5 14.2793 6.66699 14.2793 10.5898V14.0381H10.3052V18.5625H14.2793V29.5H19.1704V18.5625H22.8174Z" fill="#0F304D" />
											</svg>
										</a>
									</li>
								<?php endif; ?>
								<?php if ($social_links['linkedin']) : ?>
									<li class="shrink-0 group">
										<a class="block transition duration-200" <?php if ($social_links['linkedin'] != ' ') : ?> href="<?php echo esc_attr($social_links['linkedin']) ?>" target="_blank" aria-label="linkedin" <?php endif; ?>>
											<span class="hidden">Linkedin</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
												<rect class="group-hover:!fill-[#488ca0] transition duration-200" width="34" height="34" rx="17" fill="#60B8D1" />
												<path d="M7.375 27H11.125V13.125H7.375V27ZM9.25 7C8 7 7 8 7 9.25C7 10.5 8 11.5 9.25 11.5C10.5 11.5 11.5 10.5 11.5 9.25C11.5 8 10.5 7 9.25 7ZM17.5 15.25V13.125H13.75V27H17.5V19.875C17.5 15.875 22.625 15.625 22.625 19.875V27H26.375V18.5C26.375 11.75 19.25 12 17.5 15.25Z" fill="#0F304D" />
											</svg>
										</a>
									</li>
								<?php endif; ?>
								<?php if ($social_links['x']) : ?>
									<li class="shrink-0 group">
										<a class="block transition duration-200" <?php if ($social_links['x'] != ' ') : ?> href="<?php echo esc_attr($social_links['x']) ?>" target="_blank"  aria-label="x" <?php endif; ?>>
											<span class="hidden">X</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
												<rect class="group-hover:!fill-[#488ca0] transition duration-200" width="34" height="34" rx="17" fill="#60B8D1" />
												<path d="M18.6469 15.4688L25.9322 7H24.2056L17.88 14.3531L12.8275 7H7L14.6403 18.1194L7 27H8.72656L15.4069 19.2348L20.7425 27H26.57L18.6464 15.4688H18.6469ZM16.2822 18.2172L15.508 17.11L9.34859 8.29969H12.0005L16.9709 15.41L17.745 16.5172L24.2064 25.7594H21.5548L16.2822 18.2177V18.2172Z" fill="#0F304D" />
											</svg>
										</a>
									</li>
								<?php endif; ?>
								<?php if ($social_links['instagram']) : ?>
									<li class="shrink-0 group">
										<a class="block transition duration-200" <?php if ($social_links['instagram'] != ' ') : ?> href="<?php echo esc_attr($social_links['instagram']) ?>" target="_blank" aria-label="instagram" <?php endif; ?>>
											<span class="hidden">Instagram</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
												<rect class="group-hover:!fill-[#488ca0] transition duration-200" width="34" height="34" rx="17" fill="#60B8D1" />
												<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8773 7.06C13.9436 7.01091 14.2836 7 17 7C19.7164 7 20.0564 7.01182 21.1218 7.06C22.1873 7.10818 22.9145 7.27818 23.5509 7.52455C24.2173 7.77636 24.8218 8.17 25.3218 8.67909C25.8309 9.17818 26.2236 9.78182 26.4745 10.4491C26.7218 11.0855 26.8909 11.8127 26.94 12.8764C26.9891 13.9445 27 14.2845 27 17C27 19.7164 26.9882 20.0564 26.94 21.1227C26.8918 22.1864 26.7218 22.9136 26.4745 23.55C26.2236 24.2174 25.8303 24.822 25.3218 25.3218C24.8218 25.8309 24.2173 26.2236 23.5509 26.4745C22.9145 26.7218 22.1873 26.8909 21.1236 26.94C20.0564 26.9891 19.7164 27 17 27C14.2836 27 13.9436 26.9882 12.8773 26.94C11.8136 26.8918 11.0864 26.7218 10.45 26.4745C9.78265 26.2236 9.17802 25.8302 8.67818 25.3218C8.16944 24.8224 7.77574 24.2181 7.52455 23.5509C7.27818 22.9145 7.10909 22.1873 7.06 21.1236C7.01091 20.0555 7 19.7155 7 17C7 14.2836 7.01182 13.9436 7.06 12.8782C7.10818 11.8127 7.27818 11.0855 7.52455 10.4491C7.77611 9.78189 8.17011 9.17756 8.67909 8.67818C9.17822 8.16955 9.78225 7.77586 10.4491 7.52455C11.0855 7.27818 11.8127 7.10909 12.8764 7.06H12.8773ZM21.0409 8.86C19.9864 8.81182 19.67 8.80182 17 8.80182C14.33 8.80182 14.0136 8.81182 12.9591 8.86C11.9836 8.90455 11.4545 9.06727 11.1018 9.20455C10.6355 9.38636 10.3018 9.60182 9.95182 9.95182C9.62004 10.2746 9.36471 10.6675 9.20455 11.1018C9.06727 11.4545 8.90455 11.9836 8.86 12.9591C8.81182 14.0136 8.80182 14.33 8.80182 17C8.80182 19.67 8.81182 19.9864 8.86 21.0409C8.90455 22.0164 9.06727 22.5455 9.20455 22.8982C9.36455 23.3318 9.62 23.7255 9.95182 24.0482C10.2745 24.38 10.6682 24.6355 11.1018 24.7955C11.4545 24.9327 11.9836 25.0955 12.9591 25.14C14.0136 25.1882 14.3291 25.1982 17 25.1982C19.6709 25.1982 19.9864 25.1882 21.0409 25.14C22.0164 25.0955 22.5455 24.9327 22.8982 24.7955C23.3645 24.6136 23.6982 24.3982 24.0482 24.0482C24.38 23.7255 24.6355 23.3318 24.7955 22.8982C24.9327 22.5455 25.0955 22.0164 25.14 21.0409C25.1882 19.9864 25.1982 19.67 25.1982 17C25.1982 14.33 25.1882 14.0136 25.14 12.9591C25.0955 11.9836 24.9327 11.4545 24.7955 11.1018C24.6136 10.6355 24.3982 10.3018 24.0482 9.95182C23.7254 9.62006 23.3325 9.36474 22.8982 9.20455C22.5455 9.06727 22.0164 8.90455 21.0409 8.86ZM15.7227 20.0827C16.4361 20.3797 17.2303 20.4197 17.9699 20.1961C18.7095 19.9725 19.3485 19.499 19.7778 18.8566C20.2071 18.2142 20.4 17.4426 20.3237 16.6737C20.2473 15.9049 19.9064 15.1863 19.3591 14.6409C19.0102 14.2923 18.5884 14.0253 18.1239 13.8592C17.6595 13.6932 17.164 13.6321 16.6732 13.6806C16.1823 13.729 15.7083 13.8856 15.2853 14.1392C14.8622 14.3928 14.5007 14.737 14.2266 15.1471C13.9526 15.5572 13.7729 16.023 13.7005 16.5109C13.628 16.9988 13.6647 17.4966 13.8078 17.9687C13.9508 18.4407 14.1968 18.8751 14.5279 19.2407C14.8591 19.6062 15.2671 19.8938 15.7227 20.0827ZM13.3655 13.3655C13.8427 12.8882 14.4094 12.5095 15.033 12.2512C15.6566 11.9929 16.325 11.86 17 11.86C17.675 11.86 18.3434 11.9929 18.967 12.2512C19.5906 12.5095 20.1572 12.8882 20.6345 13.3655C21.1118 13.8428 21.4905 14.4094 21.7488 15.033C22.0071 15.6566 22.14 16.325 22.14 17C22.14 17.675 22.0071 18.3434 21.7488 18.967C21.4905 19.5906 21.1118 20.1573 20.6345 20.6345C19.6706 21.5985 18.3632 22.14 17 22.14C15.6368 22.14 14.3294 21.5985 13.3655 20.6345C12.4015 19.6706 11.86 18.3632 11.86 17C11.86 15.6368 12.4015 14.3294 13.3655 13.3655ZM23.28 12.6255C23.3983 12.5139 23.493 12.3797 23.5585 12.2309C23.6239 12.0821 23.6589 11.9216 23.6613 11.759C23.6637 11.5964 23.6334 11.435 23.5723 11.2844C23.5111 11.1337 23.4204 10.9968 23.3054 10.8819C23.1904 10.7669 23.0536 10.6761 22.9029 10.615C22.7522 10.5539 22.5908 10.5236 22.4282 10.526C22.2657 10.5284 22.1052 10.5633 21.9564 10.6288C21.8076 10.6943 21.6734 10.789 21.5618 10.9073C21.3448 11.1373 21.226 11.4428 21.2306 11.759C21.2352 12.0752 21.3629 12.3772 21.5865 12.6008C21.8101 12.8244 22.1121 12.952 22.4282 12.9566C22.7444 12.9612 23.05 12.8424 23.28 12.6255Z" fill="#0F304D" />
											</svg>
										</a>
									</li>
								<?php endif; ?>
								<?php if ($social_links['youtube']) : ?>
									<li class="shrink-0 group">
										<a class="block transition duration-200" <?php if ($social_links['youtube'] != ' ') : ?> href="<?php echo esc_attr($social_links['youtube']) ?>" target="_blank" aria-label="youtube" <?php endif; ?>>
											<span class="hidden">YouTube</span>
											<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
												<rect class="group-hover:!fill-[#488ca0] transition duration-200" width="34" height="34" rx="17" fill="#60B8D1" />
												<path d="M28 14.71C28.0495 13.2786 27.7365 11.858 27.09 10.58C26.6514 10.0556 26.0427 9.70169 25.37 9.57998C22.5875 9.32751 19.7936 9.22403 17 9.26998C14.2167 9.22194 11.4327 9.32208 8.66003 9.56998C8.11185 9.6697 7.60454 9.92683 7.20003 10.31C6.30003 11.14 6.20003 12.56 6.10003 13.76C5.95494 15.9175 5.95494 18.0824 6.10003 20.24C6.12896 20.9154 6.22952 21.5858 6.40003 22.24C6.5206 22.745 6.76455 23.2123 7.11003 23.6C7.51729 24.0034 8.03641 24.2752 8.60003 24.38C10.7559 24.6461 12.9282 24.7564 15.1 24.71C18.6 24.76 21.67 24.71 25.3 24.43C25.8775 24.3316 26.4112 24.0595 26.83 23.65C27.11 23.3699 27.3191 23.0271 27.44 22.65C27.7977 21.5526 27.9733 20.4041 27.96 19.25C28 18.69 28 15.31 28 14.71ZM14.74 19.85V13.66L20.66 16.77C19 17.69 16.81 18.73 14.74 19.85Z" fill="#0F304D" />
											</svg>
										</a>
									</li>
								<?php endif; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>

			</div>
		</div>
	</div>

</header><!-- #masthead -->