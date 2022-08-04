<?php
class MysqlClient{

public $client = null;

public function getClient(){
    if($this->client === null){
       $this->client = new PDO("mysql:host=localhost;dbname=mysqlclient", "root", "");
        $this->client->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
  
    return $this->client;
  }

}
