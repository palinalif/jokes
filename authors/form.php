<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/palinalif/skolahysing.com/workers/htmlSpecialChars.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title><?php echo html($pageTitle); ?></title>
</head>
<body>
<h1><?php echo html($pageTitle); ?></h1>
<form action = "?<?php echo html($action); ?>" method = "post">
    <div>
        <label for = "name">Name: <input type = "text" name = "name" id = "name" value = "<?php echo html($name);?>"</label>
    </div>
    <div>
        <input type = "submit" name = "id" value = "<?php echo html($button); ?>"
    </div>
</form>
</body>
</html>
