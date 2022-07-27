<?php

class Ogrenci {

  public $ogrenciAdi = "";
  public $ogrenciSoyadi = "";

  function __construct($oAdi, $oSoyadi) {
    $this->ogrenciAdi = $oAdi;
    $this->ogrenciSoyadi = $oSoyadi;
  }

  public function ogrenciBilgileri() {
    return $this->ogrenciAdi . " " . $this->ogrenciSoyadi;
  }

}

$ben = new Ogrenci("Sena", "Boylan");
$fatih = clone $ben;  
$fatih->ogrenciAdi = "Fatih";
$fatih->ogrenciSoyadi = "Yilmaz";

echo $fatih->ogrenciBilgileri(); 
echo "<br />";
echo $ben->ogrenciBilgileri();  

?>