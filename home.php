<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Home Rent">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<div class="super_container">

	<!-- Header -->

	<header class="header">	

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="home.php">
									<div class="logo_text">Doctors<span>Point</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#About">About</a></li>
									<li><a href="#Contact">Contact</a></li>
									<li><a href="serial.php">Serial</a></li>
									<li><a href="add_doctor.php">Sign Up</a></li>
									<li>
										<!-- Trigger the modal with a button -->
									  <button type="button" class="btn btn-outline-primary" id="myBtn" data-toggle="modal" data-target="#myModal">Log In</button>
								  </li>
								</ul>

								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="home.php">Home</a></li>
				<li class="menu_mm"><a href="#About">About</a></li>
				<li class="menu_mm"><a href="#Contact">Contact</a></li>
				<li class="menu_mm"><a href="serial.php">Serial</a></li>
				<li class="menu_mm"><a href="add_doctor.php">Sign Up</a></li>
				<li>
					<!-- Trigger the modal with a button -->
				  <button type="button" class="btn btn-outline-primary" id="myBtn" data-toggle="modal" data-target="#myModal">Log In</button>
			  </li>
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/m1.jpg)"></div>
				</div>


				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/m2.jpg)"></div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/m3.jpg)"></div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>
	<!--Model-->
	<div class="container">

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
		  <div class="modal-dialog">
		  
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header" style="padding:35px 50px; background-color:black;">
				<button type="button" class="close" data-dismiss="modal">&times </button>
			  </div>
			  <div class="modal-body" style="padding:40px 50px; background-color:#b3f5f1;">
				<form role="form" method="post" action="doctor_login.php">
				  <div class="form-group">
					<label for="email"><span class="glyphicon glyphicon-user"></span>Email</label>
					<input type="text" required class="form-control" name="email" placeholder="Enter email">
				  </div>
				  <div class="form-group">
					<label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
					<input type="password" required class="form-control" name="password" placeholder="Enter password">
				  </div>
					<button type="submit" class="btn btn-success" name="login">Login</button>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" style="margin-left:5%;margin-right:auto;display:block;margin-top:0.5%;margin-bottom:auto;"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					<div class="text">
						  <a href="forgetpass.php">Forgot Password?</a></p>
					</div>
			  </div>
			</div>
		  </div>
		</div> 
	  </div>  
	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To Doctors Point</h2>
						<div class="section_subtitle"><p>Now a day’s everything is going to be digital and dynamic. Everyone wants to handle their functionality through software system. That’s why we are going to make a website for the medical field.</p></div>
					</div>
				</div>
			</div>
			<div class="row features_row">
						
				
	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="image/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Available Doctors</h2>
						<div class="section_subtitle"><p>Now a day’s everything is going to be digital and dynamic. Everyone wants to handle their functionality through software system. That’s why we are going to make a website for the medical field. </p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
			<?php
				include("dbconnect.php");
				$string="approved";
				$query="SELECT doctor_name,	doctor_specialized, doctor_start_time, doctor_finish_time, doctor_chamber FROM `doctor` WHERE doctor_status='$string' LIMIT 3";
				$sql= mysqli_query($con, $query);
				while($row=mysqli_fetch_array($sql)){
			?>
				
				<!-- Course -->
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_body">
							<h3 class="course_title"><?php echo $row['doctor_name']; ?></h3>
							<div class="course_text">
								<p>
								<?php
									echo '<u>Specialized</u>: <b>'.$row['doctor_specialized'].'</b><br>';
									echo '<u>Available Time</u>: <b>'.$row['doctor_start_time'].'-'.$row['doctor_finish_time'].'</b>';
								?>
								</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<span>Chamber: <b><?php echo $row['doctor_chamber'];?></b></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="doctors_list_for_users.php">Doctor's List</a></div>
				</div>
			</div>
		</div>
	</div>


	<div class="team" id="About">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="image/team_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">About Us</h2>
					</div>
				</div>
			</div>
			<div class="row team_row">
				<div class="col-lg-12 col-md-6 team_col">
					<div class="team_item">
						<div class="team_body">
							<div class="team_subtitle">Now a day’s everything is going to be digital and dynamic. Everyone wants to handle their functionality through software system. That’s why we are going to make a website for the medical field.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(image/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-4 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text"><span>Prescription</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Now a day’s everything is going to be digital and dynamic. Everyone wants to handle their functionality through software system.</p>
									</div>
									
								</div>
								
							</div>

							<div class="col-lg-4 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title" id="Contact">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: abcd@gmail.com</li>
											<li>Phone:  1111111</li>
											<li>Ssssssssssss</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-4 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title"><a href="user_feedback.php">Feedback</a></div>
									<div class="footer_links_container">
										<textarea rows="4" cols="37"></textarea>
										<button class="btn btn-primary" style="margin-left:78%;">Send</button>
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>