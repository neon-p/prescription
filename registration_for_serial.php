<?php
  session_start();
  include("dbconnect.php");

  if(isset($_POST["apply"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact_no = $_POST["contact_no"];
        $sex = $_POST["sex"];
        $age = $_POST["age"];
        $weight = $_POST["weight"];
        $_SESSION['email']=$email;
        $string="empty";
        

        $sql = "INSERT INTO `patient`(`patient_name`, `patient_email`, `contact`, `sex`, `age`, `weight`,`past_pdf`) VALUES ('$name','$email','$contact_no','$sex','$age','$weight','$string')";
        
        if (mysqli_query($con, $sql)){
          echo "<script>alert('Confirmed');</script>";
            header("location:auto_pending_serial.php");
        }else{
          echo "<script>alert('PLease Give Correct Information!');</script>";
        }
  }
?>