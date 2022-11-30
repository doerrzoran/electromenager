<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';


$user = $userID;
$product = $_POST["product"];

    
$product = insertIntoDatabase("_purchase", "buyer, product, date", "'$user', '$product', current_timestamp", $conn);
$cart = selectFromDatabase("_cart", "client", $userID, $conn);
print_r($cart);
echo '</br>';
print_r($cart[0]);
echo '</br>';
// $deletionCart = deleteFromDatabase("_cart", "product", $product, $conn);
// $deletionProduct = deleteFromDatabase("_product", "id", $product, $conn);

// header('Location: ../back/deleteCart.php');