<?php

require_once "../back/dbbFunctions.php";

$products = selectAllFromDatabase("_product", $conn);

var_dump($product);
