<?php
/**
 * include functions and definitions
 *
 * @package include
 */

if ( ! function_exists( 'include_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function include_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on include, use a find and replace
	 * to change 'include' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'include', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'include' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'include_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // include_setup
add_action( 'after_setup_theme', 'include_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function include_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'include_content_width', 640 );
}
add_action( 'after_setup_theme', 'include_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function include_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'include' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'include_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function include_scripts() {
	wp_enqueue_style( 'include-style', get_stylesheet_uri() );

	wp_enqueue_style( 'include-styles', get_template_directory_uri() . '/resources/css/styles.css' );


	wp_enqueue_script( 'include-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'include-scripts', get_template_directory_uri() . '/resources/js/script.js', array(), true );

	wp_enqueue_script( 'include-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'include_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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


if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Left',
        'id'   => 'footer-left-widget',
        'description'   => 'Left Footer widget position.',
        'before_widget' => '<div id="%1$s" class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="h-subheadline">',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Center',
        'id'   => 'footer-center-widget',
        'description'   => 'Centre Footer widget position.',
        'before_widget' => '<div id="%1$s" class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="h-subheadline">',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id'   => 'footer-right-widget',
        'description'   => 'Right Footer widget position.',
        'before_widget' => '<div id="%1$s" class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="h-subheadline">',
        'after_title'   => '</h2>'
    ));

	register_sidebar(array(
		'name' => 'Footer Right Right',
		'id'   => 'footer-right-right-widget',
		'description'   => 'Right Footer Right widget position.',
		'before_widget' => '<div id="%1$s" class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="h-subheadline">',
		'after_title'   => '</h2>'
	));



}

