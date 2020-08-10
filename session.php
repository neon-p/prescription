<?php
	session_start();
	include("dbconnect.php");
		
	if(empty($_SESSION["login_d"])){
		header("location: home.php");
	}elseif($_SESSION["login_d"]==false){
		header("location: home.php");
	}
?>