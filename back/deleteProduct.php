<?php

require_once 'dbbFunctions.php';

$product = $_POST['product'];

$deletion = deleteFromDatabase("_product", "product", $product, $conn);

header("Location: displayProduct.php");