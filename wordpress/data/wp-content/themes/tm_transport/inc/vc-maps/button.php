<?php
vc_map( array(
	'name'     => esc_html__( 'TM Button', 'tm_transport' ),
	'base'     => 'thememove_button',
	'category' => esc_html__( 'by TM Transport', 'tm_transport' ),
	'params'   => array(
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
			'description' => esc_html__( 'Entry your url here', 'tm_transport' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => "Icon",
			'admin_label' => true,
			'param_name'  => 'icon',
			'description' => esc_html__( 'Example: fa-arrow-right', 'tm_transport' ),
		),
		array(
			'type'        => 'textfield',
			'heading'     => "Class",
			'admin_label' => true,
			'param_name'  => 'el_class',
		),
	)
) );
