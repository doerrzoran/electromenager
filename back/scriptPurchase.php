<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';


$user = $userID;
$product = $_POST["product"];

    
$purchase = insertIntoDatabase("_purchase", "buyer, product, date", "'$user', '$product', current_timestamp", $conn);
$cart = selectFromDatabase("_cart", "client", $userID, $conn);

$cartID = $cart[0];
$deletionCart = deleteFromDatabase("_cart", "id", $cartID, $conn);
echo $product;
$deletionProduct = deleteFromDatabase("_product", "id", $product, $conn);

// header('Location: ../front/pageUtilisateur.php');