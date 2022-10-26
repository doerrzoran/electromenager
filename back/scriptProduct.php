<!DOCTYPE html>
<?php
require_once "dbbFunction.php";
echo 'test</br>';
var_dump($_POST);

if($_POST){
    $infoProduct = $_POST;
    $productType = $infoProduct["type"]
    $productLabel = $infoProduct["Label"]
    $productPicture = $infoProduct["picture"]
    $productDescription = $infoProduct["description"]
    $productPrice = $infoProduct["price"]


    
    // $product = insertIntoDatabase("_product", "type, Label, picture, description, price", "'$productType', '$productLabel', '$productPicture', '$productDescription', '$productPrice'", $conn);

}

?>