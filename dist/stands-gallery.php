<?php include 'head.php';?>

<body>
	<div class="preloader">
		<img src="../assets/images/preloader.svg" alt="Pre-loader">
	</div>

	<!-- =======================
	header Start-->
	<?php include 'header.php';?>

	<!-- =======================
	header End-->


	<!-- =======================
	Banner innerpage -->
	<div class="innerpage-banner center py-7" style="background:url(../assets/images/IMG_20170323_111008.jpg) no-repeat; background-size:cover; background-position: center center;">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h1 class="innerpage-title">Galerie naszych realizacji</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="index.php"><i class="ti-home"></i> Strona główna</a></li>
							<li class="breadcrumb-item">Galerie</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- =======================
	Banner innerpage -->

	<!-- =======================
	Portfolio -->
	<?php include 'gallery.php';?>
	<!-- =======================
	Portfolio -->

	<!-- =======================
	call to action-->
	<!-- <section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9 text-center text-md-left align-self-center">
					<h4 class="m-0">Start a new project with us and start adventure together!</h4>
				</div>
				<div class="col-md-3 text-center text-md-right mt-3 mt-md-0 align-self-center ">
					<a class="btn btn-outline-light mb-0" href="#">Let's Discuss </a>
				</div>
			</div>
		</div>
	</section> -->
	<!-- =======================
	call to action-->


	<!-- =======================
	footer  -->
	<?php include 'footer.php';?>
	<!-- =======================
	footer  -->

	<div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>

	<?php include 'scripts.php';?>

</body>
</html>	