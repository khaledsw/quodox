<?php
/**
 * Single Product Sale Flash
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;
$product_new = get_post_meta(get_the_ID(),'g5plus_product_new',true);
$product_hot = get_post_meta(get_the_ID(),'g5plus_product_hot',true);
$product_upcoming = get_post_meta(get_the_ID(),'g5plus_product_upcoming',true);
?>
<div class="product-flash-wrap">
<?php if ($product->is_on_sale()): ?>
    <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="on-sale product-flash">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $post, $product ); ?>
<?php endif; ?>

<?php if ($product_new == 'yes') : ?>
    <span class="on-new product-flash"><?php esc_html_e('New','g5plus-academia') ?></span>
<?php endif; ?>

<?php if ($product_hot == 'yes') : ?>
    <span class="on-hot product-flash"><?php esc_html_e('Popular','g5plus-academia') ?></span>
<?php endif; ?>

<?php if ($product_upcoming == 'yes') : ?>
    <span class="on-hot product-flash"><?php esc_html_e('Upcoming','g5plus-academia') ?></span>
<?php endif; ?>

<?php if (!$product->is_in_stock()) : ?>
    <span class="on-sold product-flash"><?php esc_html_e('All seat Booked','g5plus-academia') ?></span>
<?php endif; ?>

</div>
