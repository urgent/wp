<?php
/**
 * Nav Border
 * ================
 */
$section  = 'nav_border';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_border_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Boder width', 'tm_transport' ),
	'setting'   => 'nav_border_menu_text_border_with',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '1px 1px 1px 1px',
	'transport' => 'postMessage',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'nav_border_style',
	'label'     => esc_html__( 'Border style', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'solid',
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'tm_transport' ),
		'dashed' => esc_html__( 'Dashed', 'tm_transport' ),
		'dotted' => esc_html__( 'Dotted', 'tm_transport' ),
		'double' => esc_html__( 'Double', 'tm_transport' ),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_border_menu_text_border_color',
	'label'       => esc_html__( 'Color', 'tm_transport' ),
	'description' => esc_html__( 'Border color', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#999',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_border_menu_text_border_color_hover',
	'description' => esc_html__( 'Border color on hover', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#999',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_border_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Border width', 'tm_transport' ),
	'setting'   => 'nav_border_sub_menu_text_border_with',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '1px 1px 1px 1px',
	'transport' => 'postMessage',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'radio-buttonset',
	'setting'   => 'nav_border_sub_menu_style',
	'label'     => esc_html__( 'Border style', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 'solid',
	'transport' => 'postMessage',
	'choices'   => array(
		'solid'  => esc_html__( 'Solid', 'tm_transport' ),
		'dashed' => esc_html__( 'Dashed', 'tm_transport' ),
		'dotted' => esc_html__( 'Dotted', 'tm_transport' ),
		'double' => esc_html__( 'Double', 'tm_transport' ),
	),
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_menu_text_border_color',
	'label'       => esc_html__( 'Color', 'tm_transport' ),
	'description' => esc_html__( 'Border color', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#999',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_style_sub_menu_text_border_color_hover',
	'description' => esc_html__( 'Border color on hover', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#999',
) );
