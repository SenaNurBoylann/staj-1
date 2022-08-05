
<html>

<body>
<?php

$db = new PDO('mysql:host=localhost;dbname=yapilacaklar_db','root','');
$gorevler = $db->query("select * from yapilacaklar_tbl");
?>

   <table>
   	      <tr>
   	      	  <td>Id</td>
   	      	  <td>Görev</td>
   	      	  <td>Sil</td>
   	      	  <td>Düzenle</td>
   	      </tr>
<?php

foreach($gorevler as $gorev)
{
	echo "<tr><td>".$gorev["id"]. "</td><td>" .$gorev["yapilacak_gorev"]."</td>";

    echo "<td><a href='sil.php?id=".$gorev["id"]."'>Sil</a></td>";
    echo "<td><a href='duzenle.php?id=".$gorev["id"]."'>Düzenle</a></td>";
	
	echo "</tr>";

}
?>

   </table>


<hr/>
Yeni Görev Ekle
<form action="kaydet.php" method="POST">
	   <input type="text" name="gorev">
	   <input type="submit" name="Kaydet">
	
</form>


</body>
</html>