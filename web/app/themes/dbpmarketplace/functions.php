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
	//Applications
	$prefix1 = 'dummy1_';

	$cmb_demo = new_cmb2_box( array(
		'id'            => 'application',
		'title'         => __( 'Aplikasi', 'cmb2' ),
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
		'name' => __( 'Aplikasi URL :', 'cmb2' ),
		'desc' => __( 'cth: https://play.google.com/store/apps/details?id=com.offlinedictionary.kamusdewan', 'cmb2' ),
		'id'   => 'url',
		'type' => 'text_url',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb_demo->add_field( array(
		'name' => __( 'Jenis :', 'cmb2' ),
		'desc' => __( '', 'cmb2' ),
		'id'   => 'type',
		'type' => 'radio_inline',
		'options' => array(
				'single' => __( 'Single', 'cmb2' ),
				'series'   => __( 'Siri', 'cmb2' ),
			),
			'default' => 'standard',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb_demo->add_field( array(
		'name'    => __('Gambar :', 'cmb2'),
		'desc'    => '',
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

	//E-Books

	$cmb_books = new_cmb2_box( array(
		'id'            => 'E-Buku',
		'title'         => __( 'E-Buku', 'cmb2' ),
		'object_types'  => array( 'ebooks', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_in_rest' => true,
		 // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// EBuku Gambar
	$cmb_books->add_field( array(
		'name' => __( 'Gambar :', 'cmb2' ),
		'desc' => '',
		'id'   => 'eBukuGambar',
		'type' => 'file',
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

	// EBuku Fail

	$cmb_books->add_field( array(
		'name' => __( 'Fail :', 'cmb2' ),
		'desc' => __( 'Muat Turun PDF Fail', 'cmb2' ),
		'id'   => 'eBukuFail',
		'type' => 'file',
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

	$cmb_books->add_field( array(
		'name' => __( 'Pembayaran :', 'cmb2' ),
		'desc' => __( '', 'cmb2' ),
		'id'   => 'eBukuPembayaran',
		'type' => 'radio_inline',
		'options' => array(
				'Ya' => __( 'Ya', 'cmb2' ),
				'Tidak'   => __( 'Tidak', 'cmb2' ),
			),
			'default' => 'standard',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb_books->add_field( array(
		'name' => __( 'Harga :', 'cmb2' ),
		'desc' => __( '(RM)', 'cmb2' ),
		'id'   => 'eBukuHarga',
		'type' => 'text_small',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	//E-Kamus

	$cmb_kamus = new_cmb2_box( array(
		'id'            => 'E-Kamus',
		'title'         => __( 'E-Kamus', 'cmb2' ),
		'object_types'  => array( 'ekamus', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_in_rest' => true,
		 // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// EKamus Gambar
	$cmb_kamus->add_field( array(
		'name' => __( 'Gambar :', 'cmb2' ),
		'desc' => '',
		'id'   => 'eKamusGambar',
		'type' => 'file',
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

	// EKamus Fail

	$cmb_kamus->add_field( array(
		'name' => __( 'Fail :', 'cmb2' ),
		'desc' => __( 'Muat Turun PDF Fail', 'cmb2' ),
		'id'   => 'eKamusFail',
		'type' => 'file',
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

	$cmb_kamus->add_field( array(
		'name' => __( 'Pembayaran :', 'cmb2' ),
		'desc' => __( '', 'cmb2' ),
		'id'   => 'eKamusPembayaran',
		'type' => 'radio_inline',
		'options' => array(
				'Ya' => __( 'Ya', 'cmb2' ),
				'Tidak'   => __( 'Tidak', 'cmb2' ),
			),
			'default' => 'standard',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb_kamus->add_field( array(
		'name' => __( 'Harga :', 'cmb2' ),
		'desc' => __( '(RM)', 'cmb2' ),
		'id'   => 'eKamusHarga',
		'type' => 'text_small',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	//E-Komik

	$cmb_komik = new_cmb2_box( array(
		'id'            => 'E-Komik',
		'title'         => __( 'E-Komik', 'cmb2' ),
		'object_types'  => array( 'ekomik', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_in_rest' => true,
		 // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// EKomik Gambar
	$cmb_komik->add_field( array(
		'name' => __( 'Gambar :', 'cmb2' ),
		'desc' => '',
		'id'   => 'eKomikGambar',
		'type' => 'file',
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

	// EKomik Fail

	$cmb_komik->add_field( array(
		'name' => __( 'Fail :', 'cmb2' ),
		'desc' => __( 'Muat Turun PDF Fail', 'cmb2' ),
		'id'   => 'eKomikFail',
		'type' => 'file',
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

	//EKomik Jenis

	$cmb_komik->add_field( array(
		'name' => __( 'Jenis :', 'cmb2' ),
		'desc' => __( '', 'cmb2' ),
		'id'   => 'eKomikJenis',
		'type' => 'radio_inline',
		'options' => array(
				'single' => __( 'Single', 'cmb2' ),
				'series'   => __( 'Siri', 'cmb2' ),
			),
			'default' => 'standard',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb_komik->add_field( array(
		'name' => __( 'Pembayaran :', 'cmb2' ),
		'desc' => __( '', 'cmb2' ),
		'id'   => 'eKomikPembayaran',
		'type' => 'radio_inline',
		'options' => array(
				'Ya' => __( 'Ya', 'cmb2' ),
				'Tidak'   => __( 'Tidak', 'cmb2' ),
			),
			'default' => 'standard',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb_komik->add_field( array(
		'name' => __( 'Harga :', 'cmb2' ),
		'desc' => __( '(RM)', 'cmb2' ),
		'id'   => 'eKomikHarga',
		'type' => 'text_small',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	//E-Majalah

	$cmb_majalah = new_cmb2_box( array(
		'id'            => 'E-Majalah',
		'title'         => __( 'E-Majalah', 'cmb2' ),
		'object_types'  => array( 'emajalah', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
		'show_in_rest' => true,
		 // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// EMajalah Gambar
	$cmb_majalah->add_field( array(
		'name' => __( 'Gambar :', 'cmb2' ),
		'desc' => '',
		'id'   => 'eMajalahGambar',
		'type' => 'file',
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

	// EMajalah Fail

	$cmb_majalah->add_field( array(
		'name' => __( 'Fail :', 'cmb2' ),
		'desc' => __( 'Muat Turun PDF Fail', 'cmb2' ),
		'id'   => 'eMajalahFail',
		'type' => 'file',
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

	$cmb_majalah->add_field( array(
		'name' => __( 'Pembayaran :', 'cmb2' ),
		'desc' => __( '', 'cmb2' ),
		'id'   => 'eMajalahPembayaran',
		'type' => 'radio_inline',
		'options' => array(
				'Ya' => __( 'Ya', 'cmb2' ),
				'Tidak'   => __( 'Tidak', 'cmb2' ),
			),
			'default' => 'standard',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );

	$cmb_majalah->add_field( array(
		'name' => __( 'Harga :', 'cmb2' ),
		'desc' => __( '(RM)', 'cmb2' ),
		'id'   => 'eMajalahHarga',
		'type' => 'text_small',
		'show_in_rest' => true,
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );




}


?>