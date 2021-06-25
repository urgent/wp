<?php
/**
 * Button Style
 * ============
 */
$section  = 'button_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'button_style_font_family',
	'label'    => esc_html__( 'Font Family', 'tm_transport' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'Oswald',
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.cart_list .wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.eg-infinity-features-element-26,.btn,.wpcf7-submit',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'button_style_font_size',
	'label'     => esc_html__( 'Font Size', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 13,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.cart_list .wc-forward,.woocommerce .cart .button, .woocommerce .cart input.button,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.btn',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'button_style_font_weight',
	'label'     => esc_html__( 'Font Weight', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 400,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.cart_list .wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.btn',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_style_link_color',
	'label'       => esc_html__( 'Link Color', 'tm_transport' ),
	'description' => esc_html__( 'Link Color', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.cart_list a.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.eg-infinity-features-element-26 span,.btn span',
		'property' => 'color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'button_style_link_color_hover',
	'description' => esc_html__( 'Link Color on hover', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'output'      => array(
		'element'  => '.cart_list a.wc-forward:hover,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.eg-infinity-features-element-26::before,.btn::before',
		'property' => 'color',
	)
) );
