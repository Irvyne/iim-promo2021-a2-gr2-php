<?php

require __DIR__."/config.php";

$pdo_statement = $pdo->query("SELECT * FROM user");
$result = $pdo_statement->fetchAll();
