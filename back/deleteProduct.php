<?php

require_once 'dbbFunctions.php';

$id = $_POST['product'];

$deletion = deleteFromDatabase("_product", "id", $product, $conn);

header("Location: displayProduct.php");