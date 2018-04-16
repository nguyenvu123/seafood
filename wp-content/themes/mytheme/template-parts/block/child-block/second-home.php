<div class="second-block">
	<p class="title-main"><?php the_sub_field('title'); ?></p>
	<div class="row">
		<?php 
			if( have_rows('block_images') ):
	    		while ( have_rows('block_images') ) : the_row(); ?>
	    			<div class="col-5">
						<p><?php the_sub_field('sub_title'); ?></p>
						
						<div class="include-img">
							<img src="<?php the_sub_field('image'); ?>">
							<p class="name"><?php the_sub_field('content_text'); ?></p>
						</div>
					</div>
	        <?php 
				endwhile;
			endif;
        	?>
	</div>
</div>