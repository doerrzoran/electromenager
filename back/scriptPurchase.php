<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';


$user = $userID;
$product = $_POST["product"];

    
$product = insertIntoDatabase("_purchase", "buyer, product, date", "'$user', '$product', current_timestamp", $conn);
$deletionCart = deleteFromDatabase("_cart", "product", $product, $conn);
$deletionProduct = deleteFromDatabase("_product", "id", $product, $conn);

header('Location: ../back/deleteCart.php');