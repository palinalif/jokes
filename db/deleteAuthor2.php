<?php
include $_SERVER['DOCUMENT_ROOT'] . 'nemendur/palinalif/skolahysing.com/db/dbConnect.php';
try
{
    $sql = "DELETE FROM categories WHERE id = :id";
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
}

catch (PDOException $e)
{
    $error = 'Error deleting category.';
    include $_SERVER['DOCUMENT_ROOT'] . 'nemendur/palinalif/skolahysing.com/error/error.php';
    exit();
}