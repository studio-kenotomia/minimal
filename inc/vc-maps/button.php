<?php
vc_map( array(
	'name'     => esc_html__( 'Button', 'infinity' ),
	'base'     => 'thememove_button',
	'category' => esc_html__( 'by THEMEMOVE', 'infinity' ),
	'params'   => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Type', 'thememove' ),
			'param_name'  => 'type',
			'value'       => array(
				esc_html__( 'Button', 'thememove' ) => 'btn',
				esc_html__( 'Link', 'thememove' )   => 'link',
			),
			'description' => esc_html__( 'Select background shape and style for icon.', 'thememove' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => "Text",
			'admin_label' => true,
			'param_name'  => 'text',
		),
		array(
			'type'        => 'textfield',
			'heading'     => "Url",
			'admin_label' => true,
			'param_name'  => 'url',
			'description' => esc_html__( 'Entry your url here', 'infinity' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => "Icon",
			'admin_label' => true,
			'param_name'  => 'icon',
			'description' => esc_html__( 'Example: fa-arrow-right', 'infinity' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => "Class",
			'admin_label' => true,
			'param_name'  => 'el_class',
		),
	)
) );