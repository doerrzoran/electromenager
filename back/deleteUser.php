<?php

require_once 'dbbFunctions.php';

$id = $_POST['id'];

$products = selectFromDatabase("_product", "seller", $id, $conn);

$product = $products[0];

$deletionProduct = deleteFromDatabase("_product", "id", $products, $conn);

$deletionUser = deleteFromDatabase("user_acount", "id", $id, $conn);



header("Location: displayUsers.php");