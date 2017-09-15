<?php

if (isset($_GET['action']) && $_GET['action'] == "search"){
    include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/db/dbConnect.php';

    try{
        $sql = 'CALL searchAuthor2(:name)';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_GET['name']);
        $s->execute();
    }
    catch (PDOException $e){
        $error = 'Error fetching author details.' . $e->getMessage();
        include $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/error/error.php';
        exit();
    }
    $row = $s->fetchALL();
}
?>