<?php

// Create
function createUser(PDO $pdo, $email, $password)
{
    $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";

    // Statement not executed
    $stmt = $pdo->prepare($sql);

    // Executed Statement
    return $stmt->execute([
        "email"    => $email,
        "password" => password_hash($password, PASSWORD_BCRYPT),
        // password_verify($motDePasseEnClair, $motDePasseHashé);
    ]);
}

// Read
function getUsers(PDO $pdo, $limit = 500, $offset = 0)
{
    $sql = "SELECT * FROM user LIMIT :limit OFFSET :offset";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getUser(PDO $pdo, $id)
{
    $sql = "SELECT * FROM user WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $id,
    ]);

    return $stmt->fetch();
}

// Update

function updateUser(PDO $pdo, $id, $email, $password)
{
    $sql = "UPDATE user SET email = :email, password = :password WHERE id = :id";

    return $pdo->prepare($sql)->execute([
        'id'       => $id,
        'email'    => $email,
        'password' => $password,
    ]);
}

// Delete

function deleteUser(PDO $pdo, $id)
{
    $sql = "DELETE FROM user WHERE id = :id";

    return $pdo->prepare($sql)->execute([
        'id' => $id,
    ]);
}
