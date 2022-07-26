<?php
class Kitap {

	public $kitapAdi;
	private $kitapSayfaSayisi;

	public function _construct ($gelenKitapAdi, $gelenKitapSayfaSayisi){
		$this->kitapAdi = $gelenKitapAdi;
		$this->kitapSayfaSayisi = $gelenKitapSayfaSayisi;
	}

	function sayfaSayisi(){
		return $this->kitapSayfaSayisi;
	}
}
?>