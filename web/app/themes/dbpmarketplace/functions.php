<?php


add_action( 'cmb2_init', 'cmb2_sample_metaboxes' );

/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	/**
	 * Initiate the metabox
	 */

	/*$prefix = 'dummy_';

	$cmb = new_cmb2_box( array(
		'id'            => 'posts',
		'title'         => __( 'Posts Arguments', 'cmb2' ),
		'object_types'  => array( 'post', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_in_rest' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Title', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
		'show_in_rest' => true, // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

	// URL text field
	$cmb->add_field( array(
		'name' => __( 'Website URL', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'url',
		'type' => 'text_url',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	// Email text field
	$cmb->add_field( array(
		'name' => __( 'Test Text Email', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'email',
		'type' => 'text_email',
		'show_in_rest' => true,
		// 'repeatable' => true,
	) );*/

	// Add other metaboxes as needed

	$prefix1 = 'dummy1_';

	$cmb_demo = new_cmb2_box( array(
		'id'            => 'application',
		'title'         => __( 'appplication Arguments', 'cmb2' ),
		'object_types'  => array( 'applications', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_in_rest' => true,
		 // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );


	// URL text field
	$cmb_demo->add_field( array(
		'name' => __( 'Application URL', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'url',
		'type' => 'text_url',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb_demo->add_field( array(
		'name' => __( 'Type', 'cmb2' ),
		'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'type',
		'type' => 'radio_inline',
		'options' => array(
				'single' => __( 'Single', 'cmb2' ),
				'series'   => __( 'Series', 'cmb2' ),
			),
			'default' => 'standard',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb_demo->add_field( array(
		'name'    => __('Images', 'cmb2'),
		'desc'    => 'Upload an image or enter an URL.',
		'id'      => 'images',
		'type'    => 'file',
		'show_in_rest' => true,
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			'type' => 'application/pdf', // Make library only display PDFs.
			// Or only allow gif, jpg, or png images
			// 'type' => array(
			// 	'image/gif',
			// 	'image/jpeg',
			// 	'image/png',
			// ),
		),
		'preview_size' => 'large', // Image size to use when previewing in the admin.
	) );

}


?>