<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giris Sayfasi</title>
</head>
<body>
<form method="POST" action="/auth.php"> 
	<input type="text" name="username" placeholder="Kullanici adi"><br>
	<input type="password" name="password" placeholder="Sifre"><br>
	<button type="submit">Giris yap</button>
	
	<?php
	if(isset($_GET["message"])){
		echo $_GET["message"];

	}
	?>

</form>

</body>
</html>
<?php
require 'authenticationservice.php';

$authenticationService = new AuthenticationService($_POST);
if($authenticationService->isLogin()){

header("location: admin.php");

 die();
}

?>