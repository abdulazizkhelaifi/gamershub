<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'php/includes/header.php';?>
    <title>Gamer's Hub</title>
</head>

<body data-spy="scroll" data-target=".fixed-top">

	<!-- Preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!-- end of preloader -->
	
	<?php 
	session_start();
	?>
    

    <?php include 'php/includes/navbar.php';?>


    <!-- Header -->
	<header id="header" class="header">
		<div class="header-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-container">
							<h1>
								A GAMING CONSOLE <br>FOR <span id="js-rotating">GAMERS,
									STUDENTS, DEVELOPERS,EVERYBOBY</span>
							</h1>
							<p class="p-large">The biggest names of the gaming world come
								alive on PS4™,from the superstars of FIFA 19,to the much
								anticipated Red Dead Redemption 2.Buy it today!</p>
							<a class="btn-solid-lg page-scroll"
								href="https://www.amazon.co.uk/PS4-500GB-F-Chassis-Black/dp/B07HGBNWTY/ref=sr_1_2?dchild=1&keywords=ps4&qid=1588534413&sr=8-2"><i
								class="fab fa-amazon fa-sm"></i>AMAZON</a> <a
								class="btn-solid-lg page-scroll"
								href="https://www.playstation.com/en-us/explore/ps4/"><i
								class="fas fa-gamepad "></i> SONY UK</a>
						</div>
					</div>
					<!-- end of col -->
					<div class="col-lg-6">
						<!-- <div class="image-container">
                            <img class="img-fluid" src="images/header-2.png" alt="alternative">
                        </div> end of image-container -->
						<div>
							<img class="img-fluid" src="images/header.png" alt="alternative">

						</div>
					</div>
					<!-- end of col -->
				</div>
				<!-- end of row -->
			</div>
			<!-- end of container -->
		</div>
		<!-- end of header-content -->
	</header>
	<!-- end of header -->
	<!-- end of header -->


	<!-- Testimonials -->
	<div class="slider-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<!-- Card Slider -->
					<div class="slider-container">
						<div class="swiper-container card-slider">
							<div class="swiper-wrapper">

								<!-- Slide -->
								<div class="swiper-slide">
									<div class="card">
										<img class="card-image" src="images/testimonial-1.jpg"
											alt="alternative">
										<div class="card-body">
											<p class="testimonial-text">The PlayStation 4 serves up
												dazzling graphics, runs on a simplified and logical
												interface and boasts a fantastic controller.</p>
											<p class="testimonial-author">Ken Kutaragi -Father of PS</p>
										</div>
									</div>
								</div>
								<!-- end of swiper-slide -->
								<!-- end of slide -->

								<!-- Slide -->
								<div class="swiper-slide">
									<div class="card">
										<img class="card-image" src="images/testimonial-2.jpg"
											alt="alternative">
										<div class="card-body">
											<p class="testimonial-text">It has the upper hand in indie
												games and can stream a constantly growing list of legacy
												titles via PlayStation Now.</p>
											<p class="testimonial-author">Norio Ohga - Former President,
												Sony</p>
										</div>
									</div>
								</div>
								<!-- end of swiper-slide -->
								<!-- end of slide -->

								<!-- Slide -->
								<div class="swiper-slide">
									<div class="card">
										<img class="card-image" src="images/testimonial-3.jpg"
											alt="alternative">
										<div class="card-body">
											<p class="testimonial-text">The PS4 makes it super-easy to
												capture and broadcast gameplay online and generally delivers
												a zippier performance than its direct competition. It also
												doubles as a Blu-ray player and solid media-streaming box.</p>
											<p class="testimonial-author">Masaru Ibuka - Co-founder, Sony</p>
										</div>
									</div>
								</div>
								<!-- end of swiper-slide -->
								<!-- end of slide -->

							</div>
							<!-- end of swiper-wrapper -->

							<!-- Add Arrows -->
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
							<!-- end of add arrows -->

						</div>
						<!-- end of swiper-container -->
					</div>
					<!-- end of slider-container -->
					<!-- end of card slider -->

				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of slider-1 -->
	<!-- end of testimonials -->


	<!-- Features -->
	<div id="features" class="tabs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>FEATURES</h2>
					<div class="p-heading p-large">Play Station 4 was designed by
						keeping the end user in mind and this is the best Play Station
						ever yet!</div>
				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
			<div class="row">

				<!-- Tabs Links -->
				<ul class="nav nav-tabs" id="lenoTabs" role="tablist">
					<li class="nav-item"><a class="nav-link active" id="nav-tab-1"
						data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1"
						aria-selected="true"><i class="fas fa-cog"></i>STORE</a></li>
					<li class="nav-item"><a class="nav-link" id="nav-tab-2"
						data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
						aria-selected="false"><i class="fas fa-binoculars"></i>GENERAL</a>
					</li>

				</ul>
				<!-- end of tabs links -->


				<!-- Tabs Content-->
				<div class="tab-content" id="lenoTabsContent">

					<!-- Tab -->
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel"
						aria-labelledby="tab-1">
						<div class="container">
							<div class="row">

								<!-- Icon Cards Pane -->
								<div class="col-lg-4">
									<div class="card left-pane first">
										<div class="card-body">
											<div class="text-wrapper">
												<h4 class="card-title">PlayStation Music</h4>
												<p>Millions of songs on demand with Spotify. Stream Spotify
													and listen while you play on your PS4™ console to control
													the soundtrack of your game</p>
											</div>
											<div class="card-icon">
												<i class="fas fa-headphones"></i>
											</div>
										</div>
									</div>
									<div class="card left-pane">
										<div class="card-body">
											<div class="text-wrapper">
												<h4 class="card-title">PlayStation Video</h4>
												<p>New release movies without the wait: most movies before,
													or same day as DVD. Plus TV shows everyone’s talking about.</p>
											</div>
											<div class="card-icon">
												<i class="fas fa-video"></i>
											</div>
										</div>
									</div>

								</div>
								<!-- end of icon cards pane -->

								<!-- Image Pane -->
								<div class="col-lg-4">
									<img class="img-fluid" src="images/features-1.png"
										alt="alternative">
								</div>
								<!-- end of image pane -->

								<!-- Icon Cards Pane -->
								<div class="col-lg-4">
									<div class="card right-pane first">
										<div class="card-body">
											<div class="card-icon">
												<i class="fas fa-vr-cardboard"></i>
											</div>
											<div class="text-wrapper">
												<h4 class="card-title">PlayStation Now</h4>
												<p>PS Now delivers unlimited access to a growing library of
													over 800 PS4, PS3, and PS2 games, all with one
													subscription.</p>
											</div>
										</div>
									</div>
									<div class="card right-pane">
										<div class="card-body">
											<div class="card-icon">
												<i class="fas fa-user"></i>
											</div>
											<div class="text-wrapper">
												<h4 class="card-title">PSN Account</h4>
												<p>Set up your user account to connect to PlayStation
													Network and access the PlayStation 4 system’s robust online
													features.</p>
											</div>
										</div>
									</div>

								</div>
								<!-- end of icon cards pane -->

							</div>
							<!-- end of row -->
						</div>
						<!-- end of container -->
					</div>
					<!-- end of tab-pane -->
					<!-- end of tab -->

					<!-- Tab -->
					<div class="tab-pane fade" id="tab-2" role="tabpanel"
						aria-labelledby="tab-2">
						<div class="container">
							<div class="row">

								<!-- Image Pane -->
								<div class="col-md-4">
									<img class="img-fluid" src="images/features-2.png"
										alt="alternative">
								</div>
								<!-- end of image pane -->

								<!-- Text And Icon Cards Area -->
								<div class="col-md-8">
									<div class="text-area">
										<h3>The best gaming console in the market</h3>
										<p>Sony’s PlayStation 4 has been on the market for over four
											years now and in that time, it’s managed to carve out a
											reputation as the number one gaming console of its
											generation.</p>
									</div>
									<!-- end of text-area -->

									<div class="icon-cards-area">
										<div class="card">
											<div class="card-icon">
												<i class="fas fa-clock"></i>
											</div>
											<div class="card-body">
												<h4 class="card-title">Play Time Management</h4>
												<p>Alright, so parental features don’t exactly scream “cool”
													but for any PS4 owners with young gamers, the console’s
													ability to monitor and manage a child’s playtime really is
													nifty</p>
											</div>
										</div>
										<div class="card">
											<div class="card-icon">
												<i class="fas fa-plug"></i>
											</div>
											<div class="card-body">
												<h4 class="card-title">Appear Offline</h4>
												<p>Having consoles connected to the internet at all times is
													both a blessing and a curse for a multitude of reasons.</p>
											</div>
										</div>
										<div class="card">
											<div class="card-icon">
												<i class="fab fa-spotify fa-5x"></i>
											</div>
											<div class="card-body">
												<h4 class="card-title">Spotify While Gaming</h4>
												<p>With the PS4’s Spotify app, you can make custom
													soundtracks to your heart’s content and the app will still
													run while you’re playing a game</p>
											</div>
										</div>
										<div class="card">
											<div class="card-icon">
												<i class="fas fa-hdd"></i>
											</div>
											<div class="card-body">
												<h4 class="card-title">External Hard Drive Support</h4>
												<p>Now we can connect our external hard drive to our
													playstation</p>
											</div>
										</div>
									</div>
									<!-- end of icon cards area -->
								</div>
								<!-- end of col-md-8 -->
								<!-- end of text and icon cards area -->

							</div>
							<!-- end of row -->
						</div>
						<!-- end of container -->
					</div>
					<!-- end of tab-pane -->
					<!-- end of tab -->

					<!-- Tab -->
					<div class="tab-pane fade" id="tab-3" role="tabpanel"
						aria-labelledby="tab-3"></div>
					<div class="container">
						<div class="row"></div>
						<!-- end of row -->
					</div>
					<!-- end of container -->
				</div>
				<!-- end of tab-pane -->
				<!-- end of tab -->

			</div>
			<!-- end of tab-content -->
			<!-- end of tabs content -->

		</div>
		<!-- end of row -->
	</div>
	<!-- end of container -->
	<!-- </div> -->
	<!-- end of tabs -->
	<!-- end of features -->
	
	<!-- Details 1 -->
	<div id="details" class="basic-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<a href = "/gamingWebsite-php/website/web/php/game_pages/games.php?id=1"><img class="img-fluid" src="/gamingWebsite-php/website/web/images/dbz.jpg" alt="alternative"></a>
				</div>
				<!-- end of col -->
				<div class="col-lg-6">
					<div class="text-container">
						<h3>DragonBall Z: Kakarot</h3>
						<p>Dragon Ball Z: Kakarot frequently powers up to Super Saiyan levels to deliver awe-inspiring battles between godly beings who can topple mountains with atomic blasts and swing fiery fists to knock each other into the stratosphere. However, when the fight is over and one of the warriors is sent to the afterlife, Kakarot struggles to find a pulse within its sprawling open worlds.</p>
						
					</div>
					<!-- end of text-container -->
				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of basic-2 -->
	<!-- end of details 1 -->


	<!-- Details 2 -->
	<div class="basic-3">
		<div class="second">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-container">
							<h3>Predator: Hunting Ground</h3>
							<p>Predator: Hunting Grounds had potential for greatness. By all accounts we were finally about to receive a solid Predator game on par with Creative Assembly’s Alien: Isolation — a rollicking survival horror multiplayer experience unlike any other.</p>
							
						</div>
						<!-- end of text-container -->
					</div>
					<!-- end of col -->
					<div class="col-lg-6">
						<a href = "/gamingWebsite-php/website/web/php/game_pages/games.php?id=4"><img class="img-fluid" src="/gamingWebsite-php/website/web/images/pre.jpg"
							alt="alternative"></a>
					</div>
					<!-- end of col -->
				</div>
				<!-- end of row -->
			</div>
			<!-- end of container -->
		</div>
		<!-- end of second -->
	</div>
	
	<!-- Details 3 -->
	<div id="details" class="basic-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<a href="/gamingWebsite-php/website/web/php/game_pages/games.php?id=5"><img class="img-fluid" src="/gamingWebsite-php/website/web/images/fall.jpeg" alt="alternative"></a>
				</div>
				<!-- end of col -->
				<div class="col-lg-6">
					<div class="text-container">
						<h3>Fallout-76</h3>
						<p>Fallout 76 has improved with the introduction of Wastelanders. The region of West Virginia now feels more alive with an increased populace, deeper quests and a greater focus on your place in its living, breathing world.  But many of its problems remain, and haven’t been improved with such a major expansion. Far few players occupy each session, making multiplayer feel like a lazy afterthought instead of something that defines the experience. </p>
						
					</div>
					<!-- end of text-container -->
				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of basic-2 -->
	<!-- end of details 1 -->
	
	<!-- Video -->
	<div id="preview" class="basic-1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Only on Play Station</h2>
					<div class="p-heading p-large">You've come to the right place.
						Exclusive games take you on incredible journeys, from critically
						acclaimed indies to award-winning AAA hits.</div>
				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
			<div class="row">
				<div class="col-lg-12">

					<!-- Video Preview -->
					<div class="image-container">
						<div class="video-wrapper">
							<a class="popup-youtube"
								href="https://www.youtube.com/watch?v=Cz8wCc36GDA"
								data-effect="fadeIn"> <img class="img-fluid"
								src="images/video-frame.png" alt="alternative"> <span
								class="video-play-button"> <span></span>
							</span>
							</a>
						</div>
						<!-- end of video-wrapper -->
					</div>
					<!-- end of image-container -->
					<!-- end of video preview -->

				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of basic-1 -->
	<!-- end of video -->


	<!-- Details 1 -->
	<div id="details" class="basic-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img class="img-fluid" src="images/details-1.png" alt="alternative">
				</div>
				<!-- end of col -->
				<div class="col-lg-6">
					<div class="text-container">
						<h3>The Console</h3>
						<p>The PS4 got most of the details in this department right by
							designing the most attractive piece of plastic.</p>
						
					</div>
					<!-- end of text-container -->
				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of basic-2 -->
	<!-- end of details 1 -->


	<!-- Details 2 -->
	<div class="basic-3">
		<div class="second">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="text-container">
							<h3>Dual Shock 4</h3>
							<p>It’s a positive leap away from anything they’ve made before.
								The controller is slightly larger, has a great weight to it and
								includes some features which will benefit many gamers.</p>
							
						</div>
						<!-- end of text-container -->
					</div>
					<!-- end of col -->
					<div class="col-lg-6">
						<img class="img-fluid" src="images/details-2.png"
							alt="alternative">
					</div>
					<!-- end of col -->
				</div>
				<!-- end of row -->
			</div>
			<!-- end of container -->
		</div>
		<!-- end of second -->
	</div>
	<!-- end of basic-3 -->
	<!-- end of details 2 -->


	
	<!-- Statistics -->
	<div class="counter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<!-- Counter -->
					<div id="counter">
						<div class="cell">
							<div class="counter-value number-count" data-count="106">106</div>
							<p class="counter-info">Total Unit Sold(millions)</p>
						</div>
						<div class="cell">
							<div class="counter-value number-count" data-count="94">94</div>
							<p class="counter-info">Active Users(millions)</p>
						</div>
						<div class="cell">
							<div class="counter-value number-count" data-count="1893">1893</div>
							<p class="counter-info">Games Available</p>
						</div>
						<div class="cell">
							<div class="counter-value number-count" data-count="49">49</div>
							<p class="counter-info">Genre of Games</p>
						</div>
					</div>
					<!-- end of counter -->

				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of counter -->
	<!-- end of statistics -->


	<!-- Contact -->
	<div id="contact" class="form">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>CONTACT US</h2>
					<ul class="list-unstyled li-space-lg">
						<li class="address">Don't hesitate to give us a call or just use
							the contact form below</li>
						<li><i class="fas fa-map-marker-alt"></i>The Business Centre,61
							Wellfield Road,Roath,Cardiff,CF24 3DG</li>
						<li><i class="fas fa-phone"></i><a class="blue"
							href="tel:029 9496 0019">029 9496 0019</a></li>
						<li><i class="fas fa-envelope"></i><a class="blue"
							href="mailto:office@gamershub.com">office@gamershub.com</a></li>
					</ul>
				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
			<div class="row">
				<div class="col-lg-6 offset-lg-3">

					<!-- Contact Form -->
					<form id="contactForm" data-toggle="validator" data-focus="false">
						<div class="form-group">
							<input type="text" class="form-control-input" id="cname" required>
							<label class="label-control" for="cname">Name</label>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<input type="email" class="form-control-input" id="cemail"
								required> <label class="label-control" for="cemail">Email</label>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<textarea class="form-control-textarea" id="cmessage" required></textarea>
							<label class="label-control" for="cmessage">Your message</label>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group checkbox">
							<input type="checkbox" id="cterms" value="Agreed-to-Terms"
								required>I have read and agree to Leno's stated conditions in <a
								href="privacy-policy.html">Privacy Policy</a> and <a
								href="terms-conditions.html">Terms Conditions</a>
							<div class="help-block with-errors"></div>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control-submit-button">SUBMIT
								MESSAGE</button>
						</div>
						<div class="form-message">
							<div id="cmsgSubmit" class="h3 text-center hidden"></div>
						</div>
					</form>
					<!-- end of contact form -->

				</div>
				<!-- end of col -->
			</div>
			<!-- end of row -->
		</div>
		<!-- end of container -->
	</div>
	<!-- end of form -->
	<!-- end of contact -->


    <?php include 'php/includes/footer.php';?>
</body>
</html>

<!-- ref :https://onepagelove.com/leno -->
