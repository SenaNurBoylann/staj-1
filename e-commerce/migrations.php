<?php

 require('mysqlClient.php');

$mysqlClient = new MysqlClient();

$mysqlClient->getClient()->exec('Create Table category (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `name` VARCHAR(255) 
)');

$mysqlClient->getClient()->exec('Create Table `order` ( 
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `product_id` INT ,
     `quantity` INT ,
     `total_price` FLOAT

)');

$mysqlClient->getClient()->exec('Create Table `product` (
     `id` INT AUTO_INCREMENT PRIMARY KEY,
     `name` VARCHAR(255),
     `category_id` INT ,
     `stock_amount` INT,
     `price` FLOAT
)');

$mysqlClient->getClient()->exec('Create Table `user`( 
    `id` INT AUTO_INCREMENT PRIMARY KEY, 
    `email` VARCHAR(255) UNIQUE,
    `password` TEXT


)');

