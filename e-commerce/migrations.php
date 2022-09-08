<?php
require_once('mysqlClient.php');

$mysqlClient = new MysqlClient();

$mysqlClient->getClient()->exec( ' Create Table IF NOT EXISTS `category` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `name` VARCHAR(255) 
)');

$mysqlClient->getClient()->exec('Create Table IF NOT EXISTS `order` ( 
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `product_id` INT ,
     `quantity` INT ,
     `total_price` FLOAT

)');

$mysqlClient->getClient()->exec('Create Table IF NOT EXISTS `product` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `name` VARCHAR(255),
     `category_id` INT ,
     `stock_amount` INT,
     `price` FLOAT
)');

$mysqlClient->getClient()->exec('Create Table IF NOT EXISTS `user`( 
    `id` INT AUTO_INCREMENT PRIMARY KEY, 
    `email` VARCHAR(255) UNIQUE,
    `password` TEXT


)');

$mysqlClient->getClient()->exec("insert into category(name)values('yaz')");

$mysqlClient->getClient()->exec("insert into category(name)values('sonbahar')");

$categoryOne=$mysqlClient->getClient()->query("select id from category where name = 'yaz' limit 1")->fetch();

$categoryTwo=$mysqlClient->getClient()->query("select id from category where name = 'sonbahar' limit 1")->fetch();

$productStmt=$mysqlClient->getClient()->prepare("insert into product(name, category_id, stock_amount, price) values(?, ?, ?, ?)");

$userStmt=$mysqlClient->getClient()->prepare("insert into user(email) values(?)");


for ($i=0; $i <50 ; $i++) 
{ 
$category=$categoryOne["id"];

if($i%2==0)
{

$category=$categoryTwo["id"];

}

$productStmt->execute(array(uniqid(),$category,random_int(50,1000),random_int(100, 1000)));


}


?>
