<?php
include('dbconnect.php');

	if(isset($_GET["doctor_id"])){
		$doctor_id = $_GET["doctor_id"];
				
        $query= "DELETE FROM `doctor` WHERE doctor_id='$doctor_id'";
        if(mysqli_query($con,$query)){
            header("location: doctor_list_for_admin.php");
        }else{
            echo"<<h4>Not Ok</h4>";
        }
	}
?>
