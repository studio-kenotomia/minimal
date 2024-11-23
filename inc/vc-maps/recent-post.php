<?php
vc_map( array(
	'name'     => esc_html__( 'Recent Posts', 'infinity' ),
	'base'     => 'thememove_recentposts',
	'category' => esc_html__( 'by THEMEMOVE', 'infinity' ),
	'params'   => array(
		array(
			"type"       => "dropdown",
			"heading"    => "Type",
			"param_name" => "type",
			"value"      => array(
				esc_html__( 'Normal', 'infinity' )  => "normal",
				esc_html__( 'Masonry', 'infinity' ) => "masonry",
			),
		),
		array(
			'type'       => 'textfield',
			'heading'    => "Enter numbers of articles",
			'param_name' => 'number',
		),
	)
) );

