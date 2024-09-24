<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pansa
 */

?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="page">
		TEST
	<img src="<?php echo get_template_directory_uri(); ?>/images/prev.png" alt="Previous Image">
		<a href="#content" class="sr-only"><?php esc_html_e('Skip to content', '_pansa'); ?></a>

		<?php get_template_part('template-parts/layout/header', 'content'); ?>

		<div id="content">