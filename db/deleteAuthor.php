<?php
include $_SERVER['DOCUMENT_ROOT'] . 'nemendur/palinalif/skolahysing.com/db/dbConnect.php';

try
{
    $sql = "DELETE FROM categories WHERE id = 1";

    $s = $pdo->prepare($sql);
    $s->execute();
    exit();
    $s->bindValue(':id', $_POST['id']);
}

catch (PDOException $e)
{
    $error = 'Error deleting category.';
    include $_SERVER['DOCUMENT_ROOT'] . 'nemendur/palinalif/skolahysing.com/error/error.php';
    exit();
}