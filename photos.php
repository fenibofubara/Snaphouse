<?php
if(!isset($_GET['cat'])){
echo"<script>window.location.assign('index.php');</script>";
}
else{
	include_once ('model.php'); //used to ensure that the file is included once just once
    $catin =$_GET['cat'];
}

?>

<!DOCTYPE html>


<html lang="en">
	<?php  include 'head.php' ;?>


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
		<?php include 'header-and-menu.php'; ?>
		<!-- End header -->


	


		<!-- ==============================
		/////// Begin body content ///////
		=============================== -->
		<div id="body-content">

			<!-- ============================
			///// Begin content section /////
			============================= -->
			<section id="content-section" class="album-single min-height-850">
				<div class="container-fluid">
										<?php
										$classobj->show_photos_by_cat($catin);
										?>
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

	<script>
		$(document).ready(function(){
			$(document).on('click','#try',function(){
				// localStorage.clear();
				var likes = [];
				var id = $(this).closest("#try").find("#photoid").val();
				var num = Number($(this).closest("#try").find(".fav-count").html());
				var newNum = num + 1;
				if(typeof(Storage) !== "undefined"){
					var all = localStorage.getItem("liked");
					if(all === null){
						likes.push(id);
						localStorage.setItem("liked", JSON.stringify(likes));
						var reply = updatedb(id, 1);
						// alert(reply);
						$(this).closest("#try").find(".fav-count").html(newNum);
						// $(this).closest("#try").find("#its").css("color","#987F28");
					}else{
						likes = JSON.parse(all);
						for(var i = 0; i < likes.length; i++){
							if(likes[i] == id){
								likes.splice(i, 1);
								if(likes.length == 0){
									localStorage.clear();
								}else{
									localStorage.setItem("liked", JSON.stringify(likes));
								}
								var reply = updatedb(id, 0);
								// alert(reply);
								var num = Number($(this).closest("#try").find(".fav-count").html());
								var reduce = num - 1;
								$(this).closest("#try").find(".fav-count").html(reduce);
								// $(this).closest("#try").find("#its").css("color","black");
								break
							}else{
								var flag = i + 1;
								if(flag == likes.length){
									likes.push(id);
									localStorage.setItem("liked", JSON.stringify(likes));
									var reply = updatedb(id, 1);
									// alert(reply);
									var num = Number($(this).closest("#try").find(".fav-count").html());
									var newNum = num + 1;
									$(this).closest("#try").find(".fav-count").html(newNum);
									// $(this).closest("#try").find("#its").css("color","#987F28");
									break
								}
							}
						}
					}
				}else{
					// LOCALSTORAGE HAS A PROBLEM
					alert("not supported");
				}
			});

			function updatedb(id, action){
				$.ajax({
					url: "clickaction.php",
					method: "POST",
					data: {id:id, action: action},
					cache: false,
					success: function(results){
						if(results.replace(/\s/g,'') == "done"){
							return results;
						}else{
							return results;
						}
					},
					error : function (e) {
						alert("Please check your internet connection and try again");
					}
				});
			}
		})

	</script>

</html>