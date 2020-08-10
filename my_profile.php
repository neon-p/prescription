<?php
 include("session.php");
?>
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
<script src="js/jquery-slim.min.js"></script>
<script src="js/popper.min.js"></script>
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
                                        <li>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="patient_list_for_doctor.php">View All Patient</a>
                                                    <a class="dropdown-item" href="medicine_list_for_doctor.php">View All Medicine</a>
                                                    <a class="dropdown-item" href="test_list_for_doctor.php">View All Test</a>
                                                    <a class="dropdown-item" href="prescription.php">Prescription</a>
                                                </div>
                                            </div>
                                            </li>
                                            <li class="active"><a href="my_profile.php">My Profile</a></li>
                                            <li><a href="doctor_panel.php">Doctor Panel</a></li>
                                            <li><a href="signout.php">Logout</a></li>
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
                <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
                <nav class="menu_nav">
                    <ul class="menu_mm">
                    <li>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="patient_list_for_doctor.php">View All Patient</a>
                                            <a class="dropdown-item" href="medicine_list_for_doctor.php">View All Medicine</a>
                                            <a class="dropdown-item" href="test_list_for_doctor.php">View All Test</a>
                                            <a class="dropdown-item" href="prescription.php">Prescription</a>
                                        </div>
                                    </div>
                                    </li>
                                    <li class="menu_mm"><a href="my_profile.php">My Profile</a></li>
                                    <li class="menu_mm"><a href="doctor_panel.php#About">Doctor Panel</a></li>
                    </ul>
                </nav>
            </div>
        
        <div class="team" id="About">
                <div class="team_background parallax-window" data-parallax="scroll" data-image-src="image/team_background.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title_container text-center">
                                <h2 class="section_title">Prescription</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row team_row" style="margin-left: 16%">
                        <div class="col-md-10 col-sm-4 team_col">
                            <div class="team_item">
                                <div class="team_body">
                                    <form class="form" method="post" action="pdf.php" style="margin-left: 10%">
                                        <div class="row" style="padding-right: 10%">
                                        <?php
                                            include("dbconnect.php");
                                            $email=$_SESSION['login_d'];
                                            $query="SELECT * FROM `doctor` WHERE doctor_email='$email'";
                                            $sql=mysqli_query($con,$query);
                                            while($row=mysqli_fetch_array($sql)){
                                                $image_path="uploads/";
                                                $doctor_name=$row['doctor_name'];
                                                $doctor_email=$row['doctor_email'];
                                                $doctor_regno=$row['doctor_regno'];
                                                $doctor_specialized=$row['doctor_specialized'];
                                                $doctor_degree=$row['doctor_degree'];
                                                $doctor_chamber=$row['doctor_chamber'];
                                                $doctor_start_time=$row['doctor_start_time'];
                                                $doctor_finish_time=$row['doctor_finish_time'];
                                                $doctor_start_day=$row['doctor_start_day'];
                                                $doctor_finish_day=$row['doctor_finish_day'];
                                                $doctor_image=$row['doctor_image'];
                                        ?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img src="<?php echo $image_path.$doctor_image; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Dr.<?php echo $doctor_name; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $doctor_email; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $doctor_regno; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $doctor_specialized; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $doctor_degree; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $doctor_chamber; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $doctor_start_time, "-", $doctor_finish_time; ?></label>
                                            </div>
                                            <div class="form-group">
                                                <label><?php echo $doctor_start_day, "-", $doctor_finish_day; ?></label>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="courses">
                <div class="section_background parallax-window" data-parallax="scroll" data-image-src="image/courses_background.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                                    
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
                                                <p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
                                            </div>
                                            <div class="footer_social">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                </ul>
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
                                                    <li>Phone:  111111111111</li>
                                                    <li>Ssssssssssssssssssssssss</li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
        
                                    <div class="col-lg-4 footer_col">
                            
                                        <!-- Footer links -->
                                        <div class="footer_section footer_links">
                                            <div class="footer_title">Contact Us</div>
                                            <div class="footer_links_container">
                                                <ul>
                                                    <li><a href="home.php">Home</a></li>
                                                    <li><a href="home.php#About">About</a></li>
                                                    <li><a href="home.php#Contact">Contact</a></li>
                                                </ul>
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
