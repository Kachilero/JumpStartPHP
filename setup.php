<?php
/**
 * Created by PhpStorm.
 * User: alejandrocerro
 * Date: 6/1/15
 * Time: 9:40 PM
 */
$db = new PDO("mysql:host=localhost;dbname=kickstartapp","admin","clockwork");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
    $queryStr = "CREATE TABLE users (id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY, name VARCHAR(40), password VARCHAR(100), email VARCHAR(150))";
    $db->query($queryStr);
}catch (PDOException $e) {
    echo $e->getMessage();
}
