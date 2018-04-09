<?php
/**
 * Show messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/success.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! $messages ) {
	return;
}

?>

<div class="container text-center">
	<?php foreach ( $messages as $message ) : ?>
		<div class="woocommerce-message" role="alert">
			<p class="font-size-large">
				<?php echo wp_kses_post( $message ); ?>
				<?= wp_kses_post( $message ) == 'Cart updated.' ? '<span id="cartOpenBTNSuccess">'.__("View cart").'</span>' : null ?>
			</p>
		</div>
	<?php endforeach; ?>
</div>
