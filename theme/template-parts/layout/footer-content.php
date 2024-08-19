<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _pansa
 */

?>

<footer id="colophon" class="py-10">

	<?php if (has_nav_menu('menu-2')) : ?>
		<p>footer</p>
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

</footer><!-- #colophon -->