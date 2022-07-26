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

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giris Sayfasi</title>
</head>
<body>
<form method="POST" action=""> 
	<input type="text" name="username" placeholder="Kullanici adi"><br>
	<input type="password" name="password" placeholder="Sifre"><br>
	<button type="submit">Giris yap</button>

</form>

</body>
</html>