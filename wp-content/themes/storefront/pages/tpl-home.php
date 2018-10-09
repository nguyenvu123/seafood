<?php
/*
Template Name: home page
*/
?>
<?php get_header(); ?>

		<!--banner-->
		<div class="banner-w3">
			<div class="demo-1">            
				<div id="example1" class="core-slider core-slider__carousel example_1">
					<div class="core-slider_viewport">
						<div class="core-slider_list">
							<?php 
						        if( have_rows('images') ):

							    	while ( have_rows('images') ) : the_row(); ?>

							      	<div class="core-slider_item">
										<img src="<?= get_sub_field('image') ?>" class="img-responsive" alt="">
									</div>
										<?php
							    endwhile;
							endif;
							 ?>
						 </div>
					</div>
					<div class="core-slider_nav">
						<div class="core-slider_arrow core-slider_arrow__right"></div>
						<div class="core-slider_arrow core-slider_arrow__left"></div>
					</div>
					<div class="core-slider_control-nav"></div>
				</div>
			</div>
			

		</div>	
		<!--banner-->
			<!--content-->
		<div class="content">
			<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">

						<?php  
						$terms_category_hot = get_terms( array(
						    'taxonomy' => 'product_cat',
						    'hide_empty' => false,
						    'number' => 4,
							) );
    					?>


						<div class="col-md-6 ban-bottom">
							<div class="ban-top">

								<?php $thumb_id = get_woocommerce_term_meta( $terms_category_hot[0]->term_id, 'thumbnail_id', true );
								
                                $term_img = wp_get_attachment_url(  $thumb_id );
                            
                                ?>


								<a href="<?= get_term_link( $terms_category_hot[0]->slug, 'product_cat' ) ?>"><img src="<?= $term_img; ?>" class="img-responsive" alt=""/></a>
								<div class="ban-text">
									<h4><?= $terms_category_hot[0]->name; ?></h4>
								</div>
								<div class="ban-text2 hvr-sweep-to-top">
									<h4>50% <span>Off/-</span></h4>
								</div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<?php $thumb_id1 = get_woocommerce_term_meta( $terms_category_hot[1]->term_id, 'thumbnail_id', true );
								
                                $term_img1 = wp_get_attachment_url(  $thumb_id1 );
                                
                                 ?>
									<a href="<?= get_term_link( $terms_category_hot[1]->slug, 'product_cat' ) ?>"><img src="<?= $term_img1  ?>" class="img-responsive" alt=""/></a>
								<div class="ban-text1">
									<h4><?= $terms_category_hot[1]->name; ?></h4>
								</div>
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<?php $thumb_id2 = get_woocommerce_term_meta( $terms_category_hot[2]->term_id, 'thumbnail_id', true );
								
		                                $term_img2 = wp_get_attachment_url(  $thumb_id2 );
		                                
		                                 ?>
										<img src="<?= $term_img2 ?>" class="img-responsive" alt=""/>
										<div class="ban-text1">
											<h4><?= $terms_category_hot[2]->name; ?></h4>
										</div>
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<?php $thumb_id3 = get_woocommerce_term_meta( $terms_category_hot[3]->term_id, 'thumbnail_id', true );
								
		                                $term_img3 = wp_get_attachment_url(  $thumb_id3 );
		                                
		                                 ?>
											<a href="<?= get_term_link( $terms_category_hot[3]->slug, 'product_cat' ) ?>"><img src="<?= $term_img3 ?>" class="img-responsive" alt=""/></a>
										<div class="ban-text1">
											<h4><?= $terms_category_hot[3]->name; ?></h4>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>




			<!--banner-bottom-->
			<!--new-arrivals-->


				<div class="new-arrivals-w3agile">
					<div class="container">
						<h2 class="tittle">Sản phẩm mới nhất!</h2>
						<div class="arrivals-grids">

							<?php 
								$args_newprd = array(
									'post_type' => 'product',
									'orderby' => 'publish_date',
									'order'   => 'DESC',
									'posts_per_page'      => 4,
									'post_status' => 'publish',
									'ignore_sticky_posts'   => 1,
								);

								$query = new WP_Query( $args_newprd );
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) : $query->the_post(); 
										$Check_sale = wc_get_product($post->ID)->is_on_sale();
										$id = get_the_ID();
										?>
										<?php

										    global $product;

										    $attachment_ids = $product->get_gallery_attachment_ids();

										    
										?>
									<div class="col-md-3 arrival-grid simpleCart_shelfItem">
										<div class="grid-arr">
											<div  class="grid-arrival">
												<figure>		
													<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
														<div class="grid-img">
															<?php $img = get_the_post_thumbnail_url(get_the_ID(),'img_home_produce'); ?>

															<img  src="<?= $img ?>" class="img-responsive" alt="">
														</div>
														<div class="grid-img">
															<?php foreach( $attachment_ids as $attachment_id ) {
										        			$image_link = wp_get_attachment_image_src( $attachment_id,'img_home_produce' );?>

										        			<img  src="<?= $image_link[0] ?>" class="img-responsive"  alt="">
										        			<?php
										    				} ?>
															
														</div>			
													</a>		
												</figure>	
											</div>
											<div class="ribben">
												<p>NEW</p>
											</div>
											<?php if($Check_sale){ ?>
											<div class="ribben1">
												<p>SALE</p>
											</div>
											<?php } ?>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="women">
												<h6><a href="single.html"><?php the_title(); ?></a></h6>
												<?php if($Check_sale){ ?>
												<p ><del><?=number_format((float)$product->get_price()); ?>đ</del>  
													
													<em class="item_price"><?=number_format((float)$product->get_sale_price()); ?>đ</em>

												</p>
											<?php }else{
											 ?>
											 <p><em class="item_price"><?=number_format((float)$product->get_price()) ; ?>đ</em></p>
												
											<?php } ?>
												<a><?php echo do_shortcode( "[ajax_add_to_cart id='$post->ID' text='Mua ngay!']" );
												 ?></a>
											</div>
										</div>
									</div>
							<?php
									endwhile;
								}
			 				?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>




			<!--new-arrivals-->
				<!--accessories-->
			<div class="accessories-w3l" style="background: url('wp-content/themes/storefront/source/images/ban1.jpg')">
				<div class="container">
					<h3 class="tittle">20% Discount on</h3>
					<span>TRENDING DESIGNS</span>
					<div class="button">
						<a href="#" class="button1"> Shop Now</a>
						<a href="#" class="button1"> Quick View</a>
					</div>
				</div>
			</div>
			<!--accessories-->
			<!--Products-->
			<!--Products-->
			<div class="latest-w3">
				<div class="container">
					<h3 class="tittle1">Sản phẩm</h3>
					<div class="latest-grids">
						
						<?php 	
						$countterms = wp_count_terms( 'product_cat' );
						$offset = 4;
						$number = $countterms - $offset;
						$terms_list_category = get_terms( array(
						    'taxonomy' => 'product_cat',
						    'hide_empty' => false,
						    'offset'     => $offset,
      						'number'     => $number
							) );
    					?>
    					<?php foreach( $terms_list_category as $category ): ?>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<?php 
								$thumb_id1 = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
								
                                $term_img1 = wp_get_attachment_image_src(  $thumb_id1, 'img_home_category' ); ?>
                          
                                <a href="<?= get_term_link( $category->slug, 'product_cat' ) ?>"><img  src="<?= $term_img1[0]; ?>" class="img-responsive"  alt="shop-nhat"></a>
								
								<div class="latest-text">
									<h4><?= $category->name; ?></h4>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>