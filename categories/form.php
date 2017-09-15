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
            <label for = "name">Name: <input type = "text" name = "name" id = "id" value = "<?php echo html($name);?>"</label>
            <label for = "name">Email: <input type = "text" name = "email" id = "id" value = "<?php echo html($email);?>"</label>
        </div>
        <div>
            <input type = "submit" name = "id" value = "<?php echo html($button); ?>">
            <input type = "hidden"  name = "id" value = "<?php echo html($id)?>">
        </div>
    </form>
</body>
</html>
