<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';


$user = $userID;
$product = $_POST["product"];
$date = date('d/m/yy');

    
$product = insertIntoDatabase("_purchase", "buyer, product, date", "'$user', '$product', 'DD-MM-YYYY'", $conn);

// header('Location: ../front/listeProduits.php');