<?php

class Kisi {

  public $adi;
  private $soyadi;

  public function __construct($gelenAdi, $gelenSoyadi) {
    $this->adi = $gelenAdi;
    $this->soyadi = $gelenSoyadi;
  }

  function adiSoyadi() {
    return $this->adi . " " . $this->soyadi;
  }

}

?>
<?php

$ben = new Kisi("Sena", "Boylan");

echo $ben->adiSoyadi();

?>