<?php

require_once 'dbbFunctions.php';

$productID = $_POST['product'];

$product = selectFromDatabase('_product', 'id', $productID, $conn);

echo $product;


$deletion = deleteFromDatabase('_product', 'id', $product, $conn);

// header("Location: displayProduct.php");