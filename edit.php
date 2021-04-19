<?php
$db = new mysqli('localhost', 'root', '', 'roshdana02');

$id = $_GET['id'];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $age = (int)$_REQUEST['age'];

//    if($age == ""){
//        $age = 0;
//    }

    $query = "UPDATE user SET firstname='$firstname', lastname='$lastname', email='$email', age=$age WHERE id=$id";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }


    header("Location: index.php");
    exit;
}

$query = "SELECT id, firstname, lastname, age, email FROM user WHERE id=$id";
$result = $db->query($query);
if (false === $result) {
    echo $query . "<br>";
    echo $db->error;
    exit;
}
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