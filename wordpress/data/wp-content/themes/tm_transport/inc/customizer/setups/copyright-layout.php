<?php
/**
 * Copyright Layout
 * ============
 */
$section  = 'copyright_layout';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'        => 'toggle',
	'setting'     => 'copyright_layout_enable',
	'label'       => esc_html__( 'Copyright', 'tm_transport' ),
	'description' => esc_html__( 'Enabling this option will display copyright area', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 1,
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'textarea',
	'setting'     => 'copyright_layout_left_text',
	'label'       => esc_html__( 'Left Text', 'tm_transport' ),
	'description' => esc_html__( 'Entry the text for left block', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => 'Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://themeforest.net/item/structure-construction-business-wordpress-theme/10798442?ref=ThemeMove">ThemeMove.com</a>.',
	'transport'   => 'postMessage',
	'js_vars'     => array(
		'element'  => '.copyright .left',
		'function' => 'html',
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'textarea',
	'setting'     => 'copyright_layout_right_text',
	'label'       => esc_html__( 'Right Text', 'tm_transport' ),
	'description' => esc_html__( 'Entry the text for left block', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '&copy; Copyrights 2015 Transport Inc. All rights reserved.',
	'transport'   => 'postMessage',
	'js_vars'     => array(
		'element'  => '.copyright .right',
		'function' => 'html',
	),
	'required'    => array(
		array(
			'setting'  => 'copyright_layout_enable',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );
