<?php
/**
 * Infinity functions and definitions
 *
 * @package Infinity
 */

/**
 * Define Constants
 * ================
 */
define('TRANSPORT_THEME_ROOT', get_template_directory_uri());
define('TRANSPORT_PARENT_THEME_NAME', str_replace('TM', '', wp_get_theme('tm_transport')->get('Name')));
define('TRANSPORT_PARENT_THEME_VERSION', wp_get_theme('tm_transport')->get('Version'));
define('TRANSPORT_PARENT_THEME_AUTHOR', wp_get_theme('tm_transport')->get('Author'));
define('TRANSPORT_PRIMARY_COLOR', '#ca1f26');
define('TRANSPORT_SECONDARY_COLOR', '#232331');

if (!function_exists('infinity_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 * ===========================================================================
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function infinity_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Infinity, use a find and replace
		 * to change 'infinity' to the name of your theme in all the template files
		 */
		load_theme_textdomain('tm_transport', get_template_directory() . '/languages');

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
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus([
			'primary' => esc_html__('Primary Menu', 'tm_transport'),
			'social' => esc_html__('Social Profile Menu', 'tm_transport'),
			'top' => esc_html__('Top Menu', 'tm_transport'),

		]);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support('post-formats', ['aside', 'image', 'video', 'quote', 'link']);

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('infinity_custom_background_args', [
			'default-color' => '#ffffff',
			'default-image' => '',
		]));

		//support woocommerce.
		add_theme_support('woocommerce');
		add_theme_support('wc-product-gallery-zoom');
		add_theme_support('wc-product-gallery-lightbox');
		add_theme_support('wc-product-gallery-slider');

		//support gutenberg
		add_theme_support('align-wide');
		add_theme_support('wp-block-styles');
		add_theme_support('editor-styles');
		add_theme_support('responsive-embeds');

		add_filter('essgrid_set_cpt', '__return_true', 10, 2);
	}
