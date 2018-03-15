<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
 <?php wp_enqueue_style ('theme-style', get_template_directory_uri().'/source/css/main.css');  ?>  
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
	<div class="row">
		<div class="col-3 logo">
			<img src="">
		</div>
		<div class="col-7 menu">
			<?php wp_nav_menu("main-menu"); ?>
		</div>	
	</div>
</header>
<div id="container">