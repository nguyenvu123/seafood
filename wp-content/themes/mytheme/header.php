<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
	<div class="container">	
		<div class="row">
			<div class="col-2 logo">
				<img src="<?php echo THEME_DIR.'/source/images/logo.jpg' ?>">
			</div>
			<div class="col-8 menu">
				<ul>
					<li><a href="#">Trang chủ</a></li>
					<li><a href="#">Nhà hàng</a></li>
					<li><a href="#">Dịch vụ</a></li>
					<li><a href="#">Hình ảnh</a></li>
					<li><a href="#">Liên hệ</a></li>
					<li><a href="#">Dặt chỗ</a></li>
				</ul>
			</div>	
		</div>
	</div>
	
</header>
<div id="container">