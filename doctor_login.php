<?php
  include("dbconnect.php");
  session_start();
  if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "SELECT doctor_password FROM `doctor` WHERE doctor_email='$email' AND doctor_password='$password'";
        $sql1=$con->query($sql);
        $row=$sql1->fetch_assoc();
        $sql_a = "SELECT admin_pass FROM `admin` WHERE admin_email='$email' AND admin_pass='$password'";
        $sql1_a=$con->query($sql_a);
        $row_a=$sql1_a->fetch_assoc();
        
        if($row['doctor_password']== $password){
            $_SESSION['login_d'] = $email;
            header("Location: doctor_panel.php");
        }
        elseif($row_a['admin_pass']== $password){
            $_SESSION['login_a'] = $email;
            header("Location: admin_home.php");
        }else{
            echo "<script>alert('Incorrect Password');</script>";
        }
  }
?>