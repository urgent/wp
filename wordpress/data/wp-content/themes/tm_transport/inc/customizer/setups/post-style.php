<?php
/**
 * Post Style
 * =========
 */
$section  = 'post_style';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'post_style_group_title_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'help'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'default'  => '<div class="group_title">Title</div>',
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'select2',
	'setting'  => 'post_style_heading_font_family',
	'label'    => esc_html__( 'Font Family', 'tm_transport' ),
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => 'Oswald',
	'choices'  => Kirki_Fonts::get_font_choices(),
	'output'   => array(
		'element'  => '.big-title--single .entry-title',
		'property' => 'font-family',
	),
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'post_style_heading_font_weight',
	'label'     => esc_html__( 'Font Weight', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 700,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => 100,
		'max'  => 900,
		'step' => 100,
	),
	'output'    => array(
		'element'  => '.big-title--single .entry-title',
		'property' => 'font-weight',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'post_style_heading_letter_spacing',
	'label'     => esc_html__( 'Letter Spacing', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 0,
	'transport' => 'postMessage',
	'choices'   => array(
		'min'  => - 1,
		'max'  => 1,
		'step' => .05,
	),
	'output'    => array(
		'element'  => '.big-title--single .entry-title',
		'property' => 'letter-spacing',
		'units'    => 'em',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'post_style_heading_font_color',
	'label'     => esc_html__( 'Font Color', 'tm_transport' ),
	//'description' => esc_html__('This is the control description', 'tm_transport'),
	'help'      => esc_html__( 'This is some extra help text.', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => '#111111',
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title--single .entry-title',
		'property' => 'color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'slider',
	'setting'   => 'post_style_heading_font_size',
	'label'     => esc_html__( 'Font Size', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => 35,
	'choices'   => array(
		'min'  => 15,
		'max'  => 100,
		'step' => 1,
	),
	'transport' => 'postMessage',
	'output'    => array(
		'element'  => '.big-title--single .entry-title',
		'property' => 'font-size',
		'units'    => 'px',
	)
) );
