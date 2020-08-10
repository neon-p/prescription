<?php
    session_start();
    include("dbconnect.php");
    $patient_email=$_SESSION['email'];
    $query = "SELECT `patient_id` FROM `patient` WHERE patient_email='$patient_email'";
    $sql=mysqli_query($con,$query);
    $row=mysqli_fetch_array($sql);
    $patient_id=$row['patient_id'];
    $pending="pending";

    $sql1 = "INSERT INTO `serial`(`serial_no`, `patient_id`) VALUES ('$pending','$patient_id')";
        
    if (mysqli_query($con, $sql1)){
        session_destroy();
        // echo "<script>alert('Please Wait for Confirmation!');</script>";
        header("location: serial.php");
    }else{
      echo "<script>alert('Please Give Correct Information!');</script>";
    }
?>