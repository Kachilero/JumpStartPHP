<?php
/**
 * Created by PhpStorm.
 * User: alejandrocerro
 * Date: 6/1/15
 * Time: 10:11 PM
 */

$db = new PDO("mysql:host=localhost;dbname=kickstartapp", "admin", "clockwork");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
    $queryStr = "SELECT * FROM users";
    $query = $db->prepare($queryStr);
    $query->execute();
    while($row = $query->fetch()) {
        echo $row['id'] . ' - ' . $row['name'] . ' - ' . $row['email'] . ' - ' . $row['password'];
        echo '<br>';
    }
    $query->closeCursor();
}catch (PDOException $e) {
    echo $e->getMessage();
}