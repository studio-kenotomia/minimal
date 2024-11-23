<?php
/**
 * Page Background
 * =========
 */
$section  = 'page_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'page_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'page_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'page_overlay_bg_color',
	'label'     => esc_html__( 'Overlay color', 'infinity' ),
	'help'      => esc_html__( 'Setup overlay color for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'postMessage',
	'default'   => 'rgba(238,238,238,0)',
	'output'    => array(
		array(
			'element'  => '.big-title:after',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'image',
	'setting'   => 'page_bg_image',
	'label'     => esc_html__( 'Background Image', 'infinity' ),
	'help'      => esc_html__( 'Default background image for your header', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'http://zebre.thememove.com/data/images/page_background.jpg',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title',
		'property' => 'background-image',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'select',
	'setting'   => 'page_bg_position',
	'label'     => esc_html__( 'Background position', 'infinity' ),
	'section'   => $section,
	'default'   => 'center center',
	'transport' => 'postMessage',
	'priority'  => $priority ++,
	'choices'   => array(
		'left top'      => esc_html__( 'Left Top', 'infinity' ),
		'left center'   => esc_html__( 'Left Center', 'infinity' ),
		'left bottom'   => esc_html__( 'Left Bottom', 'infinity' ),
		'center center' => esc_html__( 'Center Center', 'infinity' ),
		'right top'     => esc_html__( 'Right Top', 'infinity' ),
		'right center'  => esc_html__( 'Right Center', 'infinity' ),
		'right bottom'  => esc_html__( 'Right Bottom', 'infinity' ),
	),
	'output'    => array(
		'element'  => '.big-title',
		'property' => 'background-position'
	),
) );