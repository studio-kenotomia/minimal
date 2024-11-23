<?php
/**
 * Header Spacing
 * ============
 */
$section  = 'button_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'button_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '10px 29px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=button], input[type=submit], input[type=reset]',
		'property' => 'padding',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'button_margin',
	'label'     => esc_html__( 'Margin', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=button], input[type=submit], input[type=reset]',
		'property' => 'margin',
	),
) );