<?php

class Uye {

  private $uyeID = 0;
  private $uyeAdi = "";
  private $uyeSoyadi = "";
  private static $uyeSayisi = 0;

  Public function __construct($uAdi, $uSoyadi) {
    $this->uyeID = self::$uyeSayisi + 1;
    $this->uyeAdi = $uAdi;
    $this->uyeSoyadi = $uSoyadi;
    self::$uyeSayisi++;
  }
  public static function uyeSayisi() {
    return self::$uyeSayisi;
  }

  public function uyeBilgi() {
    return $this->uyeID. " - " . $this->uyeAdi . " - " . $this->uyeSoyadi . "<br/>";
  }

}

$ben = new Uye("Sena", "Boylan");
echo $ben->uyeBilgi();
$fatih = new Uye("Fatih", "Yilmaz");
echo $fatih->uyeBilgi();
$ali = new Uye("Ali", "Boylan");
echo $ali->uyeBilgi();

echo "Toplam Üye sayısı : " . Uye::uyeSayisi();

?>