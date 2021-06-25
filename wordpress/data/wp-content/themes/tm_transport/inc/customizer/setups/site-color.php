<?php
/**
 * Site Color
 * ================
 */
$section  = 'site_color';
$priority = 1;

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_color_primary',
	'label'     => esc_html__( 'Primary color', 'tm_transport' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TRANSPORT_PRIMARY_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.error404 .content i,.wpb_text_column li:before,.tp-caption.a1 span,.vc_custom_heading.style5:before,.vc_custom_heading.style4:before,.vc_custom_heading.style4:after,.woocommerce ul.products li.product .price,.woocommerce ul.products li.product .price ins,.woocommerce ul.product_list_widget li,ul.style1 li:before,.better-menu-widget li:before,.single-post .comment-reply-title:before, .page .comment-reply-title:before, .single-post .comments-title:before, .page .comments-title:before,.post-thumb .date,.sidebar .widget-title:before, .wpb_widgetised_column .widget-title:before,.vc_custom_heading.style3,.related.products h2:before,.eg-infinity-features-element-25 i,.services1 .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-blue .vc_icon_element-icon,.extra-info i,.vc_custom_heading.style1:before,.vc_custom_heading.style1:after,.vc_custom_heading.style2:before,.vc_custom_heading.style2:after',
			'property' => 'color',
		),
		array(
			'element'  => '.get-quote:before,.better-menu-widget li.current-menu-item:before,.pricing.style1 .wpb_column:nth-child(2) .wpb_wrapper .vc_custom_heading,.pricing.style1 .wpb_column:hover .wpb_wrapper .vc_custom_heading,.tp-caption.icon,.better-menu-widget li:hover:before,.pagination span.current,.thememove_testimonials .author,.recent-posts__item .recent-posts__thumb a:before,.header01 .site-branding,.header01 .site-branding:before,.copyright .left,.copyright .left:before',
			'property' => 'background-color',
		),
		array(
			'element'  => '.services1 .vc_col-sm-6:hover .vc_inner:before',
			'property' => 'background-color',
		),
		array(
			'element'  => '.better-menu-widget li.current-menu-item:after,.better-menu-widget li:hover:after,.header01 .site-branding:after,.copyright .left:after',
			'property' => 'border-left-color',
		),
		array(
			'element'  => '.better-menu-widget ul li.current-menu-item,.better-menu-widget ul li:hover,input:focus, textarea:focus,.pagination span.current,.search-box input[type=search],.services1 .vc_col-sm-6:hover .wpb_wrapper:before',
			'property' => 'border-color',
		),
		array(
			'element'  => '.wpb_accordion .wpb_accordion_wrapper .ui-state-active .ui-icon',
			'property' => 'background',
			'units'    => '!important',
		),
		array(
			'element'  => '.thememove_testimonials .author:after',
			'property' => 'border-left-color',
		),
		array(
			'element'  => '.wpb_accordion .wpb_accordion_wrapper .ui-state-active .ui-icon:after',
			'property' => 'border-left-color',
			'units'    => '!important',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_color_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'      => 'color',
	'setting'   => 'site_color_secondary',
	'label'     => esc_html__( 'Secondary color', 'tm_transport' ),
	'help'      => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci earum est, explicabo id illo quae!', 'tm_transport' ),
	'section'   => $section,
	'priority'  => $priority ++,
	'default'   => TRANSPORT_SECONDARY_COLOR,
	'transport' => 'postMessage',
	'output'    => array(
		array(
			'element'  => '.post-thumb .year,.post-thumb .month',
			'property' => 'color',
		),
		array(
			'element'  => '.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header.ui-state-active',
			'property' => 'background',
			'units'    => '!important',
		),
		array(
			'element'  => '.pricing.style1 .wpb_wrapper .vc_custom_heading,.tp-caption.t2:before,.latest:before,.get-quote .wpb_column:nth-child(1):before,.home__about-us .wpb_column:nth-child(1):after,.home__about-us .wpb_column:nth-child(1) .wpb_wrapper:after,button:hover, input:hover[type=button], input:hover[type=reset], input:hover[type=submit], .button:hover,.tm_bread_crumb,.request .wpb_column:nth-child(2) .wpb_wrapper:after,.testi:before,.request .wpb_column:nth-child(2):after',
			'property' => 'background-color',
		),
		array(
			'element'  => '.vc_bar',
			'property' => 'background-color',
			'units'    => '!important',
		),
		array(
			'element'  => '.request .wpb_column:nth-child(2):before',
			'property' => 'border-right-color',
		),
		array(
			'element'  => '.get-quote .wpb_column:nth-child(1):after,.home__about-us .wpb_column:nth-child(1):before',
			'property' => 'border-left-color',
		),
		array(
			'element'  => '.tm_bread_crumb:before',
			'property' => 'border-left-color',
		),
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_color_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'site_color_link',
	'label'       => esc_html__( 'Link setting', 'tm_transport' ),
	'description' => esc_html__( 'Link color', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TRANSPORT_SECONDARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => 'a,a:visited',
		'property' => 'color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'site_color_link_hover',
	'description' => esc_html__( 'Link color on hover', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => TRANSPORT_PRIMARY_COLOR,
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => 'a:hover',
		'property' => 'color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'     => 'custom',
	'setting'  => 'site_color_hr_' . $priority ++,
	'section'  => $section,
	'priority' => $priority ++,
	'default'  => '<hr />',
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'site_color_bread_crumb_link',
	'label'       => esc_html__( 'Breadcrumb Link Color', 'tm_transport' ),
	'description' => esc_html__( 'Link color', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#A6A6AC',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.tm_bread_crumb a',
		'property' => 'color',
	)
) );

Kirki::add_field( 'infinity', array(
	'type'        => 'color',
	'setting'     => 'site_color_bread_crumb_link_hover',
	'description' => esc_html__( 'Link color on hover', 'tm_transport' ),
	'section'     => $section,
	'priority'    => $priority ++,
	'default'     => '#ffffff',
	'transport'   => 'postMessage',
	'output'      => array(
		'element'  => '.tm_bread_crumb,.tm_bread_crumb a:hover',
		'property' => 'color',
	)
) );
