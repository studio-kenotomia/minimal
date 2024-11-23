<?php
/**
 * Copyright Style
 * ============
 */
$section  = 'copyright_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'copyright_style_text_color',
	'label'     => esc_html__( 'Text Color', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#111111',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.copyright',
		'property' => 'color',
	),
	'required'  => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'copyright_style_link_color',
	'label'       => esc_html__( 'Link Color', 'infinity' ),
	'description' => esc_html__( 'Link Color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#111111',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.copyright a',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'copyright_style_link_color_hover',
	'description' => esc_html__( 'Link color on hover', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.copyright-text a:hover',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'copyright_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.copyright, .copyright *',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'copyright_font_weight',
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
		'element'  => '.copyright, .copyright *',
		'property' => 'font-weight',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'copyright_font_size',
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
		'element'  => '.copyright-text, .copyright-text *',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'select',
	'setting'   => 'copyright_text_align',
	'label'     => esc_html__( 'Text align', 'infinity' ),
	'section'   => $section,
	'default'   => 'center',
	'priority'  => $priority ++,
	'transport' => 'postMessage',
	'choices'   => array(
		'left'   => esc_html__( 'Left', 'infinity' ),
		'center' => esc_html__( 'Center', 'infinity' ),
		'right'  => esc_html__( 'Right', 'infinity' )
	),
	'output'    => array(
		'element'  => '.copyright, .copyright *',
		'property' => 'text-align'
	)
) );