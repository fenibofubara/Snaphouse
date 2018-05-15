<header id="header" class="fixed-top">
			<div class="header-inner">

				<!-- Begin logo -->
				<div id="logo">
					<a href="index.php" class="logo-dark" style="font-style:italic; font-family:Forte; font-size: 18px;color:rgb(134,0,0);font-weight: bolder;">SnapHouse</a>

					
				</div>
				<!-- End logo -->

				<!-- Begin header tools -->
				<div class="header-tools">
					<ul>
						<li>
							<!-- off-canvas menu trigger (menu button) -->
							<a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span>menu</a>
						</li>
					</ul>
				</div>
				<!-- End header tools -->

				<!-- Begin menu (Bootstrap navbar)
				=================================== 
				* Use class "navbar-default" or "navbar-border-bogttom" for navbar style.
				-->
				<nav class="navbar navbar-default">
					<div class="navbar-inner">

						<!-- Toggle for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div> <!-- /.navbar-header -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right" >

								<!-- Begin dropdown
								==============================
								* Use class "dropdown-hover" to make navigation toggle on desktop hover.
								* Use class "dropdown-menu-right" to right align the dropdown menu.
								* Use class "dropdown-menu-dark" to enable dark dropdown menu.
								-->
								<li class="dropdown dropdown-hover active">
								<a href="index.php" id="menuitems"><li>Home</li></a>
									<!--<a href="#0" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <span class="caret-2"><i class="fas fa-chevron-down"></i></span></a>
									<ul class="dropdown-menu">
										<li><a href="home-single-image.php">Single Image</a></li>
										<li><a href="album-list-slideshow.php">Slideshow</a></li>
										<li><a href="home-video-background.php">Video Background</a></li>
										<li class="active"><a href="home-scrolling-bg.php">Scrolling Background</a></li>
										<li><a href="home-photo-wall.php">Photo Wall</a></li>
										<li><a href="album-list-carousel-full.php">Striped Carousel</a></li>
									</ul>-->
								</li>
								<!-- End dropdown -->

								<!-- Begin dropdown
								====================
								* Use class "dropdown-hover" to make navigation toggle on desktop hover.
								* Use class "dropdown-menu-right" to right align the dropdown menu.
								* Use class "dropdown-menu-dark" to enable dark dropdown menu.
								-->

								<li class="dropdown dropdown-hover">
									<a href="gallery.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="menuitems">Gallery <span class="caret-2"><i class="fas fa-chevron-down"></i></span></a>
									<ul class="dropdown-menu">
										
										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="photos.php?cat=1">Beauty</a></li>


										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="photos.php?cat=4">Celebration</a></li>


										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="photos.php?cat=6">Cuisine</a></li>


										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="photos.php?cat=5">Fashion And Style</a></li>


										<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="photos.php?cat=2">MakeOver</a></li>

											<li class="dropdown dropdown-submenu dropdown-hover">
											<a href="photos.php?cat=3">Structures</a></li>
											<ul class="dropdown-menu">

												<!--<li><a href="album-list-carousel.php">Carousel</a></li>-->
												<!--<li><a href="album-list-carousel-full.php">Carousel Full</a></li>-->
												<li><a href="album-list-slideshow.php">Beauty</a></li>
												
												<!-- Begin dropdown (submenu)
												==============================
												* Use class "dropdown-hover" to make navigation toggle on desktop hover.
												* Use class "dropdown-menu-dark" to enable dark dropdown menu.
												-->
												<li class="dropdown dropdown-submenu dropdown-hover">
													<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Grid <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
													<ul class="dropdown-menu">
														<li><a href="album-list-grid-3col.php">3 Columns</a></li>
														<li><a href="album-list-grid-4col.php">4 Columns</a></li>
														<li><a href="album-list-grid-5col.php">5 Columns</a></li>
														<li><a href="album-list-grid-6col.php">6 Columns</a></li>
														<li><a href="album-list-grid-no-gutter.php">No Gutter</a></li>
														<li><a href="album-list-grid-no-heading.php">No Heading</a></li>
													</ul>
												</li>
												<!-- End dropdown -->

												<!-- Begin dropdown (submenu)
												==============================
												* Use class "dropdown-hover" to make navigation toggle on desktop hover.
												* Use class "dropdown-menu-dark" to enable dark dropdown menu.
												-->
												<li class="dropdown dropdown-submenu dropdown-hover">
													<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Masonry <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
													<ul class="dropdown-menu">
														<li><a href="album-list-masonry-3col.php">3 Columns</a></li>
														<li><a href="album-list-masonry-4col.php">4 Columns</a></li>
														<li><a href="album-list-masonry-5col.php">5 Columns</a></li>
														<li><a href="album-list-masonry-6col.php">6 Columns</a></li>
														<li><a href="album-list-masonry-no-gutter.php">No Gutter</a></li>
														<li><a href="album-list-masonry-no-heading.php">No Heading</a></li>
													</ul>
												</li>
												<!-- End dropdown -->

												<!-- Begin dropdown (submenu)
												==============================
												* Use class "dropdown-hover" to make navigation toggle on desktop hover.
												* Use class "dropdown-menu-dark" to enable dark dropdown menu.
												-->
												<li class="dropdown dropdown-submenu dropdown-hover">
													<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Album Styles <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
													<ul class="dropdown-menu">
														<li><a href="album-list-item-style-1.php">Style 1</a></li>
														<li><a href="album-list-item-style-2.php">Style 2</a></li>
														<li><a href="album-list-item-no-style.php">No Style</a></li>
													</ul>
												</li>
												<!-- End dropdown -->

												<!-- Begin dropdown (submenu)
												==============================
												* Use class "dropdown-hover" to make navigation toggle on desktop hover.
												* Use class "dropdown-menu-dark" to enable dark dropdown menu.
												-->
												<li class="dropdown dropdown-submenu dropdown-hover">
													<a href="#0" class="dropdown-toggle keep-inside-screen" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Caption Styles <span class="caret-2"><i class="fas fa-chevron-right"></i></span></a>
													<ul class="dropdown-menu">
														<li><a href="album-list-item-caption-default.php">Caption Default</a></li>
														<li><a href="album-list-item-caption-boxed.php">Caption Boxed</a></li>
														<li><a href="album-list-item-caption-gradient.php">Caption Gradient</a></li>
														<li><a href="album-list-item-caption-outside.php">Caption Outside 1</a></li>
														<li><a href="album-list-item-caption-outside-2.php">Caption Outside 2</a></li>
													</ul>
												</li>
												<!-- End dropdown -->

											</ul>
										</li>
										<!-- End dropdown -->

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
									
										<!-- End dropdown -->

									</ul>
								</li>
								<!-- End dropdown -->

								<!-- Begin dropdown
								====================
								* Use class "dropdown-hover" to make navigation toggle on desktop hover.
								* Use class "dropdown-menu-right" to right align the dropdown menu.
								* Use class "dropdown-menu-dark" to enable dark dropdown menu.
								-->
								<li >
									<a href="services.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="menuitems">Services</a>
									
								</li>
								<!-- End dropdown -->

								<!-- Begin dropdown
								====================
								* Use class "dropdown-hover" to make navigation toggle on desktop hover.
								* Use class "dropdown-menu-right" to right align the dropdown menu.
								* Use class "dropdown-menu-dark" to enable dark dropdown menu.
								-->
							
								<!-- End dropdown -->

								<!-- Begin dropdown
								====================
								* Use class "dropdown-hover" to make navigation toggle on desktop hover.
								* Use class "dropdown-menu-right" to right align the dropdown menu.
								* Use class "dropdown-menu-dark" to enable dark dropdown menu.
								-->
															<!-- End dropdown -->

								<!-- Begin dropdown
								====================
								* Use class "dropdown-hover" to make navigation toggle on desktop hover.
								* Use class "dropdown-menu-right" to right align the dropdown menu.
								* Use class "dropdown-menu-dark" to enable dark dropdown menu.
								-->
								<li class="dropdown dropdown-hover dropdown-menu-right">
									<a href="#0" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="menuitems">More <span class="caret-2"><i class="fas fa-chevron-down"></i></span></a>
									<ul class="dropdown-menu">
										
										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
									
										<!-- End dropdown -->

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										
										<!-- End dropdown -->

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
										<li >
											<a href="tutorials.php">Tutorials </a>
										
											
										</li>
										<!-- End dropdown -->

										<!-- Begin dropdown (submenu)
										==============================
										* Use class "dropdown-hover" to make navigation toggle on desktop hover.
										* Use class "dropdown-menu-dark" to enable dark dropdown menu.
										-->
									
										<!-- End dropdown -->

									</ul>
								</li>
								<!-- End dropdown -->

							</ul> <!-- /.nav -->
						</div> <!-- /.navbar-collapse -->

					</div> <!-- /.navbar-inner -->
				</nav>
				<!-- End menu -->

			</div> <!-- /.header-inner -->
		</header>
		<!-- End header -->


		<!-- ==================================================================================================
		///// Begin off-canvas menu (more info: http://codyhouse.co/gem/secondary-expandable-navigation/) /////
		=================================================================================================== -->
		<!--<nav id="cd-lateral-nav">
			<div class="nav-inner">

				<!- Menu header 
				<div class="menu-header" style="background-color:rgb(134,0,0)"><div>
					<form id="cd-search-form">
						<div class="form-group">
						<input type="text" class="form-control" id="cd-search" name="search" placeholder="enter search category">
							<button type="submit"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
