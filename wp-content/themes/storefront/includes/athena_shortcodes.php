
<?php
function athena_product_categories_functions( $atts ) {
	$atts = shortcode_atts( array(
		'column' 	=> '4',
		'limit' 	=> '6'
	), $atts);
	?>
	
	<h2 class="title-best-sele">Danh sách khuyến mãi tốt nhất dành cho bạn</h2>

<!-- load 6 best seller -->

	<?php 
		$args = array(
		    'post_type'      => 'product',
		    'posts_per_page' => 6,

		    'meta_query'     => array(
        		'relation' => 'OR',
		        array( // Simple products type
		            'key'           => '_sale_price',
		            'value'         => 0,
		            'compare'       => '>',
		            'type'          => 'numeric'
		        ),
		        array( // Variable products type
		            'key'           => '_min_variation_sale_price',
		            'value'         => 0,
		            'compare'       => '>',
		            'type'          => 'numeric'
		        )
    		)
		);
			$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); 
					?>

					<div class="box-product">
						<a href="<?php the_permalink(); ?>" id="id-<?php the_id(); ?>" title="<?php the_title(); ?>">

							<?php if (has_post_thumbnail( $loop->post->ID )) 
	        					echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); 
	        					else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="product placeholder Image" width="65px" height="115px" />'; ?>
						<h3><?php the_title(); ?></h3>
						</a>
						<div class="sele">
							<p><span><?= get_post_meta( get_the_ID(), '_regular_price', true).'đ'?></span> <span><?= get_post_meta( get_the_ID(), '_sale_price', true).'đ' ?></span></p>
						</div>
					</div>
					
				<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	<?php
}
add_shortcode( 'athena_product_categories', 'athena_product_categories_functions' );
?>