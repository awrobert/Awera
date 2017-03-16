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
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-md-4">
<div class="prod-cat">
<center>
  <a href="<?php echo get_permalink( $loop->post->ID ) ?>"><?php echo $product->get_image(); ?></a>
  <h1><a href="<?php echo get_permalink( $loop->post->ID ) ?>"><?php the_title(); ?></a></h1>
  <h3><?php echo $product->list_attributes(); ?></h3>
  <p><font class="price-sale1"><?php echo $product->get_price_html(); ?></font></p>
  <p><?php echo do_shortcode('[viewBuyButton]'); ?></p>
</center>
</div>
</div>
