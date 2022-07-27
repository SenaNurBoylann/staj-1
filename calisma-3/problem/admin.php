
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CIKIS YAP</title>
    
    

</head>
<body>
    
    <form method="POST" action="/logout.php">
      <button type="submit">Cıkıs Yap</button>

    </form>

</body>
</html>
<?php

require 'authenticationservice.php';

$authenticationService = new AuthenticationService($_POST);
if($authenticationService->isLogin()){

 echo "Basarili "; 
 die();


}
header("location: login.php");

?>
