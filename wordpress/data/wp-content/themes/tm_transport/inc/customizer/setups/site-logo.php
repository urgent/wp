<?php
/**
 * Site Logo
 * =========
 */
$section  = 'site_logo';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'image',
	'setting'     => 'site_logo',
	'label'       => esc_html__( 'Logo', 'tm_transport' ),
	'description' => esc_html__( 'Choose a default logo image to display', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'http://transport.thememove.com/data/images/logo.png',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'image',
	'setting'     => 'site_logo_retina',
	'label'       => esc_html__( 'Retina Logo', 'tm_transport' ),
	'description' => esc_html__( 'Choose a image for retina logo', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'http://transport.thememove.com/data/images/logo@2x.png',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_logo_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Spacing</div>',
) );


Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Logo Padding', 'tm_transport' ),
	'setting'   => 'site_logo_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '60px 20px 60px 15px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.site-branding',
		'property' => 'padding',
		'prefix'   => '@media ( min-width: 62rem ) {',
		'suffix'   => '}',
	)
) );
