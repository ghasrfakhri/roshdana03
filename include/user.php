<?php
function getUserList()
{
    global $db;
    $query = "SELECT id, firstname, lastname FROM user";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }
    return $result->fetch_all(MYSQLI_ASSOC);
}


function getUser($id)
{
    global $db;
    $query = "SELECT id, firstname, lastname, age, email FROM user WHERE id=$id";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }

    return $result->fetch_assoc();
}

function addUser($firstname, $lastname, $email, $age, $password)
{
    global $db;

    $query = "INSERT INTO user SET firstname='$firstname', lastname='$lastname', email='$email', age='$age', password='$password'";

    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }
}

function updateUser($id, $firstname, $lastname, $email, $age)
{
    global $db;
    $query = "UPDATE user SET firstname='$firstname', lastname='$lastname', email='$email', age=$age WHERE id=$id";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }
}

function deleteUser($id)
{
    global $db;
    $query = "DELETE FROM user WHERE id=$id";
    $result = $db->query($query);
    if (false === $result) {
        echo $query . "<br>";
        echo $db->error;
        exit;
    }

}