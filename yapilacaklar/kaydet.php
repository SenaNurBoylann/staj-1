<?php
  if($_POST)
  {
  	$gorev = $_POST["gorev"];
  	$db = new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
  	$query = $db->prepare("INSERT INTO yapilacaklar_tbl set yapilacak_gorev = ?");
  	$ekle = $query->execute(array($gorev));
  	header("Location: index.php");
  }



?>