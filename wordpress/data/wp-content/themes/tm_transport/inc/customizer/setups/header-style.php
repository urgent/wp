<?php
/**
 * Header Style
 * ============
 */
$section  = 'header_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'header_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Header</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'header_style_font_family',
	'label'    => esc_html__( 'Font Family', 'tm_transport' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'Open Sans',
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.site-header',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'header_style_font_size',
	'label'     => esc_html__( 'Font Size', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 14,
	'choices'   => array(
		'min'  => 7,
		'max'  => 48,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'header_style_font_weight',
	'label'     => esc_html__( 'Font Weight', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 300,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.site-header',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'header_style_font_color',
	'label'     => esc_html__( 'Font Color', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#111',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-header,.extra-info h3',
		'property' => 'color',
	)
) );
if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_field( 'infinity', array(
		'type'     => 'custom',
		'setting'  => 'header_style_group_title_' . $priority ++,
		'section'  => $section,
		'priority' => $priority ++,
		'default'  => '<div class="group_title">Mini Cart</div>',
		'required' => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'infinity', array(
		'type'      => 'color',
		'setting'   => 'header_style_minicart_text_color',
		'label'     => esc_html__( 'Cart Icon Color', 'tm_transport' ),
		'section'   => $section,
		'priority'  => $priority ++,
		'default'   => '#ffffff',
		'transport' => 'postMessage',
		'output'    => array(
			'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:before',
			'property' => 'color',
		),
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );

	Kirki::add_field( 'infinity', array(
		'type'      => 'color',
		'setting'   => 'header_style_minicart_number_color',
		'label'     => esc_html__( 'Cart Number Color', 'tm_transport' ),
		'section'   => $section,
		'priority'  => $priority ++,
		'default'   => '#ffffff',
		'transport' => 'postMessage',
		'output'    => array(
			'element'  => '.mini-cart .mini-cart__button .mini-cart-icon:after',
			'property' => 'color',
		),
		'required'  => array(
			array(
				'setting'  => 'header_layout_mini_cart_enable',
				'operator' => '==',
				'value'    => 1,
			),
		)
	) );
}
