<?php
class Kisi {

	public $adi;
	private $soyadi;

	public function _construct($gelenAdi,$gelenSoyadi){
		$this->adi = $gelenAdi;
		$this->soyadi = $gelenSoyadi;
	}

	function adiSoyadi(){
		return $this->adi . " " . $this->soyadi;
	}
	
}
?>