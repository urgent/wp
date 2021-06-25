<?php
/**
 * The main Kirki object
 *
 * @package     Kirki
 * @category    Core
 * @author      Aristeides Stathopoulos
 * @copyright   Copyright (c) 2015, Aristeides Stathopoulos
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Early exit if the class already exists
if ( class_exists( 'Kirki_Toolkit' ) ) {
	return;
}

class Kirki_Toolkit {

	/** @var Kirki The only instance of this class */
	public static $instance = null;

	public static $version = '1.0.2';

	public $font_registry = null;
	public $scripts = null;
	public $api = null;
	public $styles = array();

	/**
	 * Access the single instance of this class
	 * @return Kirki
	 */
	public static function get_instance() {
		if ( null == self::$instance ) {
			self::$instance = new Kirki_Toolkit();
		}

		return self::$instance;
	}

	/**
	 * Shortcut method to get the translation strings
	 */
	public static function i18n() {

		$i18n = array(
			'background-color'      => esc_html__( 'Background Color', 'tm_transport' ),
			'background-image'      => esc_html__( 'Background Image', 'tm_transport' ),
			'no-repeat'             => esc_html__( 'No Repeat', 'tm_transport' ),
			'repeat-all'            => esc_html__( 'Repeat All', 'tm_transport' ),
			'repeat-x'              => esc_html__( 'Repeat Horizontally', 'tm_transport' ),
			'repeat-y'              => esc_html__( 'Repeat Vertically', 'tm_transport' ),
			'inherit'               => esc_html__( 'Inherit', 'tm_transport' ),
			'background-repeat'     => esc_html__( 'Background Repeat', 'tm_transport' ),
			'cover'                 => esc_html__( 'Cover', 'tm_transport' ),
			'contain'               => esc_html__( 'Contain', 'tm_transport' ),
			'background-size'       => esc_html__( 'Background Size', 'tm_transport' ),
			'fixed'                 => esc_html__( 'Fixed', 'tm_transport' ),
			'scroll'                => esc_html__( 'Scroll', 'tm_transport' ),
			'background-attachment' => esc_html__( 'Background Attachment', 'tm_transport' ),
			'left-top'              => esc_html__( 'Left Top', 'tm_transport' ),
			'left-center'           => esc_html__( 'Left Center', 'tm_transport' ),
			'left-bottom'           => esc_html__( 'Left Bottom', 'tm_transport' ),
			'right-top'             => esc_html__( 'Right Top', 'tm_transport' ),
			'right-center'          => esc_html__( 'Right Center', 'tm_transport' ),
			'right-bottom'          => esc_html__( 'Right Bottom', 'tm_transport' ),
			'center-top'            => esc_html__( 'Center Top', 'tm_transport' ),
			'center-center'         => esc_html__( 'Center Center', 'tm_transport' ),
			'center-bottom'         => esc_html__( 'Center Bottom', 'tm_transport' ),
			'background-position'   => esc_html__( 'Background Position', 'tm_transport' ),
			'background-opacity'    => esc_html__( 'Background Opacity', 'tm_transport' ),
			'ON'                    => esc_html__( 'ON', 'tm_transport' ),
			'OFF'                   => esc_html__( 'OFF', 'tm_transport' ),
			'all'                   => esc_html__( 'All', 'tm_transport' ),
			'cyrillic'              => esc_html__( 'Cyrillic', 'tm_transport' ),
			'cyrillic-ext'          => esc_html__( 'Cyrillic Extended', 'tm_transport' ),
			'devanagari'            => esc_html__( 'Devanagari', 'tm_transport' ),
			'greek'                 => esc_html__( 'Greek', 'tm_transport' ),
			'greek-ext'             => esc_html__( 'Greek Extended', 'tm_transport' ),
			'khmer'                 => esc_html__( 'Khmer', 'tm_transport' ),
			'latin'                 => esc_html__( 'Latin', 'tm_transport' ),
			'latin-ext'             => esc_html__( 'Latin Extended', 'tm_transport' ),
			'vietnamese'            => esc_html__( 'Vietnamese', 'tm_transport' ),
			'serif'                 => _x( 'Serif', 'font style', 'tm_transport' ),
			'sans-serif'            => _x( 'Sans Serif', 'font style', 'tm_transport' ),
			'monospace'             => _x( 'Monospace', 'font style', 'tm_transport' ),
		);

		$config = apply_filters( 'kirki/config', array() );

		if ( isset( $config['i18n'] ) ) {
			$i18n = wp_parse_args( $config['i18n'], $i18n );
		}

		return $i18n;

	}

	/**
	 * Shortcut method to get the font registry.
	 */
	public static function fonts() {
		return self::get_instance()->font_registry;
	}

	/**
	 * Constructor is private, should only be called by get_instance()
	 */
	private function __construct() {
	}

}
