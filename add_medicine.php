<?php
 include("session_admin.php");
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
                                                        <a class="dropdown-item" href="patient_list_for_admin.php">All Patient</a>
                                                    <a class="dropdown-item" href="doctor_list_for_admin.php">Doctors List</a>
                                                    <a class="dropdown-item" href="medicine_list_for_admin.php">Medicine List</a>
                                                    <a class="dropdown-item" href="test_list_for_admin.php">Test List</a>
                                                </div>
                                            </div>
                                            </li>
                                            <li class="active"><a href="admin_home.php">Admin Panel</a></li>
                                            <li><a href="feedback_list_for_admin.php">FeedBack</a></li>
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
                                            <a class="dropdown-item" href="patient_list_for_admin.php">All Patient</a>
                                            <a class="dropdown-item" href="doctor_list_for_admin.php">Doctors List</a>
                                            <a class="dropdown-item" href="medicine_list_for_admin.php">Medicine List</a>
                                            <a class="dropdown-item" href="test_list_for_admin.php">Test List</a>
                                        </div>
                                    </div>
                                    </li>
                        <li class="menu_mm"><a href="admin_home.php">Admin Panel</a></li>
                        <li class="menu_mm"><a href="feedback_list_for_admin.php">FeedBack</a></li>
                    </ul>
                </nav>
            </div>
        
        <div class="team" id="About">
                <div class="team_background parallax-window" data-parallax="scroll" data-image-src="image/team_background.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title_container text-center">
                                <h2 class="section_title">Medicine</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row team_row" style="margin-left: 16%">
                        <div class="col-md-10 col-sm-4 team_col">
                            <div class="team_item">
                                <div class="team_body">
                                     <form method="post" action="add_medicine_b.php">
                                     <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Generic Name">Generic Name</label>
                                                    <input type="text" class="form-control" name="generic_name" placeholder="Enter Generic Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Medicine Name">Medicine Name</label>
                                                    <input type="text" class="form-control" name="medicine_name" placeholder="Enter Medicine Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Medicine Weight">Medicine Weight</label>
                                                    <input type="text" class="form-control" name="medicine_weight" placeholder="Enter Medicine Weight">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <label for="Medicine Form">Medicine Form</label>
                                                <br>											
                                                    <select  class="btn btn-primary" id="medicine_form" name="medicine_form">
                                                        <option value="Tablet">Tablet</option>
                                                        <option value="Syrup">Syrup</option>
                                                        <option value="Eye Drop">Eye Drop</option>
                                                        <option value="Capsule">Capsule</option>
                                                        <option value="Powder for Suspension">Powder for Suspension</option>
                                                        <option value="Pedatric Drop">Pedatric Drop</option>
                                                        <option value="Chewable Tablet">Chewable Tablet</option>
                                                        <option value="Ear Drop">Ear Drop</option>
                                                        <option value="Eye Ointment">Eye Ointment</option>
                                                        <option value="Oral Suspension">Oral Suspension</option>
                                                        <option value="Topical Solution">Topical Solution</option>
                                                        <option value="Inhaler">Inhaler</option>
                                                        <option value="Powder for Injection">Powder for Injection</option>
                                                        <option value="Cream">Cream</option>
                                                        <option value="Nasal Spray">Nasal Spray</option>
                                                        <option value="Ointment">Ointment</option>
                                                        <option value="IM/IV Injection">IM/IV Injection</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 55.8%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <button type="submit" id="save" name="save" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>   
                                </div>
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
                                                    <li><a href="#About">About</a></li>
                                                    <li><a href="#Contact">Contact</a></li>
                                                    <li><a href="#">FAQs</a></li>
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
