<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field object $field Field object
 *
 * @return bool                     True if metabox should show
 */
function cmb2_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}

	return true;
}

add_filter( 'cmb2_meta_boxes', 'infinity_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 *
 * @return array
 */
function infinity_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'infinity_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['page_metabox'] = array(
		'id'           => 'page_metabox',
		'title'        => esc_html__( 'Page Settings', 'infinity' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		'fields'       => array(
			array(
				'name'    => esc_html__( 'Page Layout', 'infinity' ),
				'desc'    => esc_html__( 'Choose a layout you want', 'infinity' ),
				'id'      => $prefix . 'page_layout_private',
				'type'    => 'select',
				'options' => array(
					'default'         => esc_html__( 'Default', 'infinity' ),
					'full-width'      => esc_html__( 'Full width', 'infinity' ),
					'content-sidebar' => esc_html__( 'Content-Sidebar', 'infinity' ),
				),
			),
			array(
				'name' => esc_html__( 'Custom Logo', 'infinity' ),
				'desc' => esc_html__( 'Upload an image or enter a URL for Custom Logo', 'infinity' ),
				'id'   => $prefix . 'custom_logo',
				'type' => 'file',
			),
			array(
				'name' => esc_html__( 'Disable Title', 'infinity' ),
				'desc' => esc_html__( 'Check this box to disable the title of the page', 'infinity' ),
				'id'   => $prefix . 'disable_title',
				'type' => 'checkbox'
			),
			array(
				'name' => esc_html__( 'Title Background', 'infinity' ),
				'desc' => esc_html__( 'Upload an image or enter a URL for heading title', 'infinity' ),
				'id'   => $prefix . 'heading_image',
				'type' => 'file',
			),
			array(
				'name' => esc_html__( 'Description', 'infinity' ),
				'desc' => esc_html__( 'Enter description for this page', 'infinity' ),
				'id'   => $prefix . 'heading_desc',
				'type' => 'text',
			),
			array(
				'name' => esc_html__( 'Disable Comment', 'infinity' ),
				'desc' => esc_html__( 'Check this box to disable comment form of the page', 'infinity' ),
				'id'   => $prefix . 'disable_comment',
				'type' => 'checkbox'
			),
			array(
				'name' => esc_html__( 'Custom Class', 'infinity' ),
				'desc' => esc_html__( 'Enter custom class for this page', 'infinity' ),
				'id'   => $prefix . 'custom_class',
				'type' => 'text'
			),
			array(
				'name' => esc_html__( 'One page scroll available', 'infinity' ),
				'desc' => esc_html__( 'Check this box to one-page-scroll', 'infinity' ),
				'id'   => $prefix . 'one_page_scroll',
				'type' => 'checkbox'
			),
		),
	);

	$meta_boxes['portfolio_metabox'] = array(
		'id'           => 'portfolio_metabox',
		'title'        => esc_html__( 'Settings', 'infinity' ),
		'object_types' => array( PORTFOLIO_TYPE ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'fields'       => array(
			array(
				'name'    => esc_html__( 'Page Layout', 'infinity' ),
				'desc'    => esc_html__( 'Choose a layout you want', 'infinity' ),
				'id'      => $prefix . 'portfolio_layout_private',
				'type'    => 'select',
				'options' => array(
					'default'         => esc_html__( 'Default', 'infinity' ),
					'full-width'      => esc_html__( 'Full width', 'infinity' ),
					'content-sidebar' => esc_html__( 'Content-Sidebar', 'infinity' ),
				),
			),
			array(
				'name'    => esc_html__( 'Title style', 'infinity' ),
				'desc'    => esc_html__( 'Choose a style you want', 'infinity' ),
				'id'      => $prefix . 'portfolio_title_style',
				'type'    => 'select',
				'options' => array(
					'default'          => esc_html__( 'Default', 'infinity' ),
					'image-background' => esc_html__( 'Image background', 'infinity' ),
				),
			),
			array(
				'name' => esc_html__( 'Title Background', 'infinity' ),
				'desc' => esc_html__( 'Upload an image or enter a URL for heading title', 'infinity' ),
				'id'   => $prefix . 'portfolio_heading_image',
				'type' => 'file',
			),
			array(
				'name' => esc_html__( 'Custom Title', 'infinity' ),
				'desc' => esc_html__( 'Enter custom title for this page', 'infinity' ),
				'id'   => $prefix . 'portfolio_custom_title',
				'type' => 'textarea',
			),
			array(
				'name' => esc_html__( 'Description', 'infinity' ),
				'desc' => esc_html__( 'Enter description for this page', 'infinity' ),
				'id'   => $prefix . 'portfolio_heading_desc',
				'type' => 'textarea',
			),
			array(
				'name' => esc_html__( 'Custom Class', 'infinity' ),
				'desc' => esc_html__( 'Enter custom class for this page', 'infinity' ),
				'id'   => $prefix . 'portfolio_custom_class',
				'type' => 'text'
			),
		),
	);

	return $meta_boxes;
}
