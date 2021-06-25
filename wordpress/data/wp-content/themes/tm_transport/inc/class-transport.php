<?php

class Transport {
	/**
	 * Top menu
	 */
	static function top_menu() {
		if ( class_exists( 'Transport_Walker_Nav_Menu' ) && has_nav_menu( 'primary' ) ) {
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu_id'         => 'primary-menu',
				'container_class' => 'primary-menu',
				'walker'          => new Transport_Walker_Nav_Menu
			) );
		} else {
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu_id'         => 'primary-menu',
				'container_class' => 'primary-menu',
			) );
		}
	}
}
