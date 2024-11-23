<?php
/**
 * Footer Background
 * ============
 */
$section  = 'footer_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'footer_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your footer', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#ffffff',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-footer,.copyright',
			'property' => 'background-color',
		),
	),
) );