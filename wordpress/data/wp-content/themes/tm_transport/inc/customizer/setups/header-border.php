<?php
/**
 * Header Border
 * ============
 */
$section  = 'header_border';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'header_border_width',
	'label'     => esc_html__( 'Border width', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'border-width',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'header_border_style',
	'label'     => esc_html__( 'Border style', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'solid',
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'tm_transport' ),
		'dashed' => esc_html__( 'Dashed', 'tm_transport' ),
		'dotted' => esc_html__( 'Dotted', 'tm_transport' ),
		'double' => esc_html__( 'Double', 'tm_transport' ),
	),
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'border-style',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'header_border_color',
	'label'     => esc_html__( 'Border color', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#000',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'border-color',
	)
) );
