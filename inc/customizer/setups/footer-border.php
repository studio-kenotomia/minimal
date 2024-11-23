<?php
/**
 * Footer Border
 * ============
 */
$section  = 'footer_border';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'footer_border_width',
	'label'     => esc_html__( 'Border width', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-footer',
			'property' => 'border-width',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'footer_border_style',
	'label'     => esc_html__( 'Border style', 'kirki' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'solid',
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'infinity' ),
		'dashed' => esc_html__( 'Dashed', 'infinity' ),
		'dotted' => esc_html__( 'Dotted', 'infinity' ),
		'double' => esc_html__( 'Double', 'infinity' ),
	),
	'output'    => array(
		array(
			'element'  => '.site-footer',
			'property' => 'border-style',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'footer_border_color',
	'label'     => esc_html__( 'Border color', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-footer',
			'property' => 'border-color',
		),
	),
) );