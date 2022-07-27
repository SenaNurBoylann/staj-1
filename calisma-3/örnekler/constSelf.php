<?php

class OrnekNesne {

  const ADI_SOYADI = "Yusuf SEZER";

  public function yazdir() {
    return self::ADI_SOYADI;  
  }

}

$ben = new OrnekNesne();

echo $ben->yazdir();

?>