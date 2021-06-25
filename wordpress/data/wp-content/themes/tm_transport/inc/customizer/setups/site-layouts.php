<?php
/**
 * Site Layout
 * ================
 */
$section  = 'site_layouts';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_layouts_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'radio-image',
	'setting'     => 'site_layout',
	'label'       => esc_html__( 'Site layout', 'tm_transport' ),
	'description' => esc_html__( 'Choose the site layout you want', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => TRANSPORT_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_layouts_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'radio-image',
	'setting'     => 'archive_layout',
	'label'       => esc_html__( 'Archive layout', 'tm_transport' ),
	'description' => esc_html__( 'Choose the archive layout you want', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'content-sidebar',
	'choices'     => array(
		'full-width'      => TRANSPORT_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_layouts_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'radio-image',
	'setting'     => 'search_layout',
	'label'       => esc_html__( 'Search layout', 'tm_transport' ),
	'description' => esc_html__( 'Choose the search layout you want', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'sidebar-content',
	'choices'     => array(
		'full-width'      => TRANSPORT_THEME_ROOT . '/core/customizer/images/1c.png',
		'content-sidebar' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cr.png',
		'sidebar-content' => TRANSPORT_THEME_ROOT . '/core/customizer/images/2cl.png',
	),
) );
