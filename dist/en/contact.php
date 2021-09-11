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
	<div class="text-center bg-overlay-dark-4" style="background:url(../assets/images/bg/05.jpg) no-repeat; background-size: cover; background-position: center center;">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h1 style="padding: 2rem;" class="font-weight-bold display-4 display-md-1 mb-2 mb-md-n4">Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- =======================
	Banner innerpage -->

	<!-- =======================
	contact -->
	<section class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 mx-auto">
					<div id="contact-title" class="text-center">
						<h2>How can we help you?</h2>
						<p>Write us an e-mail or call us.</p>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-3 mb-5">
					<div class="glass contact-box h-100 bg-overlay-dark-7 px-3 py-4">
						<!-- Phone -->
						<div class="contact-info all-text-white">
							<div class="contact-box-icon"><i class="ti-map-alt"></i></div>
							<h5 class="mb-2"> Headquaters, warehouse: </h5>
							<p>  ul. Księżycowa 9, 05-830 Nadarzyn</p>
						</div>
						<!-- Email -->
						<div class="contact-info all-text-white">
							<div class="contact-box-icon"><i class="ti-email"></i></div>
							<h5 class="mb-2">E-mail</h5>
							<p>expostyl@expostyl.com</p>
						</div>
						<!-- Phone -->
						<div class="contact-info all-text-white">
							<div class="contact-box-icon"><i class="ti-panel"></i></div>
							<h5 class="mb-2">Phone</h5>
							<p>698 946 997</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 mb-5">
					<iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2450.59537950206!2d20.815607516110738!3d52.
						10529507973778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471936fa5ee25d4b%3A0xdc72004b114746d6!
						2sKsi%C4%99%C5%BCycowa%209%2C%2005-830%20Nadarzyn!5e0!3m2!1spl!2spl!4v1629481176588!5m2!1spl!2spl" 
						width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<!-- contact form -->
				<div class="col-md-6">
					<div class="h-100">
					<h3>Will you be exhibiting at a trade fair? </h3>
						<p> Contact us to check our offer for a construction of a stand.  </p>
						<form class="contact-form" id="contact-form" name="contactform" action="../assets/include/contact-action.php" method="post">
							<!-- Start form message -->
							<div class="row">
								<div class="col-12">
									<div class="alert alert-success contact-msg" style="display: none" role="alert">
										Message was sent 
									</div>
								</div>
							</div>
							<!-- End form message -->->

							<!-- Start main form -->
							<div class="row">
								<div class="col-md-6">
									<!-- name -->
									<span class="form-group">
										<input id="con-name" name="name" type="text" class="form-control" placeholder="Sender">
									</span>
								</div>
								<div class="col-md-6">
									<!-- email -->
									<span class="form-group">
										<input id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
									</span>
								</div>
								<div class="col-md-12">
									<!-- Subject -->
									<span class="form-group">
										<input id="con-subject" name="subject" type="text" class="form-control" placeholder="Subject">
									</span>
								</div>
								<div class="col-md-12">
									<!-- Message -->
									<span class="form-group">
										<textarea id="con-message" name="message" cols="40" rows="6" class="form-control" placeholder="Message"></textarea>
									</span>
								</div>
								<!-- submit button -->
								<div class="col-md-12 text-center"><button class="btn btn-dark btn-block">Send message</button></div>
							</div>
							<!-- End main form -->
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =======================
	contact -->

	<!-- =======================
	footer  -->
    <?php include 'footer.php';?>
	<!-- =======================
	footer  -->

	<div> <a href="#" class="back-top btn btn-grad"><i class="ti-angle-up"></i></a> </div>

	<?php include 'scripts.php';?>

</body>
</html>