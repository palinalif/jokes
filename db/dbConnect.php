<?php

try
{

    $pdo = new PDO('mysql:host=localhost;dbname=palinalif', 'palinalif', 'kolla4kleina');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');

}

catch (PDOException $e)
{
    $error = "Unable to connect to the database" . $e->getMessage();
    include $_SERVER['DOCUMENT_ROOT'] . 'nemendur/palinalif/skolahysing.com/error/error.php';
    exit();
}