	<div class="traditional">
				<div class="title">
					<p> <?php the_sub_field('title'); ?> </p>
				</div>
				<div class="include-items">
					<p class="subtitle"> <?php  the_sub_field('sub_title'); ?> </p>
					<div class="items">
						<div class="row">
							<?php  
							if( have_rows('imgs') ):
    							while ( have_rows('imgs') ) : the_row(); ?>
	    							<div class="col-3">
										<img src="<?php the_sub_field('image'); ?>">
										<p><?php the_sub_field('name'); ?></p>
									</div>
        							<?php
    							endwhile;
    						endif;
    						?>
							
						</div>
					</div>
				</div>
		</div>









