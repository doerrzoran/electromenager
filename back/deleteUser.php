<?php

require_once 'dbbFunctions.php';

$id = $_POST['id'];

$products = selectFromDatabase("_product", "seller", $id, $conn);

$product = $products[0];

$deletionUser = deleteFromDatabase("user_acount", "id", $id, $conn);

$deletionProduct = deleteFromDatabase("_product", "seller", $id, $conn);





header("Location: displayUsers.php");