</div>

				<!-Begin nav content box -->
								<!-- End nav content box -->

				<!-- Begin nav links 
				===================== -->
			
				<!-- End nav links -->

				<!-- Begin nav content box -
				<div class="cd-content-box">

					<h2 class="cd-menu-heading" style="color:rgb(134,0,0) font-weight:bolder;">Hottest Deals</h2>
					
					<!- Begin thumbnail list 
					==========================
					* Use class "col-2", "col-3", "col-4" "col-5" or "col-6" for thumbnail list columns.
					* Use class "gutter-1", "gutter-2", "gutter-3", "gutter-4" or "gutter-5" to add more space between items.
					-
					<ul class="thumb-list col-3 gutter-3">
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(./view/assets/img/album-list/small/makeover.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(./view/assets/img/album-list/small/makeupitems.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(./view/assets/img/album-list/small/weddinggown.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(./view/assets/img/album-list/small/weddingring.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(./view/assets/img/album-list/small/wigs.jpg);"></a></li>
						<li><a target="_blank" href="https://www.instagram.com" class="thumb-list-item bg-image" style="background-image: url(./view/assets/img/album-list/small/eventcenter.jpg);"></a></li>
						
					</ul>
					<!- End thumbnail list -

				</div>
				<!- End nav content box -->

				<!-- Begin nav content box -->
				
				<!-- End nav content box -

			</div> <! /.nav-inner 
		</nav> -->