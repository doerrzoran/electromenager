<?php
require_once 'dbbFunctions.php';



$user = $userID;
$product = $_POST["product"];

    
$product = insertIntoDatabase("_purchase", "product", "'$product'", $conn);

header('Location: ../front/listeProduits.php');