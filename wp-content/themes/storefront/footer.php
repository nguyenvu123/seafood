<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>



	<?php do_action( 'storefront_before_footer' ); ?>
					
					<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>Thông tin về chúng tôi </h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
									<div class="social-icon">
										<a href="#"><i class="icon1 fa fa-facebook" aria-hidden="true"></i></a>
										<a href="#"><i class="icon1 fa fa-envelope" aria-hidden="true"></i></i></a>
										<a href="#"><i class="icon1 fa fa-twitter" aria-hidden="true"></i></a>
										
									</div>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>My Account</h4>
									<ul>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="login.html">Login</a></li>
										<li><a href="registered.html"> Create Account </a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Thông tin</h4>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="products.html">Products</a></li>
										<li><a href="codes.html">Short Codes</a></li>
										<li><a href="mail.html">Mail Us</a></li>
										<li><a href="products1.html">products1</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid foot">
									<h4>Liên hệ</h4>
									<ul>
										<li><i class="fa fa-location-arrow" aria-hidden="true"></i></i><a href="#">61 thao dien</a></li>
										<li><i class="fa fa-volume-control-phone" aria-hidden="true"></i><a href="#">1 599-033-5036</a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> example@mail.com</a></li>
										
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					
					<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy; 2018 New Shop . All rights reserved | create by Vusaka</p>
							</div>
							<div class="copy-right">
								<img src="images/card.png" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
