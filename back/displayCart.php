<?php

require_once "../back/dbbFunctions.php";
require_once "../back/userId.php";

$carts = selectMultipleFromDatabase("_cart", "client", $userID, $conn);
print_r($carts);
foreach($carts as $cart){
 $productID = $cart['product'];
 echo $productID;
}
// $product = selectFromDatabase("_product", "id", "", $conn);
// ?>

