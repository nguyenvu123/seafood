<?php 
	add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );
	//For Single Product Page.
	add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );
	//For Archives Product Page.
	add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );
	function woo_custom_cart_button_text()
	{
	    return __( 'Thêm Giỏ Hàng', 'woocommerce' );
	}
	// function filter_single_product_archive_thumbnail_size( $size ) { 
	//     // make filter magic happen here... 
	//     return 'thumbnail'; 
	// }; 
	         
	// // add the filter 
	// add_filter( 'single_product_archive_thumbnail_size', 'filter_single_product_archive_thumbnail_size', 10, 1 );


?>