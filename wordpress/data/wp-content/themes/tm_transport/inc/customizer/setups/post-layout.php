<?php
/**
 * Post Layout
 * =========
 */
$section  = 'post_layout';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'radio-image',
	'setting'     => 'post_layout',
	'label'       => esc_html__( 'Post layout', 'tm_transport' ),
	'description' => esc_html__( 'Choose the post layout you want', 'tm_transport' ),
	'help'        => esc_html__( 'Choose the post layout you want', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => TRANSPORT_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );
