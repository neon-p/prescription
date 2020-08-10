<?php
    session_start();
  include("dbconnect.php");

  if(isset($_POST["serial_no"])){
        $serial_no = $_POST["serial_no"];
        $patient_id=$_SESSION['patient_id'];

        $sql = "UPDATE `serial` SET `serial_no`='$serial_no' WHERE patient_id='$patient_id'";
        
        if (mysqli_query($con, $sql)){
            header("location:patient_list_for_admin.php");
        }else{
          echo "<script>alert('Please Give Correct Information!');</script>";
        }
        session_destroy();
  }
?>