<?php

require __DIR__.'/config.php';

//var_dump($_SERVER);

//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['email'])) {
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if ($email == null || $password == null) {
        $error = "All fields are mandatory!";
    } else {
        createUser($pdo, $email, $password);

        header('Location: admin_users.php');
        die;
    }
}

require __DIR__.'/template/user_create.php';
