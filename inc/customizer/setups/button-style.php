<?php
/**
 * Button Style
 * ============
 */
$section  = 'button_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'button_style_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.btn, button, input[type=button], input[type=submit], input[type=reset]',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'button_style_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 12,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn, button, input[type=button], input[type=submit], input[type=reset]',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'button_style_font_weight',
	'label'     => esc_html__( 'Font Weight', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 400,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.btn, button, input[type=button], input[type=submit], input[type=reset]',
		'property' => 'font-weight',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_style_link_color',
	'label'       => esc_html__( 'Link Color', 'infinity' ),
	'description' => esc_html__( 'Link Color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#111111',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => 'a.btn',
		'property' => 'color',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_style_link_color_hover',
	'description' => esc_html__( 'Link Color on hover', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#111111',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => 'a.btn:hover',
		'property' => 'color',
	),
) );