<!DOCTYPE html>


<html lang="en">
	<?php include 'head.php';?>

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
		
		<!-- End off-canvas menu -->

		<?php include 'header-and-menu.php' ?>
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

							<h1 id = "footeritems" style="font-weight: bolder;">Let Nature Teach You</h1>
							

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> 
				<!-- End page header info -->

			</section>
			<!-- End page header section -->


			<!-- ================================
			/////// Begin content section ///////
			================================= -->
			<section id="content-section" class="page">

				<!-- dummy heading (hidden) -->
				<h3 class="hide">d-h</h3>

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap">
								<div class="row">
									<div class="col-md-12">

										<!-- ====================================
										///// Begin section (Youtube embed) /////
										===================================== -->
										<section>
											<div class="section-inner">
												<div class="row">
													<div class="col-sm-12">
														
														<h3 id = "footeritems">Make Over</h3>
													

														<!-- Begin Youtube embed video -->
													<div style ='text-align: center;'>
													
														<video width="600" height="300" controls>
  														<source src="assets/videos/makeoverr.mp4" type="video/mp4"></video>

													</div>

														<!-- End Youtube embed video -->

													</div> <!-- /.col -->
												</div> <!-- /.row -->
											</div> <!-- /.section-inner -->
										</section>
										<!-- End section -->


										<!-- ==================================
										///// Begin section (Vimeo embed) /////
										=================================== -->
										<section>
											<div class="section-inner margin-top-60">
												<div class="row">
													<div class="col-sm-12">
														
														<h3 id = "footeritems">PhotoGraphy</h3>
														
														
														<!-- Begin Vimeo embed video -->
											<div style = 'text-align: center;'>
	
												<video width="600" height="300" controls>
  												<source src="assets/videos/photographyvideo.mp4" type="video/mp4"></video>

											</div>
										


														<!-- End Vimeo embed video -->

													</div> <!-- /.col -->
												</div> <!-- /.row -->
											</div> <!-- /.section-inner -->
										</section>
										<!-- End section -->


										<!-- ===============================
										///// Begin section (YTPlayer) /////
										================================ -->
										</div>
										</section>
			<!-- End content section -->


			<!-- Begin footer -->
			<?php include 'footer.php' ?>
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