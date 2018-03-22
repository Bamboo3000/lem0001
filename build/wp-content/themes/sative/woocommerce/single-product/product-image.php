<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
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
 * @version 3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product;
$attachment_ids = $product->get_gallery_image_ids();
// $columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
// $thumbnail_size    = apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' );
// $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
// $full_size_image   = wp_get_attachment_image_src( $post_thumbnail_id, $thumbnail_size );
// $placeholder       = has_post_thumbnail() ? 'with-images' : 'without-images';
// $wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
// 	'woocommerce-product-gallery',
// 	'woocommerce-product-gallery--' . $placeholder,
// 	'woocommerce-product-gallery--columns-' . absint( $columns ),
// 	'images',
// ) );
?>

<div class="product__single-slider slider__container">
	<div class="owl-carousel owl-theme">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="item">
				<?= get_the_post_thumbnail( $post->ID, 'large'); ?>
			</div>
		<?php endif; ?>
		<?php if ( $attachment_ids && has_post_thumbnail() ) :
			foreach ( $attachment_ids as $attachment_id ) : ?>
				<div class="item">
					<?= wp_get_attachment_image( $attachment_id, 'large'); ?>
				</div>
			<?php endforeach;
		endif; ?>
	</div>
	<?php if ( $attachment_ids && has_post_thumbnail() ) : ?>
		<div class="owl-prev">
			<i class="icon-chevron_left"></i>
		</div>
		<div class="owl-next">
			<i class="icon-chevron_right"></i>
		</div>
	<?php endif; ?>
</div>