<?php
/**
 * Footer Background
 * ============
 */
$section  = 'footer_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'footer_bg_color',
	'label'     => esc_html__( 'Background color', 'tm_transport' ),
	'help'      => esc_html__( 'Setup background color for your footer', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TRANSPORT_SECONDARY_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-footer,.copyright',
			'property' => 'background-color',
		),
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
	'type'      => 'color-alpha',
	'setting'   => 'footer_bg_widget_title_bg',
	'label'     => esc_html__( 'Background color', 'tm_transport' ),
	'help'      => esc_html__( 'Setup background color for your footer', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TRANSPORT_PRIMARY_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.site-footer .widget-title span',
			'property' => 'background-color',
		),
		array(
			'element'  => '.site-footer .widget-title span:after',
			'property' => 'border-left-color',
		),
	)
) );
