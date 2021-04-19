<?php
require 'include/init.php';

$id = $_GET['id'];
$query = "DELETE FROM user WHERE id=$id";
$db->query($query);

redirectToUrl('index.php');

