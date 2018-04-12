<?php 
   $args = array(
   	'post_type' => 'slider',
   	'tax_query' => array(
   		array(
   			'taxonomy' => 'restaurant',
   			'field'    => 'slug',
   			'terms'    =>'top-list'
   		),
   	),

);

    $query = new WP_Query( $args );
       
        if($query->have_posts()):
            while($query->have_posts()):
                $query->the_post();
                $lists[] = $post;
        endwhile;
     endif;
 ?>



<div class="slick-home">
	<?php 
	for ($i =0; $i< sizeof($lists); $i++){ ?>
	<?php $img = get_the_post_thumbnail_url($lists[$i]->ID); ?>

	<div class="items">
		<img src="<?= $img ?>">
	</div>
	<?php } ?>
</div>