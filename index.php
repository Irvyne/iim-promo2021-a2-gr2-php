<?php

require __DIR__ . "/config.php";

// $i++ || $i += 1 || $i = $i + 1
var_dump(
    getUsers($pdo, 100, 100)
);

// Requete directe
$pdo_statement = $pdo->query("SELECT * FROM user");
$result        = $pdo_statement->fetchAll();


// Requete préparée
$stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
$stmt->execute([
    "email" => "admin",
]);
print_r($stmt->fetchAll());



// CRUD (Create Read Update Delete)
// Create => INSERT INTO
// Read   => SELECT
// Update => UPDATE
// Delete => DELETE


//$sql = "SELECT COUNT(id) FROM user WHERE username=:username AND password=:password";

