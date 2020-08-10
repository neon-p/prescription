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
                        <li class="menu_mm"><a href="doctor_panel.php">Doctor Panel</a></li>
                    </ul>
                </nav>
            </div>
        
        <div class="team" id="About">
                <div class="team_background parallax-window" data-parallax="scroll" data-image-src="image/team_background.jpg" data-speed="0.8"></div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title_container text-center">
                                <h2 class="section_title">Medicine List</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row team_row" style="margin-left: 8%">
                        <div class="col-md-12 col-sm-4 team_col">
                            <div class="team_item">
                                <div class="team_body" style="padding-left:180px;">
                                <?php  
                                    include("dbconnect.php");
                                    $limit = 20;  
                                    if (isset($_GET["page"])){
                                        $page  = $_GET["page"]; 
                                    }else{
                                        $page=1;
                                    }  
                                    $start_from = ($page-1) * $limit;  
                                    
                                    $sql = "SELECT * FROM medicine LIMIT $start_from, $limit";  
                                    $rs_result = mysqli_query($con, $sql);  
                                    ?>  
                                    <table id="example"  class='display'>
                                        <thead class="thead-dark">
                                            <tr>
                                                <th style="padding-left:50px;">Medicine Name</th>
                                                <th style="padding-left:50px;">Medicine Form</th>
                                                <th style="padding-left:50px;">Medicine Strangth</th>
                                                <th style="padding-left:50px;">Medicine Generic</th>
                                            </tr>
                                        </thead> 
                                        <tbody>  
                                    <?php  
                                    while ($row = mysqli_fetch_array($rs_result)){
                                        $medicine_id=$row['medicine_id'];
                                    ?>  
                                        <tr>
                                            <td style="height:50px;"><h5><?php echo $row['medicine_name']; ?></h5></td>
                                            <td style="height:50px;"><h5><?php echo $row['medicine_type']; ?></h5></td>
                                            <td style="height:50px;"><h5><?php echo $row['weight']; ?></h5></td>
                                            <td style="height:50px;"><h5><?php echo $row['genoric_name']; ?></h5></td>
                                        <?php
                                            }
                                        ?>
                                        </tbody>  
                                    </table>  
                                </div>
                                <?php  
                                    $sql = "SELECT COUNT(medicine_id) as id FROM medicine";  
                                    $rs_result = mysqli_query($con, $sql);  
                                    $row = mysqli_fetch_array($rs_result);  
                                    $total_records = $row['id'];  
                                    $total_pages = ceil($total_records / $limit);  
                                    $pagLink = "<br><div class='pagination' style='padding-left:70px;'";  
                                    for ($i=1; $i<=$total_pages; $i++) {  
                                                $pagLink .= "<a href='medicine_list_for_doctor.php?page=".$i."'><h5>&nbsp&nbsp&nbsp".$i."</h5></a>";  
                                    };  
                                    echo $pagLink . "</div>";  
                                ?>
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
