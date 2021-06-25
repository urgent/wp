<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$layout = Kirki::get_option( 'infinity', 'woo_layout_single_product' );
get_header(); ?>
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
<div class="container">
	<div class="row">
		<?php if ( $layout == 'sidebar-content' ) { ?>
			<?php do_action( 'woocommerce_sidebar' ); ?>
		<?php } ?>
		<?php if ( $layout == 'sidebar-content' || $layout == 'content-sidebar' ) { ?>
			<?php $class = 'col-md-8'; ?>
		<?php } else { ?>
			<?php $class = 'col-md-12'; ?>
		<?php } ?>
		<div class="<?php echo esc_attr( $class ); ?>">
			<?php
			/**
			 * woocommerce_before_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 */
			do_action( 'woocommerce_before_main_content' );
			?>

			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>

				<?php wc_get_template_part( 'content', 'single-product' ); ?>

			<?php endwhile; // end of the loop. ?>

			<?php
			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' );
			?>
		</div>
		<?php if ( $layout == 'content-sidebar' ) { ?>
			<?php do_action( 'woocommerce_sidebar' ); ?>
		<?php } ?>
	</div>
</div>

<?php get_footer( 'shop' ); ?>
