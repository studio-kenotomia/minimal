<?php
require_once get_template_directory() . '/inc/fontlibs/pe7stroke.php';

vc_map( array(
	'name'        => esc_html__( 'Themmove Icon', 'infinity' ),
	'base'        => 'thememove_icon',
	'category'    => esc_html__( 'by THEMEMOVE', 'infinity' ),
	'description' => esc_html__( 'Eye catching icons from libraries', 'infinity' ),
	'params'      => array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon library', 'infinity' ),
			'value'       => array(
				esc_html__( 'Font Awesome', 'infinity' ) => 'fontawesome',
				esc_html__( 'Open Iconic', 'infinity' )  => 'openiconic',
				esc_html__( 'Typicons', 'infinity' )     => 'typicons',
				esc_html__( 'Entypo', 'infinity' )       => 'entypo',
				esc_html__( 'Linecons', 'infinity' )     => 'linecons',
				esc_html__( 'P7 Stroke', 'infinity' )    => 'pe7stroke',
			),
			'admin_label' => true,
			'param_name'  => 'type',
			'description' => esc_html__( 'Select icon library.', 'infinity' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'infinity' ),
			'param_name'  => 'icon_fontawesome',
			'value'       => 'fa fa-adjust', // default value to backend editor admin_label
			'settings'    => array(
				'emptyIcon'    => false,
				// default true, display an "EMPTY" icon?
				'iconsPerPage' => 4000,
				// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'fontawesome',
			),
			'description' => esc_html__( 'Select icon from library.', 'infinity' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'infinity' ),
			'param_name'  => 'icon_openiconic',
			'value'       => 'vc-oi vc-oi-dial', // default value to backend editor admin_label
			'settings'    => array(
				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
				'type'         => 'openiconic',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'openiconic',
			),
			'description' => esc_html__( 'Select icon from library.', 'infinity' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'infinity' ),
			'param_name'  => 'icon_typicons',
			'value'       => 'typcn typcn-adjust-brightness', // default value to backend editor admin_label
			'settings'    => array(
				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
				'type'         => 'typicons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'typicons',
			),
			'description' => esc_html__( 'Select icon from library.', 'infinity' ),
		),
		array(
			'type'       => 'iconpicker',
			'heading'    => esc_html__( 'Icon', 'infinity' ),
			'param_name' => 'icon_entypo',
			'value'      => 'entypo-icon entypo-icon-note', // default value to backend editor admin_label
			'settings'   => array(
				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
				'type'         => 'entypo',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency' => array(
				'element' => 'type',
				'value'   => 'entypo',
			),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'infinity' ),
			'param_name'  => 'icon_linecons',
			'value'       => 'vc_li vc_li-heart', // default value to backend editor admin_label
			'settings'    => array(
				'emptyIcon'    => false, // default true, display an "EMPTY" icon?
				'type'         => 'linecons',
				'iconsPerPage' => 4000, // default 100, how many icons per/page to display
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'linecons',
			),
			'description' => esc_html__( 'Select icon from library.', 'infinity' ),
		),
		array(
			'type'        => 'iconpicker',
			'heading'     => esc_html__( 'Icon', 'infinity' ),
			'param_name'  => 'icon_pe7stroke',
			'value'       => 'pe-7s-album',
			'settings'    => array(
				'emptyIcon'    => false,
				'type'         => 'pe7stroke',
				'iconsPerPage' => 400,
			),
			'dependency'  => array(
				'element' => 'type',
				'value'   => 'pe7stroke',
			),
			'description' => esc_html__( 'Select icon from library.', 'infinity' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => "Size",
			'admin_label' => true,
			'param_name'  => 'size',
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Custom color', 'infinity' ),
			'param_name'  => 'custom_color',
			'description' => esc_html__( 'Select custom icon color.', 'infinity' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Background shape', 'infinity' ),
			'param_name'  => 'background_style',
			'value'       => array(
				esc_html__( 'None', 'js_composer' )            => '',
				esc_html__( 'Circle', 'js_composer' )          => 'rounded',
				esc_html__( 'Square', 'js_composer' )          => 'boxed',
				esc_html__( 'Rounded', 'js_composer' )         => 'rounded-less',
				esc_html__( 'Outline Circle', 'js_composer' )  => 'rounded-outline',
				esc_html__( 'Outline Square', 'js_composer' )  => 'boxed-outline',
				esc_html__( 'Outline Rounded', 'js_composer' ) => 'rounded-less-outline',
			),
			'description' => esc_html__( 'Select background shape and style for icon.', 'infinity' )
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Custom background color', 'infinity' ),
			'param_name'  => 'custom_background_color',
			'description' => esc_html__( 'Select custom icon background color.', 'infinity' ),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Icon alignment', 'infinity' ),
			'param_name'  => 'align',
			'value'       => array(
				esc_html__( 'Left', 'js_composer' )   => 'left',
				esc_html__( 'Right', 'js_composer' )  => 'right',
				esc_html__( 'Center', 'js_composer' ) => 'center',
			),
			'description' => esc_html__( 'Select icon alignment.', 'infinity' ),
		),
		array(
			'type'        => 'vc_link',
			'heading'     => esc_html__( 'URL (Link)', 'infinity' ),
			'param_name'  => 'link',
			'description' => esc_html__( 'Add link to icon.', 'infinity' )
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Extra class name', 'infinity' ),
			'param_name'  => 'el_class',
			'description' => esc_html__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'infinity' )
		),

	),
	'js_view'     => 'VcIconElementView_Backend',
) );
