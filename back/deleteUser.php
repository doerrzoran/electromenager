<?php

require_once 'dbbFunctions.php';

$id = $_POST['id'];

$product = selectFromDatabase("_product", "seller", $id, $conn);

echo $product;

// $deletionProduct = deleteFromDatabase("_product", "id", $product, $conn);

// $deletionUser = deleteFromDatabase("user_acount", "id", $id, $conn);



// header("Location: displayUsers.php");