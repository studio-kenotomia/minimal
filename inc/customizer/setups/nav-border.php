<?php
/**
 * Nav Border
 * ================
 */
$section  = 'nav_border';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_border_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_border_menu_text_border_color',
	'label'       => esc_html__( 'Color', 'infinity' ),
	'description' => esc_html__( 'Border color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'postMessage',
	'default'     => '#ccc',
	'output'      => array(
		array(
			'element'  => '#site-navigation .menu li::before',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_border_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_menu_text_border_color',
	'label'       => esc_html__( 'Color', 'infinity' ),
	'description' => esc_html__( 'Border color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'postMessage',
	'default'     => '#eee',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu li a',
			'property' => 'border-color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_menu_text_border_color_hover',
	'description' => esc_html__( 'Border color on hover', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'postMessage',
	'default'     => '#eee',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu li a:hover',
			'property' => 'border-color',
		),
	),
) );