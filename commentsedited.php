<?php
	if(!isset($_GET["view"])){
		echo "<script>window.location.assign('index.php')</script>";
	}else{
		include("model.php");
		$val =  (int)$_GET["view"];
		$details = $classobj->getPhotoDetails($val);
		
	}

	
?>
<!DOCTYPE html>

<!--
   Template:   Agatha - Photography Portfolio Website Template
   Author:     Themetorium
   URL:        http://themetorium.net
-->

<html lang="en">
	<?php include'head.php';?>


	<!-- =================
	///// Begin body /////
	================== -->
	<?php include'header-and-menu.php';?>
		<!-- End off-canvas menu -->


		<!-- ==============================
		/////// Begin body content ///////
		=============================== -->
		<div id="body-content">


			<!-- ================================
			///// Begin page header section /////
			================================= -->
			

				<!-- Begin page header image 
				===============================
				* Use class "parallax" to enable parallax effect.
				-->
			
			<!-- End page header section -->


			<!-- ================================
			/////// Begin content section ///////
			================================= -->
			<section id="content-section" class="page">

				<div class="container max-width-1300">
					<div class="row">
						<div class="col-md-12">

							<!-- Begin content wrap -->
							<div class="content-wrap">
								
								<!-- Begin blog list
								===================== -->
								<div class="blog-list">
									<div class="row">

										<!-- Left column -->
										<div class="col-md-8">

											<!-- Begin blog single post 
											============================= -->
											<div class="blog-single-post">

												<!-- <h1 class="blog-single-post-title">The Truth About Photography</h1> -->

												<!-- Begin blog single attributes -->
												<div class="blog-single-attributes margin-bottom-40">
													<div class="row">
														<div class="col-sm-8">

															<!-- Begin blog single meta -->
															<div class="blog-single-meta-wrap">

																<!-- Blog single author avatar -->
																<!--<a href="" class="author-avatar pull-left bg-image" style="background-image: url(assets/img/blog/small/avatar/avatar-1.jpg);"></a>-->
																<div class="blog-single-meta">
																	
																	<div class="article-time-cat" id = "footeritems">
																		<h4 class="article-author" id = "footeritems">Author: <a href="#" ><?php echo $details[1];?></a></h4>
																		 was with <a href="#" class="article-category" >#<?php echo $details[2]; ?></a>
																		 <span class="article-time" id = "footeritems">on:<a><?php echo $details[5]; ?></a></span>&nbsp 
								
																	</div>
																	
																</div>
															</div>
															<!-- End blog single meta -->

														</div> <!-- /.col -->

												
													</div> <!-- /.row -->
												</div>
												<!-- End blog single attributes -->

												<!-- begin post content -->
												<div class="post-content lightgallery">
												 <div><?php echo $details[6]; ?></div>
													<a href="assets/img/blog/big/img-4.jpg" class="lg-trigger" data-exthumbnail="assets/img/blog/small/img-10.jpg">
														<img src="assets/img/photos/<?php echo $details[3]; ?>" alt="image">
													</a>

												</div>
												<!-- End post content -->

												<!-- Begin blog single attributes -->
												<div class="blog-single-attributes margin-top-60">
													<div class="row">
														<div class="col-sm-8">
															<!-- Begin blog single tags -->
															<div class="blog-single-tags">
																<ul class="list-unstyled list-inline">
																	<li><span id = footeritems><i class="fas fa-tags"></i> tags:</span></li>
																	<li id = footeritems><a href="" id = footeritems><?php echo $details[5];?></a> </li> 
																</ul>
															</div>
															<!-- End blog single tags -->
														</div> <!-- /.col -->

														<div class="col-sm-4 text-right">
															
															<!-- Begin blog single links -->
															<ul class="blog-single-links list-unstyled list-inline">

																<!-- Begin album share -->
																<li>
																	<a href="#0" class="al-at-link album-share" title="Share this album" data-toggle="modal" data-target="#modal-46745655">
																		<span class="al-at-icon" id = footeritems><i class="fas fa-share-alt"></i></span>
																		<span class="al-at-text" id = footeritems>Share</span>
																	</a>

																	<!-- Begin album share modal -->
																	<div id="modal-46745655" class="modal fade" tabindex="-1" role="dialog">
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
																							<li><a href="#0" class="btn btn-social-min btn-facebook btn-rounded-full"><i class="fab fa-facebook-f"></i></a></li>
																							<li><a href="#0" class="btn btn-social-min btn-twitter btn-rounded-full"><i class="fab fa-twitter"></i></a></li>
																							<li><a href="#0" class="btn btn-social-min btn-google btn-rounded-full"><i class="fab fa-google-plus-g"></i></a></li>
																							<li><a href="#0" class="btn btn-social-min btn-pinterest btn-rounded-full"><i class="fab fa-pinterest-p"></i></a></li>
																							<li><a href="#0" class="btn btn-social-min btn-instagram btn-rounded-full"><i class="fab fa-instagram"></i></a></li>
																						</ul>
																						<input class="grab-link" type="text" readonly="" value="https://your-site.com/blog-post-link" onclick="this.select()">
																					</div>
																					<!-- End modal share -->
																				</div>
																			</div><!-- /.modal-content -->
																		</div><!-- /.modal-dialog -->
																	</div>
																	<!-- End album share modal -->

																</li>
																<!-- End album share -->

																<!-- Begin add to favorites button -->
																<li>
																	<div class="favorite-btn">
																		<div class="fav-inner">
																			<div class="icon-heart">
																				<span class="icon-heart-empty"></span>
																				<span class="icon-heart-filled"></span>
																			</div>
																		</div>
																		<div class="fav-count" id=footeritems><?php echo $details[0]; ?></div>
																	</div>
																</li>
																<!-- End add to favorites button -->

																<!-- Begin comments count -->
																<li><a href="#blog-post-comments" class="blog-single-comment-count sm-scroll" id=footeritems><i class="fas fa-comment"></i> <?php echo $details[0]; ?></a></li>
																<!-- End comments count -->

															</ul>
															<!-- End blog single links -->

														</div> <!-- /.col -->
													</div> <!-- /.col -->
												</div>
												<!-- End blog single attributes -->

											</div> 
											<!-- End blog single post -->



											<!-- Begin post comments 
											========================= -->
											<div id="blog-post-comments">
 
											<?php $classobj->commentcount();?>
												 
												<!-- Begin media list -->
