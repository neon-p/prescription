<?php
	session_start();
	include("dbconnect.php");

	$check=$_SESSION["login_a"];
		
	if(empty($_SESSION["login_a"])){
		header("location: home.php");	
	}elseif($_SESSION["login_a"]==false){
		header("location: home.php");
	}
?>