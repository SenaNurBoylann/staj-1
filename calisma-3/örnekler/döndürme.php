<?php

function Hesaplama($s1, $s2) {
  return new class($s1, $s1) {

    private $sayi1 = 0.0;
    private $sayi2 = 0.0;

    function __construct($s1, $s2) {
      $this->sayi1 = $s1;
      $this->sayi2 = $s2;
    }

    public function Topla() {
      return $this->sayi1 + $this->sayi2;
    }

    public function Cikar() {
      return $this->sayi1 - $this->sayi2;
    }

    public function Carp() {
      return $this->sayi1 * $this->sayi2;
    }

    public function Bol() {
      return $this->sayi1 / $this->sayi2;
    }
  };
}

echo Hesaplama(10, 20)->Topla();
echo "<br />";
echo Hesaplama(10, 20)->Carp();

?>