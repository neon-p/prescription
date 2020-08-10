<?php
include("dbconnect.php");
if(isset($_POST["save"])){
    $medicine_name = $_POST["medicine_name"];
    $medicine_form = $_POST["medicine_form"];
    $medicine_strangth = $_POST["medicine_weight"];
    $generic_name = $_POST["generic_name"];
				
    $query= "INSERT INTO `medicine`(`medicine_name`, `medicine_type`, `weight`, `genoric_name`) VALUES ('$medicine_name', '$medicine_form', '$medicine_strangth', '$generic_name')";
    
    if($con->query($query) == TRUE){
        // echo "<script>alert('Successfully Added');</script>";
        header("location: medicine_list_for_admin.php");
    }
    else{
        echo "Die";
    }
}

?>