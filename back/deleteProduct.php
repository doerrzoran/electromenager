<?php

require_once 'dbbFunctions.php';
require_once 'userId.php';
$user = $userID;

$product = $_POST['product'];
echo $product;

// //suppression panier
// $cart = selectFromDatabase("_cart", "client", $userID, $conn);
// $cartID = $cart[0];
// $deletionCart = deleteFromDatabase("_cart", "id", $cartID, $conn);

// //suppression produit
// $deletion = deleteFromDatabase("_product", "id", $product, $conn);

// header("Location: DisplaySeller.php");