<?php
$db = new mysqli('localhost', 'root', '', 'roshdana02');
$id = $_GET['id'];
$query = "DELETE FROM user WHERE id=$id";
$db->query($query);
header("Location: index.php");
