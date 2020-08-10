<?php
   include ('dbconnect.php');

    if(isset($_POST['email'])) {

          $email = $_POST["email"];
          $sql = "SELECT patient_email FROM `patient` WHERE patient_email='$email'";
          $sql1=mysqli_query($con,$sql);
          $row=mysqli_fetch_array($sql1);
          if(!empty($row["patient_email"])){
            echo "<h5 style='color:red;'>Email is already in Used...Try a new Email.</h5>";
          }
    }
?>