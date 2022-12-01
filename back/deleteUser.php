<?php

require_once 'dbbFunctions.php';

$id = $_POST['id'];

$products = selectFromDatabase("_product", "seller", $id, $conn);

$product = $products[0];

$deletionUser = deleteFromDatabase("user_acount", "id", $id, $conn);
$cart = selectFromDatabase("_cart", "client", $id, $conn);
$cartID = $cart[0];
$deletionCart = deleteFromDatabase("_cart", "id", $cartID, $conn);

$productID = selectFromDatabase("_product", "seller", $id, $conn);
$productID = $productID[0];

$deletionProduct = deleteFromDatabase("_product", "id", $productID, $conn);





header("Location: displayUsers.php");