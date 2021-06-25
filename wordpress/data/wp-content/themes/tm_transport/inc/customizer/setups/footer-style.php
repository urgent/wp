<?php
/**
 * Footer Style
 * ============
 */
$section  = 'footer_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'footer_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Text</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'footer_style_font_family',
	'label'    => esc_html__( 'Font Family', 'tm_transport' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'Open Sans',
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.site-footer',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'footer_style_font_size',
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
		'element'  => '.site-footer',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'footer_style_font_weight',
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
		'element'  => '.site-footer',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'footer_style_text_color',
	'label'     => esc_html__( 'Text Color', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#AAAAAA',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-footer,.copyright .right',
		'property' => 'color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'footer_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Link</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'footer_style_link_color',
	'label'       => esc_html__( 'Link Color', 'tm_transport' ),
	'description' => esc_html__( 'Link Color', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#AAAAAA',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.site-footer a',
		'property' => 'color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'footer_style_link_color_hover',
	'description' => esc_html__( 'Link color on hover', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TRANSPORT_PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.site-footer a:hover',
		'property' => 'color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'footer_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Widget Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'footer_style_widget_title_color',
	'label'     => esc_html__( 'Color', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#ffffff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-footer .widget-title',
		'property' => 'color',
	)
) );

