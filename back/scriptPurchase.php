<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';


$user = $userID;
$product = $_POST["product"];

    
$product = insertIntoDatabase("_purchase", "buyer, product", "'$user', '$product'", $conn);

// header('Location: ../front/listeProduits.php');