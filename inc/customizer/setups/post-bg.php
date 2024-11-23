<?php
/**
 * Post Background
 * =========
 */
$section  = 'post_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'post_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'post_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title--single',
		'property' => 'background-color',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'post_overlay_bg_color',
	'label'     => esc_html__( 'Overlay color', 'infinity' ),
	'help'      => esc_html__( 'Setup overlay color for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'postMessage',
	'default'   => 'rgba(238,238,238,0.9)',
	'output'    => array(
		'element'  => '.big-title--single:after',
		'property' => 'background-color',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'image',
	'setting'   => 'post_bg_image',
	'label'     => esc_html__( 'Background Image', 'infinity' ),
	'help'      => esc_html__( 'Default background image for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'http://zebre.thememove.com/data/images/page_background.jpg',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title--single',
		'property' => 'background-image',
	),
) );