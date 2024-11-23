<?php
/**
 * Site General
 * ================
 */
$section  = 'site_general';
$priority = 3;

function frontpage_setup( $wp_customize ) {
	$wp_customize->get_control( 'show_on_front' )->section  = 'site_general';
	$wp_customize->get_control( 'show_on_front' )->priority = '3';
	$wp_customize->get_control( 'page_on_front' )->section  = 'site_general';
	$wp_customize->get_control( 'page_on_front' )->priority = '4';
	$wp_customize->get_control( 'page_on_front' )->label    = 'Choose a page';
	$wp_customize->get_control( 'show_on_front' )->label    = '';
}

add_action( 'customize_register', 'frontpage_setup' );

Kirki::add_field( 'infinity', array(
	'type'      => 'select',
	'setting'   => 'skin',
	'label'     => esc_html__( 'Skin', 'infinity' ),
	'section'   => $section,
	'choices'   => apply_filters( 'tm_customizer_skins', array() ),
	'priority'  => 1,
	'default'   => apply_filters( 'tm_customizer_default_skin', '' ),
	'transport' => 'postMessage'
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_general_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => 2,
	'default'  => '<div class="group_title">Front page</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'text',
	'setting'  => 'site_general_home_text',
	'label'    => esc_html__( 'Home title', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'BLOG UPDATES',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_general_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'text',
	'setting'  => 'site_general_desc_text',
	'label'    => esc_html__( 'Description text', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'Latest news & updates',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'webkit_scrollbar_enable',
	'label'       => esc_html__( 'Webkit Scrollbar', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to custom style for Webkit Scrollbar', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 0,
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'smoothscroll_enable',
	'label'       => esc_html__( 'Smooth Scroll', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to enable Smooth Scroll on your site', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );
