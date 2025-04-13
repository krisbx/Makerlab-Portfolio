<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage skincare-product-store
 * @since skincare-product-store 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function skincare_product_store_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Skincare_Product_Store_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Skincare Product Store Pro', 'skincare-product-store' ),
		'button_text'      => __( 'Upgrade Pro', 'skincare-product-store' ),
		'url'              => 'https://www.wpradiant.net/products/skincare-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'skincare_product_store_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function skincare_product_store_custom_control_scripts() {
	wp_enqueue_script( 'skincare-product-store-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'skincare-product-store-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'skincare_product_store_custom_control_scripts' );