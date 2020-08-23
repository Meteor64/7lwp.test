<?php
include "functions.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loops</title>
    <style>
        table {

        }

        table tr td, th {
            padding: 10px;
            border: 1px solid #cccccc;
        }
    </style>
</head>
<body>
<!--<table style="border: 1px solid #cccccc;border-collapse: collapse">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>actions</th>
    </tr>
    <?php
/*    $users = get_users();
    if ($users && count($users) > 0):
        foreach ($users as $user): */ ?>
            <tr>
                <td><? /*= $user['id']; */ ?></td>
                <td><? /*= $user['name']; */ ?></td>
                <td><? /*= $user['email']; */ ?></td>
                <td>
                    <a href="#">edit</a>
                </td>
            </tr>

        <?php
/*        endforeach;
        else:
        */ ?>
    <td colspan="4">
        <p style="color: red;">آیتمی جهت نمایش وجود ندارد.</p>
    </td>
    <?php /*endif; */ ?>
</table>-->
</body>
</html>