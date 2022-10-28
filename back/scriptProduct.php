
<?php
require_once 'dbbFunctions.php';
var_dump($_POST);
var_dump($_FILES);


$productSeller = $_POST["seller"];
$productType = $_POST["type"];
$productLabel = $_POST["Label"];
$productDescription = $_POST["description"];
$productPrice = $_POST["price"];

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);




    
// $product = insertIntoDatabase("_product", "seller, type, Label, picture, description, price", "'$productSeller', '$productType', '$productLabel', '$productPicture', '$productDescription', '$productPrice'", $conn);
        //    insertIntoDatabase('User_acount', 'name, firstname, mail, password, role', "'$name', '$firstName', '$mail', '$password', 2", $conn);


