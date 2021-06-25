<?php
/**
 * Header Spacing
 * ============
 */
$section  = 'button_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'button_padding',
	'label'     => esc_html__( 'Padding', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '15px 20px 15px 20px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.eg-infinity-features-element-26 span,.eg-infinity-features-element-26::before,.btn span,.btn::before',
		'property' => 'padding',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'setting'   => 'button_margin',
	'label'     => esc_html__( 'Margin', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '0px 0px 0px 0px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.btn',
		'property' => 'margin',
	)
) );
