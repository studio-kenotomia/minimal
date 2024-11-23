<?php
/**
 * Page Spacing
 * =========
 */
$section  = 'page_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'page_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'page_spacing_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '156px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title .entry-title',
		'property' => 'padding',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'page_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Description</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'page_desc_spacing_padding',
	'label'     => esc_html__( 'Padding', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '16px 0px 156px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title .entry-desc',
		'property' => 'padding',
	),
) );