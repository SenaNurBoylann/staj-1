<?php

class OrnekNesne {

  public function __construct() {  
    echo "Nesne belleğe yüklendi. <br />";
  }

  public function __destruct() {  
    echo "Nesne bellekten silindi.";
  }

}

$nesne = new OrnekNesne();

?>
