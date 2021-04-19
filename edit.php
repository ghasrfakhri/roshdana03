<?php
require 'include/init.php';

$id = $_GET['id'];


if (isPostMethod()) {
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $age = (int)$_REQUEST['age'];

    updateUser($id, $firstname, $lastname, $email, $age);


    redirectToUrl('index.php');
}

$user = getUser($id);


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
<a href="index.php">back</a>
<form method="post">
    <label>
        First Name: <input type="text" name="firstname" value="<?= $user['firstname'] ?>">
    </label><br>
    <label>
        Last Name: <input type="text" name="lastname" value="<?= $user['lastname'] ?>">
    </label><br>
    <label>
        age: <input type="number" name="age" value="<?= $user['age'] ?>">
    </label><br>
    <label>
        Email: <input type="email" name="email" value="<?= $user['email'] ?>">
    </label><br>
    <br>
    <button type="submit">Update User</button>
</form>
</body>
</html>