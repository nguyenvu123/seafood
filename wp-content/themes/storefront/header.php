<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<head>
<title>New Shop a E-Commerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!--css-->


<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>

		<div class="header">
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
					 <span>Help  <i class="fa fa-phone" aria-hidden="true"></i> </span><a href="#">+0123-456-789</a>
					</div>
					<div class="top-right">
					<ul>
						<li><a href="#"><i class="icon1 fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="icon1 fa fa-envelope" aria-hidden="true"></i></i></a></li>
						<li><a href="#"><i class="icon1 fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="/">Shop Nhật <span>Shop anywhere</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<?php 
									wp_nav_menu( array(
									    'menu' => 'menu-main',
									    'container' => 'ul',
									    'menu_class'=> 'nav navbar-nav'
									 ) ); ?>
							</div>
							</nav>
						</div>
						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							<div id="cd-search" class="cd-search">
							<!-- 	<form action="#" method="post"> -->
									<!-- <input name="s" type="search" placeholder="Search..."> -->
									<?php echo do_shortcode('[smart_search id="1"]'); ?>
								<!-- </form> -->
							</div>	
						</div>


						<div class="header-right2">
							<div class="cart box_1">
								<?php  

								if ( storefront_is_woocommerce_activated() ) {
									if ( is_cart() ) {
										$class = 'current-menu-item';
									} else {
										$class = '';
									}
								?>
						<ul id="site-header-cart" class="site-header-cart menu">
							<li class="<?php echo esc_attr( $class ); ?>">
								<?php storefront_cart_link(); ?>
							</li>
							<li>
								<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
							</li>
						</ul>
						<?php } ?>
					</div>
				</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<!--header-->

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );
