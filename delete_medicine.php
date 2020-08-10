<?php
include('dbconnect.php');

	if(isset($_GET["medicine_id"])){
		$medicine_id = $_GET["medicine_id"];
				
        $query= "DELETE FROM `medicine` WHERE medicine_id='$medicine_id'";
        if(mysqli_query($con,$query)){
            
            header("location: medicine_list_for_admin.php");
            // echo '<script language="javascript">';
            // echo 'alert(Delete Successfully)';  //not showing an alert box.
            // echo '</script>';
        }else{
            echo"<h4>Not Ok</h4>";
        }
	}
?>