<ul class="media-list">													<!-- Begin media -->
	 
		
		 
		
<?php
if(!count($details[7]) >=0){
//if(count(isempty($details[7])))  
				echo "No Comment yet";

					if(isset($_POST['message'])){
			//echo $classobj->entercomment(); 
			$commentintake = $classobj->entercomment();
									
			 ?>
				<li class="media">						
						<div class="media-body">
						<h4 class="media-heading"><a href="#"><?php echo $commentintake[0]; ?></a></h4>
						<span class="article-time pull-left"><?php $commentintake[2] ?></span>
							<span class="media-reply pull-right"><!--<a href="#">reply <i class="fas fa-reply"></i></a>--></span>
					<p class="media-text" id = footeritems><?php $commentintake[1] ?>.</p>
							
											</div>
											</li>

		<?php		
	
 	 }
	}
	else{

			for($i = 0; $i < count($details[7]); $i++){
		?>

			<li class="media">						
						<div class="media-body">
						<h4 class="media-heading"><a href="#"><?php echo $details[7][$i]->name; ?></a></h4>
						<span class="article-time pull-left"><?php $commenttime ?></span>
							<span class="media-reply pull-right"><!--<a href="#">reply <i class="fas fa-reply"></i></a>--></span>
					<p class="media-text" id = footeritems><?php echo $details[7][$i]->comment; ?>.</p>
							
											</div>
											</li>

				<?php if(isset($_POST['message'])){
			echo $classobj->entercomment();
			 
			 ?>
				<li class="media">						
						<div class="media-body">
						<h4 class="media-heading"><a href="#"><?php echo $details[7][$i]->name; ?></a></h4>
						<span class="article-time pull-left"><?php $commenttime ?></span>
							<span class="media-reply pull-right"><!--<a href="#">reply <i class="fas fa-reply"></i></a>--></span>
					<p class="media-text" id = footeritems><?php echo $details[7][$i]->comment; ?>.</p>
							
											</div>
											</li>

		<?php		
	}
}
	}
