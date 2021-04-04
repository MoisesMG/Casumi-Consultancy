<?php
/**
 * Casumi Consulting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Casumi_Consulting
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'casumi_consulting_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function casumi_consulting_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Casumi Consulting, use a find and replace
		 * to change 'casumi-consultancy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'casumi-consultancy', get_template_directory() . '/languages' );

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

		// Register Menu Locations
		register_nav_menus( array(
			'header_menu' => __( 'Primary Header Menu', 'casumi-consultancy' ),
			'footer_menu' => __( 'Footer Menu', 'casumi-consultancy' )
		) );

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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'casumi_consulting_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 80,
				'width'       => 180,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'casumi_consulting_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function casumi_consulting_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'casumi_consulting_content_width', 640 );
}
add_action( 'after_setup_theme', 'casumi_consulting_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function casumi_consulting_widgets_init() {
	/*** Register custom sidebars ***/
	register_sidebar( array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',        
		'name'=>__( 'Footer Sidebar Area 1', 'FCam' ),
		'id' => 'footer_sidebar_1')
	);

	register_sidebar( array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',        
		'name'=>__( 'Footer Sidebar Area 2', 'FCam' ),
		'id' => 'footer_sidebar_2')
	);

	register_sidebar( array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',        
		'name'=>__( 'Footer Sidebar Area 3', 'FCam' ),
		'id' => 'footer_sidebar_3')
	);

	register_sidebar( array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',        
		'name'=>__( 'Footer Sidebar Area 4', 'FCam' ),
		'id' => 'footer_sidebar_4')
	);
}
add_action( 'widgets_init', 'casumi_consulting_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function casumi_consulting_scripts() {
	wp_enqueue_style( 'casumi-consultancy-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	/**
	 * Bootstrap
	 */
	wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/dist/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/dist/js/bootstrap.min.js', array('jquery'), _S_VERSION, true);

	/*
	* Font Awesome
	* */
	wp_enqueue_style('font_awesome_css', get_stylesheet_directory_uri() . '/dist/css/fontawesome.min.css', array(), _S_VERSION);
	wp_enqueue_style('font_awesome_solid_css', get_stylesheet_directory_uri() . '/dist/css/solid.min.css', array(), _S_VERSION);
	wp_enqueue_style('font_awesome_brands_css', get_stylesheet_directory_uri() . '/dist/css/brands.min.css', array(), _S_VERSION);

	/*
	 * Slick Slider
	 * */
	wp_enqueue_style('slick_css', get_stylesheet_directory_uri() . '/dist/css/slick.css', array(),  _S_VERSION);
	wp_enqueue_style('slick_theme_css', get_stylesheet_directory_uri() . '/dist/css/slick-theme.css', array(),  _S_VERSION);
	wp_enqueue_script('slick_script', get_stylesheet_directory_uri() .'/dist/js/slick.min.js', array('jquery'), _S_VERSION, true);

	/*
	 * Main Scripts
	 * */
	wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/dist/js/main.js', array('jquery'), _S_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'casumi_consulting_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/*
* Menu Utilities
* */
function mm_get_menu_items($menu_location)
{
	$locations = get_nav_menu_locations();
	$menu = get_term($locations[$menu_location], 'nav_menu');

	return wp_get_nav_menu_items($menu->term_id);
}
function mm_get_nav_menu_item_children( $parent_id, $menu_location, $depth = true )
{
	$nav_menu_item_list = array();
	$nav_menu_items = mm_get_menu_items($menu_location);

	foreach ( $nav_menu_items as $nav_menu_item )	{
		if ( $nav_menu_item->menu_item_parent == $parent_id ) {
			$nav_menu_item_list[] = $nav_menu_item;
		}
	}

	return $nav_menu_item_list;
}
function get_current_url(){
	$obj_id = get_queried_object_id();
	$current_url = get_permalink( $obj_id );
	return $current_url;
}

/*
* Images Sizes
* */
add_image_size( 'image_slide', 400, 500, true );
