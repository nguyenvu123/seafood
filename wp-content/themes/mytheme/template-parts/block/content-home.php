<section id="home-content">
	<div class="container">

		<?php if( have_rows('home_page') ):

    		while ( have_rows('home_page') ) : the_row(); 
     			if( get_row_layout() == 'authentic' ): 
		 			get_template_part('template-parts/block/child-block/top-home'); 
		 	endif;

		 	if( get_row_layout() == 'others_risottos' ): 
		 			get_template_part('template-parts/block/child-block/second-home');
		 	endif;
		 		if( get_row_layout() == 'enjoy' ): 
		 			get_template_part('template-parts/block/child-block/contact');
		 	endif;

		 	?>

		<?php 
		 endwhile;
	endif; ?>
	</div>
</section>