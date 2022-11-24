<?php

require_once 'dbbFunctions.php';

$product = $_POST['product'];

$deletion = deleteFromDatabase("_cart", "product", $product, $conn);

header("Location: displayCart.php");
