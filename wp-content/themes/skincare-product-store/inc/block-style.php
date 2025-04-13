<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage skincare-product-store
 * @since skincare-product-store 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since skincare-product-store 1.0
	 *
	 * @return void
	 */
	function skincare_product_store_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'skincare-product-store-border',
				'label' => esc_html__( 'Borders', 'skincare-product-store' ),
			)
		);

		
	}
	add_action( 'init', 'skincare_product_store_register_block_styles' );
}