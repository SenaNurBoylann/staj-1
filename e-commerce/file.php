<form action="" method="post" enctype="multipart/form-data">
<label>Yüklenecek Resim : </label>
<input type="file" name="resim">
<input type="submit" name="gönder" value="ekle">	
</form>
<?php
if($_POST){

if (!file_exists("resimler")) {
    mkdir("resimler");
	
}
$dizin = "resimler/";
$yüklenecekResim = $dizin.$_FILES["resim"]["name"];

if (move_uploaded_files($_FILES["resim"]["tmp_name"],$yuklenecekResim)) {
   echo "Resminiz Yüklendi";
}
else{
	echo $_Fıles["resim"]["error"];
}
}
?>