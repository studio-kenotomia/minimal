<?php
/**
 * Infinity Theme Customizer
 *
 * @package Infinity
 */

/**
 * Configuration for the Kirki Customizer
 * =============================================
 */
function infinity_config() {
	$args = array(
		'styles_priority' => 999,
		'width'           => '300px',
		'url_path'        => THEME_ROOT . '/core/customizer/kirki/'
	);

	return $args;
}

add_filter( 'kirki/config', 'infinity_config' );

/**
 * Remove Unused Native Sections
 * =============================
 */
function infinity_remove_customizer_sections( $wp_customize ) {
	$wp_customize->remove_section( 'nav' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'static_front_page' );

	$wp_customize->remove_control( 'blogname' );
	$wp_customize->remove_control( 'blogdescription' );
	$wp_customize->remove_control( 'page_for_posts' );

}

add_action( 'customize_register', 'infinity_remove_customizer_sections' );

/**
 * Setting Customizer
 * ==================
 */
function infinity_customizer_sections( $wp_customize ) {
	$wp_customize->get_section( 'io_section' )->priority = '40';
}

if ( function_exists( 'register_section_for_io_section' ) ) {
	add_action( 'customize_register', 'infinity_customizer_sections' );
}

/**
 * General setups
 * ==============
 */
Kirki::add_config( 'infinity', array(
	'option_type' => 'theme_mod',
	'capability'  => 'edit_theme_options',
) );

$priority = 1;
// Add panels
Kirki::add_panel( 'site', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Site', 'infinity' ),
	'description' => esc_html__( 'My Description', 'infinity' ),
) );

Kirki::add_panel( 'header', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Header', 'infinity' ),
	'description' => esc_html__( 'My Description', 'infinity' ),
) );

Kirki::add_panel( 'nav', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Navigation', 'infinity' ),
	'description' => esc_html__( 'My Description', 'infinity' ),
) );

Kirki::add_panel( 'button', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Button', 'infinity' ),
	'description' => esc_html__( 'My Description', 'infinity' ),
) );

Kirki::add_panel( 'footer', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Footer', 'infinity' ),
	'description' => esc_html__( 'My Description', 'infinity' ),
) );

Kirki::add_panel( 'copyright', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Copyright', 'infinity' ),
	'description' => esc_html__( 'My Description', 'infinity' ),
) );

Kirki::add_panel( 'page', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Page', 'infinity' ),
	'description' => esc_html__( 'My Description', 'infinity' ),
) );

Kirki::add_panel( 'post', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Post', 'infinity' ),
	'description' => esc_html__( 'My Description', 'infinity' ),
) );

Kirki::add_panel( 'custom', array(
	'priority'    => $priority ++,
	'title'       => esc_html__( 'Custom code', 'infinity' ),
	'description' => esc_html__( 'My Description', 'infinity' ),
) );

