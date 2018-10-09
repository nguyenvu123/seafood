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
	add_image_size('img_home_category', 350, 235);
	add_image_size('img_home_produce', 200, 240); 


?>