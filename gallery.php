
<?php
include_once('model.php'); //used to ensure that the file is included once just once
?>

<!DOCTYPE html>


<html lang="en">
	<head>

		<!-- Title -->
		<title>Gallery</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="HTML5 Photography Portfolio Website Template by Themetorium">
		<meta name="keywords" content="HTML5, CSS3, JavaScript, Bootsrtrap, Responsive, Photography, Portfolio, Template, Theme, Website, Themetorium" />
		<meta name="author" content="themetorium.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Google font (https://www.google.com/fonts) -->
		<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300,500,700,100' rel='stylesheet' type='text/css'>

		<!-- Bootstrap CSS (http://getbootstrap.com) -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css"> <!-- bootstrap CSS (http://getbootstrap.com) -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="assets/vendor/fontawesome/css/fontawesome-all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="assets/vendor/lightgallery/css/lightgallery.min.css"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->
		<link rel="stylesheet" href="assets/vendor/justifiedgallery/css/justifiedGallery.min.css"> <!-- Justified Gallery CSS (http://miromannino.github.io/Justified-Gallery/) -->
		<link rel="stylesheet" href="assets/vendor/ytplayer/css/jquery.mb.YTPlayer.min.css"> <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
		<link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.min.css"> <!-- Owl Carousel CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.theme.default.min.css"> <!-- Owl Carousel default theme CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
		<link rel="stylesheet" href="assets/vendor/animate.min.css"> <!-- Animate libs CSS (http://daneden.me/animate) -->

		<!-- Template master CSS -->
		<link rel="stylesheet" href="assets/css/theme.css">
		<link rel="stylesheet" href="assets/css/helper.css">

		<!-- Template dark style CSS (comment or uncomment below line to enable/disable template dark style) -->
		<!-- <link rel="stylesheet" href="assets/css/dark-style.css"> -->


		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>


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
		<?php include'header.php'; ?>
		<!-- End header -->


		<!-- ==================================================================================================
		///// Begin off-canvas menu (more info: http://codyhouse.co/gem/secondary-expandable-navigation/) /////
		=================================================================================================== -->
	<nav id="cd-lateral-nav">
			<div class="nav-inner">

				<!-- Menu header -->
				<div class="menu-header" style="background-color:rgb(134,0,0)">Extra Stuff</div>

				<!-- Begin nav content box -->
				<div class="cd-content-box margin-top-20">
					<form id="cd-search-form">
						<div class="form-group">
						<input type="text" class="form-control" id="cd-search" name="search" placeholder="Search">
							<button type="submit"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
				<!-- End nav content box -->

				<!-- Begin nav links 
				===================== -->
				<ul class="cd-navigation">

					<li><a class="link" href="page-about-us.html">About Us</a></li>
					<li><a class="link" href="album-list-grid-5col.html">Photo Gallery</a></li>
					<li><a class="link" href="portfolio-list-grid-5col.html">Portfolio</a></li>
					<li><a class="link" href="blog-list-sidebar-right.html">Articles</a></li>
					<li><a class="link" href="page-contact.html">Contact</a></li>

					<!-- Begin submenu -->
					<li class="item-has-children">
						<a href="#0">Submenu<span class="caret-2"><i class="fas fa-chevron-down"></i></span></a>
						<ul class="sub-menu">
							<li><a class="link" href="#">Sub Link 1</a></li>
							<li><a class="link" href="#">Sub Link 2</a></li>
							<li><a class="link" href="#">Sub Link 3</a></li>
						</ul>
					</li>
					<!-- End submenu -->

					<li class="cd-menu-separator"></li>

				</ul>
				<!-- End nav links -->

				<!-- Begin nav content box -->
				<div class="cd-content-box">

					<h2 class="cd-menu-heading">Instagram:</h2>
					
					<!-- Begin thumbnail list 
					==========================
					* Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
					* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
					-->
					<ul class="thumb-list col-3 gutter-3">
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-1.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-2.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-3.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-4.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-5.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-6.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-7.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-8.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(assets/img/album-list/small/img-9.jpg);"></a></li>
					</ul>
					<!-- End thumbnail list -->

				</div>
				<!-- End nav content box -->

				<!-- Begin nav content box -->
				<div class="cd-content-box margin-top-20">
					<a target="_blank" href="http://themeforest.net/item/agatha-photography-portfolio-website-template/15349868?ref=Themetorium" class="link btn btn-primary-bordered btn-rounded-5x btn-sm btn-block">Buy This Template</a>
					<p class="margin-top-15 small">Enimat illum atera ates expedita obcaecati atque.</p>
				</div>
				<!-- End nav content box -->

			</div> <!-- /.nav-inner -->
		</nav>
		<!-- End off-canvas menu -->


		<!-- ==============================
		/////// Begin body content ///////
		=============================== -->
		<div id="body-content">


			<!-- ============================
			///// Begin content section /////
			============================= -->
			<section id="content-section" class="portfolio-list-grid min-height-850">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap">

								<!-- Begin isotope
								===================
								* Use classes "gutter-1", "gutter-2" or "gutter-3" to add more space between items.
								* Use class "col-1", "col-2", "col-3", "col-4", "col-5" or "col-6" for columns.
								-->
								<div class="isotope gutter-2 col-5">

									<!-- Begin gallery top content -->
									<div class="gallery-top-content">

										<div class="row margin-bottom-40">
											<div class="col-md-8">

												<!-- Begin isotope filter -->
												<div class="isotope-filter">

													<!-- Begin isotope filter toggle button -->
													<div class="navbar-header visible-xs">
														<button type="button" class="navbar-toggle collapsed filter-toggle-btn" data-toggle="collapse" data-target="#isotope-filter-collapse">
															<span class="text-center">Gallery <i class="fas fa-chevron-down"></i></span>
														</button>
													</div>
													<!--End isotope filter toggle button-->

													<h2 class="filter-heading "><span style="color:rgb(134,0,0);font-weight:bolder;font-size:15px;">Take A Tour Through Our Gallery</span></h2>

													

												</div>
												<!-- End isotope filter -->
												
											</div> <!-- /.col -->

										<!--	<div class="col-md-4">

												<!- Begin album attributes -->
												<!--<ul class="album-attributes margin-top-30 hide-from-md">

													<!- Begin show items on page
													==============================
													* Use class "options-dark" to enable dark dropdown menu.
													-->
											<!--		<li><form class="form-inline show-on-page">
														<div class="form-group">
															<label for="show-items">Show:</label>
															<select id="show-items" class="select-styled">
																<option value="show-15-items">10 items</option>
																<option value="show-25-items">15 items</option>
																<option value="show-50-items">50 items</option>
																<option value="show-all-items">Show All</option>
															</select>
														</div>
													</form></li>
													<!- End show items on page -->
													
											<!--	</ul>
												<!- End album attributes -->

										<!--	</div> /.col -->
										</div> <!-- /.row -->

									</div>
									<!-- End gallery top content -->


									<!-- Begin isotope items (album list items) 
									============================================= 
									* Use class "caption-gradient" to enable gradient caption.
									* Use class "caption-outside" to enable caption outside.
									* Use class "caption-dark" to enable dark caption (no effect if "caption-gradient" or "caption-outside" is used).
									* Use class "caption-boxed" to enable boxed caption (no effect if "caption-gradient" or "caption-outside" is used).
									* Use class "caption-sm", "caption-lg" or "caption-xlg" to change caption size.
									* Use classes "ali-style-1", "ali-style-2" to change album list item style (no effect if "gutter-1" is used).
									* Note: For grid layout make sure that your images are the same dimensions.
									* Note: For masonry layout make sure that your images are the different dimensions.
									-->
									<div class="isotope-items-wrap ali-style-1 caption-outside">

										<!-- Grid sizer (do not remove!!!) -->
										<div class="grid-sizer"> 
											
										<?php
										$classobj->showgallery_categories();
										?>
										</div>

									</div>
									<!-- End isotope items wrap -->

								</div>
								<!-- End isotope -->

							</div>
							<!-- End content wrap -->
							
						</div> <!-- /.col -->
					</div> <!-- /.row -->

					<div class="row">
						<div class="col-md-8">

							<!-- Begin pagination -->
							
							<!-- End pagination -->

						</div> <!-- /.col -->

						<div class="col-md-4">

							<!-- Begin pagination info -->
							
							<!-- End pagination info -->

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