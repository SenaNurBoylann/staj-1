<?php
    
    // Sessionları ekrana bastırma
    session_start();
    
    echo "Adınız : " . $_SESSION["isim"] . "<br />";
    echo "Kullanıcı Adı : " . $_SESSION["kullaniciAdi"] . "<br />";
    echo "Doğum Tarihi : " . $_SESSION["dogumTarihi"] . "<br/ >";

    echo "<a href='session_sil.php'>Sessionları sil</a> ";
   
?>