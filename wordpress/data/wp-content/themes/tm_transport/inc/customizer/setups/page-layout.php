<?php
/**
 * Page Layout
 * =========
 */
$section  = 'page_layout';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'radio-image',
	'setting'     => 'page_layout',
	'label'       => esc_html__( 'Page layout', 'tm_transport' ),
	'description' => esc_html__( 'Choose the site layout you want', 'tm_transport' ),
	'help'        => esc_html__( 'Choose the site layout you want', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'full-width',
	'choices'     => array(
		'full-width'      => TRANSPORT_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );
