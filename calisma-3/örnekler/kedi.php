<?php

class Kedi {

  public $kediRengi = "";
  private $kediBoyu = 0.0;
  protected $kediGozRengi = "";
  
  public function miyavla() {
	  return "Miyavv";
  }
  
  public function oyunOyna($oyunAdi) {
	  return "Kedi " . $oyunAdi . " oynuyor";
  }

}

$pamuk = new Kedi;
echo $pamuk->miyavla();
echo "<br />";
echo $pamuk->oyunOyna("Top oyunu");

?>