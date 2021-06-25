<?php
/**
 * Copyright Style
 * ============
 */
$section  = 'copyright_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'copyright_style_text_color',
	'label'     => esc_html__( 'Text Color', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#ffffff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.copyright',
		'property' => 'color',
	),
	'required'  => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'copyright_style_link_color',
	'label'       => esc_html__( 'Link Color', 'tm_transport' ),
	'description' => esc_html__( 'Link Color', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.copyright a',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'copyright_style_link_color_hover',
	'description' => esc_html__( 'Link color on hover', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.copyright a:hover',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	),
) );
