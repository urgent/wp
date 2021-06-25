<?php
/**
 * Top Area Background
 * ============
 */
$section  = 'top_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'top_bg_color',
	'label'     => esc_html__( 'Background color', 'tm_transport' ),
	'help'      => esc_html__( 'Setup background color for your top', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#ffffff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.header02 .site-top,.header03 .site-top, .header07 .site-top',
		'property' => 'background-color',
	),
	'required'  => array(
		array(
			'setting'  => 'header_type',
			'operator' => '!=',
			'value'    => 'header01',
		),
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );
