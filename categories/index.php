<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/categories/worker.php';
?>
<?php include_once  $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/workers/htmlSpecialChars.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Manage Categories</title>
    <link rel="stylesheet" type="text/css" href="../css/background.css">
</head>

<body id = "categorybody">
    <h1 class = "header">Manage Categories</h1>
    <p class = ""><a href = "worker.php?add">Add new category</a></p>

    <ul>
        <?php foreach ($categories as $category): ?>
        <li>
            <form action = "" method = "post">
                <div>
                    <?php echo html($category['name']);?>
                    <input type = "hidden" name = "id" value = "<?php echo $category['id']?>">
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