
<?php
// require_once 'dbbFunctions.php';
var_dump($_POST);



$productSeller = $_POST["seller"];
$productType = $_POST["type"];
$productLabel = $_POST["Label"];
$productDescription = $_POST["description"];
$productPrice = $_POST["price"];





    
insertIntoDatabase("_product", "seller, type, Label, picture, description, price", "'$productSeller', '$productType', '$productLabel', '$productPicture', '$productDescription', '$productPrice'", $conn);


