<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class( 'flex_col-desk--1-4'); ?>>
	<div class="product-link">
		 <div class="product-image">
		 	<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
		 </div>

		<div class="product-text">
			<div class="product-top">
				<?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
				<div class="product-reviews">
					<div class="product-star">
						<i></i>
						<i></i>
						<i></i>
						<i></i>
						<i></i>
					</div>
					<div class="product-feedback">
						<span></span>
					</div>
				</div>
			</div>
			<div class="product-description">
				<?php echo '<div class="woo-product-short-desc">' . get_the_excerpt() . '</div>'; ?>
			</div>
			<?php do_action( 'woocommerce_after_shop_loop_item_title' );?>
			<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
		</div>
	</div>
</div>
