
<?php
require_once 'dbbFunctions.php';
echo 'test</br>';
var_dump($_POST);

$productSeller = $_POST["seller"];
$productType = $_POST["type"];
$productLabel = $_POST["Label"];
$productPicture = $_POST["picture"];
$productDescription = $_POST["description"];
$productPrice = $_POST["price"];


    
$product = insertIntoDatabase("_product", "seller, type, Label, picture, description, price", "'$productSeller', '$productType', '$productLabel', '$productPicture', '$productDescription', '$productPrice'", $conn);

echo 'test</br>';
print_r($product);

