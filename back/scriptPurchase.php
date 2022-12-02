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

//enregistrement purchase
$purchase = insertIntoDatabase("user_purchase", "price, buyer, date", "'$price', '$user', current_timestamp", $conn);


header('Location: deleteProduct.php');