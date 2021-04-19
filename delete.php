<?php
require 'include/init.php';

$id = $_GET['id'];
$query = "DELETE FROM user WHERE id=$id";
$db->query($query);
header("Location: index.php");
