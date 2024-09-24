<?php

/**
 * _pansa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _pansa
 */

if (!defined('_PANSA_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('_PANSA_VERSION', '0.1.0');
}

if (!defined('_PANSA_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `_pansa_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'_PANSA_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if (!function_exists('_pansa_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _pansa_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _pansa, use a find and replace
		 * to change '_pansa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('_pansa', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __('Primary', '_pansa'),
				'menu-2' => __('Footer Menu', '_pansa'),
				'menu-3' => __('Footer Bottom Menu', '_pansa'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
		add_editor_style('style-editor-extra.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Remove support for block templates.
		remove_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', '_pansa_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _pansa_widgets_init()
{
	register_sidebar(
		array(
			'name'          => __('Footer', '_pansa'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your footer.', '_pansa'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', '_pansa_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function _pansa_scripts()
{
	wp_enqueue_style('_pansa-style', get_stylesheet_uri(), array(), _PANSA_VERSION);

	wp_enqueue_script('_pansa-script', get_template_directory_uri() . '/js/script.min.js', array(), _PANSA_VERSION, true);
	wp_enqueue_script('lightbox', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', '2.11.4',array('strategy' => 'defer'));


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', '_pansa_scripts');

/**
 * Enqueue the block editor script.
 */
function _pansa_enqueue_block_editor_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'_pansa-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			_PANSA_VERSION,
			true
		);
		wp_add_inline_script('_pansa-editor', "tailwindTypographyClasses = '" . esc_attr(_PANSA_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}
add_action('enqueue_block_assets', '_pansa_enqueue_block_editor_script');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function _pansa_tinymce_add_class($settings)
{
	$settings['body_class'] = _PANSA_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', '_pansa_tinymce_add_class');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

// Remove default block styles css frontend
function pansa_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'pansa_remove_wp_block_library_css' );


function pansa_img_responsive($img, $classes, $dimensions, $loading = '')
{
	if (!isset($img) || !isset($img['url']) || !isset($img['ID'])) {
		return '';
	}
	$url = $img['url'];
	$ID = $img['ID'];
	$alt = isset($img['alt']) ? $img['alt'] : '';

	$default_size = 'full';
	$dimensions_string = '';
	if (isset($dimensions) && count($dimensions) == 2) {
		$dimensions_string = 'width="' . $dimensions[0] . '" height="' . $dimensions[1] . '" ';
		$default_size = get_best_fit_image_size($dimensions[0]);
	}

	$srcset_string = 'srcset="' . wp_get_attachment_image_srcset($ID, $default_size) . '" ';
	$sizes_string = 'sizes="' . wp_get_attachment_image_sizes($ID, $default_size, wp_get_attachment_metadata($ID)) . '" ';
	$alt_string = $alt == '' ? '' : ('alt="' . $alt . '" ');
	$loading_string = '';
	if ($loading != '') {
		$loading_string = 'loading="' . $loading . '" ';
	}

	return '<img class="' . $classes . '" ' . $dimensions_string . 'src="' . $url . '" ' . $srcset_string . $sizes_string . $alt_string . $loading_string . '/>';
}

function get_best_fit_image_size($custom_width)
{
	$image_sizes = array(
		'thumbnail' => 150,
		'medium' => 300,
		'medium_large' => 768,
		'large' => 1024,
	);

	$best_fit_size = 'full';

	foreach ($image_sizes as $size => $width) {
		if ($width > $custom_width) {
			break;
		}
		$best_fit_size = $size;
	}

	return $best_fit_size;
}