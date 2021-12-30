<?php
/**
 * excel health functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package excel_health
 */

if ( ! function_exists( 'excel_health_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function excel_health_setup() {

	// define(SINGLE_PATH, TEMPLATEPATH);
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on excel health, use a find and replace
	 * to change 'excel-health' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'excel-health', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'excel-health' ),
		'topbar' => esc_html__( 'Top Bar', 'excel-health' ),
		'footer' => esc_html__( 'Footer', 'excel-health' ),
		'footer-legal' => esc_html__( 'Footer Legal', 'excel-health' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'excel_health_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'excel_health_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function excel_health_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'excel_health_content_width', 640 );
}
add_action( 'after_setup_theme', 'excel_health_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function excel_health_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'excel-health' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'excel-health' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'excel_health_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function excel_health_scripts() {
	wp_enqueue_style('excel-health-styles', get_template_directory_uri().'/assets/styles.css');
    wp_enqueue_script('excel-health-scripts', get_template_directory_uri().'/assets/scripts.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'excel_health_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/custom-post-types.php';

// add_filter('single_template', 'excel_single_template');

// function excel_single_template($single) {
//   global $wp_query, $post;
//   // check for post type
//   if (file_exists(SINGLE_PATH . "/single-".$post->post_type . ".php")) {
// 	return SINGLE_PATH . "/single-" . $post->post_type . ".php";
//   } // otherwise, check for categories
//   else {
//     foreach((array)get_the_category() as $cat) :
// 	if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
// 	  return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
//  	elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
// 	  return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
//     endforeach;
//   }
//   return $single;
// }

function flexible_content_helper_link($link) {
    switch ($link['link_to']) {
        case 'external':
            if($link['link']) return $link['link'];
            return false;
            break;

        case 'internal':
            if($link['link']) return get_permalink($link['link']);
            return false;
            break;
        
        default:
            return false;
            break;
    }
}

require get_template_directory() . '/inc/alert-topbar.php'; // functions for generating alert 'top bars'

function eh_clean_class($identifier) {

  // Convert or strip certain special characters, by convention.
  $filter = [
    ' ' => '-',
    '__' => '__', // preserve BEM-style double-underscores
    '_' => '-', // otherwise, convert single underscore to dash
    '/' => '-',
    '[' => '-',
    ']' => '',
  ];
  $identifier = strtr($identifier, $filter);

  // Valid characters in a CSS identifier are:
  // - the hyphen (U+002D)
  // - a-z (U+0030 - U+0039)
  // - A-Z (U+0041 - U+005A)
  // - the underscore (U+005F)
  // - 0-9 (U+0061 - U+007A)
  // - ISO 10646 characters U+00A1 and higher
  // We strip out any character not in the above list.
  $identifier = preg_replace('/[^\\x{002D}\\x{0030}-\\x{0039}\\x{0041}-\\x{005A}\\x{005F}\\x{0061}-\\x{007A}\\x{00A1}-\\x{FFFF}]/u', '', $identifier);

  // Convert everything to lower case.
  return strtolower($identifier);
}
