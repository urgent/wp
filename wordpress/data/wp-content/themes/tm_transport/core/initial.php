<?php
/**
 * Load core.
 * =========
 */
require_once get_template_directory() . '/core/customizer/kirki/kirki.php';

//add custom css to admin
function admin_head() {
	wp_enqueue_style( 'infinity-custom-admin-css', TRANSPORT_THEME_ROOT . '/core/css/custom.css' );
}

add_action( 'admin_head', 'admin_head' );

//skin js
function infinity_customize_control_js() {
	wp_enqueue_script( 'skin-control', TRANSPORT_THEME_ROOT . '/core/customizer/js/skin-control.js', array(
		'customize-controls',
		'iris',
		'underscore',
		'wp-util'
	), '20141216', true );
}

add_action( 'customize_controls_enqueue_scripts', 'infinity_customize_control_js' );
