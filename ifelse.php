<?php
    $sayi1 = 10;
    $sayi2 = 1;
    /*$kontrol = $sayi1 == $sayi2 ? "Sayılar Eşittir !" : "Sayılar Eşit Değildir !";
    echo $kontrol;*/

    if ($sayi1 < $sayi2) {
        echo "Sayı 1 Sayı 2'den Küçük !<br>";
    	echo "Kontrol Tamamlandı !";
    }elseif ($sayi1 > $sayi2) {
    	 echo "Sayı 1 Sayı 2'den Büyük !<br>";
    	echo "Kontrol Tamamlandı !";
    	
     }else{
    	echo "Sayılar Eşittir ! <br>";
    	echo "Kontrol Tamamlandı !";
    }
?>