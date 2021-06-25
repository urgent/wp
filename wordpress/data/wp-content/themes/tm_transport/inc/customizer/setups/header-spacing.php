<?php
/**
 * Header Spacing
 * ============
 */
$section  = 'header_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'header_spacing_padding',
	'label'     => esc_html__( 'Padding', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'padding',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'header_spacing_margin',
	'label'     => esc_html__( 'Margin', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'margin',
	)
) );
