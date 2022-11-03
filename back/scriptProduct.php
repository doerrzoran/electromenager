
<?php
// require_once 'dbbFunctions.php';
var_dump($_POST);

echo $_POST["image"];



$productSeller = $_POST["seller"];
$productType = $_POST["type"];
$productLabel = $_POST["Label"];
$productDescription = $_POST["description"];
$productPrice = $_POST["price"];





    
$product = insertIntoDatabase("_product", "seller, type, Label, picture, description, price", "'$productSeller', '$productType', '$productLabel', '$productPicture', '$productDescription', '$productPrice'", $conn);

var_dump($product);


