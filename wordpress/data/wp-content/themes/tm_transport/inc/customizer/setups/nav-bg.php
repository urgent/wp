<?php
/**
 * Nav Background
 * ================
 */
$section  = 'nav_bg';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Main Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color-alpha',
	'setting'   => 'nav_bg_menu_background',
	'label'     => esc_html__( 'Main Background', 'tm_transport' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TRANSPORT_SECONDARY_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.main-navigation',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_menu_text_bg',
	'label'       => esc_html__( 'Link background', 'tm_transport' ),
	'description' => esc_html__( 'Link background', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'rgba(255,255,255,0.2)',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '#site-navigation .menu > ul > li >a:after, #site-navigation .menu > li >a:after',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Sub Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color-alpha',
	'setting'     => 'nav_bg_sub_menu_text_bg',
	'label'       => esc_html__( 'Link background', 'tm_transport' ),
	'description' => esc_html__( 'Link background', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TRANSPORT_SECONDARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '#site-navigation .mega-menu .sub-menu:after,#site-navigation .sub-menu li:after, #site-navigation .children li:after',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_bg_sub_menu_text_bg_hover',
	'description' => esc_html__( 'Link background on hover', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TRANSPORT_PRIMARY_COLOR,
	'output'      => array(
		'element'  => '#site-navigation .sub-menu li:hover:after, #site-navigation .children li:hover:after',
		'property' => 'background-color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'nav_bg_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<div class="group_title">Mobile Menu</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'nav_bg_mobile_menu_bg',
	'description' => esc_html__( 'Mobile menu background', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TRANSPORT_PRIMARY_COLOR,
	'output'      => array(
		'element'  => '.site-header',
		'property' => 'background-color',
		'prefix'   => '@media ( max-width: 61.9375rem ) {',
		'suffix'   => '}',
	)
) );
