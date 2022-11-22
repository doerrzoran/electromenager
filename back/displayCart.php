<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$carts = selectMultipleFromDatabase("_cart", "client", $userID, $conn);

$products = array();
foreach($carts as $cart){
    $product = $cart['produit'];
    $products[] = $product;
}

var_dump($products);

