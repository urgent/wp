<?php
/**
 * Page Background
 * =========
 */
$section  = 'page_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'page_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'page_bg_color',
	'label'     => esc_html__( 'Background color', 'tm_transport' ),
	'help'      => esc_html__( 'Setup background color for your header', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#fff',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'color-alpha',
	'setting'  => 'page_overlay_bg_color',
	'label'    => esc_html__( 'Overlay color', 'tm_transport' ),
	'help'     => esc_html__( 'Setup overlay color for your header', 'tm_transport' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'rgba(238,238,238,0.9)',
	'output'   => array(
		'element'  => '.big-title:after',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'image',
	'setting'   => 'page_bg_image',
	'label'     => esc_html__( 'Background Image', 'tm_transport' ),
	'help'      => esc_html__( 'Default background image for your header', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'http://transport.thememove.com/data/images/bg01.jpg',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title',
		'property' => 'background-image',
	)
) );
