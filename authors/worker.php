<?php

if (isset($_GET['add'])){
    $pageTitle = 'New Author';
    $action = 'addauthor';
    $name = '';
    $id = '';
    $button = 'Add Author';
    include 'form.php';
    exit();
}
if (isset($_GET['addauthor'])){
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/db/insertAuthor.php';
    header('Location: .');
    exit();
}
if (isset($_POST['action']) and  $_POST['action'] == 'Edit'){

    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/db/getAuthorWhereId.php';
    $pageTitle = 'Edit Author';
    $action = 'editauthor';
    $name = $row['name'];
    $id = $row['id'];
    $button = 'Update author';
    include 'form.php';
    exit();
}
if (isset($_GET['editauthor'])){
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/db/updateAuthor.php';
    header('Location: .');
    exit();
}
if (isset($_POST['action']) and  $_POST['action'] == 'Delete') {
    include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/db/deleteAuthor.php';
    header('Location: .');
    exit();
}


include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/db/getAuthor.php';

foreach ($result as $row) {
    $authors[] = array('id' => $row['id'], 'name' => $row['name']);
}