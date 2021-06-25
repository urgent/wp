<?php
vc_map( array(
	'name'     => esc_html__( 'TM Blog', 'tm_transport' ),
	'base'     => 'thememove_blog',
	'category' => esc_html__( 'by TM Transport', 'tm_transport' ),
	'params'   => array(
		array(
			"type"       => "dropdown",
			"heading"    => "Show Share Buttons",
			"param_name" => "enable_share",
			"value"      => array(
				"No"  => 'false',
				"Yes" => 'true',
			),
		),
	)
) );
