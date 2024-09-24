<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _pansa
 */

$company_details = get_field('company_details', 'option');
$social_links = get_field('social_links', 'option');

?>

<footer id="colophon" class="bg-primary lg:pt-10 relative overflow-hidden">
	<div class="decoration absolute left-0 top-[100px]">
		<svg xmlns="http://www.w3.org/2000/svg" width="57" height="150" viewBox="0 0 57 150" fill="none">
			<circle cx="-18" cy="75" r="75" fill="#60B8D1" />
		</svg>
	</div>

	<div class="container mx-auto pt-[60px] text-white">
		<div class="footer-top mb-[60px] flex flex-col lg:flex-row lg:basis">
			<h2 class="lg:basis-1/2 mb-10 lg:mb-0 text-[50px] lg:text-[60px] text-white leading-[64px] lg:leading-[72px] font-medium z-[1] relative"><?php echo esc_html_e('Have additional questions?', '_pansa'); ?></h2>
			<div class="lg:basis-1/2">
				<div class="w-full h-full flex lg:justify-end items-center">
					<button class="group self-center bg-white border-[1px] border-white hover:bg-primary !rounded-full !px-6 !py-[11px] text-[#0F304D] font-medium hover:text-white transition ease duration-200">
						<a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="flex items-center justify-center gap-[10px]">
							<?php esc_html_e('Skontaktuj się z nami', '_pansa'); ?>
							<svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
								<path class="group-hover:stroke-white" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</a>
					</button>
				</div>
			</div>
		</div>

		<div class="footer-center pb-[43px] flex flex-col lg:flex-row justify-between border-b-[1px] border-b-secondary">
			<div class="left-col">
				<?php if (has_nav_menu('menu-2')) : ?>
					<nav aria-label="<?php esc_attr_e('Footer Menu', '_pansa'); ?>">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_class'     => 'footer-menu-1',
								'depth'          => 1,
							)
						);
						?>
					</nav>
				<?php endif; ?>
			</div>
			<div class="right-col">
				<div class="mt-[-70px] lg:mt-0 h-[140px] logo relative scale-[0.6] lg:scale-100">
					<svg class="z-[1] relative" xmlns="http://www.w3.org/2000/svg" width="256" height="40" viewBox="0 0 256 40" fill="none">
						<path d="M256 38.8349C255.457 29.7445 253.825 21.276 251.106 14.5935C247.376 5.42455 242.014 0.296577 235.954 0.296577C229.894 0.296577 224.532 5.42455 220.803 14.5935C218.161 21.276 216.452 29.7445 215.908 38.8349H223.91C224.998 20.0319 231.151 8.22183 235.954 8.22183C240.757 8.22183 246.91 20.0319 248.075 38.8349H256ZM182.301 10.8427C182.301 8.27217 185.83 7.47866 194.378 7.55627C200.516 7.63388 206.31 8.48619 211.283 9.26324V1.75144C203.901 0.819636 198.003 0.275418 193.03 0.275418C183.473 0.275418 174.375 2.76179 174.375 10.3761C174.375 20.0888 183.309 20.9157 192.343 23.2567C199.223 25.039 204.679 25.6048 204.679 28.8692C204.679 31.5818 201.027 32.2093 192.713 32.2093C188.361 32.2093 183.311 31.7436 175.075 30.4995V38.2112C182.925 39.3542 188.983 39.9026 193.645 39.9026C207.088 39.9026 212.604 36.1726 212.604 29.7234C212.604 20.0888 203.198 18.5841 194.875 16.5389C186.559 14.4942 182.301 14.1062 182.301 10.8427ZM168.656 20.3428C168.656 15.4477 168.111 9.23171 167.024 1.07316H159.021C160.186 9.54216 160.936 14.8258 160.936 19.332C160.936 28.1119 160.575 32.3076 158.166 32.3076C154.825 32.3076 152.883 25.7812 150.785 18.8663C148.065 10.0859 144.414 0.373718 135.322 0.373718C127.553 0.373718 125.455 9.15364 125.455 19.0996C125.455 24.3047 125.999 30.8311 127.009 38.834H135.012C134.235 33.3179 133.38 26.6363 133.38 20.2647C133.302 10.863 134.235 8.06614 135.867 8.06614C139.208 8.06614 141.15 14.6706 143.248 21.5074C145.967 30.2873 149.619 40 158.788 40C165.237 40 168.656 34.4059 168.656 20.3428ZM112.3 38.8349H120.225C119.681 29.7445 118.049 21.276 115.329 14.5935C111.599 5.42455 106.238 0.296577 100.178 0.296577C94.1172 0.296577 88.7559 5.42455 85.0273 14.5935C82.3852 21.276 80.6754 29.7445 80.1312 38.8349H88.135C89.2225 20.0319 95.3759 8.22183 100.178 8.22183C104.981 8.22183 111.134 20.0319 112.3 38.8349ZM80.3208 13.4246C80.3208 4.33423 68.1227 -1.18273 51.4951 0.215674C42.7152 0.915584 40.0906 6.27639 40.0906 18.7083C40.0906 20.0864 40.131 21.6001 40.2077 23.2088C27.6897 22.4849 15.0368 18.7981 4.07814 12.8696L0.000976562 19.3955C11.5537 25.8536 24.4517 29.9256 40.7383 30.5032C40.9998 33.2446 41.3319 36.0668 41.7227 38.8349H49.7853C49.3568 36.2314 49.0003 33.3033 48.7256 30.4792C66.2897 29.6175 80.3208 22.9811 80.3208 13.4246ZM72.7601 13.1141C72.7601 17.6146 63.4345 22.6053 48.1828 23.2676C48.1127 21.887 48.0765 20.696 48.0765 19.7957C48.0765 12.4147 48.6325 8.27921 51.7712 7.78392C60.6866 6.3761 72.7601 8.58354 72.7601 13.1141Z" fill="white" />
					</svg>
					<svg class="absolute top-[-49px] left-[-82px]" xmlns="http://www.w3.org/2000/svg" width="450" height="151" viewBox="0 0 450 151" fill="none">
						<path d="M1.70801 1.19092C17.5997 28.9168 83.6662 75.8767 124.675 75.8767C143.949 75.8767 157.032 69.916 157.473 61.4727C157.921 52.9235 138.986 49.8804 130.194 52.5857C123.597 54.6154 123.194 73.4005 126.366 88.5469C130.086 106.308 142.934 125.581 163.222 125.581C184.185 125.581 198.116 109.369 198.116 88.628C198.116 72.5507 192.473 52.0055 182.305 52.0055C172.138 52.0055 165.414 70.9404 165.414 88.0755C165.414 128.624 209.762 149.965 268.148 149.965C332.787 149.965 355.722 120.802 355.722 96.8794C355.722 70.845 326.982 57.3193 299.256 53.6001C284.706 51.6482 261.048 48.866 261.048 59.0098C261.048 70.4313 291.817 65.1266 291.817 77.9947C291.817 88.5884 258.594 87.2806 227.574 74.2254C183.618 55.7262 185.034 26.1867 198.048 16.0291C211.911 5.20929 238.377 14.311 245.047 46.4604C247.861 60.0242 250.904 84.5056 241.255 84.5056C228.075 84.5056 229.751 49.4114 216.645 52.1406C208.496 53.8372 210.558 76.7561 212.993 87.9815C218.234 112.149 235.918 138.057 275.816 138.057C311.09 138.057 336.002 115.775 336.002 88.5469C336.002 73.869 329.836 52.0051 319.669 52.0051C309.501 52.0051 302.999 71.7834 302.999 88.0755C302.999 115.437 326.196 136.063 357.642 136.063C421.209 136.063 448.258 63.3664 448.258 63.3664" stroke="#60B8D1" stroke-width="2" />
					</svg>
				</div>
				<div class="mb-10 [&_p]:text-right">
					<?php echo $company_details; ?>
				</div>
				<div class="socials">
					<h3 class="mb-[10px] text-[20px] font-semibold text-right"><?php echo esc_html_e('Obserwuj nas', '_pansa'); ?></h3>
					<?php
					$socials_count = count(array_filter(array_values($social_links)));
					if ($socials_count > 0) :
					?>
						<ul class="flex gap-3 justify-end">
							<?php if ($social_links['facebook']) : ?>
								<li class="shrink-0 group">
									<a class="block transition duration-200" <?php if ($social_links['facebook'] != ' ') : ?> href="<?php echo esc_attr($social_links['facebook']) ?>" target="_blank" <?php endif; ?>>
										<span class="hidden">Facebook</span>
										<svg class="group-hover:!fill-[#488ca0]" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
											<rect width="34" height="34" rx="17" fill="#60B8D1" />
											<path d="M22.8174 18.5625L23.5117 14.0381H19.1704V11.1021C19.1704 9.86426 19.7769 8.65771 21.7212 8.65771H23.6948V4.80566C23.6948 4.80566 21.9038 4.5 20.1914 4.5C16.6162 4.5 14.2793 6.66699 14.2793 10.5898V14.0381H10.3052V18.5625H14.2793V29.5H19.1704V18.5625H22.8174Z" fill="#0F304D" />
										</svg>
									</a>
								</li>
							<?php endif; ?>
							<?php if ($social_links['linkedin']) : ?>
								<li class="shrink-0">
									<a class="block transition duration-200" <?php if ($social_links['linkedin'] != ' ') : ?> href="<?php echo esc_attr($social_links['linkedin']) ?>" target="_blank" <?php endif; ?>>
										<span class="hidden">Linkedin</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
											<rect width="34" height="34" rx="17" fill="#60B8D1" />
											<path d="M7.375 27H11.125V13.125H7.375V27ZM9.25 7C8 7 7 8 7 9.25C7 10.5 8 11.5 9.25 11.5C10.5 11.5 11.5 10.5 11.5 9.25C11.5 8 10.5 7 9.25 7ZM17.5 15.25V13.125H13.75V27H17.5V19.875C17.5 15.875 22.625 15.625 22.625 19.875V27H26.375V18.5C26.375 11.75 19.25 12 17.5 15.25Z" fill="#0F304D" />
										</svg>
									</a>
								</li>
							<?php endif; ?>
							<?php if ($social_links['x']) : ?>
								<li class="shrink-0">
									<a class="block transition duration-200" <?php if ($social_links['x'] != ' ') : ?> href="<?php echo esc_attr($social_links['x']) ?>" target="_blank" <?php endif; ?>>
										<span class="hidden">X</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
											<rect width="34" height="34" rx="17" fill="#60B8D1" />
											<path d="M18.6469 15.4688L25.9322 7H24.2056L17.88 14.3531L12.8275 7H7L14.6403 18.1194L7 27H8.72656L15.4069 19.2348L20.7425 27H26.57L18.6464 15.4688H18.6469ZM16.2822 18.2172L15.508 17.11L9.34859 8.29969H12.0005L16.9709 15.41L17.745 16.5172L24.2064 25.7594H21.5548L16.2822 18.2177V18.2172Z" fill="#0F304D" />
										</svg>
									</a>
								</li>
							<?php endif; ?>
							<?php if ($social_links['instagram']) : ?>
								<li class="shrink-0">
									<a class="block transition duration-200" <?php if ($social_links['instagram'] != ' ') : ?> href="<?php echo esc_attr($social_links['instagram']) ?>" target="_blank" <?php endif; ?>>
										<span class="hidden">Instagram</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
											<rect width="34" height="34" rx="17" fill="#60B8D1" />
											<path fill-rule="evenodd" clip-rule="evenodd" d="M12.8773 7.06C13.9436 7.01091 14.2836 7 17 7C19.7164 7 20.0564 7.01182 21.1218 7.06C22.1873 7.10818 22.9145 7.27818 23.5509 7.52455C24.2173 7.77636 24.8218 8.17 25.3218 8.67909C25.8309 9.17818 26.2236 9.78182 26.4745 10.4491C26.7218 11.0855 26.8909 11.8127 26.94 12.8764C26.9891 13.9445 27 14.2845 27 17C27 19.7164 26.9882 20.0564 26.94 21.1227C26.8918 22.1864 26.7218 22.9136 26.4745 23.55C26.2236 24.2174 25.8303 24.822 25.3218 25.3218C24.8218 25.8309 24.2173 26.2236 23.5509 26.4745C22.9145 26.7218 22.1873 26.8909 21.1236 26.94C20.0564 26.9891 19.7164 27 17 27C14.2836 27 13.9436 26.9882 12.8773 26.94C11.8136 26.8918 11.0864 26.7218 10.45 26.4745C9.78265 26.2236 9.17802 25.8302 8.67818 25.3218C8.16944 24.8224 7.77574 24.2181 7.52455 23.5509C7.27818 22.9145 7.10909 22.1873 7.06 21.1236C7.01091 20.0555 7 19.7155 7 17C7 14.2836 7.01182 13.9436 7.06 12.8782C7.10818 11.8127 7.27818 11.0855 7.52455 10.4491C7.77611 9.78189 8.17011 9.17756 8.67909 8.67818C9.17822 8.16955 9.78225 7.77586 10.4491 7.52455C11.0855 7.27818 11.8127 7.10909 12.8764 7.06H12.8773ZM21.0409 8.86C19.9864 8.81182 19.67 8.80182 17 8.80182C14.33 8.80182 14.0136 8.81182 12.9591 8.86C11.9836 8.90455 11.4545 9.06727 11.1018 9.20455C10.6355 9.38636 10.3018 9.60182 9.95182 9.95182C9.62004 10.2746 9.36471 10.6675 9.20455 11.1018C9.06727 11.4545 8.90455 11.9836 8.86 12.9591C8.81182 14.0136 8.80182 14.33 8.80182 17C8.80182 19.67 8.81182 19.9864 8.86 21.0409C8.90455 22.0164 9.06727 22.5455 9.20455 22.8982C9.36455 23.3318 9.62 23.7255 9.95182 24.0482C10.2745 24.38 10.6682 24.6355 11.1018 24.7955C11.4545 24.9327 11.9836 25.0955 12.9591 25.14C14.0136 25.1882 14.3291 25.1982 17 25.1982C19.6709 25.1982 19.9864 25.1882 21.0409 25.14C22.0164 25.0955 22.5455 24.9327 22.8982 24.7955C23.3645 24.6136 23.6982 24.3982 24.0482 24.0482C24.38 23.7255 24.6355 23.3318 24.7955 22.8982C24.9327 22.5455 25.0955 22.0164 25.14 21.0409C25.1882 19.9864 25.1982 19.67 25.1982 17C25.1982 14.33 25.1882 14.0136 25.14 12.9591C25.0955 11.9836 24.9327 11.4545 24.7955 11.1018C24.6136 10.6355 24.3982 10.3018 24.0482 9.95182C23.7254 9.62006 23.3325 9.36474 22.8982 9.20455C22.5455 9.06727 22.0164 8.90455 21.0409 8.86ZM15.7227 20.0827C16.4361 20.3797 17.2303 20.4197 17.9699 20.1961C18.7095 19.9725 19.3485 19.499 19.7778 18.8566C20.2071 18.2142 20.4 17.4426 20.3237 16.6737C20.2473 15.9049 19.9064 15.1863 19.3591 14.6409C19.0102 14.2923 18.5884 14.0253 18.1239 13.8592C17.6595 13.6932 17.164 13.6321 16.6732 13.6806C16.1823 13.729 15.7083 13.8856 15.2853 14.1392C14.8622 14.3928 14.5007 14.737 14.2266 15.1471C13.9526 15.5572 13.7729 16.023 13.7005 16.5109C13.628 16.9988 13.6647 17.4966 13.8078 17.9687C13.9508 18.4407 14.1968 18.8751 14.5279 19.2407C14.8591 19.6062 15.2671 19.8938 15.7227 20.0827ZM13.3655 13.3655C13.8427 12.8882 14.4094 12.5095 15.033 12.2512C15.6566 11.9929 16.325 11.86 17 11.86C17.675 11.86 18.3434 11.9929 18.967 12.2512C19.5906 12.5095 20.1572 12.8882 20.6345 13.3655C21.1118 13.8428 21.4905 14.4094 21.7488 15.033C22.0071 15.6566 22.14 16.325 22.14 17C22.14 17.675 22.0071 18.3434 21.7488 18.967C21.4905 19.5906 21.1118 20.1573 20.6345 20.6345C19.6706 21.5985 18.3632 22.14 17 22.14C15.6368 22.14 14.3294 21.5985 13.3655 20.6345C12.4015 19.6706 11.86 18.3632 11.86 17C11.86 15.6368 12.4015 14.3294 13.3655 13.3655ZM23.28 12.6255C23.3983 12.5139 23.493 12.3797 23.5585 12.2309C23.6239 12.0821 23.6589 11.9216 23.6613 11.759C23.6637 11.5964 23.6334 11.435 23.5723 11.2844C23.5111 11.1337 23.4204 10.9968 23.3054 10.8819C23.1904 10.7669 23.0536 10.6761 22.9029 10.615C22.7522 10.5539 22.5908 10.5236 22.4282 10.526C22.2657 10.5284 22.1052 10.5633 21.9564 10.6288C21.8076 10.6943 21.6734 10.789 21.5618 10.9073C21.3448 11.1373 21.226 11.4428 21.2306 11.759C21.2352 12.0752 21.3629 12.3772 21.5865 12.6008C21.8101 12.8244 22.1121 12.952 22.4282 12.9566C22.7444 12.9612 23.05 12.8424 23.28 12.6255Z" fill="#0F304D" />
										</svg>
									</a>
								</li>
							<?php endif; ?>
							<?php if ($social_links['youtube']) : ?>
								<li class="shrink-0">
									<a class="block transition duration-200" <?php if ($social_links['youtube'] != ' ') : ?> href="<?php echo esc_attr($social_links['youtube']) ?>" target="_blank" <?php endif; ?>>
										<span class="hidden">YouTube</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
											<rect width="34" height="34" rx="17" fill="#60B8D1" />
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

		<div class="footer-bottom py-4 flex justify-between font-medium">
			<span class="font-normal">© PANSA <?php echo date('Y'); ?>. All rights reserved</span>
			<?php if (has_nav_menu('menu-2')) : ?>
				<nav aria-label="<?php esc_attr_e('Footer Menu', '_pansa'); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-3',
							'menu_class'     => 'footer-menu-2',
							'depth'          => 1,
						)
					);
					?>
				</nav>
			<?php endif; ?>
		</div>

</footer><!-- #colophon -->