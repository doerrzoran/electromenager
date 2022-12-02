<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';


$user = $userID;

// recupération des info produit

$selectProduct = selectFromDatabase("_product", "id", $product, $conn);
$type = $selectProduct[2];
$price =  $selectProduct[6];

echo $type;
echo $price;
echo $user;

//enregistrement purchase
$purchase = insertIntoDatabase("_purchase", "type, price, buyer, date", "'$type', '$price', '$user', current_timestamp", $conn);

//suppression panier
$cart = selectFromDatabase("_cart", "client", $userID, $conn);
$cartID = $cart[0];
$deletionCart = deleteFromDatabase("_cart", "id", $cartID, $conn);

//suppression produit
$product = $_POST["product"];
$deletionProduct = deleteFromDatabase("_product", "id", $product, $conn);

// header('Location: ../front/pageUtilisateur.php');