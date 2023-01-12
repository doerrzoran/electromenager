<?php

require_once 'dbbFunctions.php';
require_once 'userId.php';
$user = $userID;

$product = $_POST['product'];

//suppression panier
$cart = deleteFromDatabase("_cart", "product", $product, $conn);


//suppression produit
$deletion = deleteFromDatabase("_product", "id", $product, $conn);

header("Location: DisplaySeller.php");