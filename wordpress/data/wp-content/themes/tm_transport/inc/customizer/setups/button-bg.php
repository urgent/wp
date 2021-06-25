<?php
/**
 * Button Background
 * ============
 */
$section  = 'button_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'button_bg_color',
	'label'     => esc_html__( 'Background color', 'tm_transport' ),
	'help'      => esc_html__( 'Setup background color for your button', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#CA1F26',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn.alt:before,.cart_list .button.wc-forward,.eg-infinity-features-element-26 span,.btn span,input[type="submit"]',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'button_bg_color_hover',
	'label'     => esc_html__( 'Background color on hover', 'tm_transport' ),
	'help'      => esc_html__( 'Setup background color for your button', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#232331',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn.alt span,.cart_list .button.wc-forward:hover,.eg-infinity-features-element-26::before,.btn::before',
		'property' => 'background-color',
	)
) );
