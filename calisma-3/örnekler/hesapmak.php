<?php

class HesapMakinesi {

  private $sonuc = 0;

  function __construct($sayi) {
    $this->sonuc = $sayi;
  }

  public function Toplama($sayi) {
    $this->sonuc += $sayi;
    return $this;
  }

  public function Cikarma($sayi) {
    $this->sonuc -= $sayi;
    return $this;
  }

  public function Carpma($sayi) {
    $this->sonuc *= $sayi;
    return $this;
  }

  public function Bolme($sayi) {
    $this->sonuc /= $sayi;
    return $this;
  }

  public function Goster() {
    echo $this->sonuc;
    return $this->sonuc;
  }

}

$hesap = new HesapMakinesi(30);
$hesap->Toplama(10)->Cikarma(5)->Goster();
//$hesap->Toplama(30)->Bolme(10)->Goster();

?>