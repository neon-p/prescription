<?php
include("dbconnect.php");
if(isset($_POST["save"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $reg_no=$_POST["reg_no"];
    $specialized=$_POST["specialized"];
    $degree=$_POST["degree"];
    $chamber=$_POST["chamber"];
    $start_time=$_POST["start_time"];
    $finish_time=$_POST["finish_time"];
    $start_day=$_POST["start_day"];
    $finish_day=$_POST["finish_day"];
    $myFile=$_FILES["pic"];

    $string='pending';

    $path=$_FILES["pic"]["name"];
    $target_dir="uploads/";
    $target_file= $target_dir.basename($path);

    $query= "INSERT INTO `doctor`( `doctor_name`, `doctor_email`, `doctor_password`, `doctor_regno`, `doctor_specialized`, `doctor_degree`, `doctor_chamber`, `doctor_start_time`, `doctor_finish_time`, `doctor_start_day`, `doctor_finish_day`, `doctor_image`,`doctor_status`) VALUES
    ('$name', '$email', '$password', '$reg_no','$specialized','$degree','$chamber','$start_time','$finish_time','$start_day','$finish_day','$path','$string')";

    if (mysqli_query($con, $query)){
        move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);
        header("Location: add_doctor.php");
    }else{
        echo"Data Not Saved";
    }
}

?>