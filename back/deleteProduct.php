<?php

require_once 'dbbFunctions.php';

$product = $_POST['product'];

$deletionPurchase = deleteFromDatabase("_purchase", "product", $product, $conn);

$deletion = deleteFromDatabase("_product", "id", $product, $conn);

header("Location: displayProduct.php");