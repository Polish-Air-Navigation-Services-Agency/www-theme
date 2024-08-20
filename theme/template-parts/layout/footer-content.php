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

<footer id="colophon" class="bg-primary py-10 relative overflow-hidden">
	<div class="decoration absolute left-0 top-[100px]">
		<svg xmlns="http://www.w3.org/2000/svg" width="57" height="150" viewBox="0 0 57 150" fill="none">
			<circle cx="-18" cy="75" r="75" fill="#60B8D1" />
		</svg>
	</div>

	<div class="container mx-auto pt-[60px] text-white">
		<div class="footer-header mb-[60px] flex basis">
			<h2 class="basis-1/2 text-[50px] lg:text-[60px] text-white leading-[64px] lg:leading-[72px] font-medium"><?php echo esc_html_e('Nie widzisz oferty pracy dla siebie?', '_pansa'); ?></h2>
			<div class="basis-1/2">
				<div class="w-full h-full flex justify-end items-center">
					<button class="group self-center bg-white hover:bg-primary !rounded-full !px-6 !py-[11px] text-[#0F304D] font-medium hover:text-white transition ease duration-200">
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

		<div class="footer-center flex justify-between">
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
				<div class="h-[140px] logo relative">
					<svg class="z-[1] relative" xmlns="http://www.w3.org/2000/svg" width="256" height="40" viewBox="0 0 256 40" fill="none">
						<path d="M256 38.8349C255.457 29.7445 253.825 21.276 251.106 14.5935C247.376 5.42455 242.014 0.296577 235.954 0.296577C229.894 0.296577 224.532 5.42455 220.803 14.5935C218.161 21.276 216.452 29.7445 215.908 38.8349H223.91C224.998 20.0319 231.151 8.22183 235.954 8.22183C240.757 8.22183 246.91 20.0319 248.075 38.8349H256ZM182.301 10.8427C182.301 8.27217 185.83 7.47866 194.378 7.55627C200.516 7.63388 206.31 8.48619 211.283 9.26324V1.75144C203.901 0.819636 198.003 0.275418 193.03 0.275418C183.473 0.275418 174.375 2.76179 174.375 10.3761C174.375 20.0888 183.309 20.9157 192.343 23.2567C199.223 25.039 204.679 25.6048 204.679 28.8692C204.679 31.5818 201.027 32.2093 192.713 32.2093C188.361 32.2093 183.311 31.7436 175.075 30.4995V38.2112C182.925 39.3542 188.983 39.9026 193.645 39.9026C207.088 39.9026 212.604 36.1726 212.604 29.7234C212.604 20.0888 203.198 18.5841 194.875 16.5389C186.559 14.4942 182.301 14.1062 182.301 10.8427ZM168.656 20.3428C168.656 15.4477 168.111 9.23171 167.024 1.07316H159.021C160.186 9.54216 160.936 14.8258 160.936 19.332C160.936 28.1119 160.575 32.3076 158.166 32.3076C154.825 32.3076 152.883 25.7812 150.785 18.8663C148.065 10.0859 144.414 0.373718 135.322 0.373718C127.553 0.373718 125.455 9.15364 125.455 19.0996C125.455 24.3047 125.999 30.8311 127.009 38.834H135.012C134.235 33.3179 133.38 26.6363 133.38 20.2647C133.302 10.863 134.235 8.06614 135.867 8.06614C139.208 8.06614 141.15 14.6706 143.248 21.5074C145.967 30.2873 149.619 40 158.788 40C165.237 40 168.656 34.4059 168.656 20.3428ZM112.3 38.8349H120.225C119.681 29.7445 118.049 21.276 115.329 14.5935C111.599 5.42455 106.238 0.296577 100.178 0.296577C94.1172 0.296577 88.7559 5.42455 85.0273 14.5935C82.3852 21.276 80.6754 29.7445 80.1312 38.8349H88.135C89.2225 20.0319 95.3759 8.22183 100.178 8.22183C104.981 8.22183 111.134 20.0319 112.3 38.8349ZM80.3208 13.4246C80.3208 4.33423 68.1227 -1.18273 51.4951 0.215674C42.7152 0.915584 40.0906 6.27639 40.0906 18.7083C40.0906 20.0864 40.131 21.6001 40.2077 23.2088C27.6897 22.4849 15.0368 18.7981 4.07814 12.8696L0.000976562 19.3955C11.5537 25.8536 24.4517 29.9256 40.7383 30.5032C40.9998 33.2446 41.3319 36.0668 41.7227 38.8349H49.7853C49.3568 36.2314 49.0003 33.3033 48.7256 30.4792C66.2897 29.6175 80.3208 22.9811 80.3208 13.4246ZM72.7601 13.1141C72.7601 17.6146 63.4345 22.6053 48.1828 23.2676C48.1127 21.887 48.0765 20.696 48.0765 19.7957C48.0765 12.4147 48.6325 8.27921 51.7712 7.78392C60.6866 6.3761 72.7601 8.58354 72.7601 13.1141Z" fill="white" />
					</svg>
					<svg class="absolute top-[-49px] left-[-82px]" xmlns="http://www.w3.org/2000/svg" width="450" height="151" viewBox="0 0 450 151" fill="none">
						<path d="M1.70801 1.19092C17.5997 28.9168 83.6662 75.8767 124.675 75.8767C143.949 75.8767 157.032 69.916 157.473 61.4727C157.921 52.9235 138.986 49.8804 130.194 52.5857C123.597 54.6154 123.194 73.4005 126.366 88.5469C130.086 106.308 142.934 125.581 163.222 125.581C184.185 125.581 198.116 109.369 198.116 88.628C198.116 72.5507 192.473 52.0055 182.305 52.0055C172.138 52.0055 165.414 70.9404 165.414 88.0755C165.414 128.624 209.762 149.965 268.148 149.965C332.787 149.965 355.722 120.802 355.722 96.8794C355.722 70.845 326.982 57.3193 299.256 53.6001C284.706 51.6482 261.048 48.866 261.048 59.0098C261.048 70.4313 291.817 65.1266 291.817 77.9947C291.817 88.5884 258.594 87.2806 227.574 74.2254C183.618 55.7262 185.034 26.1867 198.048 16.0291C211.911 5.20929 238.377 14.311 245.047 46.4604C247.861 60.0242 250.904 84.5056 241.255 84.5056C228.075 84.5056 229.751 49.4114 216.645 52.1406C208.496 53.8372 210.558 76.7561 212.993 87.9815C218.234 112.149 235.918 138.057 275.816 138.057C311.09 138.057 336.002 115.775 336.002 88.5469C336.002 73.869 329.836 52.0051 319.669 52.0051C309.501 52.0051 302.999 71.7834 302.999 88.0755C302.999 115.437 326.196 136.063 357.642 136.063C421.209 136.063 448.258 63.3664 448.258 63.3664" stroke="#60B8D1" stroke-width="2" />
					</svg>
				</div>
				<div class="[&_p]:text-right">
					<?php echo $company_details; ?>
				</div>
				<div class="socials">
					<h4><?php echo esc_html_e('Obserwuj nas', '_pansa'); ?></h4>
					<?php
					foreach ($social_links as $social_link) :
						echo $social_link;
					endforeach;
					?>
				</div>
			</div>

			<div>
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
		</div>

</footer><!-- #colophon -->