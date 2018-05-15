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
	<?php include 'header-and-menu.php';?>
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

							<h1 class="album-title" id ="footeritems" style = 'font-size:60px;font-weight: bolder;'>About Us</h1>
							<ol class="breadcrumb">
								
								
							</ol>

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> 
				<!-- End page header info -->

			</section>
			<!-- End page header section -->


			<!-- ================================
			/////// Begin content section ///////
			================================= -->
			<section id="content-section" class="page page-about-us">

				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap">
								<div class="row margin-bottom-60">

									<div class="col-md-12">

										<h3 id ="footeritems">Our Story</h3>
										<hr class="hr-short">
										
										<p>Integer nec rhoncus lacus. Vestibulum suscipit tristique cursus. Nunc tempor, leo ornare dignissim laoreet, ex ligula imperdiet metus, a pellentesque lectus sem eu nunc. Donec malesuada id velit eget laoreet. Nullam posuere diam nec dolor volutpat bibendum. Curabitur ipsum mi, auctor sit amet diam mattis, facilisis mollis sapien. Mauris vel dignissim justo, at dignissim arcu. Morbi eros quam, mollis et metus nec, sodales congue turpis. Nunc vel ipsum arcu. Nunc mattis interdum interdum. Morbi venenatis scelerisque orci eget bibendum.</p>

										<p>Curabitur ipsum mi, auctor sit amet diam mattis, facilisis mollis sapien. Mauris vel dignissim justo, at dignissim arcu. Morbi eros quam, mollis et metus nec, sodales congue turpis. Nunc vel ipsum arcu. Nunc mattis interdum interdum. Morbi venenatis scelerisque orci eget bibendum. :)</p>

									</div> <!-- /.col -->
								</div> <!-- /.row -->

							

								<div class="row margin-top-40">

									<div class="col-md-12 text-center">
										<a href="gallery.php" class="btn btn-default btn-rounded-5x" id ="footeritems">View Our Work</a>
										<a href="page-contact.php" class="btn btn-primary btn-rounded-5x" id ="footeritems">Contact Us</a>
									</div> <!-- /.col -->

								</div> <!-- /.row -->
							</div>
							<!-- End content wrap -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->

			</section>
			<!-- End content section -->


			<!-- Begin footer -->
			<?php include 'footer.php';?>
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