<?php
require 'authenticationservice.php';

$authenticationService = new AuthenticationService($_POST);
if($authenticationService->check()){
	$authenticationService->startSession();

	header("location: admin.php ");
	die();
}
header("location: login.php?message=hatali");


?>