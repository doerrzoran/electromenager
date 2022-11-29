<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';


$user = $userID;
echo $user
$product = $_POST["product"];
echo $product;
$date = date('d/m/yy');

    
$product = insertIntoDatabase("_purchase", "buyer, product, date", "'$user', '$product', current_timestamp", $conn);

header('Location: ../front/pageUtilisateur.php');