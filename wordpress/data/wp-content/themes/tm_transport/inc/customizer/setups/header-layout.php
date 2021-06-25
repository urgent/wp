<?php
/**
 * Header Layout
 * ==============
 */
$section  = 'header_layout';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'select',
	'setting'     => 'header_type',
	'label'       => esc_html__( 'Header Type', 'tm_transport' ),
	'description' => esc_html__( 'Choose the header type you want', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'header01',
	'choices'     => array(
		'header01' => 'Type 01',
		'header02' => 'Type 02',
		'header03' => 'Type 03',
		'header04' => 'Type 04',
		'header05' => 'Type 05',
		'header06' => 'Type 06',
		'header07' => 'Type 07',
		'header08' => 'Type 08',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'header_layout_search_enable',
	'label'       => esc_html__( 'Search box', 'tm_transport' ),
	'description' => esc_html__( 'Turn on this option if you want to enable search box on your site', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

if ( class_exists( 'WooCommerce' ) ) {
	Kirki::add_field( 'infinity', array(
		'type'        => 'toggle',
		'setting'     => 'header_layout_mini_cart_enable',
		'label'       => esc_html__( 'Mini Cart', 'tm_transport' ),
		'description' => esc_html__( 'Turn on this option if you want to enable mini cart for header', 'tm_transport' ),
		'section'     => $section,
		'priority'    => $priority ++,
		'default'     => 1,
	) );
}
