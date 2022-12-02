<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';

$product = $_POST["product"];

$user = $userID;
echo $user;

// recupération des info produit

$selectProduct = selectFromDatabase("_product", "id", $product, $conn);
$type = $selectProduct[2];
$price =  $selectProduct[6];

echo $type;
echo $price;

//enregistrement purchase
$purchase = insertIntoDatabase("_purchase", "price, buyer, date", "'$price', '$user', current_timestamp", $conn);

//suppression panier
$cart = selectFromDatabase("_cart", "client", $userID, $conn);
$cartID = $cart[0];
$deletionCart = deleteFromDatabase("_cart", "id", $cartID, $conn);

//suppression produit

$deletionProduct = deleteFromDatabase("_product", "id", $product, $conn);

// header('Location: ../front/pageUtilisateur.php');