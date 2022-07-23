<?php
    
    session_start();

    $_SESSION["kullaniciAdi"] = "senaboylan";
    $_SESSION["isim"] = "Sena Nur Boylan";
    $_SESSION["dogumTarihi"] = "14 Agustos 2001";

    echo "Adınız : " . $_SESSION["isim"] . "<br />";
    echo "Kullanıcı Adı : " . $_SESSION["kullaniciAdi"] . "<br />";
    echo "Doğum Tarihi : " . $_SESSION["dogumTarihi"] . "<br/ >";

    
    echo "<a href='session_sil.php'>Sessionları sil</a> ";
    
?>