endif; // infinity_setup.
add_action('after_setup_theme', 'infinity_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * ===========================================================================
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if (!isset($content_width)) {
	$content_width = 640; /* pixels */
}

/**
 * Register widget area.
 * ====================
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function infinity_widgets_init() {
	register_sidebar([
		'name' => esc_html__('Sidebar', 'tm_transport'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Sidebar', 'tm_transport'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Top Slider', 'tm_transport'),
		'id' => 'top-slider',
		'description' => esc_html__('Top Slider', 'tm_transport'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Header Right', 'tm_transport'),
		'id' => 'header-right',
		'description' => esc_html__('Header Right', 'tm_transport'),
		'before_widget' => '<aside id="%1$s" class="widget header-right %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Top Right', 'tm_transport'),
		'id' => 'top-right',
		'description' => esc_html__('Top Right', 'tm_transport'),
		'before_widget' => '<aside id="%1$s" class="widget top-right %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	]);

	if (class_exists('WooCommerce')) {
		register_sidebar([
			'name' => esc_html__('Sidebar for shop', 'tm_transport'),
			'id' => 'sidebar-shop',
			'description' => esc_html__('Sidebar for shop', 'tm_transport'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		]);
	}
	register_sidebar([
		'name' => esc_html__('Footer 1 Widget Area', 'tm_transport'),
		'id' => 'footer',
		'description' => esc_html__('Footer 1 Widget Area', 'tm_transport'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Footer 2 Widget Area', 'tm_transport'),
		'id' => 'footer2',
		'description' => esc_html__('Footer 2 Widget Area', 'tm_transport'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	]);

	register_sidebar([
		'name' => esc_html__('Footer 3 Widget Area', 'tm_transport'),
		'id' => 'footer3',
		'description' => esc_html__('Footer 3 Widget Area', 'tm_transport'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title"><span>',
		'after_title' => '</span></h3>',
	]);
}

add_action('widgets_init', 'infinity_widgets_init');

/**
 * Enqueue scripts and styles.
 * ==========================
 */
function infinity_scripts() {
	wp_enqueue_style('infinity-style', TRANSPORT_THEME_ROOT . '/style.css');
	wp_enqueue_style('infinity-main', TRANSPORT_THEME_ROOT . '/css/main.css');
	wp_enqueue_style('font-awesome', TRANSPORT_THEME_ROOT . '/inc/awesome/css/all.css');

	wp_enqueue_style('jquery.menu-css', TRANSPORT_THEME_ROOT . '/js/jQuery.mmenu/css/jquery.mmenu.all.css');
	wp_enqueue_script('jquery.menu-js', TRANSPORT_THEME_ROOT . '/js/jQuery.mmenu/js/jquery.mmenu.all.min.js',
		['jquery'], TRANSPORT_PARENT_THEME_VERSION, true);

	if (Kirki::get_option('infinity', 'nav_sticky_enable') == 1) {
		wp_enqueue_script('head-room-jquery', TRANSPORT_THEME_ROOT . '/js/jQuery.headroom.min.js');
		wp_enqueue_script('head-room', TRANSPORT_THEME_ROOT . '/js/headroom.min.js');
	}
	wp_enqueue_script('owl-carousel', TRANSPORT_THEME_ROOT . '/js/owl.carousel.min.js', ['jquery'], null, true);
	wp_enqueue_script('main', TRANSPORT_THEME_ROOT . '/js/main.js', ['jquery'], null, true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'infinity_scripts');

add_action('enqueue_block_editor_assets', function () {
	wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Open+Sans|Oswald');
	wp_enqueue_style('editor-style', TRANSPORT_THEME_ROOT . '/editor-style.css');
});

/**
 * Setup custom css.
 * ================
 */
function custom_css() {
	$custom_css = Kirki::get_option('infinity', 'custom_css');
	if (Kirki::get_option('infinity', 'custom_css_enable') == 1) {
		wp_add_inline_style('infinity-main', wp_kses_post(html_entity_decode($custom_css, ENT_QUOTES)));
	}
}

add_action('wp_enqueue_scripts', 'custom_css');

/**
 * Implement other setup.
 * ======================
 */
// Load core
require_once get_template_directory() . '/core/initial.php';
require_once get_template_directory() . '/inc/customizer/customizer.php';
require_once get_template_directory() . '/inc/oneclick.php';
require_once get_template_directory() . '/inc/class-walker-nav-menu.php';
require_once get_template_directory() . '/inc/class-transport.php';

// Load TGM
require_once get_template_directory() . '/inc/tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/tgm-plugin-registration.php';

// Load metabox
require_once get_template_directory() . '/inc/meta-box.php';

// Load custom js
require_once get_template_directory() . '/inc/custom-js.php';

// Load custom header
require_once get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require_once get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require_once get_template_directory() . '/inc/extras.php';

// Load Jetpack compatibility file.
locate_template('/inc/jetpack.php', true);

// Support shortcode in widget
add_filter('widget_text', 'do_shortcode');

// Extend VC
if (class_exists('WPBakeryVisualComposerAbstract')) {
	function require_vc_extend() {
		require locate_template('/inc/vc-extend.php');
	}

	add_action('init', 'require_vc_extend', 2);
}

/**
 * Woocommerce Setup
 * =================
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

// Switch to 3 columns
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

// 3 related products
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args');
function jk_related_products_args($args) {
	$args['posts_per_page'] = 3; // 3 related products
	$args['columns'] = 3; // arranged in 3 columns

	return $args;
}

add_filter('image_downsize', function ($out, $id, $size) {
	global $all_image_sizes;

	if (!isset($all_image_sizes)) {
		global $_wp_additional_image_sizes;

		$all_image_sizes = [];
		$interim_sizes = get_intermediate_image_sizes();

		foreach ($interim_sizes as $size_name) {
			if (in_array($size_name, ['thumbnail', 'medium', 'large'], true)) {
				$all_image_sizes[$size_name]['width'] = get_option($size_name . '_size_w');
				$all_image_sizes[$size_name]['height'] = get_option($size_name . '_size_h');
				$all_image_sizes[$size_name]['crop'] = (bool)get_option($size_name . '_crop');
			} elseif (isset($_wp_additional_image_sizes[$size_name])) {
				$all_image_sizes[$size_name] = $_wp_additional_image_sizes[$size_name];
			}
		}
	}

	$all_sizes = $all_image_sizes;

	$image_data = wp_get_attachment_metadata($id);

	if (!is_array($image_data)) {
		return false;
	}

	if (is_string($size)) {
		if (empty($all_sizes[$size])) {
			return false;
		}

		if (!empty($image_data['sizes'][$size]) && !empty($all_sizes[$size])) {
			if (
				$all_sizes[$size]['width'] === $image_data['sizes'][$size]['width'] &&
				$all_sizes[$size]['height'] === $image_data['sizes'][$size]['height']
			) {
				return false;
			}

			if (!empty($image_data['sizes'][$size]['width_query']) && !empty($image_data['sizes'][$size]['height_query'])) {
				if (
					$image_data['sizes'][$size]['width_query'] === $all_sizes[$size]['width'] &&
					$image_data['sizes'][$size]['height_query'] === $all_sizes[$size]['height']
				) {
					return false;
				}
			}
		}

		$resized = image_make_intermediate_size(
			get_attached_file($id),
			$all_sizes[$size]['width'],
			$all_sizes[$size]['height'],
			$all_sizes[$size]['crop']
		);

		if (!$resized) {
			return false;
		}

		$image_data['sizes'][$size] = $resized;

		$image_data['sizes'][$size]['width_query'] = $all_sizes[$size]['width'];
		$image_data['sizes'][$size]['height_query'] = $all_sizes[$size]['height'];

		wp_update_attachment_metadata($id, $image_data);

		$att_url = wp_get_attachment_url($id);

		return [dirname($att_url) . '/' . $resized['file'], $resized['width'], $resized['height'], true];
	} elseif (is_array($size)) {
		$image_path = get_attached_file($id);
		$crop = array_key_exists(2, $size) ? $size[2] : true;
		$new_width = $size[0];
		$new_height = $size[1];

		if (!$crop) {
			if (class_exists('Jetpack') && Jetpack::is_module_active('photon')) {
				add_filter('jetpack_photon_override_image_downsize', '__return_true');
				$true_data = wp_get_attachment_image_src($id, 'large');
			} else {
				$true_data = wp_get_attachment_image_src($id, 'large');
			}

			if ($true_data[1] > $true_data[2]) {
				$ratio = $true_data[1] / $size[0];
				$new_height = round($true_data[2] / $ratio);
				$new_width = $size[0];
			} else {
				$ratio = $true_data[2] / $size[1];
				$new_height = $size[1];
				$new_width = round($true_data[1] / $ratio);
			}
		}

		$image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
		$image_path = preg_replace(
			'/^(.*)\.' . $image_ext . '$/',
			sprintf('$1-%sx%s.%s', $new_width, $new_height, $image_ext),
			$image_path
		);
		$att_url = wp_get_attachment_url($id);

		if (file_exists($image_path)) {
			return [dirname($att_url) . '/' . basename($image_path), $new_width, $new_height, $crop];
		}

		$resized = image_make_intermediate_size(get_attached_file($id), $size[0], $size[1], $crop);

		$image_data = wp_get_attachment_metadata($id);

		$image_data['sizes'][$size[0] . 'x' . $size[1]] = $resized;

		wp_update_attachment_metadata($id, $image_data);

		if (!$resized) {
			return false;
		}

		return [dirname($att_url) . '/' . $resized['file'], $resized['width'], $resized['height'], $crop];
	}

	return false;
}, 10, 3);
