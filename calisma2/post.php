<form action ="" method= "post">
<table>
	<tr>
		<td> 1. Sayıyı Giriniz : </td>
		<td> <input type = "text" name= "sayi1" /></td>
    </tr>
    <tr>
		<td> 2. Sayıyı Giriniz : </td>
		<td> <input type= "text" name= "sayi2" /></td>
    </tr>
    <tr>
		<td> </td>
		<td> 
			<input type= "submit" value= "Topla" />
		</td>
    </tr>
</table>   
</form>

<?php

    $sonuc = $_POST["sayi1"] + $_POST["sayi2"];
    echo "Sayıların Toplamı = " .$sonuc;
?>
