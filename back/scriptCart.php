
<?php
require_once 'dbbFunctions.php';
require_once 'userId.php';


if($userID == null){
    ?>
    <script>var message ='vous devez vous connecter pour éffectuer un achat';</script>
    <script src='../Javascript/redirectConnexion.js' ></script>
    <script>window.location.href = "../front/creationDeCompte.php";</script>
     <?php
}; 


$user = $userID;
$product = $_POST["product"];

$product = insertIntoDatabase("_cart", "client, product", "'$user', '$product'", $conn);

header("Location: displayCart.php");

