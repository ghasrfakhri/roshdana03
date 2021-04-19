<?php
require 'include/init.php';

$id = $_GET['id'];

deleteUser($id);

redirectToUrl('index.php');

