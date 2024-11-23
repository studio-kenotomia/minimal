<?php
/**
 * Nav Background
 * ================
 */
$section  = 'nav_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'custom',
	'setting'   => 'nav_bg_group_title_' . $priority ++,
	'section'   => $section,
	'priority'  => $priority ++,
	'transport' => 'postMessage',
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'   => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_bg_sub_menu_text_bg',
	'label'       => esc_html__( 'Link background', 'infinity' ),
	'description' => esc_html__( 'Link background', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'postMessage',
	'default'     => '#ffffff',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu li:after, #site-navigation .children li:after',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_bg_sub_menu_text_bg_hover',
	'description' => esc_html__( 'Link background on hover', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'transport'   => 'postMessage',
	'default'     => '#ffffff',
	'output'      => array(
		array(
			'element'  => '#site-navigation .sub-menu li:hover:after, #site-navigation .children li:hover:after',
			'property' => 'background-color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Mobile Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_bg_mobile_menu_bg',
	'description' => esc_html__( 'Mobile menu background', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => '.site-header',
			'property' => 'background-color',
			'prefix'   => '@media ( max-width: 61.9375rem ) {',
			'suffix'   => '}',
		),
	),
) );