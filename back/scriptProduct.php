
<?php
require_once 'dbbFunctions.php';
echo 'test</br>';
var_dump($_POST);

$productType = $_POST["type"];
$productLabel = $_POST["Label"];
$productPicture = $_POST["picture"];
$productDescription = $_POST["description"];
$productPrice = $_POST["price"];


    
    // $product = insertIntoDatabase("_product", "type, Label, picture, description, price", "'$productType', '$productLabel', '$productPicture', '$productDescription', '$productPrice'", $conn);

