<?php
/**
 * Button Border
 * ============
 */
$section  = 'button_border';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'button_border_width',
	'label'     => esc_html__( 'Border width', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '1px 1px 1px 1px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, input[type=button], input[type=submit], input[type=reset]',
		'property' => 'border-width',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'button_border_style',
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
		'element'  => '.btn, button, input[type=button], input[type=submit], input[type=reset]',
		'property' => 'border-style',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_border_color',
	'label'       => esc_html__( 'Border color', 'infinity' ),
	'description' => esc_html__( 'Border color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#000',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.btn, button, input[type=button], input[type=submit], input[type=reset]',
		'property' => 'border-color',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_border_color_hover',
	'description' => esc_html__( 'Border color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#000',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.btn.alt, .btn:hover, button:hover, input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover, .btn-alt',
		'property' => 'border-color',
	),
) );