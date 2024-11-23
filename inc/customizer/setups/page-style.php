<?php
/**
 * Page Style
 * =========
 */
$section  = 'page_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'page_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'page_style_heading_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.big-title .entry-title',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'page_style_heading_font_weight',
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
		'element'  => '.big-title .entry-title',
		'property' => 'font-weight',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'page_style_heading_letter_spacing',
	'label'     => esc_html__( 'Letter Spacing', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 0.2,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => - 1,
		'max'  => 1,
		'step' => .05,
	),
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'letter-spacing',
		'units'    => 'em',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'page_style_heading_font_color',
	'label'     => esc_html__( 'Font Color', 'infinity' ),
	'help'      => esc_html__( 'This is some extra help text.', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#111111',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.big-title .entry-title, .big-title .entry-desc',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'page_style_heading_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 42,
	'choices'   => array(
		'min'  => 15,
		'max'  => 100,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'select',
	'setting'   => 'page_style_heading_text_align',
	'label'     => esc_html__( 'Text align', 'infinity' ),
	'section'   => $section,
	'default'   => 'center',
	'transport' => 'postMessage',
	'priority'  => $priority ++,
	'choices'   => array(
		'left'   => esc_html__( 'Left', 'infinity' ),
		'center' => esc_html__( 'Center', 'infinity' ),
		'right'  => esc_html__( 'Right', 'infinity' )
	),
	'output'    => array(
		'element'  => '.big-title, .big-title *',
		'property' => 'text-align'
	),
) );