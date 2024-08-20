<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _pansa
 */

?>

<footer id="colophon" class="py-10 flex items-center justify-center">
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

</footer><!-- #colophon -->