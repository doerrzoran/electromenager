<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$cart = selectMultipleFromDatabase("_cart", "client", $userID, $conn);
print_r($cart);
// $products = selectMultipleFromDatabase("_product", "id", , $conn);
// ?>

