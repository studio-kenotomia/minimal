<?php
/**
 * Site Color
 * ================
 */
$section  = 'site_color';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_color_primary',
	'label'     => esc_html__( 'Primary color', 'infinity' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => PRIMARY_COLOR,
	'output'      => array(
		array(
			'element'  => '.pri-color, .scrollup',
			'property' => 'color',
		),
		array(
			'element'  => '.pri-bg, .scrollup:hover',
			'property' => 'background-color',
		)
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_color_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_color_secondary',
	'label'     => esc_html__( 'Secondary color', 'infinity' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => SECONDARY_COLOR,
	'output'      => array(
		array(
			'element'  => '.second-color, .scrollup:hover',
			'property' => 'color',
		),
		array(
			'element'  => '.second-bg',
			'property' => 'background-color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_color_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'site_color_link',
	'label'       => esc_html__( 'Link setting', 'infinity' ),
	'description' => esc_html__( 'Link color', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => SECONDARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => 'a,a:visited',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'site_color_link_hover',
	'description' => esc_html__( 'Link color on hover', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		array(
			'element'  => 'a:hover, .sidebar .widget ul li a:hover, .hentry .entry-footer .share a:hover i, .social-menu .menu li a:hover, .single-project .metadata a:hover',
			'property' => 'color',
		),
	),
) );
