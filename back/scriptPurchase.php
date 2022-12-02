<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';


$user = $userID;
$product = $_POST["product"];

$selectProduct = selectFromDatabase("_product", "id", $product, $conn);
$type = $selectProduct[2];
$price =  $selectProduct[6];

echo $type;
echo $price;


    
// $purchase = insertIntoDatabase("_purchase", "buyer, product, date", "'$user', '$product', current_timestamp", $conn);
// $cart = selectFromDatabase("_cart", "client", $userID, $conn);
// $cartID = $cart[0];
// $deletionCart = deleteFromDatabase("_cart", "id", $cartID, $conn);
// echo $product;

// $deletionProduct = deleteFromDatabase("_product", "id", $product, $conn);

// header('Location: ../front/pageUtilisateur.php');