<?php
/**
 * This template displays the archive for Products
 *
 * @package genesis_connect_woocommerce
 * @version 0.9.8
 *
 * Note for customisers/users: Do not edit this file!
 * ==================================================
 * If you want to customise this template, copy this file (keep same name) and place the
 * copy in the child theme's woocommerce folder, ie themes/my-child-theme/woocommerce
 * (Your theme may not have a 'woocommerce' folder, in which case create one.)
 * The version in the child theme's woocommerce folder will override this template, and
 * any future updates to this plugin won't wipe out your customisations.
 *
 * @since 0.9.0
 *
 */

/** Remove default Genesis loop */
remove_action( 'genesis_loop', 'genesis_do_loop' );

/** Remove Genesis archive title/description */
remove_action( 'genesis_before_loop', 'genesis_do_taxonomy_title_description', 15 );

/** Remove WooCommerce breadcrumbs */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

/** Uncomment the below line of code to add back WooCommerce breadcrumbs */
//add_action( 'genesis_before_loop', 'woocommerce_breadcrumb', 10, 0 );

/** Remove Woo #container and #content divs */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

add_filter( 'genesis_pre_get_option_site_layout', 'genesiswooc_archive_layout' );
/**
 * Manage page layout for the Product archive (Shop) page.
 *
 * Set the layout in the Genesis layouts metabox in the Page Editor.
 *
 * @since 0.9.0
 *
 * @param str $layout Current Genesis page layout, such as 'content-sidebar'.
 * @return str Page layout if set for the shop page, otherwise the default site layout.
 */
function genesiswooc_archive_layout( $layout ) {

	$post_layout = get_post_meta( wc_get_page_id( 'shop' ), '_genesis_layout', true );

	if ( ! $post_layout || 'default_layout' === $post_layout ) {
		return $layout;
	}

	return $post_layout;

}

add_action( 'genesis_before_loop', 'genesiswooc_archive_product_loop' );
/**
 * Display shop items (product custom post archive)
 *
 * This function has been refactored in 0.9.4 to provide compatibility with
 * both WooC 1.6.0 and backwards compatibility with older versions.
 * This is needed thanks to substantial changes to WooC template contents
 * introduced in WooC 1.6.0.
 *
 * @uses genesiswooc_content_product() if WooC is version 1.6.0+
 * @uses genesiswooc_product_archive() for earlier WooC versions
 *
 * @since 0.9.0
 * @updated 0.9.4
 * @global object $woocommerce
 */
function genesiswooc_archive_product_loop() {

	global $woocommerce;

	$new = version_compare( $woocommerce->version, '1.6.0', '>=' );

	if ( $new )
		genesiswooc_content_product();

	else
		genesiswooc_product_archive();
}

genesis();
