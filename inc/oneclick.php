<?php
add_filter( 'thememove_import_demos', 'thememove_import_demos' );

function thememove_import_demos() {
	return array(
		'thememove01' => array(
			'screenshot'  => THEME_ROOT . '/screenshot.jpg',
			'name'       => PARENT_THEME_NAME
		),
	);
}

add_filter( 'thememove_import_style', 'thememove_import_style' );

function thememove_import_style() {
	return array(
		'title_color' => '#222',
		'link_color' => '#222',
		'notice_color' => '#222',
		'logo' => get_template_directory_uri() . '/images/logo.png',
	);
}

add_filter( 'thememove_import_package_url', 'thememove_import_package_url' );

function thememove_import_package_url() {
	return 'https://cloudup.com/files/izFgZealGLy/download';
}

add_action( 'tm_after_import_data', 'tm_dione_after_import_data');

function tm_dione_after_import_data(){
	global $wpdb;
	$old = 'http:\/\/dc\/zebre\/';
	$new = trim(json_encode(get_site_url('/'). '/'), '"');
	$wpdb->query($wpdb->prepare( "UPDATE `wp_revslider_slides` SET `params` = replace(params, %s, %s)", $old, $new ));
	$wpdb->query($wpdb->prepare( "UPDATE `wp_revslider_slides` SET `layers` = replace(layers, %s, %s)", $old, $new ));
}
