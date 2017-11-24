<?php

require __DIR__.'/config.php';

$id = $_GET['id'] ?? null;

if ($id != null) {
    deleteUser($pdo, $id);
}

header('Location: admin_users.php');
