<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/authors/worker.php';
?>
<?php include_once  $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/workers/htmlSpecialChars.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Manage Authors</title>
    <link rel="stylesheet" type="text/css" href="../css/background.css">
</head>

<body id = "authorbody">
<h1 class = "header">Manage Authors</h1>
<p class = ""><a href = "../authors/worker.php?add">Add new author</a></p>

<ul>
    <?php foreach ($authors as $author): ?>
    <li>
        <form action = "" method = "post">
            <div>
                <?php echo html($author['name']);?>
                <input type = "hidden" name = "id" value = "<?php echo $author['id']?>">
                <input type = "submit" name = "action" value = "Edit">
                <input type = "submit" name = "action" value = "Delete">
            </div>
        </form>
    </li>
</ul>
<?php endforeach;?>
<p><a href = "..">Return to JMS Home</a></p>
</body>
</html>