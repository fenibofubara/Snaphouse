<?php
include_once('model.php'); //used to ensure that the file is included once just once
$classobj = new controlclass();
$throws = $classobj->get_rows();?>

<!DOCTYPE html>

<!--
   Template:   Agatha - Photography Portfolio Website Template
   Author:     Themetorium
   URL:        http://themetorium.net
-->

<html lang="en">
	<head>

		<!-- Title -->
		<title>SnapHouse - Single Gallery</title>

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
		
			<script type = "text/javascript"> 
		
		 function cwRating(id,type,target){
			$.ajax({
				type:'POST',
				url:'rating.php',
				data:'id='+id+'&type = '+type,
				success:function(msg){
					if(msg =='err'){
						alert('Some Problems Occured,please try again');
					} else{
						$('#'+target).html(msg);
					}
				}

			});
			}  </script>


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
				<div class="menu-header">Extra Stuff</div>

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
			<section id="content-section" class="album-single min-height-850">
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
								<div class="isotope gutter-3 col-4">

									<!-- Begin gallery top content -->
									<div class="gallery-top-content">

										<div class="row margin-bottom-40">
											<div class="col-sm-8 col-md-7">

												<!-- Begin isotope filter -->
												<div class="isotope-filter">

													<!-- Begin isotope filter toggle button -->
													<div class="navbar-header visible-xs">
														<button type="button" class="navbar-toggle collapsed filter-toggle-btn" data-toggle="collapse" data-target="#isotope-filter-collapse">
															<span class="text-center">Filter <i class="fas fa-chevron-down"></i></span>
														</button>
													</div>
													<!-- End isotope filter toggle button -->

													<h2 class="filter-heading">Filters</h2>

													<!-- Begin isotope filter links -->
													<div class="isotope-filter-links collapse navbar-collapse no-padding" id="isotope-filter-collapse">
														<a class="active" href="#" data-filter="*">all</a>
														<a href="#" data-filter=".fashion">Fashion</a>
														<a href="#" data-filter=".portraits">Portraits</a>
														<a href="#" data-filter=".black-and-white">Black &amp; White</a>
														<a href="#" data-filter=".outdoor">Outdoor</a>
													</div>
													<!-- End isotope filter links -->

												</div>
												<!-- End isotope filter -->

											</div> <!-- /.col -->

											<div class="col-sm-4 col-md-5">

												<!-- Begin album attributes -->
												<ul class="album-attributes margin-top-35">

													<!-- Begin album prev/next links -->
													<li>
														<a href="" class="al-at-link album-prev margin-right-15" title="Previous album">
															<span class="al-at-icon"><i class="fas fa-chevron-left"></i></span>
															<span class="al-at-text hide-from-md">Prev</span>
														</a>
													</li>
													<li>
														<a href="" class="al-at-link album-next" title="Next album">
															<span class="al-at-text hide-from-md">Next</span>
															<span class="al-at-icon"><i class="fas fa-chevron-right"></i></span>
														</a>
													</li>
													<!-- End album prev/next links -->
													
													<!-- Begin album share -->
													<li>
														<a href="#0" class="al-at-link album-share margin-left-15" title="Share this album" data-toggle="modal" data-target="#modal-98545043">
															<span class="al-at-icon"><i class="fas fa-share-alt"></i></span>
															<span class="al-at-text hide-from-lg">Share</span>
														</a>

														<!-- Begin album share modal -->
														<div id="modal-98545043" class="modal fade" tabindex="-1" role="dialog">
															<div class="modal-dialog modal-center">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																		<h4 class="modal-title">Share to:</h4>
																	</div>
																	<div class="modal-body text-center">
																		<!-- Begin modal share -->
																					
													                              
													                                
																
																		
																		<div class="modal-share">
																			<ul>
																				<li><a href="http://www.facebook.com/sharer.php?u=$url" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																				<li><a href="https://twitter.com/share?url=$url&amp;text=Snap%20house&amp;hashtags=snaphouse" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																				<li><a href="https://plus.google.com/share?url=$url" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																				<li><a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																				<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																			</ul>
																			<input class="grab-link" type="text" readonly="" value="https://your-site.com/your-album-link" onclick="this.select()">
																		</div>
																		<!-- End modal share -->
																	</div>
																</div><!-- /.modal-content -->
															</div><!-- /.modal-dialog -->
														</div>
														<!-- End album share modal -->

													</li>
													<!-- End album share -->

													<!-- Begin download album link -->
													<li><a href="assets/download/download-album-demo.zip" class="al-at-link album-download margin-left-15" title="Download this album" download="my-awesome-album">
														<span class="al-at-icon"><i class="fas fa-download"></i></span>
														<span class="al-at-text hide-from-lg">Download</span>
													</a></li>
													<!-- End download album link -->
													
												</ul>
												<!-- End album attributes -->

											</div> <!-- /.col -->
										</div> <!-- /.row -->

									</div>
									<!-- End gallery top content -->


									<!-- Begin isotope items (album single items)
									=============================================== 
									* Use classes "hover-center", "hover-boxed", "hover-dark", "hover-simple" to change album single item hover variations.
									* Note1: For grid layout make sure that your images are the same dimensions.
									* Note2: For masonry layout make sure that your images are the different dimensions.
									-->
									<div id="gallery" class="isotope-items-wrap lightgallery hover-center hover-boxed">

										<!-- Grid sizer (do not remove!!!) -->
										<div class="grid-sizer"></div>

										<!-- //////////////////
										// Begin isotope item. Note: use class "width2" for alternative item width (works best on first item).
										/////////////////////// -->
										<div class="isotope-item fashion">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/beauty/5.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/beauty/5.jpg" data-exthumbnail="assets/img/beauty/5.jpg" data-sub-html="">
														<div class="asi-info">
															<h2 class="asi-title"></h2>
															<h5 class="asi-sub-title"></h5>
														</div>
													</a>

													<!-- Begin add to favorites button -->
													

															
															<?php foreach($throws as $throw ){?> 
																
															<!-- Like Icon-->
															<div class=" col-lg-6 col-md-6" onclick="cwRating(<?php echo $throw['id'];?>,1, 'like_count<?php echo $trow['id']; ?>')">
																<!-- Like Counter-->
																<span class="counter" id="like_count<?php echo $trow['id'];?>"> <?php echo $trow['like_num']; ?></span>
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
															<!-- DisLike Icon-->
															<div class=" col-lg-6 col-md-6 " onclick="cwRating(<?php echo $trow['id'];?>,0,'dislike_count<?php echo $trow['id']; ?>')">
																<!-- DisLike Counter-->
																<span class="counter" id="dislike_count<?php echo $trow['id'];?>"> <?php echo $trow['dislike_num']; ?></span>
																
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
															<?php } ?>
														
														<div class="">69</div>
													
													<!-- End add to favorites button -->

												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item
										/////////////////////// -->
										<div class="isotope-item fashion">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-2.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-2.jpg" data-exthumbnail="assets/img/album-single/thumb/img-2.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Meric ac Setre</h2>
															<h5 class="asi-sub-title">#fashion</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">56</div>
													</div>
													<!-- End add to favorites button -->

												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item portraits">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-3.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="https://www.youtube.com/watch?v=meBbDqAXago">
														<div class="asi-info">
															<h2 class="asi-title">Nertes Mavera Tatum</h2>
															<h5 class="asi-sub-title">#portraits</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">79</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item portraits">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-4.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-4.jpg" data-exthumbnail="assets/img/album-single/thumb/img-4.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Kazek Maites</h2>
															<h5 class="asi-sub-title">#portraits</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">188</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item portraits">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-5.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-5.jpg" data-exthumbnail="assets/img/album-single/thumb/img-5.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Embila Sent Tarum</h2>
															<h5 class="asi-sub-title">#portraits</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">41</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item outdoor">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-6.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-6.jpg" data-exthumbnail="assets/img/album-single/thumb/img-6.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Neveck Kanis</h2>
															<h5 class="asi-sub-title">#outdoor</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">97</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item outdoor">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-7.jpg" alt="image">
													<!-- Begin item cover -->
													<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-7.jpg" data-exthumbnail="assets/img/album-single/thumb/img-7.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Satera Vatum</h2>
															<h5 class="asi-sub-title">#outdoor</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">254</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item
										/////////////////////// -->
										<div class="isotope-item outdoor">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-8.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="https://vimeo.com/1084537">
														<div class="asi-info">
															<h2 class="asi-title">Etna Manick</h2>
															<h5 class="asi-sub-title">#outdoor</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">113</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-9.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-9.jpg" data-exthumbnail="assets/img/album-single/thumb/img-9.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Tzitra Vat Torres</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">80</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-10.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-10.jpg" data-exthumbnail="assets/img/album-single/thumb/img-10.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Narrat Lacus</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">163</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-11.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-11.jpg" data-exthumbnail="assets/img/album-single/thumb/img-11.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Meteora Nazek</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">97</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-12.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-12.jpg" data-exthumbnail="assets/img/album-single/thumb/img-12.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Vertinus Nav Esse</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">22</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-13.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-13.jpg" data-exthumbnail="assets/img/album-single/thumb/img-13.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Vateck at Maneck</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">174</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-14.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-14.jpg" data-exthumbnail="assets/img/album-single/thumb/img-14.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Axo Lotus</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">76</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-15.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-15.jpg" data-exthumbnail="assets/img/album-single/thumb/img-15.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Lorea More</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">32</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-16.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-16.jpg" data-exthumbnail="assets/img/album-single/thumb/img-16.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Kartez Namis</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">199</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-17.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-17.jpg" data-exthumbnail="assets/img/album-single/thumb/img-17.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Salame Tak</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">654</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item fashion">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-18.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-18.jpg" data-exthumbnail="assets/img/album-single/thumb/img-18.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Nuris Nameck</h2>
															<h5 class="asi-sub-title">#fashion</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">377</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item fashion">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-19.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-19.jpg" data-exthumbnail="assets/img/album-single/thumb/img-19.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Vektrum Akto</h2>
															<h5 class="asi-sub-title">#fashion</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">74</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

										<!-- //////////////////
										// Begin isotope item 
										/////////////////////// -->
										<div class="isotope-item black-and-white">

											<!-- Begin album single item -->
											<div class="album-single-item">
												<img class="asi-img" src="assets/img/album-single/grid/img-20.jpg" alt="image">
												<!-- Begin item cover -->
												<div class="asi-cover">
													<a class="asi-link lg-trigger" href="assets/img/album-single/big/img-20.jpg" data-exthumbnail="assets/img/album-single/thumb/img-20.jpg">
														<div class="asi-info">
															<h2 class="asi-title">Nazek Menis</h2>
															<h5 class="asi-sub-title">#black &amp; white</h5>
														</div>
													</a>
													
													<!-- Begin add to favorites button -->
													<div class="favorite-btn">
														<div class="fav-inner">
															<div class="icon-heart">
																<span class="icon-heart-empty"></span>
																<span class="icon-heart-filled"></span>
															</div>
														</div>
														<div class="fav-count">45</div>
													</div>
													<!-- End add to favorites button -->
													
												</div>
												<!-- End item cover -->
											</div>
											<!-- End album single item -->

										</div>
										<!-- End isotope item -->

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
							<nav class="pagination-wrap">
								<ul class="pagination">
									<li>
										<a href="" aria-label="Previous">
											<span aria-hidden="true">First</span>
										</a>
									</li>
									<li><a href="">Prev</a></li>
									<li class="active"><a href="#0">1</a></li>
									<li><a href="">2</a></li>
									<li><a href="">3</a></li>
									<li><a href="#0">...</a></li>
									<li><a href="">6</a></li>
									<li><a href="">7</a></li>
									<li><a href="">8</a></li>
									<li><a href="">Next</a></li>
									<li>
										<a href="" aria-label="Next">
											<span aria-hidden="true">Last</span>
										</a>
									</li>
								</ul>
							</nav>
							<!-- End pagination -->

						</div> <!-- /.col -->

						<div class="col-md-4">

							<!-- Begin pagination info -->
							<div class="pagination-info ">
								<span>Showing page 1 of 12</span>
								<span>Images 1 - 15 of 167</span>
							</div>
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
		<script type = "text/javascript" src="assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->
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
