<?php

class Uye {

  static $uyeSayisi = 2;

  public static function uyeSayisi() {
    return self::$uyeSayisi;
  }

}

class Yonetici extends Uye{

  public function uyeSayisiErisim() {
    parent::$uyeSayisi++;
    return parent::uyeSayisi();
  }

}

$admin = new Yonetici();

echo $admin->uyeSayisiErisim();

?>