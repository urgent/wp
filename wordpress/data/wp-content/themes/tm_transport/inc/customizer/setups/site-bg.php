<?php
/**
 * Site Background
 * =========
 */
$section  = 'background_image';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_bg_color',
	'label'     => esc_html__( 'Background color', 'tm_transport' ),
	'help'      => esc_html__( 'Setup background color for your header', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#999',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => 'body.boxed',
		'property' => 'background-color',
	)
) );