$priority = 1;
// Add sections for site panel
Kirki::add_section( 'site_general', array(
	'title'       => esc_html__( 'General', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all general settings of your site', 'infinity' ),
	'panel'       => 'site',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'site_layouts', array(
	'title'       => esc_html__( 'Layouts', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all layouts settings of your site', 'infinity' ),
	'panel'       => 'site',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'site_logo', array(
	'title'       => esc_html__( 'Logo', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all logo settings of your site', 'infinity' ),
	'panel'       => 'site',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'site_favicon', array(
	'title'       => esc_html__( 'Favicon', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all favicon settings of your site', 'infinity' ),
	'panel'       => 'site',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'site_color', array(
	'title'       => esc_html__( 'Color', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all color settings of your site', 'infinity' ),
	'panel'       => 'site',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'site_style', array(
	'title'       => esc_html__( 'Style', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all style settings of your site', 'infinity' ),
	'panel'       => 'site',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'background_image', array(
	'title'       => esc_html__( 'Background', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all background settings of your site', 'infinity' ),
	'panel'       => 'site',
	'priority'    => $priority ++,
) );

$priority = 1;
// Add sections for navigation panel
Kirki::add_section( 'nav', array(
	'title'       => esc_html__( 'Layout', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all layout settings of navigation', 'infinity' ),
	'panel'       => 'nav',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'nav_style', array(
	'title'       => esc_html__( 'Style', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all style settings of navigation', 'infinity' ),
	'panel'       => 'nav',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'nav_spacing', array(
	'title'       => esc_html__( 'Spacing', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of navigation', 'infinity' ),
	'panel'       => 'nav',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'nav_border', array(
	'title'       => esc_html__( 'Border', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all border settings of navigation', 'infinity' ),
	'panel'       => 'nav',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'nav_bg', array(
	'title'       => esc_html__( 'Background', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all background settings of navigation', 'infinity' ),
	'panel'       => 'nav',
	'priority'    => $priority ++,
) );

$priority = 1;
// Add sections for button panel
Kirki::add_section( 'button_layout', array(
	'title'       => esc_html__( 'Layout', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all layout settings of buttons', 'infinity' ),
	'panel'       => 'button',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'button_style', array(
	'title'       => esc_html__( 'Style', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all style settings of buttons', 'infinity' ),
	'panel'       => 'button',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'button_spacing', array(
	'title'       => esc_html__( 'Spacing', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of buttons', 'infinity' ),
	'panel'       => 'button',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'button_border', array(
	'title'       => esc_html__( 'Border', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all border settings of buttons', 'infinity' ),
	'panel'       => 'button',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'button_bg', array(
	'title'       => esc_html__( 'Background', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all background settings of buttons', 'infinity' ),
	'panel'       => 'button',
	'priority'    => $priority ++,
) );

$priority = 1;

$priority = 1;
// Add sections for header panel
Kirki::add_section( 'header_layout', array(
	'title'       => esc_html__( 'Layout', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all layout settings of header', 'infinity' ),
	'panel'       => 'header',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'header_style', array(
	'title'       => esc_html__( 'Style', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all style settings of header', 'infinity' ),
	'panel'       => 'header',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'header_spacing', array(
	'title'       => esc_html__( 'Spacing', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of header', 'infinity' ),
	'panel'       => 'header',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'header_border', array(
	'title'       => esc_html__( 'Border', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all border settings of header', 'infinity' ),
	'panel'       => 'header',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'header_bg', array(
	'title'       => esc_html__( 'Background', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all background settings of header', 'infinity' ),
	'panel'       => 'header',
	'priority'    => $priority ++,
) );

$priority = 1;
// Add sections for footer panel
Kirki::add_section( 'footer_layout', array(
	'title'       => esc_html__( 'Layout', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all layout settings of footer', 'infinity' ),
	'panel'       => 'footer',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'footer_style', array(
	'title'       => esc_html__( 'Style', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all style settings of footer', 'infinity' ),
	'panel'       => 'footer',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'footer_spacing', array(
	'title'       => esc_html__( 'Spacing', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of footer', 'infinity' ),
	'panel'       => 'footer',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'footer_border', array(
	'title'       => esc_html__( 'Border', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all border settings of footer', 'infinity' ),
	'panel'       => 'footer',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'footer_bg', array(
	'title'       => esc_html__( 'Background', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all background settings of footer', 'infinity' ),
	'panel'       => 'footer',
	'priority'    => $priority ++,
) );

$priority = 1;
// Add sections for copyright panel
Kirki::add_section( 'copyright_layout', array(
	'title'       => esc_html__( 'Layout', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all layout settings of copyright', 'infinity' ),
	'panel'       => 'copyright',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'copyright_style', array(
	'title'       => esc_html__( 'Style', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all style settings of copyright', 'infinity' ),
	'panel'       => 'copyright',
	'priority'    => $priority ++,
) );

$priority = 1;
// Add sections for page panel
Kirki::add_section( 'page_layout', array(
	'title'       => esc_html__( 'Layout', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all layout settings of pages', 'infinity' ),
	'panel'       => 'page',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'page_style', array(
	'title'       => esc_html__( 'Style', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all style settings of pages', 'infinity' ),
	'panel'       => 'page',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'page_spacing', array(
	'title'       => esc_html__( 'Spacing', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of pages', 'infinity' ),
	'panel'       => 'page',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'page_border', array(
	'title'       => esc_html__( 'Border', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all border settings of pages', 'infinity' ),
	'panel'       => 'page',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'page_bg', array(
	'title'       => esc_html__( 'Background', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all background settings of pages', 'infinity' ),
	'panel'       => 'page',
	'priority'    => $priority ++,
) );

$priority = 1;
// Add sections for post panel
Kirki::add_section( 'post_layout', array(
	'title'       => esc_html__( 'Layout', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all layout settings of posts', 'infinity' ),
	'panel'       => 'post',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'post_style', array(
	'title'       => esc_html__( 'Style', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all style settings of posts', 'infinity' ),
	'panel'       => 'post',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'post_spacing', array(
	'title'       => esc_html__( 'Spacing', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all spacing settings of posts', 'infinity' ),
	'panel'       => 'post',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'post_border', array(
	'title'       => esc_html__( 'Border', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all border settings of posts', 'infinity' ),
	'panel'       => 'post',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'post_bg', array(
	'title'       => esc_html__( 'Background', 'infinity' ),
	'description' => esc_html__( 'In this section you can control all background settings of posts', 'infinity' ),
	'panel'       => 'post',
	'priority'    => $priority ++,
) );

$priority = 1;
// Add sections for custom code panel
Kirki::add_section( 'custom_css', array(
	'title'       => esc_html__( 'Custom CSS', 'infinity' ),
	'description' => esc_html__( 'In this section you can control custom css', 'infinity' ),
	'panel'       => 'custom',
	'priority'    => $priority ++,
) );

Kirki::add_section( 'custom_js', array(
	'title'       => esc_html__( 'Custom JS', 'infinity' ),
	'description' => esc_html__( 'In this section you can control custom javascript', 'infinity' ),
	'panel'       => 'custom',
	'priority'    => $priority ++,
) );

/**
 * Include setups
 * ==============
 */
// Site
require_once get_template_directory() . '/inc/customizer/setups/site-general.php';
require_once get_template_directory() . '/inc/customizer/setups/site-layouts.php';
require_once get_template_directory() . '/inc/customizer/setups/site-logo.php';
if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
	require_once get_template_directory() . '/inc/customizer/setups/site-favicon.php';
}
require_once get_template_directory() . '/inc/customizer/setups/site-color.php';
require_once get_template_directory() . '/inc/customizer/setups/site-style.php';
require_once get_template_directory() . '/inc/customizer/setups/site-bg.php';

// Nav
require_once get_template_directory() . '/inc/customizer/setups/nav-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/nav-style.php';
require_once get_template_directory() . '/inc/customizer/setups/nav-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/nav-border.php';
require_once get_template_directory() . '/inc/customizer/setups/nav-bg.php';

// Button
require_once get_template_directory() . '/inc/customizer/setups/button-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/button-style.php';
require_once get_template_directory() . '/inc/customizer/setups/button-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/button-border.php';
require_once get_template_directory() . '/inc/customizer/setups/button-bg.php';

// Header
require_once get_template_directory() . '/inc/customizer/setups/header-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/header-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/header-border.php';
require_once get_template_directory() . '/inc/customizer/setups/header-bg.php';

// Footer
require_once get_template_directory() . '/inc/customizer/setups/footer-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/footer-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/footer-border.php';
require_once get_template_directory() . '/inc/customizer/setups/footer-bg.php';

// Copyright
require_once get_template_directory() . '/inc/customizer/setups/copyright-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/copyright-style.php';

// Page
require_once get_template_directory() . '/inc/customizer/setups/page-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/page-style.php';
require_once get_template_directory() . '/inc/customizer/setups/page-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/page-bg.php';

// Post
require_once get_template_directory() . '/inc/customizer/setups/post-layout.php';
require_once get_template_directory() . '/inc/customizer/setups/post-style.php';
require_once get_template_directory() . '/inc/customizer/setups/post-spacing.php';
require_once get_template_directory() . '/inc/customizer/setups/post-bg.php';


// Custom code
require_once get_template_directory() . '/inc/customizer/setups/custom-css.php';
require_once get_template_directory() . '/inc/customizer/setups/custom-js.php';


// IO Section
require_once get_template_directory() . '/inc/customizer/io.php';

/**
 * Add custom css
 * ==============
 */
function infinity_customize_preview_css() {
	wp_enqueue_style( 'infinity-kirki-custom-css', THEME_ROOT . '/core/customizer/css/custom.css' );
}

add_action( 'customize_controls_init', 'infinity_customize_preview_css' );