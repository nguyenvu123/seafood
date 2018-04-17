<div class="section-contact">
	<p class="title"><?php the_sub_field('title'); ?></p>
	<div class="row">

		<?php 

		if( have_rows('list') ):

 	// loop through the rows of data
    		while ( have_rows('list') ) : the_row(); ?>
    		<div class="col-3">
    			<div class="box-contact">
    				<img src="<?php the_sub_field('image'); ?>">
				<p><?php the_sub_field('text'); ?></p>
    			</div>
				
			</div>
       
			<?php
    		endwhile;
		endif;
		 ?>
		
		
	</div>
</div>