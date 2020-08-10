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
<script src="js/jquery.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script type="text/javascript">
    function get_pdf()
    {
      var serial_no= document.getElementById("serial_no").value;
      $.ajax({
        type: 'post',
        url: 'pdf_view.php',
        data: {
          serial_no:serial_no },
          success: function (html) {
            $('#pasthistory').html(html);
          },
        });
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var maxField = 20;
        var wrapper = $('.panel-body');
        var add_button=$(".addButton");
        var fieldHTML = '<br><div><div class="row"><div class="col-md-6"><div class="form-group "><select class="form-control" required="required" name="medicine_name[]" id="medicine_name"><option>Select Medicine</option><?php
            include("dbconnect.php");
            $query = "SELECT * FROM `medicine`";
            $stmt = mysqli_query($con, $query);
            while ($row = mysqli_fetch_array($stmt))
            {
            echo '<option value="'.$row['medicine_name'].''.$row['weight'].'">'.$row['medicine_name'].''.$row['weight'].'</option>';
            }
        ?></select></div></div></div><div class="row"><div class="col-sm-6"><div class="form-group "><label for="Morning Time"><h5>How many pills take in Night</h5></label><select class="form-control" required name="morning_number[]" id="morning_number[]"><option>1</option><option>2</option><option>3</option><option>No</option></select></div></div><div class="col-sm-6"><div class="form-group "><label for="Noon Time"><h5>How many pills take in Noon</h5></label><select class="form-control" required name="noon_number[]" id="noon_number[]"><option>1</option><option>2</option><option>3</option><option>No</option></select></div></div><div class="col-sm-6"><div class="form-group "><label for="Night Time"><h5>How many pills take in Night</h5></label><select class="form-control" required name="night_number[]" id="night_number[]"><option>1</option><option>2</option><option>3</option><option>No</option></select></div></div></div><div class="remove_button"><button class="btn btn-primary">Remove</button></div></div>'; //New input field html 
        var x = 1;        
        $(add_button).click(function(e){
            e.preventDefault();
            if(x < maxField){ 
                x++;
                $(wrapper).append(fieldHTML);
            }
        });
        
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });
    });
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                        <label for="Disease"><h5>Disease Name</h5></label>
                                                        <input class="form-control" name="disease_name" type="text">
                                                </div>
                                            </div>	
                                        <div class="row"> 
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Serial No"><h5>Serial No</h5></label>
                                                    <input type="text" class="form-control" name="serial_no" id="serial_no" onchange="get_pdf()">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Patient Name"><h5>Patient Name</h5></label>
                                                    <input type="text" class="form-control" name="patient_name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Age"><h5>Age</h5></label>
                                                    <input type="number" class="form-control" name="age">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Blood Group"><h5>Blood Group</h5></label>
                                                    <select class="form-control" required="required" name="blood_group">
                                                        <option value="">Select Blood Group</option>
                                                        <option>A+</option>
                                                        <option>AB+</option>
                                                        <option>B+</option>
                                                        <option>O+</option>
                                                        <option>A-</option>
                                                        <option>AB-</option>
                                                        <option>B-</option>
                                                        <option>O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Blood Pressure"><h5>Blood Pressure</h5></label>
                                                    <input type="text" class="form-control" name="blood_pressure">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Gender"><h5>Gender</h5></label>
                                                    <select class="form-control" required="required" name="gender">
                                                        <option value="Gender" style="">Select Sex</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Chief Complaints"><h5>Chief Complaints</h5></label>
                                                    <input type="text" class="form-control" name="chief_complaints">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Examination Finding"><h5>Examination Finding</h5></label>
                                                    <input type="text" class="form-control" name="examination_finding">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Provisonal Diagonosis"><h5>Provisonal Diagonosis</h5></label>
                                                    <input type="text" class="form-control" name="provisonal_diagonsis">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Past History and Medical Info"><h5>Past History and Medical Info</h5></label>
                                                    <div id="pasthistory">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label for="Additional Advice"><h5>Additional Advice</h5></label>
                                                    <input type="text" class="form-control" name="additional_advice">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <label for="Additional Advice"><h5>Test</h5></label>
                                                <div class="form-group ">
                                                    <textarea rows="4" cols="50" name="test"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        

                                <div class="row">                            
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group ">
                                                    <select class="form-control" required="required" name="medicine_name[]" id="medicine_name">
                                                        <option>Select Medicine</option>
                                                        <?php
                                                            include("dbconnect.php");
                                                            $query = "SELECT * FROM `medicine`";
                                                            $stmt = mysqli_query($con, $query);
                                                            while ($row = mysqli_fetch_array($stmt))
                                                            {
                                                                echo '<option value="'.$row['medicine_name'].''.$row['weight'].'">'.$row['medicine_name'].''.$row['weight'].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group ">
                                                <label for="Morning Time"><h5>How many pills take Morning</h5></label>
                                                <select class="form-control" required name="morning_number[]" id="morning_number[]">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>No</option>
                                                </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group ">
                                                <label for="Noon Time"><h5>How many pills take in Noon</h5></label>
                                                <select class="form-control" required name="noon_number[]" id="noon_number[]">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>No</option>
                                                </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group ">
                                                <label for="Night Time"><h5>How many pills take in Night</h5></label>
                                                <select class="form-control" required name="night_number[]" id="night_number[]">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>No</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    <div>
                                </div>
                                </div><!--end Rx-->
                                <div style="margin-left:90%;" class="addButton">
                                    <button class="btn btn-primary">Add</button>
                                </div>
                                <div>
                                    <button class="btn btn-success" name="save" type="submit">Save</button>
                                </div>
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

<!-- <script src="js/jquery-3.4.1.min.js"></script> -->
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
