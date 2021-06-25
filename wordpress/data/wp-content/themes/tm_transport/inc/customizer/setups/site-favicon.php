<?php
/**
 * Site Favicon
 * =========
 */
$section  = 'site_favicon';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_favicon_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'image',
	'setting'     => 'site_favicon',
	'label'       => esc_html__( 'Favicon', 'tm_transport' ),
	'description' => esc_html__( 'File must be .png or .ico format. Optimal dimensions: 32px x 32px', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'http://transport.thememove.com/data/images/favicon.ico',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_favicon_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'image',
	'setting'     => 'site_apple_touch_icon',
	'label'       => esc_html__( 'Apple Touch Icon', 'tm_transport' ),
	'description' => esc_html__( 'File must be .png format. Optimal dimensions: 152px x 152px', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'http://transport.thememove.com/data/images/apple-icon.png',
) );
