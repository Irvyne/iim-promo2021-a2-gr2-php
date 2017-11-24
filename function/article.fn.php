<?php

function createArticle(PDO $pdo, $name, $content)
{
    $sql = "INSERT INTO article (name, content, created_at, updated_at) VALUES (:name, :content, :created_at, :updated_at)";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        'name'       => $name,
        'content'    => $content,
        'created-at' => (new DateTime())->format('Y-m-d H:i:s'),
        'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
    ]);
}

function getArticles(PDO $pdo, $limit = 500, $offset = 0)
{
    $sql = "SELECT * FROM article LIMIT :limit OFFSET :offset";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getArticle(PDO $pdo, $id)
{
    $sql = "SELECT * FROM article WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $id,
    ]);

    return $stmt->fetch();
}

function updateArticle(PDO $pdo, $id, $name, $content)
{
    $sql = "UPDATE article SET name = :name, content = :content, updated_at = :updated_at WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        'id'         => $id,
        'name'       => $name,
        'content'    => $content,
        'updated_at' => (new DateTime())->format('Y-m-d H:i:s'),
    ]);
}

function deleteArticle(PDO $pdo, $id)
{
    $sql = "DELETE FROM article WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    return $stmt->execute([
        'id' => $id,
    ]);
}









