<?php

require_once 'vendor/autoload.php';
require 'routes.php';

$connect = new PDO("mysql:host=127.0.0.1:8889;dbname=bank" , 'root' , '123');
$sql = "SELECT * FROM branches ";
$statment = $connect->prepare($sql);
$stm = $statment->execute();
$resullt = $statment->fetchAll(PDO::FETCH_OBJ);
var_dump($resullt);

