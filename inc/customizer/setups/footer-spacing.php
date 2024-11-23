<?php
/**
 * Footer Spacing
 * ============
 */
$section  = 'footer_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'footer_general_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '100px 0px 100px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-footer',
			'property' => 'padding',
			'prefix'   => '@media ( min-width: 62rem ) {',
			'suffix'   => '}',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'footer_general_margin',
	'label'     => esc_html__( 'Margin', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-footer',
			'property' => 'margin',
			'prefix'   => '@media ( min-width: 62rem ) {',
			'suffix'   => '}',
		),
	),
) );