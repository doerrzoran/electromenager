<?php

require_once 'dbbFunctions.php';

$id = $_POST['id'];

//suppression du panier
$cart = deleteFromDatabase("_cart", "client", $id, $conn);

//suppression du produit
$productID = deleteFromDatabase("_product", "seller", $id, $conn);



// suppression de l'utilisateur
$deletionUser = deleteFromDatabase("user_acount", "id", $id, $conn);




header("Location: displayUsers.php");