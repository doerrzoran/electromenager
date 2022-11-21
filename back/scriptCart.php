<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';

var_dump($_POST);

$user = $userID;
$product = $_POST["product"];

echo $user;
echo $product;
 
$product = insertIntoDatabase("_cart", "client", "", $conn);