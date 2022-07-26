<?php

echo (new class {

  private $ogrenciAdi = "Sena";
  private $ogrenciSoyadi = "Boylan";

  public function adiSoyadi() {
    return $this->ogrenciAdi . " " . $this->ogrenciSoyadi;
  }
})->adiSoyadi();

?>