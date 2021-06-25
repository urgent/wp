<?php
if ( ! function_exists( 'infinity_register_theme_plugins' ) ):
	function infinity_register_theme_plugins() {
		$plugins = [
			[
				'name'     => esc_html__( 'ThemeMove Core', 'tm_transport' ),
				'slug'     => 'thememove-core',
				'source'   => 'https://api.thememove.com/download/thememove-core-1.3.9-GasL5PNpHX.zip',
				'version'  => '1.3.9',
				'required' => true,
			],
			array(
				'name'     => esc_html__( 'CMB2', 'tm_transport' ),
				'slug'     => 'cmb2',
				'required' => true,
			),
			[
				'name'     => esc_html__( 'WP Bakery Page Builder', 'tm_transport' ),
				'slug'     => 'js_composer',
				'source'   => 'https://api.thememove.com/download/js_composer-6.6.0-GTz1qxX6Xb.zip',
				'version'  => '6.6.0',
				'required' => true,
			],
			[
				'name'     => esc_html__( 'WPBakery Page Builder (Visual Composer) Clipboard', 'tm_transport' ),
				'slug'     => 'vc_clipboard',
				'source'   => 'https://api.thememove.com/download/vc_clipboard-4.5.8-6x4EjSaacf.zip',
				'version'  => '4.5.8',
				'required' => false,
			],
			[
				'name'     => esc_html__( 'Essential Grid', 'tm_transport' ),
				'slug'     => 'essential-grid',
				'source'   => 'https://api.thememove.com/download/essential-grid-3.0.11-rk1tpHXHEP.zip',
				'version'  => '3.0.11',
				'required' => true,
			],
			[
				'name'     => esc_html__( 'Revolution Slider', 'tm_transport' ),
				'slug'     => 'revslider',
				'source'   => 'https://api.thememove.com/download/revslider-6.4.8-pNFXKY1djN.zip',
				'version'  => '6.4.8',
				'required' => true,
			],
			[
				'name'     => esc_html__( 'Testimonials by WooThemes', 'tm_transport' ),
				'slug'     => 'testimonials-by-woothemes',
				'source'   => 'https://api.thememove.com/download/testimonials-by-woothemes-1.6.0-yzPKUCJIy6.zip',
				'version'  => '1.6.0',
				'required' => false,
			],
			[
				'name'     => esc_html__( 'WooCommerce', 'tm_transport' ),
				'slug'     => 'woocommerce',
				'required' => false,
			],
			[
				'name'     => esc_html__( 'Widget Logic', 'tm_transport' ),
				'slug'     => 'widget-logic',
				'required' => false,
			],
			[
				'name'     => esc_html__( 'Contact Form 7', 'tm_transport' ),
				'slug'     => 'contact-form-7',
				'required' => false,
			],
		];

		$config = [
			'id'           => 'tgmpa',
			'default_path' => '',
			'menu'         => 'tgmpa-install-plugins',
			'parent_slug'  => 'themes.php',
			'capability'   => 'edit_theme_options',
			'has_notices'  => true,
			'dismissable'  => false,
			'dismiss_msg'  => '',
			'is_automatic' => true,
			'message'      => '',
		];

		tgmpa( $plugins, $config );

	}

	add_action( 'tgmpa_register', 'infinity_register_theme_plugins' );
endif;
