<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _pansa
 */

?>

<footer id="colophon" class="bg-primary py-10">
	<div class="container mx-auto pt-[60px]">
		<div class="footer-header mb-[60px] flex basis">
			<h2 class="basis-1/2 text-[50px] lg:text-[60px] text-white leading-[64px] lg:leading-[72px] font-medium"><?php echo esc_html_e('Nie widzisz oferty pracy dla siebie?', '_pansa'); ?></h2>
			<div class="basis-1/2">
				<button class="group bg-white hover:bg-primary !rounded-full !px-6 !py-[11px] text-[#0F304D] hover:text-white transition ease duration-200">
					<a href="<?php echo esc_url(home_url('/kontakt')); ?>" class="flex items-center justify-center gap-[10px]">
						<?php esc_html_e('Skontaktuj się z nami', '_pansa'); ?>
						<svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
							<path class="group-hover:stroke-white" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
				</button>
			</div>
		</div>

		<div>
			<?php if (has_nav_menu('menu-2')) : ?>
				<nav aria-label="<?php esc_attr_e('Footer Menu', '_pansa'); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav>
			<?php endif; ?>
		</div>

		<div>
			<?php if (has_nav_menu('menu-2')) : ?>
				<nav aria-label="<?php esc_attr_e('Footer Menu', '_pansa'); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-3',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav>
			<?php endif; ?>
		</div>
	</div>

</footer><!-- #colophon -->