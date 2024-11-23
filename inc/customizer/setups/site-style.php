<?php
/**
 * Site Style
 * =========
 */
$section  = 'site_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Body</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'site_style_body_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => 'body',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_body_font_weight',
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
		'element'  => 'body',
		'property' => 'font-weight',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_body_letter_spacing',
	'label'     => esc_html__( 'Letter Spacing', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 0.1,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => - 1,
		'max'  => 1,
		'step' => .05,
	),
	'output'    => array(
		'element'  => 'body',
		'property' => 'letter-spacing',
		'units'    => 'em',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_body_font_size',
	'label'     => esc_html__( 'Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 14,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'body',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_style_body_text',
	'label'     => esc_html__( 'Font Color', 'infinity' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#878787',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => 'body',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'infinity' ),
	'default'  => '<div class="group_title">Heading</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'site_style_heading_font_family',
	'label'    => esc_html__( 'Font Family', 'infinity' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => PRIMARY_FONT,
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.vc_label,.tp-caption.a1,.t1,.woocommerce div.product p.price del, .woocommerce div.product span.price del,.woocommerce ul.products li.product .price,.widget_products,.eg-infinity-members-element-0,.wpb_widgetised_column .better-menu-widget ul li, .sidebar .better-menu-widget ul li,.pagination span, .pagination a,.hentry .read-more,.post-thumb .date,.thememove_testimonials .author span:first-child,.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header a,.recent-posts__item a,.eg-infinity-features-element-0,h1,h2,h3,h4,h5,h6',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_font_weight',
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
		'element'  => 'h1,h2,h3,h4,h5,h6',
		'property' => 'font-weight',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_letter_spacing',
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
		'element'  => '.sidebar .better-menu-widget ul li,.wpb_widgetised_column .better-menu-widget ul li,h1,h2,h3,h4,h5,h6,.eg-infinity-features-element-0',
		'property' => 'letter-spacing',
		'units'    => 'em',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_style_heading_font_color',
	'label'     => esc_html__( 'Font Color', 'kirki' ),
	'help'      => esc_html__( 'This is some extra help text.', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#111',
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => 'h1, h2, h3, h4, h5, h6',
			'property' => 'color',
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_style_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h1_font_size',
	'label'     => esc_html__( 'H1 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 55,
	'choices'   => array(
		'min'  => 15,
		'max'  => 100,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h1',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h2_font_size',
	'label'     => esc_html__( 'H2 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 36,
	'choices'   => array(
		'min'  => 10,
		'max'  => 90,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h2',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h3_font_size',
	'label'     => esc_html__( 'H3 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 24,
	'choices'   => array(
		'min'  => 10,
		'max'  => 80,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h3',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h4_font_size',
	'label'     => esc_html__( 'H4 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 18,
	'choices'   => array(
		'min'  => 10,
		'max'  => 70,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h4',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h5_font_size',
	'label'     => esc_html__( 'H5 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 16,
	'choices'   => array(
		'min'  => 10,
		'max'  => 70,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h5',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'site_style_heading_h6_font_size',
	'label'     => esc_html__( 'H6 Font Size', 'infinity' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 14,
	'choices'   => array(
		'min'  => 10,
		'max'  => 70,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'h6',
		'property' => 'font-size',
		'units'    => 'px',
	),
) );