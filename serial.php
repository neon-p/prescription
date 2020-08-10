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
<script type="text/javascript">
    function checkingEmail()
    {
        var email= document.getElementById("email").value;
            $.ajax({
            type: 'post',
            url: 'checkEmail.php',
            data: {
                email:email},
                success: function (html) {
                    $('#show').html(html);
                }
            });
    }
</script>
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
                                            <li class="active"><a href="home.php">Home</a></li>
                                            <li><a href="home.php#About">About</a></li>
                                            <li><a href="home.php#Contact">Contact</a></li>
                                            <li><a href="serial.php">Serial</a></li>
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
                        <li class="menu_mm"><a href="home.php">Home</a></li>
                        <li class="menu_mm"><a href="home.php#About">About</a></li>
                        <li class="menu_mm"><a href="home.php#Contact">Contact</a></li>
                        <li class="menu_mm"><a href="serial.php">Serial</a></li>
                    </ul>
                </nav>
            </div>
        
        <div class="team" id="About">
                <div class="team_background parallax-window" data-parallax="scroll" data-image-src="image/team_background.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title_container text-center">
                                <h2 class="section_title">Serial Form</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row team_row" style="margin-left: 16%">
                        <div class="col-md-10 col-sm-4 team_col">
                            <div class="team_item">
                                <div class="team_body">
                                    <form action="registration_for_serial.php" method="post">
                                        <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Name">Name</label>
                                                    <input type="text" class="form-control" required name="name" placeholder="Enter Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <span id='show'></span>
                                                    <input type="email" class="form-control" required id="email" name="email" placeholder="Enter Email" onchange="checkingEmail();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Sex">Sex</label><br>
                                                    <select class="btn btn-primary" required name="sex">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Feamle</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Age">Age</label>
                                                    <input type="number" required class="form-control" name="age" placeholder="Age">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Weight">Weight</label>
                                                    <input type="number" required class="form-control" name="weight" placeholder="Weight">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 25%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="Contact No">Contact No</label>
                                                    <input type="text" required class="form-control" name="contact_no" placeholder="Contact No">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-left: 55.8%">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <button type="submit" id="apply" style="margin-right:7%;" name="apply" class="btn btn-success" >Apply</button>
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
                                            <div class="footer_title">Feedback</div>
                                            <div class="footer_links_container">
                                                <textarea rows="4" cols="50"></textarea>
                                                <button class="btn btn-primary" style="margin-left:110%;">Send</button>
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
