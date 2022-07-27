<?php

class Uye{
	public $uyeAdi = "";
	public $uyeSoyadi = "";

	public function _construct($uAdi, $uSoyadi){
		$this->uyeAdi = $uAdi;
		$this->uyeSoyadi = $uSoyadi;
	}

	public function adiSoyadi(){
		return $this->uyeAdi . " " . $this->uyeSoyadi;
	}
}

    $ben = new Uye ("Sena");
    $ben->uyeAdi = "Fatih";
    $ben->uyeSoyadi = "Yılmaz";
    echo $ben->adiSoyadi();

?>