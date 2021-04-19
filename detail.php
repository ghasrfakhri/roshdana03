<?php
require 'include/init.php';

$id = $_GET['id'];

$result = $db->query("SELECT id, firstname, lastname, age, email FROM user WHERE id=$id");

$user = $result->fetch_assoc();

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
Id: <?= $user['id']?><br>
Name: <?= $user['firstname'] ." ".$user['lastname']?><br>
Email: <?= $user['email']?><br>
Age: <?= $user['age']?><br>
</body>
</html>