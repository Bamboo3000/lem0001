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
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() || ! $product->is_in_stock() ) {
	return;
}
?>
<?php if( $product->is_in_stock() || $product->is_on_backorder() ): ?>
<div <?php post_class('products__item'); ?>>

	<?php //do_action( 'woocommerce_before_shop_loop_item' ); ?>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="products__item-photo">
			<img class="attachment-medium size-medium wp-post-image" src="<?= get_the_post_thumbnail_url( $post->ID, 'medium'); ?>" alt="">
		</div>
	<?php else : ?>
		<div class="products__item-photo">
			<img width="320" height="320" data-src="<?= get_template_directory_uri(); ?>/assets/img/img_coming.png" class="attachment-medium size-medium wp-post-image lazy" alt="Picture coming soon...">
		</div>
	<?php endif; ?>

	<div class="products__item-text">

		<?php
		/**
		 * Display product title
		 */
		do_action( 'sative_product_title', 'h3' ); ?>

		<?php
		/**
		 *  Display price
		 */
		do_action( 'woocommerce_after_shop_loop_item_title' ); ?>

	</div>

	<?php
	/**
	 * Display product link
	 */
	do_action( 'sative_product_link' ); ?>

</div>
<?php endif; ?>
