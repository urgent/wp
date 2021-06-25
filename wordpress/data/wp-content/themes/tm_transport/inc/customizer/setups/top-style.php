<?php
/**
 * Top Area Style
 * ============
 */
$section  = 'top_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'top_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Link</div>',
	'required' => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'top_style_link_font_family',
	'label'    => esc_html__( 'Font Family', 'tm_transport' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'Open Sans',
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.site-top a',
		'property' => 'font-family',
	),
	'required' => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'top_style_link_font_size',
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
		'element'  => '.site-top a',
		'property' => 'font-size',
		'units'    => 'px',
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'top_style_link_font_weight',
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
		'element'  => '.site-top a',
		'property' => 'font-weight',
	),
	'required'  => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'top_style_link_font_color',
	'label'       => esc_html__( 'Link Color', 'tm_transport' ),
	'description' => esc_html__( 'Link Color', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#777777',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.site-top a',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'top_style_link_font_color_hover',
	'description' => esc_html__( 'Link color on hover', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TRANSPORT_PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.site-top a:hover',
		'property' => 'color',
	),
	'required'    => array(
		array(
			'setting'  => 'top_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );
