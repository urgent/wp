<?php
/**
 * Nav Spacing
 * ===========
 */
$section  = 'nav_spacing';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'tm_transport' ),
	'setting'   => 'nav_spacing_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '30px 30px 30px 30px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#site-navigation .menu > ul > li > a, #site-navigation .menu > li > a',
		'property' => 'padding',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_spacing_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'text',
	'label'     => esc_html__( 'Link padding', 'tm_transport' ),
	'setting'   => 'nav_spacing_sub_menu_text_padding',
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '20px 20px 20px 20px',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '#site-navigation .sub-menu li a, #site-navigation .children li a',
		'property' => 'padding',
	)
) );
