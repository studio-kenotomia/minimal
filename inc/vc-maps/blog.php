<?php
vc_map( array(
	'name'     => esc_html__( 'BLog', 'infinity' ),
	'base'     => 'thememove_blog',
	'category' => esc_html__( 'by THEMEMOVE', 'infinity' ),
	'params'   => array(
		array(
			"type"       => "dropdown",
			"heading"    => "Type",
			"param_name" => "type_display",
			"value"      => array(
				esc_html__( 'Normal', 'infinity' )  => "normal",
				esc_html__( 'Masonry', 'infinity' ) => "masonry",
			),
		),
	)
) );