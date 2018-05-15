<!DOCTYPE html>

<!--
   Template:   SnapHouse - Photography Portfolio Website Template
   Author:     Themetorium
   URL:        http://snaphouse.net
-->

<html lang="en">
	<?php include 'head.php'; ?>


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


			<!-- ==============================
			/////// Begin intro section ///////
			===================================
			* Use class "bg-image-scroll-horizontal" or "bg-image-scroll-vertical" to enable background image scrolling animation (otherwise use class "bg-image" or "bg-image-fixed").
			* Use class "full-page" to enable fullscreen intro.
			-->
			<section id="intro-section" class="full-page bg-image-scroll-vertical" style="background-image: url(assets/img/photos/Nature-Photography.jpg); background-position: 50% 50%;">

				<!-- Element cover -->
				<div class="cover bg-transparent-6-dark"></div>

				<!-- Begin intro caption
				=========================
				* Use classes "align-center" and "text-center" to align caption to the center.
				-->
				<div class="intro-caption bg-transparent-12-dark text-gray-3 align-center text-center ">
					<h1 class="intro-title" style="font-weight: bolder;">Welcome To <span style="color: rgb(134,0,0)">SnapHouse</span></h1>
					<p class="intro-text hide-from-xs">Producing And Projecting Realities From Mere Imaginations</p>
					<div class="intro-button-wrap">
						<a href="gallery.php" class="btn  btn-rounded-5x" style="background-color:white;color: rgb(134,0,0)">Take A Tour</a> 
						
					</div>
				</div>
				<!-- End intro caption -->

				<!-- Begin made with love -->
				<!-- <div class="made-with-love hide-from-sm">
					<p>Made With<span class="text-red"><i class="far fa-heart"></i></span></p>
				</div>
				<!-- End made with love -->

			</section>
			<!-- End intro section -->


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