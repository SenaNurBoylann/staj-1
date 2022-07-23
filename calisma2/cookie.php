<?php
    setcookie("isim", "Sena Nur Boylan", time() + 5);

    echo isset($_COOKIE["isim"]) ? $_COOKIE["isim"] : "COOKIE YOK";

?>
