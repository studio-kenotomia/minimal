<?php
/**
 * Header Layout
 * ==============
 */
$section  = 'header_layout';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'select',
	'setting'     => 'header_type',
	'label'       => esc_html__( 'Header Type', 'infinity' ),
	'description' => esc_html__( 'Choose the header type you want', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'header01',
	'choices'     => array(
		'header01' => 'Type 01',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'header_layout_search_enable',
	'label'       => esc_html__( 'Search box', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to enable search box on your site', 'infinity' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'settings'     => 'search_only_posts',
	'label'       => esc_html__( 'Search only Posts', 'infinity' ),
	'description' => esc_html__( 'Turn on this option if you want to enable search only posts', 'tm-polygon' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );
