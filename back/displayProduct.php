<?php

require_once "../back/dbbFunctions.php";

$products = selectAllFromDatabase("_product", $conn);

$product = $products[1];
echo $product;