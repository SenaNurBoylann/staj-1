<?php

class Ogrenci {

  private $ogrenciID = 0;
  public $ogrenciAdi = "";
  public $ogrenciSoyadi = "";
  protected $ogrenciBolum = "";
  private $dersler = array();
  public $durum = "";


  public function __construct($oAdi, $oSoyadi, $oBolum) {
    $this->ogrenciAdi = $oAdi;
    $this->ogrenciSoyadi = $oSoyadi;
    $this->ogrenciBolum = $oBolum;

  }

  protected function dersEkle($dersAdi) {
    $this->dersler[] = $dersAdi;
    $this->dersCalis($dersAdi);

  }

  private function dersCalis($dersAdi) {
    $this->durum = $dersAdi . " çalışıyor";

  }

  public function ogrenciBilgileri() {
    return $this->ogrenciAdi . "-" . $this->ogrenciSoyadi . "-" . $this->ogrenciBolum;

  }
  

}

$ben = new Ogrenci("Sena", "Boylan", "Bilgisayar Müh");

echo $ben->ogrenciBilgileri();

?>