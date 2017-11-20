<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = require __DIR__."/parameters.php";

try {
    $pdo = new PDO(
        'mysql:dbname='.$db['dbname'].';host='.$db['host'],
        $db['user'],
        $db['password']
    );
} catch (PDOException $e) {
    mail("thibaud.bardin@gmail.com", "Error BDD IIM", $e->getMessage());
    echo "<h1>Error establishing connection to database...</h1>";
    die;
}





