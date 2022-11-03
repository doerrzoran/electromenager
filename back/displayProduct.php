<?php

require_once "../back/dbbFunctions.php";

$products = selectAllFromDatabase("_product", $conn);

foreach($products as $product){
    var_dump($product);
}

