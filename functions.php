<?php
/**
 * Infinity functions and definitions
 *
 * @package Infinity
 */

if ( ! function_exists( 'infinity_setup' ) ) :
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
		load_theme_textdomain( 'infinity', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'infinity-post-thumb', 848, 450, true );
		add_image_size( 'infinity-small-thumb', 120, 90, true );
		add_image_size( 'infinity-medium-thumb', 370, 220, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'infinity' ),
			'social'  => esc_html__( 'Social Profile Menu', 'infinity' ),
			'mobile'  => esc_html__( 'Mobile Menu', 'tm-polygon' ),
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
			'caption'
		) );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link'
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'infinity_custom_background_args', array(
			'default-color' => '#ffffff',
			'default-image' => '',
		) ) );

	}
endif; // infinity_setup
add_action( 'after_setup_theme', 'infinity_setup' );

/**
 * Define Constants
 * ================
 */
define( 'THEME_ROOT', esc_url( get_template_directory_uri() ) );
define( 'PARENT_THEME_NAME', wp_get_theme( 'tm-zebre' )->get( 'Name' ) );
define( 'PARENT_THEME_VERSION', wp_get_theme( 'tm-zebre' )->get( 'Version' ) );
define( 'PARENT_THEME_AUTHOR', wp_get_theme( 'tm-zebre' )->get( 'Author' ) );

define( 'PRIMARY_COLOR', '#FDE231' );
define( 'SECONDARY_COLOR', '#111111' );
define( 'PRIMARY_FONT', 'Questrial' );
define( 'PORTFOLIO_TYPE', 'project' );
define( 'AVATAR_DEFAULT', THEME_ROOT . '/images/default-avatar.png' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * ===========================================================================
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

/**
 * Register widget area.
 * ====================
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function infinity_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'infinity' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}

add_action( 'widgets_init', 'infinity_widgets_init' );

/**
 * Enqueue scripts and styles.
 * ==========================
 */
function infinity_scripts() {
	wp_enqueue_style( 'infinity-style', THEME_ROOT . '/style.css' );
	wp_enqueue_style( 'infinity-main', THEME_ROOT . '/css/main.css' );
	wp_enqueue_style( 'infinity-font-awesome', THEME_ROOT . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'infinity-pe-icon-7', THEME_ROOT . '/css/pe-icon-7-stroke.css' );
	wp_enqueue_style( 'infinity-pe-icon-7-helper', THEME_ROOT . '/css/helper.css' );
	wp_enqueue_style( 'infinity-onepage-scroll', THEME_ROOT . '/css/onepage-scroll.css' );


	if ( Kirki::get_option( 'infinity', 'smoothscroll_enable' ) == 1 ) {
		wp_enqueue_script( 'infinity-js-smooth-scroll', THEME_ROOT . '/js/smoothscroll.js' );
	}

	if ( Kirki::get_option( 'infinity', 'nav_sticky_enable' ) == 1 ) {
		wp_enqueue_script( 'infinity-js-head-room-jquery', THEME_ROOT . '/js/jQuery.headroom.min.js', array( 'jquery' ), PARENT_THEME_VERSION, true );
		wp_enqueue_script( 'infinity-js-head-room', THEME_ROOT . '/js/headroom.min.js', array( 'jquery' ), PARENT_THEME_VERSION, true );
	}
	wp_enqueue_script( 'infinity-js-snap', THEME_ROOT . '/js/snap.min.js', array(), PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'infinity-js-owl-carousel', THEME_ROOT . '/js/owl.carousel.min.js', array( 'jquery' ), PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'infinity-js-onepage-scroll', THEME_ROOT . '/js/jquery.onepage-scroll.min.js', array(), PARENT_THEME_VERSION, true );
	wp_enqueue_script( 'infinity-js-main', THEME_ROOT . '/js/main.js', array( 'jquery' ), PARENT_THEME_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'infinity_scripts' );

/**
 * Setup custom css.
 * ================
 */
function infinity_custom_css() {
	$custom_css = Kirki::get_option( 'infinity', 'custom_css' );
	if ( Kirki::get_option( 'infinity', 'custom_css_enable' ) == 1 ) {
		wp_add_inline_style( 'infinity-main', $custom_css );
	}
}

add_action( 'wp_enqueue_scripts', 'infinity_custom_css' );

/**
 * Implement other setup.
 * ======================
 */
// Load core
require_once get_template_directory() . '/core/initial.php';
require_once get_template_directory() . '/inc/customizer/customizer.php';
require_once get_template_directory() . '/inc/oneclick.php';

// Load tmg
require_once get_template_directory() . '/inc/tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/tgm-plugin-registration.php';

// Load metabox
require_once get_template_directory() . '/inc/meta-box.php';

// Load custom js
require_once get_template_directory() . '/inc/custom-js.php';

// Load custom css
require_once get_template_directory() . '/inc/custom-css.php';

// Load custom header
require_once get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require_once get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.
require_once get_template_directory() . '/inc/extras.php';

// Post-like
require_once get_template_directory() . '/inc/post-like.php';

// Load Jetpack compatibility file.
require_once get_template_directory() . '/inc/jetpack.php';

// Support shortcode in widget
add_filter( 'widget_text', 'do_shortcode' );

// Extend VC
if ( class_exists( 'WPBakeryVisualComposerAbstract' ) ) {
	function infinity_requireVcExtend() {
		require get_template_directory() . '/inc/vc-extend.php';
	}

	add_action( 'init', 'infinity_requireVcExtend', 2 );
}

add_action( 'admin_bar_menu', 'tm_builder_toolbar_links', 100 );
function tm_builder_toolbar_links( $wp_admin_bar ) {
	$wp_admin_bar->add_node( array(
		'id'    => 'tm_builder',
		'title' => '<span class="ab-icon"></span> ' . PARENT_THEME_NAME . ' (v' . PARENT_THEME_VERSION . ') ',
		'href'  => '#',
		'meta'  => array( 'class' => 'tm_builder_menu' )
	) );
	$wp_admin_bar->add_node( array(
		'id'     => 'tm_builder_customize',
		'parent' => 'tm_builder',
		'title'  => __( 'Customize', 'tm-builder' ),
		'href'   => admin_url( 'customize.php' ),
	) );
	$wp_admin_bar->add_node( array(
		'id'     => 'tm_builder_support',
		'parent' => 'tm_builder',
		'title'  => __( 'Need Support?', 'tm-builder' ),
		'href'   => 'http//support.thememove.com',
		'meta'   => array( 'target' => '_blank' )
	) );
	$wp_admin_bar->remove_node( 'customize' );
	echo '<style>';
	echo '.tm_builder_menu > a{background-color: #eb4723 !important; color: #ffffff !important}';
	echo '.tm_builder_menu > a:hover{background-color: #0073aa !important; color: #ffffff !important}';
	echo '.tm_builder_menu > a > .ab-icon:before{content: "\f540"; top: 2px; color: #ffffff !important}';
	echo '</style>';
}

/**
 * search_filter
 * ================
 */
function infinity_search_filter( $query ) {
	if( is_search() ) {
		if ( Kirki::get_option( 'infinity', 'search_only_posts' ) == 1 && Kirki::get_option( 'infinity', 'header_layout_search_enable' ) == 1 && ( ! isset( $query->query_vars['post_type'] ) ) ) {
			$query->set( 'post_type', array( 'post' ) );
		}
	}
}

add_action( 'pre_get_posts', 'infinity_search_filter' );
