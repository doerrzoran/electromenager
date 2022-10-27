
<?php
require_once 'dbbFunctions.php';
var_dump($_POST);


$productSeller = $_POST["seller"];
$productType = $_POST["type"];
$productLabel = $_POST["Label"];
$productPicture = $_POST["image"];
$productDescription = $_POST["description"];
$productPrice = $_POST["price"];

var_dump($productPicture);


    
$product = insertIntoDatabase("_product", "seller, type, Label, picture, description, price", "'$productSeller', '$productType', '$productLabel', '$productPicture', '$productDescription', '$productPrice'", $conn);
        //    insertIntoDatabase('User_acount', 'name, firstname, mail, password, role', "'$name', '$firstName', '$mail', '$password', 2", $conn);

if($product != NULL){
    echo '2';
}else{
    echo '1';
};

