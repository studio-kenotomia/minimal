<?php
/**
 * Header Spacing
 * ============
 */
$section  = 'header_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'header_spacing_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 186px 0px 186px',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-header',
			'property' => 'padding',
			'prefix'   => '@media ( min-width: 100rem ) {',
			'suffix'   => '}',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'header_spacing_margin',
	'label'     => esc_html__( 'Margin', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-header',
			'property' => 'margin',
			'prefix'   => '@media ( min-width: 100rem ) {',
			'suffix'   => '}',
		),
	),
) );