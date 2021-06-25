<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

$layout = Kirki::get_option( 'infinity', 'woo_layout_category' );
get_header();
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 3 );
}
?>
<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
	<div class="big-title" style="background-image: url('<?php echo esc_url( $infinity_heading_image ); ?>')">
		<div class="container">
			<h1 class="entry-title">
				<?php woocommerce_page_title(); ?>
			</h1>
			<?php if ( function_exists( 'tm_bread_crumb' ) ) { ?>
				<div class="breadcrumb">
					<div class="container">
						<?php echo tm_bread_crumb( array( 'home_label' => esc_html__( 'Home', 'tm_transport' ) ) ); ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
<?php endif; ?>
<div class="container">
	<div class="row">
		<?php if ( $layout === 'sidebar-content' ) { ?>
			<?php do_action( 'woocommerce_sidebar' ); ?>
		<?php } ?>
		<?php if ( $layout === 'sidebar-content' || $layout === 'content-sidebar' ) { ?>
			<?php $class = 'col-md-8'; ?>
		<?php } else { ?>
			<?php $class = 'col-md-12'; ?>
		<?php } ?>
		<div class="<?php echo esc_attr( $class ); ?>">
			<?php do_action( 'woocommerce_before_main_content' ); ?>

			<?php do_action( 'woocommerce_archive_description' ); ?>

			<?php if ( have_posts() ) : ?>

				<div class="row middle">
					<?php do_action( 'woocommerce_before_shop_loop' ); ?>
				</div>

				<?php woocommerce_product_loop_start(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php do_action( 'woocommerce_after_shop_loop' ); ?>
			) : ?>

				<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>

			<?php
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
			?>
		</div>
		<?php if ( $layout == 'content-sidebar' ) { ?>
			<?php do_action( 'woocommerce_sidebar' ); ?>
		<?php } ?>
	</div>
</div>

<?php get_footer( 'shop' ); ?>
