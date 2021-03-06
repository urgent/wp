<header <?php header_class(); ?>>
	<div class="container">
		<div class="row middle-xs top-md">
			<div class="col-md-2 col-xs-10 site-branding">
				<?php
				$logo        = Kirki::get_option( 'infinity', 'site_logo' );
				$logo_retina = Kirki::get_option( 'infinity', 'site_logo_retina' );
				if ( $logo ) { ?>
					<a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img
							src="<?php echo esc_url( $logo ); ?>" <?php if ( $logo_retina ) { ?> srcset="<?php echo esc_url($logo_retina); ?> 2x" <?php } ?>
							alt="<?php bloginfo( 'name' ); ?>"/>
					</a>
				<?php } else { ?>
					<a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php } ?>
			</div>
			<div class="col-xs-2 hidden-md hidden-lg end">
				<a href="#menu"><i id="open-left" class="fa fa-navicon"></i></a>
			</div>
			<div class="col-md-10 hidden-xs hidden-sm">
				<div class="site-top">
					<?php if ( ( has_nav_menu( 'top' ) || has_nav_menu( 'social' ) ) && Kirki::get_option( 'infinity', 'top_layout_enable' ) == 1 ) { ?>
						<div class="row middle">
							<div class="col-md-7">
								<?php wp_nav_menu( array(
									'theme_location'  => 'top',
									'menu_id'         => 'top-menu',
									'container_class' => 'top-menu',
									'fallback_cb'     => false
								) ); ?>
							</div>
							<div class="col-md-5 end-md end-lg">
								<?php wp_nav_menu( array(
									'theme_location'  => 'social',
									'menu_id'         => 'social-menu-top',
									'container_class' => 'social-menu',
									'fallback_cb'     => false
								) ); ?>
							</div>
						</div>
					<?php } ?>
					<div class="header-right">
						<div class="row middle">
							<?php if ( Kirki::get_option( 'infinity', 'header_layout_search_enable' ) == 1 ) { ?>
								<?php $class = 'col-lg-11'; ?>
							<?php } else { ?>
								<?php $class = 'col-lg-12'; ?>
							<?php } ?>
							<div class="<?php echo esc_attr( $class ); ?>">
								<?php dynamic_sidebar( 'header-right' ); ?>
							</div>
							<?php if ( Kirki::get_option( 'infinity', 'header_layout_search_enable' ) == 1 ) { ?>
								<div class="col-lg-1 hidden-xs hidden-sm hidden-md end">
									<div class="search-box">
										<?php get_search_form(); ?>
										<i class="fa fa-search"></i>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header><!-- #masthead -->
<nav id="site-navigation" class="main-navigation hidden-xs hidden-sm">
	<div class="container">
		<div class="row middle">
			<?php if ( class_exists( 'WooCommerce' ) && Kirki::get_option( 'infinity', 'header_layout_mini_cart_enable' ) == 1 ) { ?>
				<?php $class = 'col-md-11'; ?>
			<?php } else { ?>
				<?php $class = 'col-md-12'; ?>
			<?php } ?>
			<div class="<?php echo esc_attr( $class ); ?>">
				<?php Transport::top_menu(); ?>
			</div>
			<?php if ( class_exists( 'WooCommerce' ) && Kirki::get_option( 'infinity', 'header_layout_mini_cart_enable' ) == 1 ) { ?>
				<div class="col-md-1 end">
					<div class="mini-cart">
						<?php echo thememove__minicart(); ?>
						<div class="widget_shopping_cart_content"></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</nav><!-- #site-navigation -->
