<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
	<title>Başarılı Başarısız</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>Metni Giriniz</td>
				<td><input type="text" name="metnigiriniz"></td>
			</tr>
			<tr>
				
				<td><input type="submit" value="Gonder"></td>
				<td></td>
			</tr>
		</table>
	</form>

</body>
</html>  
<?php

    if($_POST){
    	$metnigiriniz = $_POST["metnigiriniz"];

    	echo "Metin : ".$metnigiriniz. "<br />";

    	if($metnigiriniz == "ideasoft"){
    		echo "Başarılı";

    	}
    	else {
    		echo "Başarısız";

    	}

    }
?>