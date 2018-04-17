<div class="section-menu">
	<div class="container">
			
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
		<div class="top-menu">
			<div class="title">
				<p class="main-title">RISOTTI</p>
				<p class="sub">RICE PASTA - PENNE OR TAGLIATELLE - AVAILABLE UPON REQUEST</p>
			</div>
			<div class="img">
				<img src="">
			</div>
			<p class="pri">any addition + $ 4.00</p>
		</div>
		<div class="items">
			<div>
				<p class="title">ALL'ISOLANA IN "PENTOLINO"</p>
				<p class="content">RISOTTO WITH PORK LOIN, FRESH PANCETTA, PARMIGIANO CHEESE, ROSEMARY AND A HINT OF CINNAMO. THE TYPICAL RISOTTO FROM VERONA SERVED IN A SMALL POT <span class="pri"> $ 26,00</span></p>
				
			</div>
		</div>


		<div class="dri">
			<p class="top-title">
				WINE LIST
			</p>
			<p class="title-sub">
				only the best Wines from Verona
			</p>
			<div class="list-drink">
				<div class="list-left">
				<ul>
					<li>ZENATO, 2016 Pinot Grigio "Delle Venezie" <span>31</span></li>
				</ul>
			</div>
			<div class="list-right">
				<ul>
					<li>ZENATO, 2016 Pinot Grigio "Delle Venezie"</li>
				</ul>
			</div>
			</div>
		</div>
	</div>
</div>