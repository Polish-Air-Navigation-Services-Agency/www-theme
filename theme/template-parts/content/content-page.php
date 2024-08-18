<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _pansa
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div <?php pansa_content_class('entry-content'); ?>>
		<?php if (get_the_content()) : ?>
			<div class="container">
				<?php the_content(); ?>
			</div>

		<?php endif;

		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', 'pansa'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						__('Edit <span class="sr-only">%s</span>', 'pansa'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->