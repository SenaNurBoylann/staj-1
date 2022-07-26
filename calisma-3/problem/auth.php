<?php
ob_start();
$user = "admin";
$pass = "123";

if(isset($_POST["username"])){
	$username = $_POST["username"];
	$password = $_POST["password"];

	if($username == $user && $password == $pass){
		header("location:true.php");
	}
	else{
		header("location:false.php");
		

	}
}



?>