?>
		
												
</ul>
												<!-- End media list -->


												<!-- Begin post comment form -->
												<form id="post-comment-form" action = " " method = "POST" enctype="multipart/form-data">
													<h4 id = footeritems>Leave a Comment:</h4>
												<div class="row">
									
														<div class="col-lg-6">
															<div class="form-group" id = footeritems>
				<input type='hidden' name='comenttime' value='<?php echo date('Y M D h-m-s',time())?>' class="form-control">
																<input type="text"  class="form-control" name="name" placeholder="Your Name" required>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<input type="email" class="form-control" name="email" placeholder="Your Email*" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<textarea class="form-control" name="message" rows="5" placeholder="Your Comment" required></textarea>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<button type="submit" class="btn btn-primary btn-rounded-5x" id =footeritems>submit comment</button>
															<!--<label class="checkbox reminder margin-top-20 margin-left-20"><input checked="checked" type="checkbox">Email me when this comment receives a reply</label>-->
														</div>
													</div>
												</form>
												<!-- End post comment form -->

											</div>
											<!-- End post comments -->

										</div> <!-- /.col (Left column) -->


										<!-- Right column -->
										<div class="col-md-4">

											<!-- Begin sidebar 
											==================== -->
											<div class="sidebar sidebar-right">
												<div class="row">
												
													<!--<div class="col-sm-12">
														
														<div class="sidebar-widget sidebar-search no-margin-top">
															<form id="blog-search-form">
																<div class="form-group">
																	<input type="text" class="form-control" id="blog-search" name="search" placeholder="Search">
																	<button type="submit"><i class="fas fa-search"></i></button>
																</div>
															</form>
														</div>
												
													</div>--> <!-- /.col -->

												<!--<div class="col-md-12 col-sm-6">
														<!-- Begin sidebar widget -->
														<!--<div class="sidebar-widget sidebar-categories">
															<h3 class="sidebar-heading" id="footeritems">Blog Categories</h3>
															<hr class="hr-short">
															<ul class="list-unstyled">
																<li><a href="#">#Fashion <span>26</span></a></li>
																<li><a href="#">#Portraits <span>54</span></a></li>
																<li><a href="#">#Black &amp; White <span>17</span></a></li>
																<li><a href="#">#Outdoor <span>19</span></a></li>
																<li><a href="#">#Varia <span>67</span></a></li>
															</ul>
														</div>
														<!-- End sidebar widget -->
													</div> <!-- /.col -->

													<div class="col-md-12 col-sm-6">
														<!-- Begin sidebar widget -->
													
														<!-- End sidebar widget -->
													</div> <!-- /.col -->
									
											<div class='col-md-12 col-sm-6'>
															<!-- Begin sidebar widget -->
													<div class='sidebar-widget sidebar-comments-list'>
																<h3 class='sidebar-heading' id = footeritems>Recent Comments</h3>
																<hr  id = footeritems>
																<ul class='list-unstyled'>
																	<li class='sidebar-comment-wrap'>
																	
																		<div class='sidebar-comment-meta'>
											<div class='sidebar-comment-data' id=footeritems>
		<span class='author'  >By: <a href='' id=footeritems><?php echo $details[7][0]->name; ?></a></span>
																				<span class='date'>		
																	".date('D M Y h:m:s',time())." <br>	
																				</span>
																			</div>
									<div class='sidebar-comment'>
						<a href='blog-single-no-sidebar.html'><?php echo $details[7][0]->comment; ?></a>
																			</div>
																		</div>
																	</li>

															

																

																</ul>
															</div>
															<!-- End sidebar widget -->
														</div> <!-- /.col -->



													<div class="col-md-12 col-sm-6">
														<!-- Begin sidebar widget -->
														<div class="sidebar-widget sidebar-tags">
															<h3 class="sidebar-heading" id = footeritems>Popular Tags</h3>
															<!--<hr class="hr-short">-->
															<ul class="list-unstyled">
																<?php
																$allc = $classobj->allCategories();
																for($i = 0; $i < count($allc); $i++){ ?>
																<li ><a href="photos.php?cat=<?php echo $allc[$i]->id ?>" id=footeritems>#<?php echo $allc[$i]->name; ?></a></li>
														<?php	} ?>
																
															</ul>
														</div>
														<!-- End sidebar widget -->
													</div> <!-- /.col -->

													<!--<div class="col-md-12 col-sm-6">
														<!-Begin sidebar widget 
														<div class="sidebar-widget sidebar-photo-stream">
															<h3 class="sidebar-heading" id = footeritems>Photo Stream</h3>
															<hr class="hr-short">

															<!- Begin thumbnail list 
															==========================
															* Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
															* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
															
															<ul class="thumb-list col-4 gutter-4">
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-1.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-2.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-3.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-4.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-5.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-6.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-7.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-8.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-9.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-10.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-11.jpg);"></a></li>
																<li><a href="album-single-masonry-5col.html" class="thumb-list-item bg-image" style="background-image: url(assets/img/blog/small/img-12.jpg);"></a></li>

															</ul>
															<!- End thumbnail list 

														</div>
														<!- End sidebar widget
													</div> <!-/.col -->

													<!--<div class="col-md-12 col-sm-6">
														<!- Begin sidebar widget -
														<div class="sidebar-widget sidebar-subscribe">
															<h3 class="sidebar-heading" id = footeritems>Subscribe</h3>
															<!-<hr class="hr-short">-
															<p class="small" id=footeritems>Follow our latest news:</p>
															<form id="subscribe-form" class="form-with-button">
																<div class="form-group">
																	<input type="email" class="form-control" id="subscribe" name="subscribe" placeholder="enter your email address..." required>
																	<button type="submit"><i class="fas fa-envelope-o"></i></button>
																</div>
															</form>
														</div>
														<!- End sidebar widget 
													</div> -->

												

												</div> <!-- /.row -->
											</div>
											<!-- End sidebar -->

										</div> <!-- /.col (Right column) -->

									</div> <!-- /.row -->
								</div>
								<!-- End blog-list -->

							</div>
							<!-- End content wrap -->

						</div> <!-- /.col -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->

			</section>
			<!-- End content section -->


			<!-- Begin footer -->
			<?php include_once'footer.php';?>
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