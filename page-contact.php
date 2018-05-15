<?php include_once ('emaill.php');

if(isset($_POST['Subject'])) {
	
	echo $classobj->entermail();//object of the class controller
	
}

?>
<!DOCTYPE html>



<html lang="en">
	<?php include'head.php';?>

	<!-- =================
	///// Begin body /////
	================== -->
	<body id="body">

		<!-- Begin page preloader -->
		<div id="preloader">
			<div class="pulse bg-main"></div>
		</div>
		<!-- End page preloader -->


		<!-- ===================
		///// Begin header /////
		========================
		
		* Use class "show-hide-on-scroll" to hide header on scroll down and show on scroll up.
		* Use class "fixed-top" to set header to fixed position.
		-->
		<?php include'head.php';?>
		<!-- End header -->

		<?php include'header-and-menu.php';?>
		<!-- ==================================================================================================
		///// Begin off-canvas menu (more info: http://codyhouse.co/gem/secondary-expandable-navigation/) /////
		=================================================================================================== -->
	
		<!-- End off-canvas menu -->


		<!-- ==============================
		/////// Begin body content ///////
		=============================== -->
		<div id="body-content">


			<!-- ================================
			///// Begin page header section /////
			================================= -->
			<section id="page-header-secion" class="alter-heading">

				<!-- Begin page header image 
				===============================
				* Use class "parallax" to enable parallax effect.
				-->
				<div class="page-header-image parallax bg-image" style="background-image: url(assets/img/headings/aboutus.gif); background-position: 50% 50%;"></div>
				<!-- End page header image -->

				<!-- Element cover -->
				<div class="cover page-header-cover"></div>

				<!-- Begin page header info -->
				<div class="container page-header-content no-padding max-width-800 text-center">
					<div class="row">
						<div class="col-lg-12">

							<h1 class="album-title"  style ="font-weight: bolder; color:rgb(134,0,0);">Contact Us</h1>
							
						

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> 
				<!-- End page header info -->

			</section>
			<!-- End page header section -->


			<!-- ================================
			/////// Begin content section ///////
			================================= -->
			<section id="content-section" class="page page-contact">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap min-height-600">
								<div class="row margin-bottom-40">
									<div class="col-lg-4">

										<address>
											<i class="fas fa-home" id = "footeritems"></i> <strong>SnapHouse</strong><br>
										No.120 Rumuola Road <br>
										Rumuokuta Port Harcourt <br>
											<i class="fas fa-phone" id = "footeritems"></i> <strong>09031103169</strong>
											 or <strong>07034447689</strong><br>
									 
											<i class="fas fa-envelope" id = "footeritems"></i> <a href="">officialsnaphouse@gmail.com</a>
										</address>

										<div class="social-icons">
											<ul>
												<li><a target="_blank" href="https://www.facebook.com/snaphouseofficial" id = "footeritems" title="Follow us on Facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li><a target="_blank" href="https://twitter.com/snaphousetweet" id = "footeritems" title="Follow us on Twitter"><i class="fab fa-twitter"></i></a></li>
											
												<li><a target="_blank" href="https://www.instagram.com/snaphouseofficial" id = "footeritems" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a></li>
											</ul>
										</div>

									</div> <!-- /.col -->

									<div class="col-md-8">

										<h3 id = "footeritems" style = "font-weight: bolder;">Don't be shy, tell us what's on your mind.</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
										consequat.</p>

									</div> <!-- /.col -->
								</div> <!-- /.row -->

								<div class="row">
									<div class="col-md-12">

										<!-- Begin contact form 
										========================= -->
										<form class = "form-horizontal" action = "" method ="POST" enctype="multipart/form-data">

											<div class="row">
												<div class="col-lg-4">
													<div class="form-group">
										<input type="text" class="form-control" name="yourname" placeholder="Your Name" required>
													</div>
		
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="email" class="form-control" name="Email" placeholder="Your Email" required>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<input type="text" class="form-control" name="Subject" placeholder="Subject" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<textarea class="form-control" name="Message" rows="8" placeholder="Your Message (text only)" required></textarea>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<button type="submit" class="btn btn-success btn-rounded-5x btn-block" id = "footeritems">Send Message</button>


												</div>
											</div>
										</form>
										<!-- End contact form -->

									</div> <!-- /.col-->
								</div> <!-- /.row -->
							</div>
							<!-- End content wrap -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->

			
			</section>
			<!-- End content section -->


			<!-- Begin footer -->
			<?php include'footer.php';?>
			<!-- End footer -->


		</div>
		<!-- End body content -->

		<!-- Scroll to top button -->
		<a href="#body" class="scrolltotop sm-scroll"><i class="fas fa-chevron-up"></i></a>



        

		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- bootstrap JS (http://getbootstrap.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets/vendor/lightgallery/js/lightgallery.min.js"></script> <!-- lightGallery JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="assets/vendor/lightgallery/js/lightgallery-all.min.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->

		<script src="assets/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support -->
		<script src="assets/vendor/jquery.easing.min.js"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
		<script src="assets/vendor/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="assets/vendor/imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
		<script src="assets/vendor/justifiedgallery/js/jquery.justifiedGallery.min.js"></script> <!-- Justified Gallery JS (http://miromannino.github.io/Justified-Gallery/) -->
		<script src="assets/vendor/smoothscroll.js"></script> <!-- Smoothscroll JS (https://gist.github.com/theroyalstudent/4e6ec834be19bf077298) -->
		<script src="assets/vendor/ytplayer/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
		<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel JS (https://owlcarousel2.github.io/OwlCarousel2/) -->

		<!-- Google maps JS (https://developers.google.com/maps/documentation/javascript/tutorial). Only for contact page!!! -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAo5b533IB2iuDcTn2razvfjyc_rpZdiRw&callback=initMap"></script> 
		<!-- Google maps JS (https://developers.google.com/maps/documentation/javascript/tutorial). Only for contact page!!! -->
		<script src="assets/vendor/map.js"></script> 

		<!-- Theme master JS -->
		<script src="assets/js/theme.js"></script>



		<!--==============================
		///// Begin Google Analytics /////
		============================== -->

		<!-- Paste your Google Analytics code here. 
		Go to http://www.google.com/analytics/ for more information. -->

		<!--==============================
		///// End Google Analytics /////
		============================== -->



	</body>
	<!-- End body -->

</html>