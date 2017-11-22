<?php

require __DIR__.'/function/user.fn.php';

$db = require __DIR__."/parameters.php";

try {
    $pdo = new PDO(
        'mysql:dbname='.$db['dbname'].';host='.$db['host'],
        $db['user'],
        $db['password']
    );
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    mail("thibaud.bardin@gmail.com", "Error BDD IIM", $e->getMessage());
    echo "<h1>Error establishing connection to database...</h1>";
    die;
}





