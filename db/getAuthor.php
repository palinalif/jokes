<?php
include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/db/dbConnect.php';

try{
    $result = $pdo->query('SELECT id, name, email FROM authors');
}
catch (PDOException $e){
    $error = 'Error fetching category details.';
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/error/error.php';
    exit();
}
?>