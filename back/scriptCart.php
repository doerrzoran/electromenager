<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';

$user = $userID;
$product = $_POST["product"];

$product = insertIntoDatabase("_cart", "client, product", "'$user', '$product'", $conn);