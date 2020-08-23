<?php include "functions.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String</title>
</head>
<body>
<?php
$users = get_users();
foreach ($users as $user):
    $template = "Hello Dear #name#";
    $template = str_replace("#name#", $user['name'], $template);
    ?>
    <p><?= $template; ?></p>
<?php endforeach; ?>

</body>
</html>