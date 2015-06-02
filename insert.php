<?php
/**
 * Created by PhpStorm.
 * User: alejandrocerro
 * Date: 6/1/15
 * Time: 9:54 PM
 */
$db = new PDO("mysql:host=localhost;dbname=kickstartapp", "admin", "clockwork");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
    $queryStr = "INSERT INTO users (name, password, email) VALUES ('admin', md5('admin'), 'youremail@domain.com')";
    $db->query($queryStr);
}catch (PDOException $e) {
    echo $e->getMessage();
}