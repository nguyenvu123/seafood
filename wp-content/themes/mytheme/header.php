<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
 
 <?php wp_enqueue_style ('theme-style', get_template_directory_uri().'/gulp-file/main.css');  ?>

 <?php wp_enqueue_script ('theme-js', get_template_directory_uri().'/gulp-file/script.js');  ?> 



 <?php wp_enqueue_style ('theme-style-lib', './../../../node_modules/slick-carousel/slick/slick.css');  ?>
 <?php wp_enqueue_style ('slick-style-theme', './../../../node_modules/slick-carousel/slick/slick-theme.css');  ?>
 <?php wp_enqueue_script ('slick-js', './../../../node_modules/slick-carousel/slick/slick.min.js');  ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
	<div class="container">	
		<div class="row">
			<div class="col-3 logo">
				<img src="">
			</div>
			<div class="col-7 menu">
				<?php wp_nav_menu("main-menu"); ?> 
			</div>	
		</div>
	</div>
	
</header>
<div id="container">