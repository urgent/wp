<?php
vc_map( array(
	'name'     => esc_html__( 'TM Google Maps', 'tm_transport' ),
	'base'     => 'thememove_gmaps',
	'category' => esc_html__( 'by TM Transport', 'tm_transport' ),
	'params'   => array(
		array(
			'type'        => 'textfield',
			'heading'     => 'Google API',
			'admin_label' => true,
			'param_name'  => 'google_api',
			'value'       => '',
			'description' => esc_html__( 'Enter Google API, get it here https://developers.google.com/maps/documentation/javascript/get-api-key', 'tm_transport' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Address or Coordinate',
			'admin_label' => true,
			'param_name'  => 'address',
			'value'       => '40.7590615,-73.969231',
			'description' => esc_html__( 'Enter address or coordinate.', 'tm_transport' ),
		),
		array(
			'type'        => 'attach_image',
			'heading'     => 'Marker icon',
			'param_name'  => 'marker_icon',
			'description' => esc_html__( 'Choose a image for marker address', 'tm_transport' ),
		),
		array(
			'type'        => 'textarea_html',
			'heading'     => 'Marker Information',
			'param_name'  => 'content',
			'description' => esc_html__( 'Content for info window', 'tm_transport' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Height',
			'param_name'  => 'map_height',
			'value'       => '480',
			'description' => esc_html__( 'Enter map height (in pixels or percentage)', 'tm_transport' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Width',
			'param_name'  => 'map_width',
			'value'       => '100%',
			'description' => esc_html__( 'Enter map width (in pixels or percentage)', 'tm_transport' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Zoom level',
			'param_name'  => 'zoom',
			'value'       => '16',
			'description' => esc_html__( 'Map zoom level', 'tm_transport' ),
		),
		array(
			'type'       => 'checkbox',
			'heading'    => 'Enable Map zoom',
			'param_name' => 'zoom_enable',
			'value'      => array(
				'Enable' => 'enable'
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => 'Map type',
			'admin_label' => true,
			'param_name'  => 'map_type',
			'description' => esc_html__( 'Choose a map type', 'tm_transport' ),
			'value'       => array(
				'Roadmap'   => 'roadmap',
				'Satellite' => 'satellite',
				'Hybrid'    => 'hybrid',
				'Terrain'   => 'terrain',
			),
		),
		array(
			'type'        => 'dropdown',
			'heading'     => 'Map style',
			'admin_label' => true,
			'param_name'  => 'map_style',
			'description' => esc_html__( 'Choose a map style. This approach changes the style of the Roadmap types (base imagery in terrain and satellite views is not affected, but roads, labels, etc. respect styling rules', 'tm_transport' ),
			'value'       => array(
				'Default'          => 'default',
				'Grayscale'        => 'style1',
				'Subtle Grayscale' => 'style2',
				'Apple Maps-esque' => 'style3',
				'Pale Dawn'        => 'style4',
				'Muted Blue'       => 'style5',
				'Paper'            => 'style6',
				'Light Dream'      => 'style7',
				'Retro'            => 'style8',
				'Avocado World'    => 'style9',
				'Facebook'         => 'style10',
				'Custom'           => 'custom'
			)
		),
		array(
			'type'       => 'textarea_raw_html',
			'heading'    => 'Map style snippet',
			'param_name' => 'map_style_snippet',
			'dependency' => array(
				'element' => 'map_style',
				'value'   => 'custom',
			)
		),
		array(
			'type'        => 'textfield',
			'heading'     => 'Extra class name',
			'param_name'  => 'el_class',
			'description' => esc_html__( 'If you want to use multiple Google Maps in one page, please add a class name for them.', 'tm_transport' ),
		),
	)
) );
