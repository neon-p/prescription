<?php
  include("dbconnect.php");

  if(isset($_POST["save"])){
        $test_name = $_POST["test_name"];

        $sql = "INSERT INTO `test`(`test_name`) VALUES ('$test_name')";
        
        if (mysqli_query($con, $sql)){
            header("location: test_list_for_admin.php");
        }else{
            echo "<script>alert('Incorrect Test Information!');</script>";
        }
  }
?>