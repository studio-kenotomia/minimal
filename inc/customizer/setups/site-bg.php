<?php
/**
 * Site Background
 * =========
 */
$section  = 'background_image';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_bg_color',
	'label'     => esc_html__( 'Background color', 'infinity' ),
	'help'      => esc_html__( 'Setup background color for your site', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'site_bg_link_hover',
	'description' => esc_html__( 'Link (with class .link) background on hover', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => 'a.link:after, .categories-links a:after',
			'property' => 'background',
		),
	),
) );