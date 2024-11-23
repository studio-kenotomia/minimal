<?php
/**
 * Button Background
 * ============
 */
$section  = 'button_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'button_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your button', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#ffffff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=button], input[type=submit], input[type=reset]',
		'property' => 'background-color',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'button_bg_color_hover',
	'label'     => esc_html__( 'Background color on hover', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your button', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#FDE231',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn.alt, .btn:hover:after, button:hover:after, input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover, .btn-alt:after',
		'property' => 'background-color',
	),
) );
