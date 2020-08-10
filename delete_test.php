<?php
include('dbconnect.php');

	if(isset($_GET["test_id"])){
		$test_id = $_GET["test_id"];
				
        $query= "DELETE FROM `test` WHERE test_id='$test_id'";
        if(mysqli_query($con,$query)){
            header("location: test_list_for_admin.php");
        }else{
            echo"<<h4>Not Ok</h4>";
        }
	}
?>
