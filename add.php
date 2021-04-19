<?php
require 'include/init.php';

if (isPostMethod()) {
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $age = $_REQUEST['age'];

    addUser($firstname, $lastname, $email, $age, $password);
}
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
        First Name: <input type="text" name="firstname">
    </label><br>
    <label>
        Last Name: <input type="text" name="lastname">
    </label><br>
    <label>
        age: <input type="number" name="age">
    </label><br>
    <label>
        Email: <input type="email" name="email">
    </label><br>
    <label>
        Password: <input type="password" name="password">
    </label><br>

    <br>
    <button type="submit">Add User</button>
</form>
</body>
</html>