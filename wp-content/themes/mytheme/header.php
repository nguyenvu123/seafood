<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="header" role="banner">
	<div class="include-menu">
		<div class="container">	
			<div class="row">
				<div class="col-2 logo">
					<img src="<?php echo THEME_DIR.'/source/images/logo.jpg' ?>">
				</div>
				<div class="col-8 menu">
					<ul>
						<?php wp_nav_menu('main-menu');?>
					</ul>
				</div>	
			</div>
	</div>
	</div>
	 <div class="slider-home">
	 	<div class="slider__home--content">
	 		<?php if( have_rows('imgs','option') ):
			    while ( have_rows('imgs','option') ) : the_row(); ?>
				    <div class="slider__home--item">
						<div class="img" style="background-image: url('<?= get_sub_field('img') ?>'); ">
						</div>
						<!-- <div class="text">
							<p>
								<?php the_sub_field('text'); ?>


							</p>
						</div> -->	
				    </div>   

			    <?php endwhile;
			    	endif;
			    ?>
	 	</div>
     </div>
</header>