<?php

require 'include/init.php';

$result = $db->query("SELECT id, firstname, lastname FROM user");

$users = $result->fetch_all(MYSQLI_ASSOC);

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="add.php">Add New User</a>
<table>
    <tr>
        <th>#</th>
        <th>name</th>
    </tr>
    <?php
    $i = 1;
    foreach ($users as $user) {
        echo "<tr>
                    <td>$i</td>
                    <td><a href='detail.php?id=$user[id]'>$user[firstname] $user[lastname]</a> 
                    <a onclick='return confirm(\"Are you sure?\");' href='delete.php?id=$user[id]' style='color: red'>x</a>
                    <a href='edit.php?id=$user[id]' style='color: green'>I</a>
                    </td>
    
               </tr>";
        $i++;
    }

    ?>

</table>
</body>
</html>